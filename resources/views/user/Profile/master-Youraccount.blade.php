@extends('user.Profile.master')
@section('header')
    @yield('header')
@endsection
@section('content-y-a')
    @yield('content-y-a')
@endsection
@section('content-y-a-2')
    <div class="col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12 responsive-display-none">
        <div class="ui-block">
            <div class="your-profile">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">پروفایل شما</h6>
                </div>

                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h6 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    تنظیمات پروفایل
                                    <svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <ul class="your-profile-menu">

                                <li>
                                    <a href="/AccountSettings"> تنظیمات اکانت </a>
                                </li>
                                <li>
                                    <a href="/PersonalInformation">اطلاعات شخصی</a>
                                </li>
                                <li>
                                    <a href="/Hobbies">علایق و سرگرمی ها</a>
                                </li>
                                @auth
                                <li>
                                    <a href="/ChangePassword">تغییر رمز عبور </a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ui-block-title">
                    <a href="33-YourAccount-Notifications.html" class="h6 title">اعلانیه ها</a>
                    <a href="#" class="items-round-little bg-primary">8</a>
                </div>
                <div class="ui-block-title">
                    <a href="34-YourAccount-ChatMessages.html" class="h6 title">گفتگو / پیام ها </a>
                </div>
                <div class="ui-block-title">
                    <a href="35-YourAccount-FriendsRequests.html" class="h6 title">درخواست دوستی </a>
                    <a href="#" class="items-round-little bg-blue">4</a>
                </div>

                {{--<div class="ui-block-title">--}}
                    {{--<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">ساختن پیج مورد علاقه</a>--}}
                {{--</div>--}}
                {{--<div class="ui-block-title">--}}
                    {{--<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">تنظیمات پیج مورد علاقه</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    </div>
@endsection