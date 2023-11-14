<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Log In | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/" class="auth-logo">
                                    <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{asset('admin/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Reset password here</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('password.store') }}">
                                @csrf
                                 
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" id="email" name="email" :value="old('email', $request->email)" required placeholder="Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
       
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="password" name="password" required placeholder="Password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Reset Password</button>
                                    </div>
                                </div>

                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
            

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
</html>
