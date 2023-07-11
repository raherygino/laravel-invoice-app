<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>{{ env('APP_NAME')." | ". trans('login.title') }}</title>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" >
        <script>
            var defaultThemeMode = "light";
            var themeMode;
        
            if ( document.documentElement ) {
                if ( document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if ( localStorage.getItem("data-theme") !== null ) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }			
                }
        
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
        
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <style>
                body {
                    background-image: url('{{ asset('assets/media/auth/bg4.jpg') }}');
                }
                [data-theme="dark"] body {
                    background-image: url('{{ asset('assets/media/auth/bg4-dark.jpg') }}');
                }
            </style>
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <div class="d-flex flex-center flex-lg-start flex-column">    
                        <a href="#" class="mb-7">
                            <img alt="Logo" src="{{ asset('assets/media/logos/custom-3.svg') }}"/>
                        </a>
                        <h2 class="text-white fw-normal m-0">
                            {{ trans('login.message') }}
                        </h2>         
                    </div>  
                </div>
                <div class="d-flex flex-center w-lg-50 mt-4">
                    <div class="card rounded-3 w-md-550px">
                        <div class="card-body p-10 p-lg-20">
                            <form class="form w-100"  method="POST" action="{{ route('loginRequest') }}" novalidate="novalidate">
                                @csrf
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">
                                        {{ trans('login.title') }}
                                    </h1>
                                    <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">
                                        {{ trans('login.sub_title') }}
                                    </div>
                                    @if(isset ($errors) && count($errors) > 0)
                                        @foreach($errors->all() as $error)
                                            <div class="d-flex align-items-center bg-light-danger border-danger rounded p-5 mb-7">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">
                                                        {{ trans('auth.failed') }}
                                                    </a>
                                                    <span class="text-muted fw-semibold d-block">{{ $error }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="text" placeholder="{{ trans('form.email') }}" name="email" autocomplete="off" class="form-control bg-transparent"/>
                                </div>
                                <div class="fv-row mb-3">
                                    <input type="password" placeholder="{{ trans('form.password') }}" name="password" autocomplete="off" class="form-control bg-transparent"/>
                                </div>
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <a href="#" class="link-primary">
                                        {{ trans('auth.forgot_password') }}
                                    </a>
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" class="btn btn-primary">
                                        {{ trans('login.button') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var hostUrl = "#";
        </script>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
    </body>
</html>