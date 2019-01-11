{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form method="POST" action="{{ route('password.email') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Send Password Reset Link') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('auth.master')
@section('content')
    <div class="card col-xl-4 col-lg-8 col-md-12 col-sm-12 col-xs-12" style="background-color:#FFFFFF;">
        <div class="card" id="enter-m-n">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                    <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                        <div class="title h6 mt-4">بازیابی رمز</div>
                            <form class="content" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label ">آدرس ایمیل</label>
                                        <input class="form-control mt-2" name="email" placeholder="" type="email" >
                                        @if ($errors->has('email'))
                                            <div class="mt-3 col-xl-12 col-lg-12 col-md-12 text-danger" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif

                                    </div>

                                    <input type="submit" class="btn btn-lg btn-primary full-width" value="ارسال لینک بازیابی رمز">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- ------------------------------------------------->

        </div>
    </div>


@endsection