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
    <div class="panMobileMargin"></div>
    
    <div id="Menubtn">
        <div id='top'></div>
        <div id='middle' style="width:30px;"></div>
        <div id='bottom'></div>
    </div>

    <div class="float-left">Main Menu</div>
    
    <div id="PanSidebar">
        <div style="font-weight: 600; font-size: 0.8rem; text-align: center; padding: 19px 10px;">
            <div style="padding-left:40px; text-align:left;">CLOSE</div>
        </div>

        <div id="items">
            <a href="{{url('')}}" class="item"><i class="fas fa-angle-double-right"></i>HOME</a>
            <a href="{{url('about')}}" class="item"><i class="fas fa-angle-double-right"></i>ABOUT US</a>

            @foreach(getMainCategories(0, 16) as $key => $mainCategory)
                    <div class="mainCategories">
                        <a class="item" href="#">
                        <i class="fas fa-angle-double-right"></i>{{$mainCategory->name}}</a>

                        @if(getSubCategories($mainCategory->id))
                            <div class="subMenu " id="items">
                                <div class="subMenuDetails">
                                    <div class="menuBlock">
                                        @foreach(getSubCategories($mainCategory->id) as $subCategories1)
                                                <a href="{{url('')}}/{{$subCategories1->slug}}" class="item"><i class="fas fa-angle-double-right"></i>{{$subCategories1->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
            @endforeach

            <a href="{{url('testimonials')}}" class="item"><i class="fas fa-angle-double-right"></i>TESTIMONIALS</a>
            <a href="{{url('videos')}}" class="item"><i class="fas fa-angle-double-right"></i>VIDEOS</a>
            <a href="{{url('blog')}}" class="item"><i class="fas fa-angle-double-right"></i>BLOG</a>
            <a href="{{url('contact-us')}}" class="item"><i class="fas fa-angle-double-right"></i>CONTACT US</a>
        </div>
        <br />
        <div style="text-align: center; padding-top: 30px; margin-bottom: 20px;">
            <img id="SidebarLogoImg" src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}"  width="150" />
        </div>
    </div>
    <script src="{{url('vertical-menu')}}/js/vm.js" type="text/javascript"></script>
    <script src="{{url('vertical-menu')}}/js/vertical-menu.js"></script>
</body>

</html>