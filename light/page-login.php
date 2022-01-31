<html lang="en">

<head>
    <title>:: HexaBit :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="https://gurgaonbakers.com/"><img class="d-inline-block align-top mr-2" alt="" src="https://gurgaonbakers.com/wp-content/uploads/2021/03/gurgaonbakers-logo.png"></a>
                        <ul class="navbar-nav" style="display: none;">
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Documentation</a></li>
                            <li class="nav-item"><a class="nav-link" href="page-register.html">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-8">
                    <div class="auth_detail" style="display: none;">
                        <h2 class="text-monospace">
                            Everything<br> you need for
                            <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">your Admin</div>
                                    <div class="carousel-item">your Project</div>
                                    <div class="carousel-item">your Dashboard</div>
                                    <div class="carousel-item">your Application</div>
                                    <div class="carousel-item">your Client</div>
                                </div>
                            </div>
                        </h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul class="social-links list-unstyled">
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="index.html">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" value="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" value="" placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background: #ee2b2b;border: none;">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="page-forgot-password.html" style="color: #ee2b2b;">Forgot password?</a></span>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5c6d4867f324050cfe342c69/default" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5c6d4867f324050cfe342c69/default" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5c6d4867f324050cfe342c69/default" charset="UTF-8" crossorigin="*"></script>
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>


    <script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/languages/en.js"></script>
    <script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/languages/en.js"></script>


    <script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/61e7cc7c548/languages/en.js"></script>
</body>

</html>