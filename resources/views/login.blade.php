@extends('common.master')
@section('content')


    <section class="school d-flex justify-content-center align-items-center">

            <div class="container">

                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-4">

                        <div class="card shadow-2-strong " style="border-radius: 1rem;">
                            <div class="topic d-flex justify-content-center align-items-center">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="card-body ">
                                <form method="POST" action="/buyer-info">
                                    @csrf
                                <div class="form-group dds">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                                <button class="discover">تسجيل الدخول <img src="{{ asset('asset/img/arrow.png') }}" height="20px" width="20px" alt=""></button>
                                    <br>
                                </form>
                                <a href="#" class="discovers">ليس لديك حساب  سجل هنا   </a>






                            </div>
                        </div>
                    </div>
                </div>
            </div>












{{--        <form>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Email address</label>--}}
{{--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">--}}
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">Password</label>--}}
{{--                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
    </section>

















@endsection
