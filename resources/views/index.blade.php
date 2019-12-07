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
                                <img src="images/my-account.jpg" alt="" class="img-fluid">حساب من
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="#">ویرایش پروفایل</a>
                                <a class="dropdown-item" href="#">خروج</a>
                            </div>
                        </div>
                        @endguest

                        <div class="currency dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownCurrency2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                دلار امریکا
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownCurrency2">
                                <a class="dropdown-item" href="#">یورو</a>
                                <a class="dropdown-item" href="#">دلار امریکا</a>
                                <a class="dropdown-item" href="#">پوند استرلینگ</a>
                                <a class="dropdown-item" href="#">لاری المان</a>
                            </div>
                        </div>
                        <div class="language dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                انگلیس<img src="images/flag1.jpg" alt="" class="img-fluid">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownLanguage2">
                                <a class="dropdown-item" href="#">انگلیس<img src="images/flag1.jpg" alt="" class="img-fluid">
                                </a>
                                <a class="dropdown-item" href="#">المان<img src="images/flag3.jpg" alt="" class="img-fluid"></a>
                                <a class="dropdown-item" href="#">گرجی<img src="images/flag5.jpg" alt="" class="img-fluid"></a>
                                <a class="dropdown-item" href="#">روسی<img src="images/flag4.jpg" alt="" class="img-fluid"></a>

                            </div>
                        </div>
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
                                    <li class="nav-item sub-menu sub-menu-2">
                                        <a href="#" class="active nav-link">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>صفحه اصلی</a>
                                        <div class="sf-mega">
                                            <ul>
                                                <li><a href="index-1.html">هتل زمستانی</a></li>
                                                <li><a href="index-2.html">هتل تابستانی</a></li>
                                                <li><a href="delvatore-fixed/index-1.html">سبک منو ثابت</a></li>
                                                <li><a href="index-1.html">سبک منو پیمایش</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a href="about.html" class="nav-link">درباره ی ما</a></li>
                                    <li class="nav-item"><a href="rooms.html" class="nav-link">اتاق های ما</a></li>
                                    <li class="nav-item sub-menu sub-menu-2">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            صفحه ها
                                        </a>
                                        <div class="sf-mega">
                                            <ul>
                                                <li><a href="about.html">درباره ی ما</a></li>
                                                <li><a href="rooms.html">اتاق ها</a></li>
                                                <li><a href="reservation.html">رزرواسیون</a></li>
                                                <li><a href="details.html">جزئیات اتاق ها</a></li>
                                                <li><a href="404.html">404 صفحه</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item sub-menu sub-menu-2">
                                        <a href="blog.html" class="nav-link">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>بلاگ</a>
                                        <div class="sf-mega">
                                            <ul>
                                                <li><a href="blog.html">بلاگ</a></li>
                                                <li><a href="post.html">پست بلاگ</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a href="contacts.html" class="nav-link">مخاطب</a></li>
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
                            <img src="images/slide-logo1.png" alt="" class="img-fluid">
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
                    <form action="javascript:;" class="form1 clearfix">
                        <div class="col1 c1">
                            <div class="input1_wrapper">
                                <label>ورود به سیستم</label>
                                <div class="input1_inner">
                                    <input type="text" class="form-control input datepicker" placeholder="ورود به سیستم">
                                </div>
                            </div>
                        </div>
                        <div class="col1 c2">
                            <div class="input1_wrapper">
                                <label>خروج از سیستم</label>
                                <div class="input1_inner">
                                    <input type="text" class="form-control input datepicker" placeholder="خروج از سیستم">
                                </div>
                            </div>
                        </div>
                        <div class="col2 c3">
                            <div class="select1_wrapper">
                                <label>بزرگسال</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">1 بزرگسال</option>
                                        <option value="2">2 بزرگسال</option>
                                        <option value="3">3 بزرگسال</option>
                                        <option value="4">4 بزرگسال</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col2 c4">
                            <div class="select1_wrapper">
                                <label>فرزند</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">فرزند</option>
                                        <option value="1">1 فرزند</option>
                                        <option value="2">2 فرزند</option>
                                        <option value="3">3 فرزند</option>
                                        <option value="4">4 فرزند</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col2 c5">
                            <div class="select1_wrapper">
                                <label>اتاق ها</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">1 اتاق</option>
                                        <option value="2">2 اتاق</option>
                                        <option value="3">3 اتاق</option>
                                        <option value="4">4اتاق</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col3 c6">
                            <button type="submit" class="btn-form1-submit">بررسی در دسترس بودن</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="top-wrapper">

    </div>
    <div id="about">
        <div class="container">

            <div class="title1">سرویس‌ها</div>

            <div class="title2">سرویس‌هایی که ارائه می‌دهیم</div>

            <div class="about-slider-wrapper clearfix">
                <div class="about-slider-left">
                    <figure class="about-slider-thumb">
                        <img src="images/aboutWinter00.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="slider-for">
                        <div class="slider-item">
                            <img src="images/aboutWinter01.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/aboutWinter02.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/aboutWinter03.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="about-slider-right">
                    <div class="slider-nav">
                        <div class="slider-item">
                            <div class="txt1">
                                للللللللللللل
                            </div>
                            <div class="txt2">
                                <p>
                                    دددددددددددد
                                </p>
                                <p>
                                    للللللللللللللللل
                                </p>
                            </div>
                            <div class="txt3">
                                رررررررر
                            </div>
                            <div class="txt4">
                                مدیر
                            </div>
                            <div class="txt5">
                                هتل
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="txt1">
                                یییییییییییی
                            </div>
                            <div class="txt2">
                                <p>
                                    تتتتتتتتتتتتتتتتتتتتتتتتتتت
                                </p>
                                <p>
                                    اااااااااااااا
                                </p>
                            </div>
                            <div class="txt3">
                                النا
                            </div>
                            <div class="txt4">
                                مدیر کارکنان
                            </div>
                            <div class="txt5">
                                هتل
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="txt1">
                                ییییییییییییی
                            </div>
                            <div class="txt2">
                                <p>
                                    ناسنیسدینس
                                </p>
                                <p>
                                    بسسسسسسسسسسسسسسسس
                                </p>
                            </div>
                            <div class="txt3">
                                دیوید
                            </div>
                            <div class="txt4">
                                مدیر
                            </div>
                            <div class="txt5">
                                هتل
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="rooms">
        <div class="container">

            <div class="title1">اتاق های ما</div>

            <div class="title2"> بهترین اتاق‌ها با بهترین کیفیت در انتظار شماست</div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="images/room04.jpg" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">هتل عالی</div>
                                        <div class="txt2">شروع از $450.00</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">اتاق بزرگ و عالی</div>
                                    <div class="txt2">
                                        39 ویو
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        ققققققققققققققققققققققققق
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>دیدن جزئیات</a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="details.html"><span>
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>انتخاب این
                                            اتاق</span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">وای فای رایگان</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">حداکثر<br>شخص</div>
                                    </div>
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-coffee" aria-hidden="true"></i>
                                        <div class="txt1">صبحانه<br>شامل</div>
                                    </div>
                                    <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">اتاق های باقی مانده</div>
                                    </div>
                                    <div class="room-ic room-ic-refund">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <div class="txt1">پول برگشت داده نمیشود</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt1">$<span>450</span></div>
                                        <div class="txt2">درشب</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="images/room05.jpg" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">هتل</div>
                                        <div class="txt2">شروع از $315.00</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">اتاق بزرگ</div>
                                    <div class="txt2">
                                        39 ویو
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        صصصصصصصصصصصصصصصصصصصصص
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>دیدن جزئیات</a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="details.html"><span>
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>انتخاب این
                                            اتاق</span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">وای فای رایگان</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">حداکثر<br>شخص</div>
                                    </div>
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-coffee" aria-hidden="true"></i>
                                        <div class="txt1">صبحانه<br>شامل</div>
                                    </div>
                                    <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">اتاق های باقی مانده</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt1">$<span>315</span></div>
                                        <div class="txt2">درشب</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="images/room06.jpg" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">هتل معمولی</div>
                                        <div class="txt2">شروع از $115.00</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">اتاق معمولی</div>
                                    <div class="txt2">
                                        87 ویو
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        رررررررررررررر
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>دیدن جزئیات</a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="details.html"><span>
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>انتخاب این
                                            اتاق</span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">وای فای رایگان</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">حداکثر<br>شخص</div>
                                    </div>
                                    <div class="room-ic room-ic-refund">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <div class="txt1">پول برگشت داده نمیشود</div>
                                    </div>
                                    <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">اتاق های باقی مانده</div>
                                    </div>
                                    <div class="room-ic room-ic-discount">
                                        <div class="txt0">0<span>%</span></div>
                                        <div class="txt1">تخفیف</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt1">$<span>115</span></div>
                                        <div class="txt2">در شب</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="best-places">
        <div class="container">

            <div class="title1">بهترین مکان اطراف هتل</div>
            <div class="title2">مکان خود را پیدا کنید</div>

            <div class="owl-carousel owl-carousel-wide">
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">بهترین مکان گالری</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">یییی</div>
                                            <div class="txt3">
                                                123
                                                پارک گرید, ایالات متحده سن دیگو
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                        ذذذذذذذذذذذذ
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic1.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">سونا</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic2.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">ابگرم</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic3.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">رایگان</div>
                                                <div class="rest1-txt2">پیغام</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="images/placeWinter01.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">بهترین مکان گالری</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">قلعه زمستانی</div>
                                            <div class="txt3">
                                                123
                                                پارک گرید,ایاتلات متحده سن دیگو
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                        شششششششششششششششششش
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic1.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">سونا</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic2.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">ابگرم</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic3.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">رایگان</div>
                                                <div class="rest1-txt2">پیغام</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="images/placeWinter02.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">بهترین مکان گالری</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">محرومیت</div>
                                            <div class="txt3">
                                                123
                                                پارک گرید, ایالات متحده سن دیگو
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                        رررررررررررررررررررررر
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic1.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">سونا</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic2.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">ابگرم</div>
                                                <div class="rest1-txt2">شامل</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="images/ic3.png" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">رایگان</div>
                                                <div class="rest1-txt2">پیغام</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="images/placeWinter03.jpg" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div id="what-client-say">
        <div class="container">

            <div class="title1">ممممممممم</div>

            <div class="title2"> ححححححححححححححححححح</div>

            <div class="owl-carousel owl-carousel-testimonials">
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    ببببببببببببببببب
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client01.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">اتاق کودک</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    تتتتتتتتتتت
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client02.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">جرمی</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    سسسسسسسسسسسس
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client03.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">جوزا</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    ننننننننننننن
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client01.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">اتاق کودک</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    سسسسسسسسسسسسس
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client02.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">جرمی</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    صصصصصصصصصصصصصصصصصص
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="images/client03.jpg" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">جوزا</div>
                                        <div class="txt2">سایت هتل</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div id="latest-news">
        <div class="container">

            <div class="title1">اخرین خبرها</div>
            <div class="title2"> غغغغغغغغغغغغغغ</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="latest-news-wrapper">
                        <div class="latest-news-inner">
                            <div class="latest-news clearfix">
                                <figure><img src="images/newsWinter01.jpg" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1"><a href="post.html">رویداد های هتل</a></div>
                                    <div class="txt2">
                                        مممممممممممممممم
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="latest-news-wrapper">
                        <div class="latest-news-inner">
                            <div class="latest-news clearfix">
                                <figure><img src="images/newsWinter02.jpg" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1"><a href="post.html">سرویس های جدید هتل</a></div>
                                    <div class="txt2"> یبببببببببببببببب
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="bot1-wrapper">
        <div class="container">
            <div class="bot1 clearfix">
                <div class="logo2_wrapper">
                    <a href="index-2.html" class="logo2">
                        <img src="images/logo1.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="social2-wrapper">
                    <ul class="social2">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <p>
                    <i>
                        سسسسسسسسسس<br> بیییییییییییی </i>
                </p>
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