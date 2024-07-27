<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\SocialMedia;
use App\Models\admin\WebsiteOption;

class SettingController extends Controller
{
    
    public function socialMediaIndex()
    {
        $data = [
            'socialMedia' =>  SocialMedia::first()
        ];

        return view('adm.pages.setting.social-media', $data);
    }


    
    public function seoManageIndex()
    {
        
        $data = [
            'socialMedia' =>  SocialMedia::first(),
            'website_logo' =>  WebsiteOption::where('option_name', 'logo')->first(),
            'website_favicon' =>  WebsiteOption::where('option_name', 'favicon')->first(),
            
        ];

        return view('adm.pages.setting.seo-manage', $data);
    }

    public function seoManageStore(Request $request)
    {
        $request->validate([
            'robots_txt' => 'mimes:txt'
        ]);

        $sitemap = uploadAnyFile($request, $name = 'sitemap', $saveName = 'sitemap', $path = public_path('/'));
        $robots_txt = uploadAnyFile($request, $name = 'robots_txt', $saveName = 'robots', $path = public_path('/'));
        
        if($request->file('sitemap')){
            $websiteSitemap = WebsiteOption::where('option_name', 'sitemap')->update(['option_value' => $sitemap]);
        }

        if($request->file('robots_txt')){
            $website_robots_txt = WebsiteOption::where('option_name', 'robots_txt')->update(['option_value' => $robots_txt]);
        }

        return back()->with('success', 'Website Sitemap & Robots.txt Updated...');

    }

    public function seoManageImageStore(Request $request)
    {
        $request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,webp',
        ]);

        $logo_name = uploadAnyFile($request, $name = 'logo', $saveName = 'logo', $path = public_path('sardar/img').'');
        $favicon_name = uploadAnyFile($request, $name = 'favicon', $saveName = 'logo-icon', $path = public_path('sardar/img').'');

        // dd($logo_name.'---'.$favicon_name);

        if($request->file('logo')){
            $websiteLogo = WebsiteOption::where('option_name', 'logo')->update(['option_value' => $logo_name]);
        }
        else{
            $websiteLogo = $request->old_logo;
        }

        if($request->file('favicon')){
            $websiteFavicon = WebsiteOption::where('option_name', 'favicon')->update(['option_value' => $favicon_name]);
        }else{
            $websiteFavicon = $request->old_favicon;
        }


        
        return back()->with('success', 'Website Image & Favicon Updated...');

    }
    
    
    public function socialMediaStore(Request $request)
    {
        $this->validate($request,[

        ]);
        
        $socialMedia = new SocialMedia;
        $last_id = $socialMedia::orderBy('id','desc')->first();

        if ($socialMedia->count() != 0) {
            $socialMedia = SocialMedia::find($last_id->id);
        }
        
        $telegram = "https://t.me/joinchat";
        $mystring = $request->telegram_group;
        if(strpos($mystring, $telegram) !== false){
            $telegram = str_replace($telegram,"https://telegram.me/joinchat",$request->telegram_group);
        }else{
            $telegram = $request->telegram_group;
        }
        
        $socialMedia->facebook = $request->facebook;
        $socialMedia->instagram = $request->instagram;
        $socialMedia->twitter = $request->twitter;
        $socialMedia->youtube = $request->youtube;
        $socialMedia->linkedin = $request->linkedin;
        $socialMedia->pinterest = $request->pinterest;
        $socialMedia->skype = $request->skype;
        
        $socialMedia->email = $request->email;
        $socialMedia->phone = $request->phone;
        $socialMedia->whatsapp = $request->whatsapp;
        $socialMedia->whatsapp_group = $request->whatsapp_group;
        $socialMedia->address = $request->address;
        
        $socialMedia->address = $request->address;
        $socialMedia->facebook_embed = $request->facebook_embed;
        $socialMedia->youtube_embed = $request->youtube_embed;
        $socialMedia->tinypng = $request->tinypng;
        $socialMedia->map_embed = $request->map_embed;
        $socialMedia->product_title = $request->product_title;

        $save = $socialMedia->save();
        if($save){
            return back()->with('success', 'Social Media Updated...');
        }else{
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }
}
