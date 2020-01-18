@extends('layouts.master')

@section('content')
<div class="not-front page-details">
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
        <div class="top-wrapper">
            <div class="top-inner" id="top-inner">
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
                                        <img src="images/logo.png" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </header>
                            <nav class="navbar_ navbar navbar-expand-md clearfix">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <div class="breadcrumbs1_wrapper">
            <div class="container">
                <div class="breadcrumbs1"><a href="index-2.html">صفحه اصلی</a><span>|</span>جزئیات</div>
            </div>
        </div>
        <div id="content">
            <div class="container">

                <div class="title1">{{$hotel->name}}</div>

                <div class="title2">{{$hotel->address}}</div>

                <div class="slider2-wrapper">
                    <div class="slider-for2">
                        <div class="slider-item">
                            <img src="{{ URL::to('/images/hotels'). '/'. $hotel->img }}" alt="" class="img-fluid">
                            <!-- <img src="/images/gallery01.jpg" alt="" class="img-fluid"> -->
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery02.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery03.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery04.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery05.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery06.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery07.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery08.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery09.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="/images/gallery10.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="slider-nav2">

                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb01.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb02.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb03.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb04.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb05.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb06.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb07.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb08.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb09.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="/images/thumb10.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="details-wrapper clearfix">
                    <div class="txt2">{{$hotel->name}}</div>
                    <div class="txt3">
                        <p>
                            <strong>آدرس: </strong>
                            <span>{{$hotel->address}}</span>
                        </p>
                        <p>
                            <strong>توضیحات: </strong>
                            <span>{{$hotel->description}}</span>
                        </p>
                    </div>
                    <div class="details-caption">
                        <div class="txt1">01</div>
                        <div class="txt21">اتاق مدرن</div>
                    </div>
                </div>

                <div class="details2-wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="our-rooms-icons">
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic14.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">پارکینگ</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic12.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">صبحانه</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic13.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">انتقال از فرودگاه</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic11.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">وای فای رایگان در اطراف هتل</div>
                                    <div class="our-rooms-icon-txt2">شامل </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="our-rooms-icons">
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic15.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">امنیت</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic17.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">رستوران</div>
                                    <div class="our-rooms-icon-txt2">در دسترس نیست</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic18.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">تهویه هوا</div>
                                    <div class="our-rooms-icon-txt2">در دسترس</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="/images/ic16.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">عالی ترین کازینو هتل</div>
                                    <div class="our-rooms-icon-txt2">100$ شامل چیپس رایگان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="details2-info">
                                <div>
                                    <a href="#" class="details2-link">
                                        <div class="txt1">
                                            <span>قیمت</span>
                                            <span>{{$hotel->rooms[0]->price}} </span>
                                            <span> تومان </span>
                                        </div>
                                        <div class="txt2">رزرو این اتاق</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <div class="bot2-title">اخرین پست ها</div>
                            <div class="recent-post clearfix">
                                <a href="#">
                                    <figure><img src="images/recent01.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">جدید ترین پارک ابی اطراف هتل</div>
                                        <div class="txt2">11 March, 2018</div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post clearfix">
                                <a href="#">
                                    <figure><img src="images/recent02.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">رررررررررررررررررررررررر</div>
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
                        <li><a href="#">بلاک</a></li>
                        <li><a href="#">خدمات مشتری</a></li>
                        <li><a href="#">تیم</a></li>
                        <li><a href="#">مخاطب</a></li>
                    </ul>

                    <div class="copyrights">Copyright @2018 Made with <i class="fa fa-heart" aria-hidden="true"></i> توسط <a href="#" target="_blank">عععععععع</a>.بببببببببب
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection