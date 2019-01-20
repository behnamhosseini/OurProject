@extends('user.Profile.master-Youraccount')
@section('content-y-a')
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">درخواست های دوستی</h6>
                    {{--<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>--}}
                </div>



                @if($friendsRequests->count() > 0)
                    <ul class="notification-list friend-requests">
                        @foreach($friendsRequests as $request)
                            <?php $requestUser = $friends->where('id', $request->user_id)->first() ?>
                            @if($request->status == 0)
                                <li>
                                    <div class="author-thumb">
                                        <img src="{{$requestUser->profilePictures['everyOne']}}" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">{{$requestUser->fullName()}}</a>
                                        {{--<span class="chat-message-item">دوست متقابل: سمانه کاشانی</span>--}}
                                    </div>
                                    <span class="notification-icon">
                                    <button onclick="acceptFollowRequest(event)" id="acceptFollowRequestButton-{{$requestUser->id}}" class="accept-request">
                                        <span class="icon-add">
                                            <svg class="olymp-happy-face-icon "><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                                        پذیرفتن درخواست
                                    </button>
                                    <button onclick="denyFollowRequest(event)" id="denyFollowRequestButton-{{$requestUser->id}}" class="accept-request bg-warning">
                                        <span class="icon-add">
                                            <svg class="olymp-happy-face-icon "><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                                        رد درخواست
                                    </button>



                                </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>


                            @elseif($request->status == 1)
                                <li class="accepted">
                                    <div class="author-thumb">
                                        <img src="{{$requestUser->profilePictures['everyOne']}}" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">{{$requestUser->fullName()}}</a> تو رو دنبال می کنه .
                                        <br><span> دنبال کردن از: {{$request->created_at->diffForHumans()}}</span>
                                    </div>
                                    <span class="notification-icon">
                                    {{--<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>--}}

                                        <button class="btn btn-sm btn-info">ارسال پیام</button>
                                        <button onclick="cancelFollow(event)" id="cancelFollowRequestButton-{{$requestUser->id}}" class="btn btn-sm btn-danger">لغو دنبال کردن</button>
                                    </span>

                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>

            @if($friendsRequests->count() == 0)
                <div class="alert alert-info">تو هیچ درخواست دوستی نداری</div>
            @endif
        </div>
@endsection