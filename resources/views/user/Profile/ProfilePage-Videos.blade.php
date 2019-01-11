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
                <div class="ui-block features-video">
                    <div class="video-player">
                        <img src="img/video9.jpg" alt="photo">
                        <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                            <svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
                        </a>

                        <div class="video-content">
                            <div class="h4 title">فستیوال راک - روز سوم </div>
                            <time class="published" datetime="2017-03-24T18:18">12:06</time>
                        </div>

                        <div class="overlay"></div>
                    </div>

                    <div class="features-video-content">

                        <article class="hentry post">

                            <div class="post__author author vcard inline-items">
                                <img src="img/author-page.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده </a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            2 ساعت قبل
                                        </time>
                                    </div>
                                </div>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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

                            </div>

                            <p>دیشب رفتیم به  <a href="#">  برج میلاد </a> برای دیدن گروه راک و لذت بردن !</p>

                            <div class="post-additional-info inline-items">

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                    <span>14</span>
                                </a>

                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                        <span>19</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                        <span>27</span>
                                    </a>
                                </div>

                            </div>

                            <div class="control-block-button post-control-button">

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
                                </a>

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                </a>

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
                                </a>

                            </div>

                        </article>

                        <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="ababc551-8cab-a912-b5f0-4972eae82b66">

                            <ul class="comments-list">
                                <li>
                                    <div class="post__author author vcard inline-items">
                                        <img src="img/avatar48-sm.jpg" alt="author">

                                        <div class="author-date">
                                            <a class="h6 post__author-name fn" href="#">مریم </a>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    46 دقیقه قبل
                                                </time>
                                            </div>
                                        </div>

                                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

                                    </div>

                                    <p>خیلی خوش گذشت باید بازم از این کارا بکنیم </p>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                        <span>8</span>
                                    </a>
                                    <a href="#" class="reply">پاسخ دادن </a>
                                </li>

                                <li>
                                    <div class="post__author author vcard inline-items">
                                        <img src="img/avatar4-sm.jpg" alt="author">

                                        <div class="author-date">
                                            <a class="h6 post__author-name fn" href="#">ساسان آقایی </a>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    1 ساعت قبل
                                                </time>
                                            </div>
                                        </div>

                                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

                                    </div>

                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                        <span>7</span>
                                    </a>
                                    <a href="#" class="reply">پاسخ دادن </a>

                                </li>
                            </ul>

                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 110px; right: 350px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 27px;"></div></div></div>

                        <form class="comment-form inline-items">

                            <div class="post__author author vcard inline-items">
                                <img src="img/avatar73-sm.jpg" alt="author">

                                <div class="form-group with-icon-right is-empty">
                                    <textarea class="form-control" placeholder="Press Enter to post..."></textarea>
                                    <div class="add-options-message">
                                        <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                            <svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
                                        </a>
                                    </div>
                                    <span class="material-input"></span></div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
@endsection

@section('content3')
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <div class="h6 title">ویدئو های فاطمه </div>

                        <div class="align-left">
                            <a href="#" class="btn btn-primary btn-md-2" data-toggle="modal" data-target="#update-header-photo">آپلود ویدئو   +</a>
                        </div>

                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content4')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <div class="h6 title">ویدئو های فاطمه </div>

                    <div class="align-left">
                        <a href="#" class="btn btn-primary btn-md-2" data-toggle="modal" data-target="#update-header-photo">آپلود ویدئو   +</a>
                    </div>

                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="modal fade" id="update-header-photo">
        <div class="modal-dialog ui-block window-popup update-header-photo">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <a href="#" class="upload-photo-item">
                <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>

            <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>

                <h6>Choose from My Photos</h6>
                <span>Choose from your uploaded photos</span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="choose-from-my-photo" style="">
        <div class="modal-dialog ui-block window-popup choose-from-my-photo" style="">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon"><use xlink:href="icons/icons.svg#olymp-albums-icon"></use></svg>
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
                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="16bb2ecf-856e-c5e4-cc31-87fa934db9db">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">اصلا نگران نباش!</span>
                        <span class="chat-message-item">همه رو به خاطر دارم و فراموش نمیکنم.</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
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
                        <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon"><use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

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
                <span class="material-input"></span><span class="material-input"></span></div>

        </form>


    </div>

@endsection

