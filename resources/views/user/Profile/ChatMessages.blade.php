@extends('user.Profile.master')
@section('header')
    <header class="header header-responsive" id="site-header-responsive">


        <!-- Tab panes -->
        <div class="tab-content tab-content-responsive">

            <div class="tab-pane " id="request" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="7fbe0237-9956-ec98-0f05-99d0b82716dd">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">دخواست های دوستان</h6>
                        <a href="#">یافتن دوستان</a>
                        <a href="#">تنظیمات</a>
                    </div>
                    <ul class="notification-list friend-requests">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar55-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">محمد محمدی زاده</a>
                                <span class="chat-message-item">دوست متقابل: فاطمه کاظمی زاده</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar56-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">زهرا باقری</a>
                                <span class="chat-message-item">4 دوست مشترک</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li class="accepted">
                            <div class="author-thumb">
                                <img src="img/avatar57-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                شما و <a href="#" class="h6 notification-friend">دلآرام</a> اکنون دوست هستید. برروی<a href="#" class="notification-link">دیوار</a> او چیزی بنویسید.
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar58-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">آزاده اسلامی</a>
                                <span class="chat-message-item">9 دوست مشترک</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="view-all bg-blue">بررسی همه رویداد ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="chat" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="c9ef3b23-408c-5eca-54a2-0db00afc7201">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">چت / پیامها</h6>
                        <a href="#">تنظیم به عنوان خوانده شده</a>
                        <a href="#">تنظیمات</a>
                    </div>

                    <ul class="notification-list chat-message">
                        <li class="message-unread">
                            <div class="author-thumb">
                                <img src="img/avatar59-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">محمد کریمی فرد</a>
                                <span class="chat-message-item">سلام جیمز! این دیانا است، من فقط می خواستم به شما اطلاع دهم که ما مجبوریم برنامه ریزی کنیم ...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar60-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">فاطمه منصور نژاد</a>
                                <span class="chat-message-item">خیلی عالیه، فردا شما را ملاقات خواهم کرد.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar61-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">زهرا ساداتی</a>
                                <span class="chat-message-item">سلام امروز هوا چطور است؟</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 9:56pm</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li class="chat-group">
                            <div class="author-thumb">
                                <img src="img/avatar11-sm.jpg" alt="author">
                                <img src="img/avatar12-sm.jpg" alt="author">
                                <img src="img/avatar13-sm.jpg" alt="author">
                                <img src="img/avatar10-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">شما, فاطمه, زهرا &amp; محدثه +3</a>
                                <span class="last-message-author">محدثه:</span>
                                <span class="chat-message-item">بله همه چیز تحت کنترل است!</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 اردیبهشت 10:23am</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-purple">مشاهده تمام پیام ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="notification" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="4392e0f3-d1ea-0b7e-e1a2-e3c36bd5cbf8">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">اطلاعیه ها</h6>
                        <a href="#">تنظیم به عنوان خوانده شده</a>
                        <a href="#">تنظیمات</a>
                    </div>

                    <ul class="notification-list">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar62-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">کاظمی زاده</a> یک نظر جدید در <a href="#" class="notification-link">استاتوس پروفایل</a> شما ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="un-read">
                            <div class="author-thumb">
                                <img src="img/avatar63-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div>You and <a href="#" class="h6 notification-friend">نادیا قربانی زاده</a> اکنون دوست شماست!</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="with-comment-photo">
                            <div class="author-thumb">
                                <img src="img/avatar64-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">سارا عدالت پور</a> یک نظر جدید در<a href="#" class="notification-link">عکس</a> ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 10:25</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                            <div class="comment-photo">
                                <img src="img/comment-photo1.jpg" alt="photo">
                                <span>“این عکس عالی به نظر میرسه.. عالیه..!”</span>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar65-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">باقری</a> از شما در رویداد <a href="#" class="notification-link">Gotham Bar</a> دعوت نمود.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar66-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">کاظمی زاده</a>درباره <a href="#" class="notification-link">استاتوس پروفایل</a> یک نظر جدید ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-primary">مشاهده تمام اطلاعیه ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="search" role="tabpanel">


                <form class="search-bar w-search notification-list friend-requests">
                    <div class="form-group with-button is-empty">
                        <input class="form-control js-user-search selectized" placeholder="Search here people or pages..." type="text" tabindex="-1" style="display: none;" value=""><div class="selectize-control form-control js-user-search multi rtl"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Search here people or pages..." style="width: 243.375px;"></div><div class="selectize-dropdown multi form-control js-user-search" style="display: none; width: 0px; top: 70px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                        <span class="material-input"></span></div>
                </form>


            </div>

        </div>
        <!-- ... end  Tab panes -->

    </header>
    <div class="header-spacer header-spacer-small"></div>
    <div class="main-header">
        <div class="content-bg-wrap">
            <div class="content-bg bg-account"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                    <div class="main-header-content">
                        <h1>مشخصات خود را سفارشی کنید!</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="img/account-bottom.png" alt="friends">
    </div>
@endsection
@section('content-y-a)
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">چت ها / پیام ها</h6>
                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-r-0">
                    <ul class="notification-list chat-message">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar8-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">دیانا</a>
                                <span class="chat-message-item">سلام. عکسی که برای پروفایلتان انتخاب کرده اید بسیار زیباست.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar9-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">پریسا</a>
                                <span class="chat-message-item">عالیه. فردا می بینمت</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar10-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">الیاس امیری</a>
                                <span class="chat-message-item">ما باید درباره کار بیشتر صحبت کنیم.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز در9:56</time></span>
                            </div>
                            <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li class="chat-group">
                            <div class="author-thumb">
                                <img src="img/avatar11-sm.jpg" alt="author">
                                <img src="img/avatar12-sm.jpg" alt="author">
                                <img src="img/avatar13-sm.jpg" alt="author">
                                <img src="img/avatar10-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">شما, فرانک, ابی &amp;+3</a>
                                <span class="last-message-author">ابی:</span>
                                <span class="chat-message-item">بله به نظر من خوب است</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">16 اردیبهشت</time></span>
                            </div>
                            <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <div class="ui-block popup-chat">
                        <div class="ui-block-title">
                            <span class="icon-status online"></span>
                            <h6 class="title">فاطیما</h6>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </div>
                        <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="c9645868-8c93-adb9-9ed5-b5216cc3c89f">
                            <ul class="notification-list chat-message chat-message-field">
                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar14-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز در 8:10</time></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/author-page.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">نگران نباش دوست من!</span>
                                        <span class="chat-message-item">من همه چیز رو درک میکنم</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:25</time></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar14-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <span class="chat-message-item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:35</time></span>
                                    </div>
                                </li>
                            </ul>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 350px; right: 312px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 185px;"></div></div></div>

                        <form>

                            <div class="form-group label-floating is-empty">
                                <label class="control-label">برای ارسال Enter را بزنید</label>
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
                                <span class="material-input"></span></div>

                        </form>


                    </div>

                </div>

                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-l-0">
                    <div class="chat-field">
                        <div class="ui-block-title">
                            <h6 class="title">ملانی</h6>
                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                        </div>
                        <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="97b1ff44-9110-f372-938c-29556aac1652">
                            <ul class="notification-list chat-message chat-message-field">
                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">الهه </a>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز در 8:10</time></span>
                                        <span class="chat-message-item">سلام فاطمه. امروز خیلی پیام های قشنگی در پروفایلت گذاشتی</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/author-page.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">فاطمه</a>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز در 9:24</time></span>
                                        <span class="chat-message-item">سلام. بله همینطور است. شما بسیار به بنده لطف دارید.
										</span>
                                        <div class="added-photos">
                                            <img src="img/photo-message1.jpg" alt="photo">
                                            <img src="img/photo-message2.jpg" alt="photo">
                                            <span class="photos-name">icons.jpeg; bunny.jpeg</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">ملانی</a>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 10:28</time></span>
                                        <span class="chat-message-item">ممنون.. حتما سر فرصت آنها را می بینم.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 462px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                        <form>

                            <div class="form-group label-floating is-empty">
                                <label class="control-label">پاسخ خود را در اینجا بنویسید...</label>
                                <textarea class="form-control" placeholder=""></textarea>
                                <span class="material-input"></span></div>

                            <div class="add-options-message">
                                <a href="#" class="options-message">
                                    <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                                </a>
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

                                <button class="btn btn-primary btn-sm">Post Reply</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">قبلی</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">بعدی</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
@endsection