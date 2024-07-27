<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Partners;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'blogs' =>  Partners::orderBy('item_no', 'ASC')->get()
        ];
        return view('adm.pages.partners.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['blogs' =>  Partners::all()];
        return view('adm.pages.partners.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            
            'title' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'slug' => 'required',
        ]);

        $list_no = Partners::orderBy('created_at', 'desc')->first();

        if($list_no){
            $list_no =  $list_no->id + 1;
        }else{
            $list_no = 1;
        }
        
        if($request->status){
            $status = 1;
        }else{
            $status = 0;
        }

       $image_name = uploadTinyImageThumb($request);
        $blog = new Partners;
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->full_description= $request->full_description;
        $blog->image = $image_name;
        $blog->image_alt = $request->image_alt;
        $blog->image_title = $request->image_title;

        $blog->slug = $request->slug;

        $blog->meta_title  = $request->meta_title;
        $blog->meta_keyword  = $request->meta_keyword;
        $blog->meta_description  = $request->meta_description;

        $blog->search_index = $request->search_index;      
        $blog->search_follow = $request->search_follow;      
        $blog->canonical_url = $request->canonical_url;   

        $blog->status = $status;
        $save = $blog->save();

        if($save){
            // return back()->with('success', 'Partners Added...');
            if ($request->close == "1") {
                session()->put('success','Partners Added...');
                return(redirect(route('admin.close')));
            } else {
                return back()->with('success', 'Partners Added...');    
            }
        }else{
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'blog' =>  Partners::find($id)
        ];
        
        return view('adm.pages.partners.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->input());
        $request->validate([

        ]);

        $list_no = Partners::orderBy('created_at', 'desc')->first();

        if($list_no){
            $list_no =  $list_no->id + 1;
        }else{
            $list_no = 1;
        }
 
        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

        if($request->file('image')){
           $image_name = uploadTinyImageThumb($request);
           deleteBulkImage($request->old_image);
        }else{
            $image_name = $request->old_image;
        }
        
        $blog =  Partners::find($id);
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->full_description= $request->full_description;
        $blog->image = $image_name;
        $blog->image_alt = $request->image_alt;
        $blog->image_title = $request->image_title;
        
        $blog->slug = $request->slug;
        
        $blog->meta_title  = $request->meta_title;
        $blog->meta_keyword  = $request->meta_keyword;
        $blog->meta_description  = $request->meta_description;

        $blog->search_index = $request->search_index;      
        $blog->search_follow = $request->search_follow;      
        $blog->canonical_url = $request->canonical_url;   

        $blog->status = $status;
        $save = $blog->save();

        if($save){
            // return back()->with('success', 'Partners Updated...')->with('close', '1');
            if ($request->close == "1") {
                session()->put('success','Partners Updated');
                return(redirect(route('admin.close')));
            } else { 
                return back()->with('success', 'Partners Updated')->with('close', '1');
            }
        }else{
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partners)
    {
        // dd($partners->image);
        $delete = $partners->delete();
        deleteTableUrlData($partners->id,'product_link');
        if($delete){

            deleteBulkImage($partners->image);
            return back()->with('success', 'Partners Deleted...');
        }else{
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }

    public function deleteItem($id)
    {
        $blog = Partners::find($id);
        if($blog){
            deleteTableUrlData($blog->id, 'blog_link');
            $delete = $blog->delete();
            if($delete){
                deleteBulkImage($blog->image);
                // return back()->with('success', 'Partners Deleted...');
                if($request->ajax())
                {
                    return response()->json(['success' => 'Content Deleted Successfully']);
                } else {
                    return back()->with('success', 'Partners Deleted...');
                }
            }
            else{
                return back()->with('fail', 'Something went wrong, try again later...');
            }
        }
        else{
            return redirect(route('index'));
        }
    }
}
