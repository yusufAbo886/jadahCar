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
                                <a href="/regist" class="discovers">ليس لديك حساب  سجل هنا   </a>






                            </div>
                        </div>
                    </div>
                </div>
            </div>











    </section>

















@endsection
