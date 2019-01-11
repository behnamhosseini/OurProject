@extends('user.Profile.master')
@section('header')
    <div class="header-spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="top-header">
                        <div class="top-header-thumb">
                            <img src="img/top-header1.jpg" alt="nature">
                        </div>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 ">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="02-ProfilePage.html" class="active">تایم لاین</a>
                                        </li>
                                        <li>
                                            <a href="05-ProfilePage-About.html">درباره</a>
                                        </li>
                                        <li>
                                            <a href="06-ProfilePage.html">دوستان</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 mr-auto col-md-5">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="07-ProfilePage-Photos.html">تصاویر</a>
                                        </li>
                                        <li>
                                            <a href="09-ProfilePage-Videos.html">ویدئوها</a>
                                        </li>
                                        <li>
                                            <div class="more">
                                                <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                                </svg>
                                                <ul class="more-dropdown more-with-triangle">
                                                    <li>
                                                        <a href="#">گزارش پروفایل</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">مسدود کردن کاربر</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="control-block-button">
                                <a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control bg-purple">
                                    <svg class="olymp-chat---messages-icon">
                                        <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                    </svg>
                                </a>

                                <div class="btn btn-control bg-primary more">
                                    <svg class="olymp-settings-icon">
                                        <use xlink:href="icons/icons.svg#olymp-settings-icon"></use>
                                    </svg>

                                    <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#update-header-photo">بروزرسانی تصویر پروفایل</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#update-header-photo">بروزرسانی تصویر هدر</a>
                                        </li>
                                        <li>
                                            <a href="29-YourAccount-AccountSettings.html">تنظیمات حساب</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-header-author">
                            <a href="02-ProfilePage.html" class="author-thumb">
                                <img src="img/author-main1.jpg" alt="author">
                            </a>
                            <div class="author-content">
                                <a href="02-ProfilePage.html" class="h4 author-name">فاطمه کاظمی زاده</a>
                                <div class="country">ایران، تهران</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content2')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title">دوستان فاطمه (86)</div>
                    <form class="w-search">
                        <div class="form-group with-button is-empty">
                            <input class="form-control" type="text" placeholder="Search Friends...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon">
                                    <use xlink:href="icons/icons.svg#olymp-magnifying-glass-icon"></use>
                                </svg>
                            </button>
                            <span class="material-input"></span></div>
                    </form>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content3')
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend1.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar1.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">فرناز قاسمی </a>
                                <div class="country">ایران - همدان </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-0">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>شروع وستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">52</div>
                                            <div class="title">دوستان</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">240</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">16</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>شروع وستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">52</div>
                                            <div class="title">دوستان</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">240</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">16</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend2.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">
                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar2.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">سمیه قاسمی </a>
                                <div class="country">ایران - تهران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-1">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">52</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">240</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">16</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">52</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">240</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">16</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend3.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar3.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">علی احمدی </a>
                                <div class="country">قم - ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-2 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-2">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">49</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">132</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5</div>
                                            <div class="title">ویدئو</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">49</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">132</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5</div>
                                            <div class="title">ویدئو</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-2 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend4.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">
                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>

                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar4.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">فاضل ظفریابی</a>
                                <div class="country">زاهدان - ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-3 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-3">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">65</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">104</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئو</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">65</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">104</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئو</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-3 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend5.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar5.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">معصومه احمدی </a>
                                <div class="country">تهران - ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-4 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-4">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">82</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">204</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">27</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">82</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">204</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">27</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-4 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend6.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar6.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">بهمن عطایی </a>
                                <div class="country">شیراز - ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-5 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-5">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمن دوستی از e:</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">73</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">360</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">11</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمن دوستی از e:</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">73</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">360</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">11</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-5 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend7.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar7.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">کامران علینزاد </a>
                                <div class="country">اصفهان - ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-6 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-6">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">49</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">132</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">49</div>
                                            <div class="title">دوستان </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">132</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-6 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="img/friend8.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">
                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">گزارش دادن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">باک کردن پروفایل </a>
                                </li>
                                <li>
                                    <a href="#">خاموش کردن اطلاعیه ها </a>
                                </li>
                            </ul>
                        </div>

                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="img/avatar8.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">مهرانه صمیمی</a>
                                <div class="country">همدان -ایران </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-7 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-7">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">58</div>
                                            <div class="title">دوستان</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">304</div>
                                            <div class="title">تصاویر</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">19</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        سلام! من مارینا هستم و من مدیر انجمن برای Gametube هستم. بازیگر و مادر تمام وقت
                                    </p>

                                    <div class="friend-since">
                                        <span>زمان دوستی از :</span>
                                        <div class="h6">مهر 2014</div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">58</div>
                                            <div class="title">دوستان</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">304</div>
                                            <div class="title">تصاویر</div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">19</div>
                                            <div class="title">ویدئو </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon">
                                                <use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
                                            </svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon">
                                                <use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use>
                                            </svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-7 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="modal fade" id="update-header-photo">
        <div class="modal-dialog ui-block window-popup update-header-photo">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <a href="#" class="upload-photo-item">
                <svg class="olymp-computer-icon">
                    <use xlink:href="icons/icons.svg#olymp-computer-icon"></use>
                </svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>

            <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                <svg class="olymp-photos-icon">
                    <use xlink:href="icons/icons.svg#olymp-photos-icon"></use>
                </svg>

                <h6>Choose from My Photos</h6>
                <span>Choose from your uploaded photos</span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="choose-from-my-photo" style="">
        <div class="modal-dialog ui-block window-popup choose-from-my-photo" style="">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon">
                                <use xlink:href="icons/icons.svg#olymp-photos-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon">
                                <use xlink:href="icons/icons.svg#olymp-albums-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="ui-block-content" style="">
                <!-- Tab panes -->
                <div class="tab-content" style="">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true" style="">

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo1.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo2.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo3.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo4.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo5.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo6.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo7.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo8.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo9.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false" style="">

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo10.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo11.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo12.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo13.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity &amp; Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo14.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo15.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="ui-block popup-chat popup-chat-responsive">
        <div class="ui-block-title">
            <span class="icon-status online"></span>
            <h6 class="title">چت</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon">
                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                </svg>
                <svg class="olymp-little-delete js-chat-open">
                    <use xlink:href="icons/icons.svg#olymp-little-delete"></use>
                </svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="efa1cb6c-5cae-4105-ead1-f8a6e81f46a3">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">اصلا نگران نباش!</span>
                        <span class="chat-message-item">همه رو به خاطر دارم و فراموش نمیکنم.</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>
            </ul>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

        <form>



            <div class="form-group label-floating is-empty">
                <label class="control-label">برای ارسال کلید Enter را فشار دهید...</label>
                <textarea class="form-control" placeholder=""></textarea>
                <div class="add-options-message">
                    <a href="#" class="options-message">
                        <svg class="olymp-computer-icon">
                            <use xlink:href="icons/icons.svg#olymp-computer-icon"></use>
                        </svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon">
                            <use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use>
                        </svg>

                        <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat1.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat2.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat3.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat4.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat5.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat6.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat7.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat8.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat9.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat10.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat11.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat12.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat13.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat14.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat15.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat16.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat17.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat18.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat19.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat20.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat21.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat22.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat23.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat24.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat25.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat26.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat27.png" alt="icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class="material-input"></span>
                <span class="material-input"></span></div>

        </form>


    </div>
@endsection

