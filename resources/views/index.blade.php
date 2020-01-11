@extends('layouts.master')

@section('content')
<div id="main">
    <div class="search-wrapper">
        <div class="container">
            <div class="search-inner clearfix">
                <div class="search-field">
                    <input type="text" class="form-control" value="" placeholder="دنبال چه چیزی می‌گردید؟">
                </div>
                <a href="#" class="search-btn search-close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="top-wrapper top-wrapper-dark">
        <div class="top-inner">
            <div class="top1-wrapper">
                <div class="container">
                    <div class="top1 clearfix">
                        <a href="#" class="search-btn search-open"><i class="fa fa-search"></i></a>
                        <div class="social-wrapper">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        @guest
                        <div class="account dropdown">
                            <a class="dropdown-toggle" href="{{ route('login') }}">ورود به حساب کاربری</a>
                        </div>
                        @else
                        <div class="account dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                حساب من </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="#">ویرایش پروفایل</a>
                                <a class="dropdown-item" href="#">خروج</a>
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="top2-wrapper">
                <div class="container">
                    <div class="top2 clearfix">
                        <header>
                            <div class="logo_wrapper">
                                <a href="index-2.html" class="logo">
                                    <img src="images/logo-white.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </header>
                        <nav class="navbar_ navbar navbar-expand-md clearfix">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                <ul class="nav navbar-nav sf-menu clearfix">
                                    <li class="nav-item"><a href="about.html" class="nav-link">صفحه اصلی</a></li>
                                    <li class="nav-item"><a href="contacts.html" class="nav-link">هتل ها</a></li>
                                    <li class="nav-item"><a href="rooms.html" class="nav-link">اتاق های ما</a></li>
                                    <li class="nav-item"><a href="about.html" class="nav-link">درباره ی ما</a></li>
                                    <li class="nav-item"><a href="contacts.html" class="nav-link">تماس با ما</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home" class="">
        <div id="home-inner" class="home-inner">
            <div id="slides_wrapper" class="">
                <div id="slides">
                    <ul class="slides-container">
                        <li>
                            <img src="images/slideWinter01.jpg" alt="" class="img">
                        </li>

                        <li>
                            <img src="images/slideWinter03.jpg" alt="" class="img">
                        </li>
                        <li>
                            <img src="images/slideWinter04.jpg" alt="" class="img">
                        </li>
                        <li>
                            <img src="images/slideWinter05.jpg" alt="" class="img">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide-text-wrapper">
                <div class="container">
                    <div class="slide-text clearfix">
                        <div class="img1">
                            <!-- <img src="images/slide-logo1.png" alt="" class="img-fluid"> -->
                        </div>
                        <div class="txt1"><span>هتل<i><img src="images/slide-logo2.png" alt="" class="img-fluid"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-buttons-wrapper">
                <div class="container">
                    <div class="slide-buttons clearfix">
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="images/slide-ic1.png" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">هتل</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="images/slide-ic2.png" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">صبحانه</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="images/slide-ic3.png" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">باشگاه تناسب اندام</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="images/slide-ic4.png" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">پشتیبانی 24 ساعته</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-wrapper">
            <div class="container">
                <div class="booking-inner clearfix">                    
                </div>
            </div>
        </div>
    </div>
    <div class="top-wrapper">

    </div>
    <div id="rooms">
        <div class="container">

            <div class="title1">لیست هتل‌ها</div>

            <div class="title2"> بهترین اتاق‌ها با بهترین کیفیت در انتظار شماست</div>
            <div class="row">
                @foreach($hotels as $hotel)
                <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="{{ URL::to('/images/hotels'). '/'. $hotel->img }}" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">{{$hotel->name}}</div>                           
                                        <div class="txt2">شروع از ۴۵۰۰۰۰ تومان</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1" dir="rtl">{{$hotel->room_count}}</div>
                                    <div class="txt2" dir="rtl">
                                        <div class="small-stars">
                                            {{$hotel->star}}
                                            <!-- <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> -->
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        {{$hotel->address}}
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>دیدن جزئیات</a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="/hotel/{{$hotel->id}}"><span>
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>جزئیات هتل</span></a>
                                </div>
                                <div class="room-icons">
                                    @if($hotel->free_wifi)
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">وای فای رایگان</div>
                                    </div>
                                    @endif
                                    @if($hotel->parking)
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <div class="txt1">پارکینگ دارد</div>
                                    </div>
                                    @endif
                                    @if($hotel->pool)
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <div class="txt1">استخر دارد</div>
                                    </div>
                                    @endif
                                    @if($hotel->restaurant)
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <div class="txt1">رستوران دارد</div>
                                    </div>
                                    @endif                                  

                                    <div class="room-price">
                                        <div class="txt1">$<span>450</span></div>
                                        <div class="txt2">درشب</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bot2-wrapper">
        <div class="container">
            <div class="bot2 clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <div class="bot2-title">تماس با ما</div>
                        <div class="contact1">
                            <b>A:</b> 41 Gridgum Sreet 121/2 New-York, USA
                        </div>
                        <div class="contact1">
                            <b>P:</b> (00) 123 456 789
                        </div>
                        <div class="contact1">
                            <b>F:</b> (00) 987 654 321
                        </div>
                        <div class="contact1">
                            <b>E:</b> <a href="#">info.contact@yourdomain.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot2-title">recent posts</div>
                        <div class="recent-post clearfix">
                            <a href="#">
                                <figure><img src="images/recent01.jpg" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1">پارک ابی جدید<br>هتل های نزدیک</div>
                                    <div class="txt2">11 March, 2018</div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post clearfix">
                            <a href="#">
                                <figure><img src="images/recent02.jpg" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1">باغ <br>هتل های نزدیک</div>
                                    <div class="txt2">23 March, 2018</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bot2-title">بهترین مکان اطراف هتل</div>
                        <ul class="best1 clearfix">
                            <li><a href="#"><img src="images/best01.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best02.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best03.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best04.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best05.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best06.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best07.jpg" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="images/best08.jpg" alt="" class="img-fluid"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bot3-wrapper">
        <div class="container">
            <div class="bot3 clearfix">
                <ul class="menu-bot">
                    <li><a href="#">درباره ی ما</a></li>
                    <li><a href="#">بلاگ</a></li>
                    <li><a href="#">خدمات مشتری</a></li>
                    <li><a href="#">تیم</a></li>
                    <li><a href="#">مخاطب</a></li>
                </ul>

                <div class="copyrights">تمامی حقوق این پروژه محفوظ می‌باشد - ۱۳۹۸</div>

            </div>
        </div>
    </div>


</div>
@endsection