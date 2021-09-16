<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="assets/js/popper.min.js" type="2f3313ca5b0794efc450a8b6-text/javascript"></script>
    <script src="assets/js/jquery.js" type="2f3313ca5b0794efc450a8b6-text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="2f3313ca5b0794efc450a8b6-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="2f3313ca5b0794efc450a8b6-text/javascript"></script>
    <title>LIKESIEUVIP.VN</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <style>
        #search::placeholder {
            color: #96aad4 !important;
        }

        .image-opacity:hover {
            opacity: 0.6;
        }

        .join:hover {
            background-color: #4876da;
            display: inline;
        }

        a {
            text-decoration: none !important;
        }

        .main-fluid {
            width: 1024px;
        }

        .login>button {
            border-radius: 25px;
            outline: 0;
            border: 0;
            margin-top: 20px;
        }

        .input-group-text {
            background: #f7f7f7;
            color: #96aad4;
            border-radius: 25px 0px 0px 25px;
            border: none;
        }

        input.form-control {
            background: #f7f7f7;
            border-radius: 0px 25px 25px 0px;
            border: none;
            box-shadow: none;
        }

        body {
            background-image: url('assets/images/dots.png');
            background-size: contain;
            background-color: #f9f9f9;
        }

        .card-login .card-title {
            position: relative;
            font-size: 52px;
            font-weight: 900;
            color: #eee;
            text-transform: lowercase;
            margin-left: 5px;
        }

        .card-login img {
            position: absolute;
            left: 0;
            top: -135px;
            margin-left: -50px;
            margin-top: -150px;
            border-radius: 20%;
            width: 350px;
        }

        .card-login {
            background: #fff;
            border: 0;
            box-shadow: 0 1px 20px 0 rgba(0, 0, 0, .1);
            overflow: hidden;
        }

        #reg_tab {
            display: none;
        }
    </style>
</head>
<body>
<div class="text-white" style="background:#3367d6;">
    <div class="container offcanvas">
        <div class="row">
            <div class="col-lg-2 pt-2 pb-2">
                <div class="logo-wrapper">
                    <img src="assets/images/favicon.png" width="40px" height="40px" class="image-opacity">
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row ">
                    <div class="col-lg-8 pt-2 d-none d-md-block">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background:#2850a7;color:#96aad4; border-radius: 25px 0px 0px 25px; border: none; ">
                                    <i class="fas fa-search"></i></div>
                            </div>
                            <input type="text" class="form-control text-white" id="search" placeholder="Tìm Kiếm" style="background:#2850a7;border-radius: 0px 25px 25px 0px; border: none; box-shadow: none;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container offcanvas">
    <div class="text-center pt-5">
        <h1>Chào mừng đến likesieuvip.vn - Trang web quảng cáo truyền thông xã hội tốt nhất</h1>
        <div class="mt-4">Dịch vụ facebook, instagram, youtube, tiktok, shopee...</div>
        <div class="">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <img src="assets/images/drawkit-nature-man-colour.svg" style="width: 100%; max-height: 500px;" class="d-none d-md-block">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="border mt-5 bg-white card-login" id="login_tab">
                        <div class="card-header position-relative p-0 text-left bg-transparent border-0">
                            <img class="card-img" src="assets/images/square1.jpg">
                            <h4 class="card-title">Đăng nhập</h4>
                        </div>
                        <div class="p-4">
                            <form action="/modun/login.php" method="POST" class="form_submit">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control text-dark" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb-2 pt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control text-dark" id="password" name="password" placeholder="Mật Khẩu">
                                </div>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="d-flex mt-3">
                                            <input type="checkbox" class="mt-2">
                                            <div class="ml-2" style="margin-top:2px;">Lưu mật khẩu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login">
                                    <button class="submit_form w-100 text-white p-2" style="background:#686ce4">Đăng nhập</button>
                                </div>
                            </form>
                            <div class="border mt-4"></div>
                            <div class="mt-3" style="font-size:15px">Chưa đăng kí ? <a id="nav-regsister-tab" href="#regsister">Tạo tài khoản</a></div>
                        </div>
                    </div>
                    <div class="border mt-5 bg-white card-login" id="reg_tab">
                        <div class="card-header position-relative p-0 text-left bg-transparent border-0">
                            <img class="card-img" src="assets/images/square1.jpg">
                            <h4 class="card-title">Đăng ký</h4>
                        </div>
                        <div class="p-4">
                            <form action="/modun/register.php" method="POST" class="form_submit">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control text-dark" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb-2 pt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control text-dark" name="idfb" placeholder="Link Facebook">
                                </div>
                                <div class="input-group mb-2 pt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="text" class="form-control text-dark" name="password" placeholder="Mật Khẩu">
                                </div>
                                <div class="input-group mb-2 pt-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="text" class="form-control text-dark" name="password2" placeholder="Nhập lại mật Khẩu">
                                </div>
                                <div class="login">
                                    <button class="w-100 text-white p-2 submit_form" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important">Đăng ký</button>
                                </div>
                            </form>
                            <div class="border mt-4"></div>
                            <div class="mt-3" style="font-size:15px">Đã có tài khoản ? <a id="nav-login-tab" href="login">Đăng nhập</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="result"></div>
<script type="2f3313ca5b0794efc450a8b6-text/javascript">
            $(document).ready(function() {
                $("#nav-regsister-tab").click(function() {
                    $("#login_tab").css({
                        "display": "none"
                    });
                    $("#reg_tab").css({
                        "display": "block"
                    });
                });
                $("#nav-login-tab").click(function() {
                    $("#reg_tab").css({
                        "display": "none"
                    });
                    $("#login_tab").css({
                        "display": "block"
                    });
                });
                $(".form_submit").submit(function() {
                    var html = $("#submit_form").text();
                    $("#submit_form").html('<i class="fa-spinner fa fa-spin"></i> Đang kiểm tra...').attr('disabled', true);
                    $.ajax({
                        url: $(this).attr("action"),
                        type: $(this).attr("method"),
                        data: $(this).serialize(),
                        success: function(result) {
                            $('#result').html(result);
                            $("#submit").html(html).attr('disabled', false);
                        }
                    });
                    return false;
                });
            })
        </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2f3313ca5b0794efc450a8b6-|49" defer=""></script></body>
</html>
