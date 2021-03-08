@section('footerstyle')
    <style>
        #fooooter {
            background: #EFEFEF;
            padding-bottom: 50px;
            color: rgba(0, 0, 0, 0.5) !important;
        }
        .social__midea a{
            color: rgba(0, 0, 0, 0.5) !important;
            transition: all 0.5s ease-in-out;
        }
        .social__midea a:hover{
            color: rgba(0, 84, 66, 0.5) !important;
        }
    </style>
@endsection
<section id="fooooter">
    <img class="img-fluid" src="{{asset('images_assets/wave2.png')}}" alt="wave2">
    <div class="container text-center">
        <img class="img-fluid mb-4" src="{{asset('images_assets/logo.png')}}" alt="logo">

        <div class="row text-center">
            <div class="col-lg-4 mb-3">
                <i style="font-size: 30px;" class="fa fa-clock"></i>
                <h5>Mon-Fri: 7:00am-7:00pm</h5>
                <h5>Sat-Sun: 10:00am-5:00pm</h5>
            </div>
            <div class="col-lg-4 mb-3 social__midea">
                <h5 class="font-weight-bold">Follow Us</h5>
                <a href="https://web.facebook.com/IFex-100360578782851" target="_blank"><i class="fab fa-facebook m-2" style="font-size: 50px;"></i></a>
                <a href=""><i class="fab fa-instagram m-2" style="font-size: 50px;"></i></a>
            </div>
            <div class="col-lg-4 mb-3">
                <h5 class="font-weight-bold">Contact Us</h5>
                <h4>loremipsum@gmail.com</h4>
                <h4><i class="fa fa-phone m-2"></i>09318397801</h4>
            </div>
        </div>
        <div class="my-4">
            <p>© 2021 Ifix. All Rights Reserved.</p>
            <p><a href="">Terms and Conditions</a> | <a href="">Privacy Policy</a></p>
        </div>
    </div>
</section>
