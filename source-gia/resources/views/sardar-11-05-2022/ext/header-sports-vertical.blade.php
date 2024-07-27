<!DOCTYPE html>
<html>

<head>
    <link href="{{url('vertical-menu')}}/css/default.css" rel="stylesheet" />

<style>
        .HdrCopyright {
            padding: 10px 1px;
            font-size: 0.9rem;
        }
        .hamburger {
            position: fixed;
            top: 20px;
            z-index: 9999;
            cursor: pointer;
            height: 20px;
            width: 20px;
            background-color: white;
        }

        .line {
            width: 40px;
            height: 2px;
            background: #fff;
            margin-bottom: 7px;
        }
        .menu {
            width: 275px;
            height: 100%;
            background: #000;
            position: fixed;
            top: 0;
            left: -275px;
            transition: left 0.1s;
        }
        .menu-item:first-child {
            margin-top: 180px;
        }
        .menu--open {
            left: 0;
        }
        .menu-item {
            color: #fff;
            width: 100%;
            padding: 0.5rem 1rem;
            box-sizing: border-box;
        }
        .menu-item a {
            color: #fff;
            font-size: 1rem;
            text-decoration: none;
        }

        .menu-item:hover a {
            font-size: 1rem;
            text-decoration: none;
        }
        .menu-item i {
            color: rgba(52, 56, 56, 0.8);
            font-size: 1.3rem;
        }
        .menu-item:hover i {
            color: #fff;
            font-size: 1.3rem;
            animation: pulseLeft 2s infinite;
        }
        .menu-item:hover {
            background: rgba(52, 56, 56, 0.8);
            cursor: pointer;
        }

    </style>
</head>
<body style="overflow-x: hidden;">
    <div id="mainHeader" class="sportHeader">
        <a href="{{url('')}}">
            <img src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" 
            /></a>
    </div>

    <div class="menu-wrapper">
        <div id="Menubtn">
            <h5 class="btn-main-menu">
                <img src="{{url('vertical-menu')}}/img/icon-home.png" height="22" 
                    style="margin-right: 4px;">
                <p class="m-0 menu-text">Main Menu</p>
            </h5>
            
        </div>

        <div class="search-bar">
				<div class="gcse-search"></div>
        </div>

        <div class="form_header Menubtn2">
            <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
            <img src="{{url('sardar')}}/images/email_icon.png" class="img-fluid">
            <h2
                    data-target="#exampleModal"
                    data-toggle="modal" 
                    style="text-align: center;">Send Us Your Enquiry </h2>
        </div>


        <!-- <div id="Menubtn2">
            <h5 class="btn-form-theme"
                data-target="#exampleModal"
                data-toggle="modal" 
                style="text-align: center;">
                   

                <img src="{{url('vertical-menu')}}/img/icon-mail.png" height="24" 
                    style="margin-right: 4px;">
                <p class="m-0 menu-text2">Send Us Your Enquiry</p></h5>
        </div> -->
    </div>

    <div class="enquiry-form-block">
           
        </div>
    
    <div id="PanSidebar">
        
    <!-- <a href="{{url('')}}">
        <img class="d-md-none sidebar-logo" src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}"/>
    </a> -->

        <div style="font-weight: 600; font-size: 0.8rem; text-align: center; padding: 31px 10px;">
            <!-- <div style="padding-left:40px; text-align:left;">CLOSE</div> -->
        </div>
        <?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = parse_url($actual_link, PHP_URL_PATH);
$pathFragments = explode('/', $path);
$urlEnd = end($pathFragments);

        ?>
        <div id="items" class="itemBlock">
            <a href="{{url('')}}" class="item home">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>

            <p>Home</p><i class="fas fa-angle-double-right icon-right"></i></a>
            <a href="{{url('about')}}" class="item about">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>
                <p>About Us</p><i class="fas fa-angle-double-right icon-right"></i></a>
    
            @foreach(getMainCategories(0, 16) as $key => $mainCategory)
                    <div class="mainCategories">
                        <a class="item @if($urlEnd == $mainCategory->slug) activeMenu active @endif"
                        href="{{url('')}}/{{$mainCategory->slug}}">
                            <i class="fa fa-plus float-left icon-left text-sm " aria-hidden="true"></i>
                        <p class="mb-0">{{$mainCategory->name}}</p>
                        <i class="fas fa-angle-double-right icon-right"></i></a>

                        @if(getSubCategories($mainCategory->id))
                            <div class="subMenu" id="items">
                                <div class="subMenuDetails">
                                    <div class="menuBlock">
                                        @foreach(getSubCategories($mainCategory->id) as $subCategories1)
                                                
                                                <a class="item @if($urlEnd == $subCategories1->slug) activeMenu active @endif" 
                                                    href="{{url('')}}/{{$subCategories1->slug}}">

                                                    <i class="fa fa-minus float-left icon-left text-sm" aria-hidden="true"></i>
                                                    <p class="mb-0">{{$subCategories1->name}}</p>
                                                    <i class="fas fa-angle-double-right icon-right"></i>
                                                </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
            @endforeach

            <a href="{{url('testimonials')}}" class="item testimonial">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>
                <p>Testimonials</p><i class="fas fa-angle-double-right icon-right"></i></a>
            <a href="{{url('videos')}}" class="item video">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>
                <p>Videos</p><i class="fas fa-angle-double-right icon-right"></i></a>
            <a href="{{url('blog')}}" class="item blog">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>
                <p>Blog</p><i class="fas fa-angle-double-right icon-right"></i></a>
            <a href="{{url('contact-us')}}" class="item contact">
            <i class="fa fa-plus float-left icon-left text-sm color-transparent"
            style="color: transparent !important;  visibility: hidden;"
             aria-hidden="true"></i>
                <p>Contact Us</p><i class="fas fa-angle-double-right icon-right"></i></a>
        </div>
        
@include('sardar.widget.contact-form-sidebar')

    </div>
    <script src="{{url('vertical-menu')}}/js/vm.js" type="text/javascript"></script>
    <script src="{{url('vertical-menu')}}/js/vertical-menu.js"></script>
</body>

</html>

@include('sardar.widget.enquire-now2')