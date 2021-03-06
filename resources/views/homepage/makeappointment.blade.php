@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('homepagestyle')
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <style>
        #appointment__form {
            height: auto;
            background: #EFEFEF;
            width: 100%;
        }
        #appointment__form .first__column{
            margin-top:40px;
            padding: 50px;
            color: rgba(0, 0, 0, 0.5);
        }
        #appointment__form .first__column .card{
            border: none;
            background: none;
        }
        #appointment__form .first__column .card .form-control{
            border: none;
            border-radius: 0;
        }
        #appointment__form .first__column .first__column__content .btn{
            border-radius: 30px;
            padding: 10px 50px;
        }
        #appointment__form .second__column{
            margin-top:90px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
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
        /* image previews */
        input[type="file"] {
            display: block;
        }
        .imageThumb {
            max-height: 70px;
            max-width: 70px;
            cursor: pointer;
        }
        .container__multiple {
            position: relative;
            display: inline-block;
            margin: 10px 10px 0 0;
        }
        .remove {
            position: absolute;
            top: -7px;
            right: -7px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333333;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
        }
        .remove:hover {
            background: white;
            color: black;
        }
        .overlay-bg{
            position: fixed;
            top: 0;
            background: #000000c1;
            z-index:2000;
            height: 100%;
            width: 100%;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            color: #ffffff;
            display: none;
        }
        @media only screen and (max-width: 758px) {
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
    <section id="appointment__form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 second__column">
                    <div class="text-center">
                        <h3>We are here to fix your Device</h3>
                        <h4 class="text-danger">Tell us your device issue</h4>
                    </div>
                    <img src="{{asset('images_assets/appointment/appointment.png')}}" alt="appointment">
                </div>
                <div class="col-lg-6 first__column">
                    <div class="card">
                        <form action="{{route('submit.appointment')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @error('name')
                                            <div class="alert alert-danger rounded-0">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Firstname" value="{{old('firstname')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Lastname" value="{{old('lastname')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{old('email')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone number" value="{{old('phone')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Full Address" value="{{old('address')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="issue" id="issue" class="form-control @error('issue') is-invalid @enderror">
                                                <option value="" selected disabled hidden>Device Issue</option>
                                                <option value="Remove iPhone Disabled">Remove iPhone Disabled</option>
                                                <option value="Remove iPhone Password">Remove iPhone Password</option>
                                                <option value="Remove Apple ID Lock">Remove Apple ID Lock</option>
                                                <option value="Remove Google ID Lock">Remove Google ID Lock</option>
                                                <option value="Remove PIN/Password/Pattern">Remove PIN/Password/Pattern</option>
                                                <option value="Reformat Laptop">Reformat Laptop</option>
                                                <option value="Replace LCD & Touchscreen">Replace LCD & Touchscreen</option>
                                                <option value="Replace Battery">Replace Battery</option>
                                                <option value="Openline iPhone/Samsung">Openline iPhone/Samsung</option>
                                                <option value="Reprogram/Reformat">Reprogram/Reformat</option>
                                                <option value="Install window 7/8/10">Install window 7/8/10</option>
                                                <option value="Update Window 10">Update Window 10</option>
                                                <option value="Remove Laptop Password">Remove Laptop Password</option>
                                                <option value="Install Microsoft Office">Install Microsoft Office</option>
                                                <option value="Install Laptop Apps">Install Laptop Apps</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p id="issueAttributes"></p>
                                        <p id="priceAttributes"></p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group d-flex justify-center align-items-center">
                                            <i class="fa fa-image mr-2 @error('firstname') is-invalid @enderror" style="font-size: 50px; cursor: pointer;" onclick="document.getElementById('devicePhoto').click();"></i>
                                            <label>Device photo</label>
                                            <input type="file" class="d-none" name="devicePhoto" id="devicePhoto">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control @error('problem') is-invalid @enderror" name="problem" cols="30" rows="3" placeholder="Tell us about your problem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-none" id="additionalAttribute">

                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-secondary rounded-0 btn-block" value="Submit" onClick="this.form.submit(); this.value = 'loading...'; this.disabled = true; document.querySelector('.overlay-bg').style.display = 'flex';">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-fluid wave1" src="{{asset('images_assets/wave1.png')}}" alt="wave1">
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
                    <p>Help us by detailing the device problem.</p>
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
                    <p>Handover your device at our office.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="overlay-bg">
        <h4>Please wait...</h4>
    </div>

    {{-- footer --}}
    @include('layouts.footer')

    {{-- modal --}}
    <div class="modal fade" id="modalAddAttribute" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="serviceTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
        <div class="modal-header border-0">
            <h5 class="modal-title" id="modalAttributeTitle"></h5>
        </div>
        <div class="modal-body" id="modalAttributeBody">
            <p id="modalAttributeError" class="text-warning"></p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <select id="deviceType" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <select id="deviceModel" class="form-control" disabled></select>
                        <input class="form-control d-none deviceModelInput" placeholder="Device model ex. samsung j7">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer border-0">
            <h5 class="text-light" id="price"></h5>
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-danger" id="modalAttributeButton" onclick="proceed()">Proceed <i class="uil uil-angle-double-right"></i></button>
        </div>
        </div>
    </div>

@endsection

@section('makeappointmentscript')
    <script>
        window.onload = function(){
            const issue = document.querySelector('#issue');
            const issueAttributes = document.querySelector('#issueAttributes');
            const modalAttributeTitle = document.querySelector('#modalAttributeTitle');
            const modalAttributeBody = document.querySelector('#modalAttributeBody');
            const modalAttributeButton = document.querySelector('#modalAttributeButton');

            const deviceType = document.querySelector('#deviceType');
            const deviceModel = document.querySelector('#deviceModel');
            const deviceModelInput = document.querySelector('.deviceModelInput');
            const price = document.querySelector('#price');
            const priceAttributes = document.querySelector('#priceAttributes');
            const modalAttributeError = document.querySelector('#modalAttributeError');
            const additionalAttribute = document.querySelector('#additionalAttribute');

            issue.addEventListener('change', function(){

                $('#modalAddAttribute').modal('show')
                modalAttributeTitle.innerHTML = issue.value;

                if(issue.value == 'Replace LCD & Touchscreen' || issue.value == 'Replace Battery'|| issue.value == 'Openline iPhone/Samsung'){
                    deviceType.innerHTML = '<option value="" selected disabled hidden>Device type</option><option value="APPLE">APPLE</option><option value="ANDROID">ANDROID</option>';
                    price.innerHTML = '';
                }
                if(issue.value == 'Install window 7/8/10'|| issue.value == 'Update Window 10'|| issue.value == 'Install Microsoft Office'){
                    deviceType.innerHTML = '<option value="" selected disabled hidden>Device type</option><option value="LAPTOP">LAPTOP</option><option value="DESKTOP">DESKTOP</option>';
                    price.innerHTML = 'Install window &#8369;600, Update window 10 &#8369;500, Install Microsoft Office &#8369;700';
                    document.querySelector('.deviceModelInput').setAttribute('placeholder', 'Model ex. lenovo')
                }
                else if(issue.value == 'Remove Google ID Lock'){
                    deviceModel.disabled = false;
                    deviceType.innerHTML = '<option value="ANDROID">ANDROID</option>';
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                    price.innerHTML = 'Price will be discuss by <a href="https://www.facebook.com/FakeZone18">Ian Magrata</a>';
                    checkDeviceType()
                }
                else if(issue.value == 'Remove iPhone Disabled' || issue.value == 'Remove iPhone Password'|| issue.value == 'Remove Apple ID Lock'){
                    deviceModel.disabled = false;
                    deviceType.innerHTML = '<option value="APPLE">APPLE</option>';
                    price.innerHTML = '';
                    checkDeviceType()
                }
                else if (issue.value == 'Openline iPhone/Samsung') {
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                    price.innerHTML = 'Price will be discuss by <a href="https://www.facebook.com/FakeZone18">Ian Magrata</a>';
                    deviceType.innerHTML = '<option value="APPLE">APPLE</option><option value="SAMSUNG">SAMSUNG</option>';
                }
                else if (issue.value == 'Reprogram/Reformat') {
                    deviceType.innerHTML = '<option value="" selected disabled hidden>Device type</option><option value="ANDROID">ANDROID</option><option value="LAPTOP">LAPTOP</option>'
                    price.innerHTML = ''
                }
                else if (issue.value == 'Remove PIN/Password/Pattern') {
                    deviceType.innerHTML = '<option value="ANDROID">ANDROID</option>';
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                    price.innerHTML = 'Price will be discuss by <a href="https://www.facebook.com/FakeZone18">Ian Magrata</a>';
                }
                else if (issue.value == 'Reformat Laptop' || issue.value == 'Remove Laptop Password' || issue.value == 'Install Laptop Apps') {
                    deviceType.innerHTML = '<option value="Laptop">Laptop</option>';
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                    document.querySelector('.deviceModelInput').setAttribute('placeholder', 'Model ex. lenovo')
                    price.innerHTML = '<small>Reformat &#8369;400, Remove password &#8369;500, Install App &#8369;200</small>'
                }
            });

            // function to check
            function checkDeviceType(){
                if (deviceType.innerHTML == '<option value="APPLE">APPLE</option>') {
                    deviceModel.innerHTML = '<option value="" selected disabled hidden>Device Model</option><option value="Iphone 4">Iphone 4</option><option value="Iphone 4s">Iphone 4s</option><option value="Iphone 5">Iphone 5</option><option value="Iphone 6s">Iphone 6s</option><option value="Iphone 6">Iphone 6</option><option value="Iphone 6s">Iphone 6s</option><option value="Iphone 6 +">Iphone 6 +</option><option value="Iphone 6s +">Iphone 6s +</option><option value="Iphone 7">Iphone 7</option><option value="Iphone 7 +">Iphone 7 +</option><option value="Iphone 8">Iphone 8</option><option value="Iphone 8 +">Iphone 8 +</option><option value="Iphone 11">Iphone 11</option>'
                }
            }

            // device type on change
            deviceType.addEventListener('change', function(){
                if (deviceType.value == 'APPLE' && issue.value == 'Replace LCD & Touchscreen'||deviceType.value == 'APPLE' && issue.value == 'Replace Battery') {
                    deviceModel.innerHTML = '<option value="" selected disabled hidden>Device Model</option><option value="Iphone 4">Iphone 4</option><option value="Iphone 4s">Iphone 4s</option><option value="Iphone 5">Iphone 5</option><option value="Iphone 6s">Iphone 6s</option><option value="Iphone 6">Iphone 6</option><option value="Iphone 6s">Iphone 6s</option><option value="Iphone 6 +">Iphone 6 +</option><option value="Iphone 6s +">Iphone 6s +</option><option value="Iphone 7">Iphone 7</option><option value="Iphone 7 +">Iphone 7 +</option><option value="Iphone 8">Iphone 8</option><option value="Iphone 8 +">Iphone 8 +</option><option value="Iphone 11">Iphone 11</option>';
                    deviceModel.disabled = false;
                    deviceModelInput.classList.add('d-none')
                    deviceModel.classList.remove('d-none')
                    price.innerHTML = ''
                }else if(deviceType.value == 'LAPTOP' || deviceType.value == 'DESKTOP'){
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                }else{
                    deviceModelInput.classList.remove('d-none')
                    deviceModel.classList.add('d-none')
                    price.innerHTML = 'Price will be discuss by <a href="https://www.facebook.com/FakeZone18">Ian Magrata</a>';
                }
            });

            // device model on change
            deviceModel.addEventListener('change', function(){
                if(issue.value == 'Replace LCD & Touchscreen'){
                    if (deviceModel.value == 'Iphone 4'||deviceModel.value == 'Iphone 5'||deviceModel.value == 'Iphone 5s') {
                    price.innerHTML = '&#8369;1,300';
                    }else if (deviceModel.value == 'Iphone 6'||deviceModel.value == 'Iphone 6s') {
                        price.innerHTML = '&#8369;1,500';
                    }else if (deviceModel.value == 'Iphone 6 +'||deviceModel.value == 'Iphone 6s +') {
                        price.innerHTML = '&#8369;1,700';
                    }else if (deviceModel.value == 'Iphone 7') {
                        price.innerHTML = '&#8369;1,800';
                    }else if (deviceModel.value == 'Iphone 7 +'||deviceModel.value == 'Iphone 8'||deviceModel.value == 'Iphone 8 +') {
                        price.innerHTML = '&#8369;2,200';
                    }else if (deviceModel.value == 'Iphone 11') {
                        price.innerHTML = '&#8369;5,000';
                    }
                }
                else if(issue.value == 'Replace Battery' ){
                    if (deviceModel.value == 'Iphone 4'||deviceModel.value == 'Iphone 5'||deviceModel.value == 'Iphone 5s') {
                    price.innerHTML = '&#8369;900';
                    }else if (deviceModel.value == 'Iphone 6'||deviceModel.value == 'Iphone 6s'||deviceModel.value == 'Iphone 6 +'||deviceModel.value == 'Iphone 6s +') {
                        price.innerHTML = '&#8369;1,000';
                    }else if (deviceModel.value == 'Iphone 7'||deviceModel.value == 'Iphone 7 +'||deviceModel.value == 'Iphone 8'||deviceModel.value == 'Iphone 8 +') {
                        price.innerHTML = '&#8369;1,200';
                    }
                }
                else if(issue.value == 'Remove iPhone Disabled' || issue.value == 'Remove iPhone Password'){
                    if (deviceModel.value == 'Iphone 4'||deviceModel.value == 'Iphone 5'||deviceModel.value == 'Iphone 5s') {
                    price.innerHTML = '&#8369;400';
                    }else if (deviceModel.value == 'Iphone 6'||deviceModel.value == 'Iphone 6s'||deviceModel.value == 'Iphone 6 +'||deviceModel.value == 'Iphone 6s +') {
                        price.innerHTML = '&#8369;600';
                    }else if (deviceModel.value == 'Iphone 7'||deviceModel.value == 'Iphone 7 +'||deviceModel.value == 'Iphone 8'||deviceModel.value == 'Iphone 8 +'||deviceModel.value == 'Iphone 11') {
                        price.innerHTML = '&#8369;800';
                    }
                }
                else if(issue.value == 'Remove Apple ID Lock'){
                    if (deviceModel.value == 'Iphone 4'||deviceModel.value == 'Iphone 5'||deviceModel.value == 'Iphone 5s') {
                    price.innerHTML = '&#8369;1,000';
                    }else if (deviceModel.value == 'Iphone 6'||deviceModel.value == 'Iphone 6s'||deviceModel.value == 'Iphone 6 +'||deviceModel.value == 'Iphone 6s +') {
                        price.innerHTML = '&#8369;2,000';
                    }else if (deviceModel.value == 'Iphone 7'||deviceModel.value == 'Iphone 7 +'||deviceModel.value == 'Iphone 8'||deviceModel.value == 'Iphone 8 +'||deviceModel.value == 'Iphone 11') {
                        price.innerHTML = '&#8369;2,600';
                    }
                }
            });




            // file previews
            if (window.File && window.FileList && window.FileReader) {
                $("#devicePhoto").on("change", function(e) {
                    if ($(this)[0].files.length > 1) {
                        Swal.fire({
                            icon: "warning",
                            text: "The file is too large"
                        });
                    } else {
                        var files = e.target.files,
                            filesLength = files.length;
                        for (var i = 0; i < filesLength; i++) {
                            var f = files[i];
                            var fileReader = new FileReader();
                            fileReader.onload = function(e) {
                                var file = e.target;
                                $('<span class="container__multiple">' +
                                        '<img class="imageThumb" src="' +
                                        e.target.result +
                                        '" title="' +
                                        file.name +
                                        '"/>' +
                                        '<br/><span class="remove"><i class="fa fa-times"></i></span>' +
                                        "</span>"
                                ).insertAfter("#devicePhoto");
                                $(".remove").click(function() {
                                    $(this)
                                        .parent(".container__multiple")
                                        .remove();
                                });
                            };
                            fileReader.readAsDataURL(f);
                        }
                    }
                });
            } else {
                alert("Your browser doesn't support to File API");
            }
        }

        function proceed(){
                if(deviceType.value != '' && deviceModel.value != ''){
                    modalAttributeError.innerHTML = ''
                    additionalAttribute.innerHTML = '<input type="hidden" name="device_type" value="'+ deviceType.value +'"><input type="hidden" name="device_model" value="'+ deviceModel.value +'"><input type="hidden" name="price" value="'+ price.innerHTML +'">'
                    issueAttributes.innerHTML = deviceType.value +'/'+ deviceModel.value;
                    priceAttributes.innerHTML = price.innerHTML;
                    $('#modalAddAttribute').modal('hide')
                    deviceModel.value = ''
                    deviceModel.disabled = true;
                    deviceModel.innerHTML = ''
                }else if (deviceType.value != '' && document.querySelector('.deviceModelInput').value != ''){
                    modalAttributeError.innerHTML = ''
                    additionalAttribute.innerHTML = '<input type="hidden" name="device_type" value="'+ deviceType.value +'"><input type="hidden" name="device_model" value="'+ document.querySelector('.deviceModelInput').value +'"><input type="hidden" name="price" value="'+ price.innerHTML +'">'
                    issueAttributes.innerHTML = deviceType.value +'/'+ document.querySelector('.deviceModelInput').value;
                    priceAttributes.innerHTML = price.innerHTML;
                    $('#modalAddAttribute').modal('hide')
                    document.querySelector('.deviceModelInput').value = ''
                    deviceModel.disabled = true;
                    deviceModel.innerHTML = ''
                }
                else{
                    modalAttributeError.innerHTML = 'Make sure that Device type and Model are filled in.'
                }
            }

    </script>
@endsection
