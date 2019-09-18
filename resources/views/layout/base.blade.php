<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/df4e40bb5d.js"></script>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}" />

    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/3wyaint1vo6fx46ntqkz3sldy56r83ybfmwkj5bjn5rcelve/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.textarea',
            plugins: [
                'code',
                'media',
                'image',
                'searchreplace',
                'autoresize',
                'lists',
                'hr',
                'font-size'

            ],
            menu: {
                format: { title: "Format", items: "forecolor backcolor" }
            },
            toolbar:[
                "undo redo | bold underline | font-size forecolor backcolor | numlist bullist | image media | code searchreplace hr",
            ]
        });
    </script>
    <title>Expense Reports</title>
</head>
<body>

<!-- Inicio Bar Header -->
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            View Edit
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/view_edits">View Edit </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- Fin Bar Header -->

{{-- Container option--}}
<div class="container">
<div class="row main-container-option">
        {{--Input group File--}}
@if(Auth::user()->id === 1 || Auth::user()->id === 4 )
        <div class="col-sm-4">
            <form action="{{ route('form_import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="file" accept=".csv">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>

                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text" id="inputGroupFileAddon02">Upload</button>
                    </div>
                </div>
            </form>
        </div>
@endif


        {{--Fin Input group File--}}
        <div class="col group-option">
            <button onclick="window.location.href='/view_edits/create'">New Product</button>
            <button onclick="window.location.href='/clear_view'">Clear Product</button>
            <button onclick="window.location.href='/export'">Send For Publish</button>
        </div>
    </div>
</div>

{{--Fin Container option--}}

<div class="app">
    <div class="container">
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
