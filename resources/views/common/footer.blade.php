

{{--<footer>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-sm">--}}
{{--                <a href="#">WHO WE ARE</a>--}}
{{--                <a href="#"> WHAT WE DO</a>--}}
{{--                <a href="#">SCHOOLS</a>--}}

{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <a href="#">LANGUAGE SCHOOL  </a>--}}
{{--                <a href="#"> TEACHER SQUAD</a>--}}
{{--                <a href="#">CONTACT</a>--}}
{{--            </div>--}}
{{--            <div class="col-sm ">--}}
{{--                <a href="#">151 Adelaide Terrace, East Perth 6004</a>--}}
{{--                <a href="#"> T P (08) 6115 0025</a>--}}
{{--            </div>--}}
{{--            <div class="col-sm text-right">--}}
{{--                FOLLOW US--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--</footer>--}}

<!-- slider -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
<script src="http://code.jquery.com/jquery-1.7rc2.js"></script>

{{--<script src="main.js"></script>--}}
<script src="{{ asset('asset/main.js') }}"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    // #testimonial-slider
    // .testimonial
    $(document).ready(function(){








        $("#testimonial-slider").owlCarousel({
            items: 2.2,
            itemsDesktop:[1199,2],
            itemsDesktopSmall:[1000,2],
            itemsTablet:[767,1],
            pagination: false,
            navigation:true,
            afterAction: function(elem){ $(elem). addClass("active");},   afterAction: function(elem){ $(elem). addClass("active");},
            navigationText:["<img src='left.png' height='20px 'width='20px' >","<img src='arrow.png' height='20px 'width='20px' >"],
            autoPlay:true,


            afterAction: function(el){
                //remove class active
                $(" .description")
                    .removeClass('active')

                //add class active
                $(" .description")
                    .eq(this.currentItem )
                    .addClass('active')
            }

        });
    });
</script>





</body>
</html>
