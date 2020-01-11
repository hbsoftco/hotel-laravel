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

                <div class="title1">هتل مدرن</div>

                <div class="title2">ییییییییییییییی</div>

                <div class="booking2-wrapper">
                    <div class="">
                        <div class="booking-inner clearfix">
                            <form action="javascript:;" class="form1 clearfix">
                                <div class="col1 c1">
                                    <div class="input1_wrapper">
                                        <label>Check in</label>
                                        <div class="input1_inner">
                                            <input type="text" class="form-control input datepicker" placeholder="Check in">
                                        </div>
                                    </div>
                                </div>
                                <div class="col1 c2">
                                    <div class="input1_wrapper">
                                        <label>خروج از سیستم</label>
                                        <div class="input1_inner">
                                            <input type="text" class="form-control input datepicker" placeholder="Check out">
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
                                                <option value="2">1 فرزند</option>
                                                <option value="3">2 فرزند</option>
                                                <option value="4">3 فرزند</option>
                                                <option value="5">4 فرزند</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2 c5">
                                    <div class="select1_wrapper">
                                        <label>اتاق ها</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" style="width: 100%">
                                                <option value="1">1اتاق</option>
                                                <option value="2">2 اتاق</option>
                                                <option value="3">3اتاق</option>
                                                <option value="4">4 اتاق</option>
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

                <div class="slider2-wrapper">
                    <div class="slider-for2">
                        <div class="slider-item">
                            <img src="images/gallery01.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery02.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery03.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery04.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery05.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery06.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery07.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery08.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery09.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="images/gallery10.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="slider-nav2">
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb01.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb02.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb03.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb04.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb05.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb06.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb07.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb08.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb09.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-item-inner">
                                <img src="images/thumb10.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="details-wrapper clearfix">
                    <div class="txt1">
                        159 ویو
                        <div class="small-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="txt2">هتل مدرن</div>
                    <div class="txt3">
                        <p>
                            غغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغغ
                        </p>
                        <p>
                            ففففففففففففففففففففففففففففففففففففففففففف
                        </p>
                        <p>
                            لللللللللللللللللللللللللللللللللللللللللللل
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
                                    <figure><img src="images/ic14.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">پارکینگ</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic12.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">صبحانه</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic13.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">انتقال از فرودگاه</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic11.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">وای فای رایگان در اطراف هتل</div>
                                    <div class="our-rooms-icon-txt2">شامل </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="our-rooms-icons">
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic15.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">امنیت</div>
                                    <div class="our-rooms-icon-txt2">شامل</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic17.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">رستوران</div>
                                    <div class="our-rooms-icon-txt2">در دسترس نیست</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic18.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">تهویه هوا</div>
                                    <div class="our-rooms-icon-txt2">در دسترس</div>
                                </div>
                                <div class="our-rooms-icon">
                                    <figure><img src="images/ic16.png" alt="" class="img-fluid"></figure>
                                    <div class="our-rooms-icon-txt1">عالی ترین کازینو هتل</div>
                                    <div class="our-rooms-icon-txt2">100$ شامل چیپس رایگان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="details2-info">
                                <div class="check1">زززززز: <span>در دسترس</span></div>
                                <div class="check1">رررررر: <span>ضروری 20%</span></div>
                                <div>
                                    <a href="#" class="details2-link">
                                        <div class="txt1">$750.00 <span>قیمت</span></div>
                                        <div class="txt2">رزرو این اتاق</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="google_map"></div>

                <div class="share-to-frends-wrapper clearfix">
                    <div class="share-to-friends clearfix">
                        <div class="share-to-friends-txt">اشتراک به دوستاتون:</div>
                        <div class="share-to-friends-icons">
                            <ul class="social4 clearfix">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-tags clearfix">
                        <div class="blog-tags-txt">Tags:</div>
                        <div class="blog-tags-tags">
                            <a href="#" اااااا</a>, <a href="#">لللللل</a>, <a href="#">صندلی</a>
                        </div>
                    </div>
                </div>

                <div class="comment-block2 clearfix">
                    <figure>
                        <img src="images/author1.jpg" alt="" class="img-responsive">
                    </figure>
                    <div class="caption">
                        <div class="txt1">ثثثثثثثثث <a href="#">مممممممممم</a></div>
                        <div class="txt2">
                            ذذذذذذذذذذذذذذذذذذذذذذذذذذذذذذذذذذ
                        </div>
                    </div>
                </div>


                <div class="title3">اضافه ویو</div>

                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" class="form-horizontal clearfix" action="javascript:;">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputName2">نام <span>*</span></label>
                                            <input type="text" class="form-control" id="inputName2" name="name" value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputEmail">ایمیل <span>*</span></label>
                                            <input type="text" class="form-control" id="inputEmail" name="email" value="" placeholder="">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="inputMessage2">توضیحات <span>*</span></label>
                                    <textarea class="form-control" rows="5" id="inputMessage2" name="content" placeholder=""></textarea>
                                </div>

                            </div>

                        </div>

                        <button type="submit" class="btn-default btn-cf-submit">ارسال پیغام شما</button>
                    </form>
                </div>


            </div>
        </div>
        <div class="bot1-wrapper">
            <div class="container">
                <div class="bot1 clearfix">
                    <div class="logo2_wrapper">
                        <a href="index-2.html" class="logo2">
                            <img src="images/logo2.png" alt="" class="img-fluid">
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
                        <i> یییییییییییییییییییییییییییییییییییییییییی.</i>
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