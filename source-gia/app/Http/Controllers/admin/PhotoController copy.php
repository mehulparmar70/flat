<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\Media;

use File;
use DB;

class PhotoController extends Controller
{
    public function __construct(Request $request){
        // $this->allPhotos = Product::orderBy('id','DESC')->get();

        $this->Maincategories = category::where(['parent_id'=>0])->orderBy('id','DESC')->get();
        $this->pageType = $request->page;
    }

    public function Index(Request $request){
        // dd($request->main_category);
    //     die();
        
        // $photos = category::where('id', $request->subCategory)->first();
        $subCategory = category::where('id', $request->sub_category)->get();



        if($request->page == 'add' && $request->main_category == null && $request->sub_category == null)
        {

            $data = [
                'Maincategories' =>  $this->Maincategories,
            ];
            return view('adm.pages.photo.create', $data);
        }

        elseif($request->page == 'add' && $request->main_category != null && $request->sub_category != null ){
            

  $sub_category = DB::table('products')->where('category_id', $request->sub_category)->first();

    if($sub_category){
        
        $photoDetails = DB::table('media')->where('media_id', $sub_category->id)->get();
        // dd($photoDetails);
        
        $data = [
            'Maincategories' =>  $this->Maincategories,
            'subCategory' => $request->sub_category,
            'photoDetails' => $photoDetails,
        ];
        return view('adm.pages.photo.edit', $data);
    }


            $data = [
                'Maincategories' =>  $this->Maincategories,
                'subCategory' => $request->sub_category,
            ];

            return view('adm.pages.photo.create', $data);
    
        }
        
    
        if($request->page == 'manage' && $request->main_category != null && $request->sub_category != null)
        {
            $isSubCategory = DB::table('categories')->where('id', $request->sub_category)->first();
            $photoDetails = DB::table('media')->where('media_id', $isSubCategory->id)->get();
            
            $data = [
                'Maincategories' =>  $this->Maincategories,
                'subCategory' => $request->sub_category,
                'photoDetails' => $photoDetails,
            ];
            return view('adm.pages.photo.manage', $data);
        }
        
        elseif($request->page == 'list') {
            
            $isProductAvailable = DB::table('products')->where('category_id', $request->sub_category)->first();

            if($isProductAvailable){
                $photoDetails = DB::table('media')->where('media_id', $isProductAvailable->id)->get();
            }else{
                $photoDetails = null;
            }
            $data = [
                'Maincategories' =>  $this->Maincategories,
                'subCategory' => $request->sub_category,
                'photoDetails' => $photoDetails,
            ];
            return view('adm.pages.photo.list-photo', $data);
        }
        else{
            return redirect(route('admin.index').'/photo?page=list');
        }
            // dd('manage');


        // else
        
        if(isset($product) && $request->image){
            return view('adm.pages.photo.image', ['product' => $product]);
        }

        elseif($subCategory->count() > 0 && $request->subCategory){

            $isProductAvailable = DB::table('products')->where('category_id', $request->sub_category)->first();
            dd($isProductAvailable);
            $data = [
                'productDetail' => $isProductAvailable
            ];

            return view('adm.pages.photo.create', $data);
        }
        else{
            
            $data = [
                'parent_categories' =>  $this->parent_categories,
                'products' => $subCategory,
                'seach_id' => null,
                'productDetail' => null
            ];
            return view('adm.pages.photo.create', $data);
        }

        $data = ['parent_categories' =>  $this->parent_categories];
        return view('adm.pages.photo.create',$data);
    }

    
    public function store(Request $request)
    {
        // dd($request->input());
        if($request->status){
            $status = 1;
        }else{
            $status = 0;
        }
        

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $image_name = uploadImageThumb($request);
        $isProduct = Product::where('category_id', $request->category_id)->first();
        // dd($isProduct->count());
        if(isset($isProduct)){
            $data = [
                'name' => $request->name,
                'full_description' => $request->full_description,
                'slug' => $request->slug,
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
                'search_index' => $request->search_index,
                'search_follow' => $request->search_follow,
                'canonical_url' => $request->canonical_url,
                'status' => 1,
                'category_id' => $request->category_id,
            ];
            $save = DB::table('products')->where('category_id', $request->category_id)->update($data);

            if($save){
                // photo?page=add&main_category=470&sub_category=471
                // return
                return back()->with('success', 'Product Details Updated...');
            }else{
                return back()->with('fail', 'Something went wrong, try again later...');
            }
        }else{
            // $product = Product::where('category_id', $request->category_id)->first();
          
            $product = new Product;
            $product->name = $request->name;   
            $product->full_description = $request->full_description;
            $product->slug  = $request->slug;
            $product->meta_title  = $request->meta_title;
            $product->meta_keyword  = $request->meta_keyword;
            $product->meta_description  = $request->meta_description;
    
            $product->search_index = $request->search_index;      
            $product->search_follow = $request->search_follow;      
            $product->canonical_url = $request->canonical_url;    
    
            $product->category_id  = $request->category_id;
            $product->status  = 1;
            $save = $product->save();

            if($save){
                return back()->with('success', 'Product Details Created...');
            }else{
                return back()->with('fail', 'Something went wrong, try again later...');
            }
        }
        // dd($task->id);
    }
}
