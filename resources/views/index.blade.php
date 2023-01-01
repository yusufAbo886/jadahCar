@extends('common.master')
@section('content')
    <!-- slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  class="d-block sldr" src="img1.jpg" alt="First slide">
                <div class="carousel-caption  caption"></div>
                <div class="carousel-caption  caption-tow"></div>
                <div class="carousel-caption  caption-tree"></div>

                <div  class="sldr-text" >
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h3>INTERNATIONAL SCHOOL</h3>
                    <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block sldr" src="img2.jpg" alt="Second slide">
                <div class="carousel-caption  caption"></div>
                <div class="carousel-caption caption-tow"></div>
                <div class="carousel-caption  caption-tree"></div>

                <div  class="sldr-text" >
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h3>INTERNATIONAL SCHOOL</h3>
                    <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block sldr" src="img3.jpg" alt="Third slide">
                <div class="carousel-caption caption"></div>
                <div class="carousel-caption  caption-tow"></div>
                <div class="carousel-caption  caption-tree"></div>

                <div  class="sldr-text" >
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h3>INTERNATIONAL SCHOOL</h3>
                    <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section class="stn1">
        <div class="container">
            <div class="stntitie2">
                <h2 class="what">  WHAT ARE YOU </h2>
                <h2 class="looking">LOOKİNG FOR ?</h2>
            </div>

            <div class="d-flex justify-content-center align-items-center" style="height:100px;">
                <div class="input-group frm">
                    <input type="text" class="form-control srch" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                        <select  class="slct" name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <button class="btn"><img height="20px" width="20px" src="search.png" alt=""></button>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-6 post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 sami " >
                                <div class="square">
                                </div>
                            </div>
                            <div class="col-md-7 sol">
                                <div class="txt">
                                    <h4 class="titl">Aljazari International School of Science & Technology</h4>

                                    <p><strong>Study Fees: </strong>  5000$ - 7000$</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="hizmet">

        <div class="txt">
            <div class="cntr">
                <h3>LANGUAGE SCHOOLS</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>
            </div>
        </div>
        <div class="photo">
            <img class="" src="office1.jpg" alt="Card image cap">
        </div>
    </section>

    <section class="hizmet1">
        <div class="photo">
            <img class="img-fluid w-100" src="office1.jpg" alt="Card image cap">
        </div>
        <div class="txt1">
            <div class="cntr">
                <h3>LANGUAGE SCHOOLS</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <a href="#" class="discover">Discover <img src="arrow.png" height="20px" width="20px" alt=""></a>
            </div>
        </div>
    </section>

    <section class="member">

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="try">
                        <img src="bil1.png" alt=""><br>
                        <span><p> 250</p></span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="try">
                        <img src="bil2.png" alt=""><br>
                        <span><p> 500</p></span>

                    </div>
                </div>
                <div class="col-md">
                    <div class="try">
                        <img src="bil3.png" alt=""><br>
                        <span><p> 5k</p></span>

                    </div>
                </div>
                <div class="col-md">
                    <div class="try">
                        <img src="bil4.png" alt=""><br>
                        <span><p> 20k</p></span>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section>
        <div class="demo" >
            <div class="container">


                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial ">

                                <p class="description">
                                    <strong>Lorem Ipsum is simply dummy text of the printing and typeset ?</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo nulla dictum felis sollicitudin, euismod finibus augue vulputate.
                                </p>


                            </div>
                            <div class="testimonial">
                                <p class="description">
                                    <strong>Lorem Ipsum is simply dummy text of the printing and typeset ?</strong><br>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s                      </p>


                            </div>

                            <div class="testimonial">
                                <p class="description">
                                    <strong>Lorem Ipsum is simply dummy text of the printing and typeset ?</strong><br>

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo nulla dictum felis sollicitudin, euismod finibus augue vulputate. Sed aliquam, elit eu gravida dignissim, justo dolor vulputate ipsum, a dapibus purus dui vitae purus..
                                </p>


                            </div>
                            <div class="testimonial">
                                <p class="description">
                                    <strong>Lorem Ipsum is simply dummy text of the printing and typeset ?</strong><br>

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo nulla dictum felis sollicitudin, euismod finibus augue vulputate. Sed aliquam, elit eu gravida dignissim, justo dolor vulputate ipsum, a dapibus purus dui vitae purus..
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="subscribe">

        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-sm align-self-center">
                        <h3>We'll call you</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and</p>

                    </div>
                    <div class="col-sm align-self-center">
                        <input type="text" placeholder="Name Surname">

                    </div>
                    <div class="col-sm align-self-center">
                        <input type="text" placeholder="Phone Number">

                    </div>
                    <div class="col-sm align-self-center">
                        <a href="#">SUBMIT</a>
                    </div>
                </div>
            </form>
        </div>

    </section>

















@endsection
