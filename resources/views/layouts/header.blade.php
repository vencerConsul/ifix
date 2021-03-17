<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset("images_assets/logo.png")}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="@if(Route::current()->getName() == 'make.appointment') {{url('/')}} @else #banner @endif">Home</a>
                </li>
                <li class="nav-item">
                    @if(Route::current()->getName() == 'make.appointment')

                    @else
                    <a class="nav-link" href="#services">Services</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('navbar')
    <style>
        .navbar{
            position: sticky;
            top: 0;
            z-index: 10;
            background: #EFEFEF;
            box-shadow: none !important;
        }
        .appointments__button{
            background: #e3342f;
            border-radius: 30px;
        }

    </style>
@endsection
