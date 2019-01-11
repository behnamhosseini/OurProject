@extends('user.Profile.master-Youraccount')
@section('header')
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
@section('content-y-a')
    <div class="row">
     <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">سرگرمی ها و علاقه مندی ها</h6>
            </div>
            <div class="ui-block-content">
                <form method="post" action="/Hobbies">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if($errors->count() > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $e)
                                            <li>{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="form-group label-floating">
                                <label class="control-label">شبکه های تلویزیونی مورد علاقه</label>
                                <textarea name="tvChannels" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['tvChannels'] : ''}}</textarea>
                                <span class="material-input"></span></div>
                            <div class="form-group label-floating">
                                <label class="control-label">فیلم های مورد علاقه</label>
                                <textarea name="movies" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['movies'] : ''}}</textarea>
                                <span class="material-input"></span></div>
                            <div class="form-group label-floating">
                                <label class="control-label">بازی های مورد علاقه</label>
                                <textarea name="games" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['games'] : ''}}</textarea>
                                <span class="material-input"></span></div>

                            <div class="form-group label-floating">
                                <label class="control-label">شخصیت های مورد علاقه</label>
                                <textarea name="figures" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['figures'] : ''}}</textarea>
                                <span class="material-input"></span></div>


                            <button class="btn btn-secondary btn-lg full-width">لغو</button>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label">موزیک های مورد علاقه</label>
                                <textarea name="musics" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['musics'] : ''}}</textarea>
                                <span class="material-input"></span></div>
                            <div class="form-group label-floating">
                                <label class="control-label">کتاب های مورد علاقه</label>
                                <textarea name="books" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['books'] : ''}}</textarea>
                                <span class="material-input"></span></div>
                            <div class="form-group label-floating">
                                <label class="control-label">نویسنده های مورد علاقه</label>
                                <textarea name="writers" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['writers'] : ''}}</textarea>
                                <span class="material-input"></span></div>
                            <div class="form-group label-floating">
                                <label class="control-label">سایر علاقمندیها</label>
                                <textarea name="others" class="form-control" placeholder="">{{auth()->check() ? auth()->user()->interests['others'] : ''}}</textarea>
                                <span class="material-input"></span></div>

                            <button type="submit" class="btn btn-primary btn-lg full-width">ذخیره تغییرات</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection