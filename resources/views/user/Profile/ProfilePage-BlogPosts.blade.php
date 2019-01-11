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
                    <div class="h6 title">پست های بلاگ فاطمه </div>
                    <div class="w-select">
                        <div class="title">مرتب سازی بر اساس</div>
                        <fieldset class="form-group">
                            <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="زمان"><span class="filter-option pull-left">زمان </span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">زمان </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">تعداد لایک ها </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">تعداد اشتراک ها </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" size="auto" tabindex="-98">
                                    <option value="DA">زمان </option>
                                    <option value="NU">تعداد لایک ها </option>
                                    <option value="NU">تعداد اشتراک ها </option>
                                </select></div>
                            <span class="material-input"></span></fieldset>
                    </div>

                    <form class="w-search">
                        <div class="form-group with-button is-empty">
                            <input class="form-control" type="text" placeholder="جستجو در پست ها...">
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
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail thumb-full-width">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده </a> یک
                                <a href="#">پست بلاگ </a> نوشت
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        7 ساعت قبل
                                    </time>
                                </div>
                            </div>

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
                        </div>

                        <div class="post-thumb">
                            <img src="img/post__thumb4.jpg" alt="photo">
                        </div>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="h2 post-title">تعطیلات فوق العاده من در جنوب ایران </a>

                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
                            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">بیشتر خواندن</a>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic5.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic2.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">معصومه </a>,
                                <a href="#">اکبر </a> و
                                <br>6نفر دیگر پسندیدند
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>12</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>
                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail thumb-full-width">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده</a> نوشت یک
                                <a href="#">پست بلاگ </a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        دی 14 در 6:03pm
                                    </time>
                                </div>
                            </div>

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

                        </div>

                        <div class="post-thumb">
                            <img src="img/post__thumb5.jpg" alt="photo">
                        </div>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="h2 post-title">
                            من خوشمزه ترین بستنی دنیا را خوردم !</a>

                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
                            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>

                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        </p>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">ادامه مطلب</a>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic5.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic2.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">احد </a>,
                                <a href="#">سعید</a> و
                                <br>6 نفر دیگر پسندیدند
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>12</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail thumb-full-width">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده </a> یک
                                <a href="#">پست بلاگ </a> نوشت
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        7 ساعت قبل
                                    </time>
                                </div>
                            </div>

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
                        </div>

                        <div class="post-thumb">
                            <img src="img/post__thumb6.jpg" alt="photo">
                        </div>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="h2 post-title">تعطیلات فوق العاده من در جنوب ایران </a>

                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
                            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">بیشتر خواندن</a>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic5.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic2.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">معصومه </a>,
                                <a href="#">اکبر </a> و
                                <br>6نفر دیگر پسندیدند
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>12</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>
                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail thumb-full-width">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده</a> نوشت یک
                                <a href="#">پست بلاگ </a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        دی 14 در 6:03pm
                                    </time>
                                </div>
                            </div>

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

                        </div>

                        <div class="post-thumb">
                            <img src="img/post__thumb7.jpg" alt="photo">
                        </div>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="h2 post-title">
                            من خوشمزه ترین بستنی دنیا را خوردم !</a>


                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
                            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>

                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        </p>

                        <a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">ادامه مطلب</a>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic5.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic2.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">احد </a>,
                                <a href="#">سعید</a> و
                                <br>6 نفر دیگر پسندیدند
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>12</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>0</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>
            </div>
        </div>
@endsection

@section('main')

    <!-- ... end Main Content Blog Posts -->


    <!-- Window-popup Blog Post Popup -->
    <div class="modal fade" id="blog-post-popup">

        <div class="modal-dialog ui-block window-popup blog-post-popup">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>
            <article class="hentry post has-post-thumbnail thumb-full-width">

                <div class="post__author author vcard inline-items">
                    <img src="img/author-page.jpg" alt="author">

                    <div class="author-date">
                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">فاطمه کاظمی زاده </a> نوشت یک
                        <a href="#">پست بلاگ </a>
                        <div class="post__date">
                            <time class="published" datetime="2017-03-24T18:18">
                                12 ساعت قبل
                            </time>
                        </div>
                    </div>

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
                </div>

                <div class="post-thumb">
                    <img src="img/post__thumb8.jpg" alt="photo">
                    <a href="#" class="h1 post-title">A Day as a Photographer with Maxxine Flames</a>
                    <div class="overlay"></div>
                </div>


                <p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                    illo inventore veritatis et quasi hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt Sed
                    ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                    quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                    nesciunt.
                </p>

                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                    ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                    qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                    pariatur?
                </p>

                <p>
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto.
                </p>

                <div class="post-additional-info inline-items">

                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-heart-icon">
                            <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                        </svg>
                        <span>8</span>
                    </a>

                    <ul class="friends-harmonic">
                        <li>
                            <a href="#">
                                <img src="img/friend-harmonic1.jpg" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/friend-harmonic9.jpg" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/friend-harmonic7.jpg" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/friend-harmonic4.jpg" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/friend-harmonic8.jpg" alt="friend">
                            </a>
                        </li>
                    </ul>

                    <div class="names-people-likes">
                        <a href="#">Diana </a>,
                        <a href="#">Nicholas</a> and
                        <br>15 more liked this
                    </div>


                    <div class="comments-shared">
                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-speech-balloon-icon">
                                <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                            </svg>
                            <span>16</span>
                        </a>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-share-icon">
                                <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                            </svg>
                            <span>8</span>
                        </a>
                    </div>


                </div>

                <div class="control-block-button post-control-button">

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-like-post-icon">
                            <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                        </svg>
                    </a>

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-comments-post-icon">
                            <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                        </svg>
                    </a>

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-share-icon">
                            <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                        </svg>
                    </a>

                </div>

            </article>

            <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="42eb2c72-e11d-79b9-92b7-1aa7d156364b">

                <ul class="comments-list">
                    <li>
                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        38 mins ago
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>

                        </div>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                            </svg>
                            <span>3</span>
                        </a>
                        <a href="#" class="reply">Reply</a>
                    </li>
                    <li>
                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar1-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        1 hour ago
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>

                        </div>

                        <p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum quia dolor sit amet, consectetur
                            adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        </p>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                            </svg>
                            <span>8</span>
                        </a>
                        <a href="#" class="reply">Reply</a>
                    </li>
                    <li>
                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar10-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        5 mins ago
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>

                        </div>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                            </svg>
                            <span>8</span>
                        </a>
                        <a href="#" class="reply">Reply</a>
                    </li>
                </ul>

                <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            <form class="comment-form inline-items">

                <div class="post__author author vcard inline-items">
                    <img src="img/author-page.jpg" alt="author">

                    <div class="form-group with-icon-right is-empty">
                        <textarea class="form-control" placeholder=""></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-camera-icon">
                                    <use xlink:href="icons/icons.svg#olymp-camera-icon"></use>
                                </svg>
                            </a>
                        </div>
                        <span class="material-input"></span></div>
                </div>

            </form>
        </div>
    </div>
    <!-- ... end Window-popup Blog Post Popup -->


    <!-- Window-popup Update Header Photo -->

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


    <!-- ... end Window-popup Update Header Photo -->


    <!-- Window-popup Choose from my Photo -->
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

    <!-- ... end Window-popup Choose from my Photo -->


    <!-- Window-popup-CHAT for responsive min-width: 768px -->

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
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="f32426d5-b50f-4ff9-d0a1-ed3dd2789def">
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

