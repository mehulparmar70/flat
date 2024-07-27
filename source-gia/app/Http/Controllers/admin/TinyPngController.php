<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Media;
use App\Models\admin\Slider;

use TCPDF;

// require_once("././tinify/lib/Tinify/Exception.php");
// require_once("././tinify/lib/Tinify/ResultMeta.php");
// require_once("././tinify/lib/Tinify/Result.php");
// require_once("././tinify/lib/Tinify/Source.php");
// require_once("././tinify/lib/Tinify/Client.php");
// require_once("././tinify/lib/Tinify.php");


class TinyPngController extends Controller
{
    //
    public function index(){
        echo 'ttes';
        dd(asset(''));
        return view('adm.widget.tinypng');
    }
    //

    public function mediaTableCovert2Webp(){
        $medias = Slider::all();
        // dd($medias);
        foreach($medias as $i => $media){
            // print_r($media->image.'<br>');
            $ext = explode('.' , $media->image);
            if($ext[1] != 'webp'){
                $currentName = $media->image;
                $fileNewName = $ext[0].'.'.'webp';
        
                $updateMedia = Slider::where('image', $currentName)->first();
                $updateMedia->image = $fileNewName;
                $updateMedia->save();

                print_r($fileNewName.', ');
            }
        }
        echo "<script>alert('media name changed');</script>";

    }


    public function store(Request $request){
        // dd($request->file('image'));
        // uploadImageThumb2($request, 'image');
        // \Tinify\setKey("fFPwchvMSs167Kfrv9r0rZkggmwjp2Tv");
        // $source = \Tinify\fromFile($_FILES['image']['tmp_name']);
        // $source->toFile($_FILES['image']['name']);
        // dd($source);


        // dd(ImageIntervation($request, 'image'));
    //    $image =  ImageIntervation($request, 'image');
       setPdf($request);
       die();
    //     echo "<img src=".url('web').'/media/lg/'.$image." />";
        
        // Page number
        // $this->Cell(0, 10, 'COMPANY NAME', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        // $this->Image('/path/to/image.jpg', 500)

// $pdf->SetTitle('Hello World');

        // $pdf->Image('http://localhost:8000/web/media/lg/1645265440_723.png'.$image, '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);

        // $pdf->Image(url('web').'/media/lg/'.$image, 50, 30, 500, 300, 'JPG', '', '', false, 300, '', false, false, 0, 500, false, false);
        // $pdf->Image(url('web').'/media/lg/'.$image, 500);
        
        // $pdf->Image('http://localhost:8000/web/media/lg/1645265440_723.png', 15, 122, 180, 125, 'JPG', '', '', false, 300, 'C', false, false, 0, true, false, false);

        $pdf->writeHTMLCell($html, true, false, true, false, '');

        $pdf->Output('hello_world.pdf');


        // return $request;
    }


    public function webpConverter(){
        // testpng();
        // dd('11111');

        // dd(app_path());
        echo "processing";
        $directory = "./web/media/md/";
        // $images = glob($directory . "/*.jpg");
        
        $images = preg_grep('#\.webp$#', glob($directory . "/*"), PREG_GREP_INVERT);
        
        // echo "<script>";
        
        foreach($images as $i => $image){

            // dd(explode('.', $image)[2]);
            
            $file = basename($image);         // $file is set to "index.php"
            $fileName = basename($image, '.'.explode('.', $image)[1]);
            $newFileName = explode('.', $fileName)[0];
            // dd(explode('.', $fileName)[0]);

            $ext = explode('.', $image)[2];

            if($ext == 'jpg' OR $ext == 'JPG' OR $ext == 'jpeg' OR $ext == 'JPEG' OR $ext == 'png' OR 
                $ext == 'PNG'){
                    $convert = webpConverterHelper(public_path($directory.$file), $directory, $newFileName);
                    if($convert == true){
                        unlink(public_path($directory.$file));
                        // echo "<script>console.log('file coverted - '".$newFileName.".webp);</script>";
                    }
                }
        }
        return 'converted';
    // echo "</script>";
// echo "<script>alert('converted');</script>";
// dd($images);


        foreach($images as $image)
        {
        print_r(explode('.', $image)[1]); 

            $file = basename($image);         // $file is set to "index.php"
            $fileName = basename($image, '.'.explode('.', $image)[1]);
            // dd($file);
        // print_r(explode('.', $image)); 

        // die();

        $ext = $file_parts['extension'];

        if(isset($ext) && $ext != 'webp'){
            $convert = webpConverterHelper(public_path($path.$entry), $path, $file_parts['filename']);
            
            if($convert == true){
                unlink(public_path($path.$entry));
            }
        }

            $convert = webpConverterHelper(public_path($directory.$file), $directory, $fileName);
                            
            if($convert == true){
                unlink(public_path($directory.$file));
            }
        }

        // die();
        return "FIle Converted";

        $path = 'media/sm/';

        $handle = opendir($path);
        $entry = readdir($handle);
        $file_parts = pathinfo($entry);

        // dd($handle);

        if ($handle = opendir($path)) {

            while (false !== ($entry = readdir($handle))) {
                // dd($entry);
                if ($entry != "." && $entry != "..") {
                    $file_parts = pathinfo($entry);
                    // dd($file_parts);
                    
                    $ext = $file_parts['extension'];

                    if(isset($ext) && $ext != 'webp'){
                        $convert = webpConverterHelper(public_path($path.$entry), $path, $file_parts['filename']);
                        
                        if($convert == true){
                            unlink(public_path($path.$entry));
                        }

                        // if($convert){
                        //     unlink(public_path('front/images/test/'.$entry));
                        // }

                        // dd(asset('front/images/about/'.$entry));
                    }
                    // dd($entry);
                }

            }
        
            closedir($handle);
        }

        return view('admin.tinypng.webp-converter');
    }
}
