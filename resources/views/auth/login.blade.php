@extends('auth.master')
@section('content')
    <div class="card col-xl-4 col-lg-8 col-md-12 col-sm-12 col-xs-12" style="background-color:#FFFFFF;">
        <div class="card" id="enter-m-n">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                    <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                        <div class="title h6 mt-4">ورود به حساب کاربری</div>
                        <form class="content" method="post" action="/login">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label ">شماره موبایل</label>
                                        <input class="form-control mt-2" name="phoneNumber" placeholder="" type="text" >
                                        @if ($errors->has('phoneNumber'))
                                            <div class="mt-3 col-xl-12 col-lg-12 col-md-12 text-danger" role="alert">
                                                <strong>{{ $errors->first('phoneNumber') }}</strong>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">کلمه عبور</label>
                                        <input class="form-control" name="password" placeholder="" type="password">
                                        @if ($errors->has('password'))
                                            <div class="mt-3 col-xl-12 col-lg-12 col-md-12 text-danger" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="remember">

                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                مرا به خاطر بسپار
                                            </label>
                                        </div>
                                        <br>
                                        <a href="/resetPassword" class="forgot">کلمه عبور خود را فراموش کرده اید؟</a>
                                        <br>
                                    </div>

                                    <input type="submit" class="btn btn-lg btn-primary full-width" value="ورود">

                                    <div class="or"></div>

                                    <p>حساب کاربری ندارید؟ <a href="{{route('register')}}">همین حالا ثبت نام کنید!</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>



        <!-- ------------------------------------------------->

    </div>
    </div>


    @include('sweet::alert')

    <script>
        $("#number").focus(function () {
            $("#number").attr("value","09")
        })
        $("#number").focusout(function () {
            $("#number").attr("value","")
        })

        $("#code").hide(function() {
        });



        $("#submit1").click(function(e){


            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/signup',
                data: {
                    number: $('#number').val(),
                    _token: '{{ csrf_token() }}'
                },

            }).done(function(response) {
                if(response == '/login'){
                    window.location.assign(response);
                    $("#enter-m-n").hide(function() {
                    });
                    $("#code").hide(function() {
                    });
                } else {
                    $("#enter-m-n").hide(function() {
                    });
                    $("#code").show(function() {
                    });

                }
            });

            let countDownDate = new Date();
            countDownDate.setMinutes(countDownDate.getMinutes()+2);
            // Update the count down every 1 second
            let x = setInterval(function() {

                // Get todays date and time
                let now = new Date().getTime();

                // Find the distance between now and the count down date
                let distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("timer").innerHTML = minutes + "و دقیقه" + seconds + "ثانیه";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("timer").innerHTML = "زمان شما به پایان رسید.دوباره سعی کنید";
                }
            }, 1000);


        });



    </script>


@endsection