@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('homepagestyle')
    <style>
        #banner {
            height: auto;
            background: #EFEFEF;
            width: 100%;
        }
        #banner .first__column{
            margin-top:90px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: rgba(0, 0, 0, 0.5);
        }
        #banner .first__column .first__column__content .btn{
            border-radius: 30px;
            padding: 10px 50px;
        }
        #banner .second__column{
            margin-top:90px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        #services{
            padding: 50px 0;
            background: #ffffff;
            color: rgba(0, 0, 0, 0.5) !important;
        }
        #services .services{
            padding: 20px;
        }
        #services .services .services__img{
            width: 100px;
        }
        #services .services p{
            margin-top: 10px;
            font-size: 16px;
        }
        #services button{
            border-radius: 30px;
            padding: 10px 50px;
        }
        #asked{
            background: #EFEFEF;
            padding: 50px 0;
            color: rgba(0, 0, 0, 0.5) !important;
        }
        #asked .asked__title{
            text-align: center;
        }
        #asked .questions{
            margin-top: 60px;
        }
        #asked .questions .questions__content{
            margin-bottom: 10px;
        }
        #asked .questions h4{
            font-size: 30px;
            cursor: pointer;
        }
        #asked .questions .answer{
            margin-left: 2.5rem;
            display: none;
        }
        #steps{
            padding: 50px 0;
            background: #ffffff;
            color: rgba(0, 0, 0, 0.5) !important;
        }
        #steps .steps__title{
            text-align: center;
        }
        #steps .steps{
            padding: 20px;
        }
        #steps .steps img{
            width: 120px;
            height: auto;
        }
        .answer.open__answer{
            display: block !important;
        }
        @media only screen and (max-width: 758px) {
            /* section 1 */
            #banner .first__column {
                margin-top: 90px;
            }
            #banner .first__column .first__column__content h1{
                font-size: 25px;
            }
            #banner .first__column .first__column__content .btn{
                font-size: 16px;
                padding: 6px 20px;
            }
            #banner .second__column{
                margin-top: 60px;
            }
            #banner .second__column img{
                width: 250px;
            }
            #banner .wave1{
                margin-top: 4em;
            }
            /* section2 */
            #services .services__title{
                font-size: 20px;
            }
            #services .services .services__img{
                width: 70px;
            }
            #services button{
                font-size: 16px;
                padding: 6px 20px;
            }
            /* section 3 */
            #asked .asked__title {
                font-size: 20px;
            }
            #asked .questions .questions__content h4{
                font-size: 18px;
            }
            /* section 4 */
            #steps .steps__title{
                font-size: 20px;
            }
            #steps .steps img{
                width: 90px;
            }
            #steps .steps h3{
                font-size: 18px;
            }
            #steps .steps h4{
                font-size: 16px;
            }
        }
    </style>
@endsection

@section('content')
    @include('layouts.header')
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 first__column">
                    <div class="first__column__content">
                        <h1>Broken Smartphone or Tablet?</h1>
                        <h1 class="font-weight-bold">WE CAN FIX THAT!</h1>
                        <a class="btn btn-danger" href="{{route('make.appointment')}}">Make Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 second__column">
                    <img src="{{asset('images_assets/banner.png')}}" alt="banner">
                </div>
            </div>
        </div>
        <img class="img-fluid wave1" src="{{asset('images_assets/wave1.png')}}" alt="wave1">
    </section>

    {{-- section 2 --}}
    <section id="services">
        <div class="container text-center">
            <h3 class="text-center mb-4 services__title">SERVICES</h3>
            <div class="row text-center">
                <div class="col-lg-3 col-6 services">
                    <img class="img-fluid services__img" src="{{asset('images_assets/section2/service1.png')}}" alt="services">
                    <p>LCD Replacement</p>
                </div>
                <div class="col-lg-3 col-6 services">
                    <img class="img-fluid services__img" src="{{asset('images_assets/section2/service2.png')}}" alt="services">
                    <p>Remove Iphone Disabled</p>
                </div>
                <div class="col-lg-3 col-6 services">
                    <img class="img-fluid services__img" src="{{asset('images_assets/section2/service3.png')}}" alt="services">
                    <p>Remove Apple Id lock</p>
                </div>
                <div class="col-lg-3 col-6 services">
                    <img class="img-fluid services__img" src="{{asset('images_assets/section2/service4.png')}}" alt="services">
                    <p>Remove  IPhone passcode</p>
                </div>
            </div>
            <button class="btn btn-danger" data-toggle="modal" data-target="#servicesModal">Show All</button>

            <div class="modal fade" id="servicesModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="serviceTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="serviceTitle">Our Services</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Remove iPhone Disabled</p>
                            <p>Remove iPhone Password</p>
                            <p>Remove Apple ID Lock</p>
                            <p>Remove Google ID Lock</p>
                            <p>Remove MI Account</p>
                            <p>Remove PIN/Password/Pattern</p>
                            <p>Reformat Laptop</p>
                            <p>Replace LCD & Touchscreen</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Replace Battery</p>
                            <p>Openline iPhone/Samsung</p>
                            <p>Reprogram/Reformat</p>
                            <p>Install window 7/8/10</p>
                            <p>Update Window 10</p>
                            <p>Remove Laptop Password</p>
                            <p>Install Microsoft Office</p>
                            <p>Install Laptop Apps</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a class="text-white" href="{{route('make.appointment')}}">Make appointment</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLose</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    {{-- asked --}}

    <section id="asked">
        <div class="container">
            <div class="text-center">
                <h3 class="asked__title">Some Frequently <span class="text-danger">Asked Questions</span></h3>
                <p>We can Solve your Hardware and Software Problems</p>
            </div>
            {{-- questions --}}
            <div class="questions">
                <div class="questions__content">
                    <h4 onclick="qtns('answer_1')">&#8594; <span>How long will my repair take?</span> <i class="fa fa-sort-down"></i></h4>
                    <div class="answer answer_1">&#10003; Well that does depend on the nature of the repair. We endeavour to have the diagnosis complete within 24-48 hours. Dependent on the repair or service required it can be less than this.</div>
                </div>
                <div class="questions__content">
                    <h4 onclick="qtns('answer_2')">&#8594; <span>Do I need to make an appointment to bring my device to you?</span> <i class="fa fa-sort-down"></i></h4>
                    <div class="answer answer_2">&#10003; Well that does depend on the nature of the repair. We endeavour to have the diagnosis complete within 24-48 hours. Dependent on the repair or service required it can be less than this.</div>
                </div>
                <div class="questions__content">
                    <h4 onclick="qtns('answer_3')">&#8594; <span>Can you recover data to my hard drive?</span> <i class="fa fa-sort-down"></i></h4>
                    <div class="answer answer_3">&#10003; Absolutely, we repair laptop screens all the time and it’s much cheaper than buying a new laptop. Contact Us
for a quick quote, we have the majority of laptop screens in stock and can normally replace your screen the same day!</div>
                </div>
            </div>
        </div>
    </section>

    {{-- section 3 --}}

    <section id="steps">
        <div class="container">
            <div class="text-center">
                <h3 class="steps__title">How Does <span class="text-danger">It Works</span></h3>
                <p>Get your device repaired in just three easy steps</p>
            </div>
            <div class="row text-center d-flex justify-content-center ">
                <div class="col-lg-4 col-6 steps">
                    <img class="img-fluid mb-2" src="{{asset('images_assets/section3/step1.png')}}" alt="steps">
                    <h3>First step</h3>
                    <h4 class="text-danger">Tell us your Issue.</h4>
                    <p>Help us detailing the device problem to get it working properly again</p>
                </div>
                <div class="col-lg-4 col-6 steps">
                    <img class="img-fluid mb-2" src="{{asset('images_assets/section3/step2.png')}}" alt="steps">
                    <h3>Second step</h3>
                    <h4 class="text-danger">Get repair estimate</h4>
                    <p>Check the repair Price estimate.</p>
                </div>
                <div class="col-lg-4 col-6 steps">
                    <img class="img-fluid mb-2" src="{{asset('images_assets/section3/step3.png')}}" alt="steps">
                    <h3>Third step</h3>
                    <h4 class="text-danger">Bring or courier device</h4>
                    <p>Handover your device at our office or chooses device pickup, courier and a doorstep service.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @include('layouts.footer')

    @section('homepagescript')
        <script>
            function qtns(num){
                const answer = document.querySelector('.'+num)
                if(answer.classList.contains('open__answer')){
                    answer.classList.remove('open__answer')
                }else{
                    answer.classList.add('open__answer')
                }
            }
        </script>
    @endsection
@endsection
