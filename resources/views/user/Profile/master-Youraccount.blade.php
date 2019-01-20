@extends('user.Profile.master')
@section('header')
    <div class="header-spacer header-spacer-small"></div>
    <div class="main-header">
        <div class="content-bg-wrap">
            <div class="content-bg bg-account"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                    <div class="main-header-content">
                        <h1>{{auth()->check()? auth()->user()->fullName() : ''}}</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="/img/account-bottom.png" alt="friends">
    </div>
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
                    <a href="/Notifications" class="h6 title">اعلانیه ها</a>
                    <a href="#" class="items-round-little bg-primary">8</a>
                </div>
                <div class="ui-block-title">
                    <a href="/ChatMessages" class="h6 title">گفتگو / پیام ها </a>
                </div>
                <div class="ui-block-title">
                    <a href="/FriendsRequests" class="h6 title">درخواست دوستی </a>
                    <a href="#" class="items-round-little bg-blue">4</a>
                </div>

                <div class="ui-block-title">
                    <a href="/FavaritesPage" class="h6 title">گلچین های من</a>
                    <a href="#" class="items-round-little bg-info">8</a>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script>
        function acceptFollowRequest(event) {
            let acceptId = event.target.id;
            let denyId = acceptId.replace("accept", "deny");
            event.preventDefault();
            $.ajax({
                    type: 'POST',
                    url: '/acceptFollowRequest',
                    data: {
                        requestUserName: acceptId,
                        _token: '{{ csrf_token() }}'
                    }

            }).done(function(response){
                if(response == "followAccepted")
                {
                    $(`#${acceptId}`).css('background-color', '#42f480');
                    $(`#${acceptId}`).text('درخواست از طرف تو پذیرفته شد');
                    $(`#${acceptId}`).prop('disabled', true);
                    $(`#${denyId}`).css('display', 'none');

                }
            });
        }

        function denyFollowRequest(event) {
            let denyId = event.target.id;
            let accpetId = denyId.replace("deny", "accept");
            event.preventDefault();
            $.ajax({
                    type: 'POST',
                    url: '/denyFollowRequest',
                    data: {
                        requestUserName: denyId,
                        _token: '{{ csrf_token() }}'
                    }

            }).done(function(response){
                if(response == "followDenied")
                {
                    $(`#${denyId}`).css('background-color', '#42f480');
                    $(`#${denyId}`).text('درخواست از طرف تو رد شد');
                    $(`#${denyId}`).prop('disabled', true);
                    $(`#${accpetId}`).css('display', 'none');

                }
            });
        }

        function cancelFollow(event) {
            let cancelId= event.target.id;
            event.preventDefault();
            $.ajax({
                    type: 'POST',
                    url: '/cancelFollow',
                    data: {
                        requestUserName: cancelId,
                        _token: '{{ csrf_token() }}'
                    }

            }).done(function(response){
                if(response == "followCancelled")
                {
                    $(`#${cancelId}`).css('background-color', '##ff3d40');
                    $(`#${cancelId}`).text('دنبال کردن لغو شد');
                    $(`#${cancelId}`).prop('disabled', true);
                    // $(`#${accpetId}`).css('display', 'none');

                }
            });
        }
    </script>
@endsection
