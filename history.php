<?php
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css?v=3" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="assets/js/popper.min.js" type="2d6e4a66ea54ba854be95520-text/javascript"></script>
    <script src="assets/js/jquery.js" type="2d6e4a66ea54ba854be95520-text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="2d6e4a66ea54ba854be95520-text/javascript"></script>
    <script src="assets/js/index.js?v=2" type="2d6e4a66ea54ba854be95520-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="2d6e4a66ea54ba854be95520-text/javascript"></script>
    <title>LIKESIEUVIP.VN</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <script type="2d6e4a66ea54ba854be95520-text/javascript">
        function change_pass() {
            if ($("#old_password").val() == "" || $("#password").val() == "") {
                toastr.error("Bạn chưa nhập đầy đủ thông tin!");
            } else {
                $("#submit").html('<i class="fa-spinner fa fa-spin"></i> Đang kiểm tra...').attr("disabled", true);
                setTimeout(function() {
                    $.ajax({
                        url: "../modun/change_pass.php",
                        type: "POST",
                        dataType: "text",
                        data: {
                            old_password: $("#old_password").val(),
                            password: $("#password").val()
                        },
                        success: function(result) {
                            $("#result").html(result);
                            $("#submit").html("Đổi mật khẩu").attr("disabled", false);
                        },
                    });
                }, 2000);
            }
        }
    </script>
    <div class="main-header">
        <div class="container offcanvas">
            <div class="row">
                <div class=" col-md-4 col-lg-3 d-none d-md-block">
                    <div class="logo-wrapper"> <a href="/" class="logo"> <img class="img-fluid" src="assets/images/favicon.png"> </a></div>
                </div>
                <div class=" col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <div class="search-wrapper d-none d-md-block">
                                <form>
                                    <div class="search-input-icon"> <i class="fa fa-search"></i> </div> <input id="search-input" type="text" class="form-control" placeholder="Tìm kiếm" autocomplete="off">
                                    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
                                        <div class="dropdown-widget-header"> <span class="title">Tìm kiếm kết quả</span> </div>
                                        <div class="dropdown-widget-body">
                                            <div class="loader loader_small ptb10"></div>
                                        </div> <a class="dropdown-widget-footer" id="search-results-all" href="/search/">See All Results</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <div class="navbar-wrapper">
                                <ul class="clearfix">
                                    <li class="d-block d-md-none" id="offcanvas"> <a href="#"> <i class="fa fa-bars fa-lg"></i> </a> </li>
                                    <li class="d-block d-md-none"> <a href="/"> <i class="fa fa-home fa-lg"></i> </a> </li>
                                    <li class="d-block d-md-none"> <a href="/search"> <i class="fa fa-search fa-lg"></i> </a> </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown" data-display="static"> <img src="https://graph.fb.me/https://www.facebook.com/hoanthien24899/picture?width=45&height=45"> <span class="d-none">Nguyen</span> </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/profile">Số dư: <span class="badge badge-info">0 VND</span></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/profile">Trang cá nhân</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/logout">Đăng xuất</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <div class="container offcanvas" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-3 col-lg-3 offcanvas-sidebar js_sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div class="card main-side-nav-card">
                        <div class="card-body with-nav">
                            <ul class="main-side-nav p-0">
                                <li>
                                    <a href="/profile">
                                        <img class="rounded-circle icon_silde" src="https://graph.fb.me/https://www.facebook.com/hoanthien24899/picture?width=45&height=45"> <span>ginothien99 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/payment">
                                        <i class="fas fa-money-bill-alt icon_silde text-success"></i>
                                        <span>Nạp tiền</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="/profile?action=history"><i class="fas fa-history icon_silde text-warning"></i><span>Lịch sử giao dịch </span></a>
                                </li>
                                <li>
                                    <a href="/support" target="_blank"><i class="fas fa-life-ring icon_silde text-primary"></i><span>Liên hệ hỗ trợ</span></a>
                                </li>
<!--                                <li class="pt-1 pb-1"> <strong><small class="text-muted">YÊU THÍCH</small></strong> </li>-->
<!--                                <li>-->
<!--                                    <a href="/"><i class="fas fa-rss icon_silde"></i><span>Bảng tin</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="/message"><i class="fas fa-comments icon_silde text-info"></i><span>Nhắn tin</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="/profile"><i class="fab fa-dev icon_silde text-success"></i><span>Api key</span></a>-->
<!--                                </li>-->
                                <li class="pt-1 pb-1"> <strong><small class="text-muted">CHỨC NĂNG</small></strong> </li>
                                <li>
                                    <a href="/services/bang-gia"><i class="fas fa-shopping-cart icon_silde text-warning"></i><span>Bảng giá</span></a>
                                </li>
                                <li>
                                    <a href="#getid" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <i class="fas fa-link icon_silde text-dark"></i>
                                        <span>Get Id</span>
                                    </a>
                                    <div class="collapse" id="getid">
                                        <ul>
                                            <li>
                                                <a href="/services/get-id">Get id facebook</a>
                                            </li>
                                            <li>
                                                <a href="/services/get-id-instagram">Get id instagram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#vipfb" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <img src="assets/images/vip.svg" class="icon_silde" style="width: 15;height: 15;vertical-align: top;" />
                                        <span>VIP Facebook</span>
                                    </a>
                                    <div class="collapse" id="vipfb">
                                        <ul>
                                            <li><a href="/services/vip-cmt">Vip cmt<span class="float-right"><span class="color_led" style="color: #359a00">New</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/vip-like-nguoi-dung">VIP Like người dùng<span class="float-right"><span class="color_led" style="color: #f50505">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#likepage" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <i class="fab fa-facebook icon_silde text-danger"></i>
                                        <span>Like Page</span>
                                    </a>
                                    <div class="collapse" id="likepage">
                                        <ul>
                                            <li><a href="/services/like-page">Like Page<span class="float-right"><span class="color_led" style="color: #fd0808">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/buff-like-page">Buff like page<span class="float-right"><span class="color_led" style="color: #1eff00">SALE</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/buff-like-page-v2">Buff Like Page 2<span class="float-right"><span class="color_led" style="color: #02f21e">SALE</span><span class="ml-2 text-danger"><i class="fas fa-times"></i></span></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#bufffb" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <img src="assets/images/increasing.svg" class="icon_silde text-danger" style="width: 15;height: 15;vertical-align: top;" />
                                        <span>Buff Facebook</span>
                                    </a>
                                    <div class="collapse" id="bufffb">
                                        <ul>
                                            <li>
                                                <a href="#bufflike" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                                    <i class="fas fa-thumbs-up mr-1 text-primary"></i>
                                                    <span>Buff like</span>
                                                </a>
                                                <div class="collapse" id="bufflike">
                                                    <ul>
                                                        <li><a href="/services/buff-like-v2">Buff Like Server 2<span class="float-right"><span class="color_led" style="color: #ed0707">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                                        <li><a href="/services/buff-like-v3">Buff Like Server 3<span class="float-right"><span class="color_led" style="color: #ed0707">HOT SALE</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                                        <li><a href="/services/buff-like-basic">Buff Like Basic<span class="float-right"><span class="color_led" style="color: #32ed0c">SALE</span><span class="ml-2 text-danger"><i class="fas fa-times"></i></span></span></a></li>
                                                        <li><a href="/services/buff-like-bam-tay">Buff like bấm tay<span class="float-right"><span class="color_led" style="color: #e90707">HOT</span><span class="ml-2 text-danger"><i class="fas fa-times"></i></span></span></a></li>
                                                    </ul>
                                            </li>
                                            <li>
                                                <a href="#buffsub" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                                    <i class="fas fa-bell mr-1 text-success"></i>
                                                    <span>Buff sub</span>
                                                </a>
                                                <div class="collapse" id="buffsub">
                                                    <ul>
                                                        <li><a href="/services/buff-sub">Buff Sub<span class="float-right"><span class="color_led" style="color: #000000">SALE</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                                        <li><a href="/services/buff-sub-s2">Buff Sub server 2<span class="float-right"><span class="color_led" style="color: #1eed02">SALE</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                                    </ul>
                                            </li>
                                            <li>
                                                <a href="#bufflive" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                                    <i class="fas fa-eye mr-1 text-warning"></i>
                                                    <span>Buff mắt</span>
                                                </a>
                                                <div class="collapse" id="bufflive">
                                                    <ul>
                                                        <li><a href="/services/buff-mat-v2">Buff Mắt sever 2<span class="float-right"><span class="color_led" style="color: #000000"></span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                                    </ul>
                                            </li>
                                            <li><a href="/services/buff-mem-group">Buff mem group<span class="float-right"><span class="color_led" style="color: #ed0202">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/buff-share-live">Buff Share Live<span class="float-right"><span class="color_led" style="color: #f90606">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/doi-ten-fan-page">Đổi tên fanpage<span class="float-right"><span class="color_led" style="color: #ff0505">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#buff_instagram" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <i class="fab fa-instagram icon_silde text-danger"></i>
                                        <span>Buff Instagram</span>
                                    </a>
                                    <div class="collapse" id="buff_instagram">
                                        <ul>
                                            <li><a href="/services/instagram/bufflike">Instagram - Buff like<span class="float-right"><span class="color_led" style="color: #f20202">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/instagram/buffsub">Instagram - Buff sub<span class="float-right"><span class="color_led" style="color: #eb0505">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#buff_tiktok" data-toggle="collapse" class="collapsed" aria-expanded="false">
                                        <i class="fab fa-tiktok icon_silde text-danger"></i>
                                        <span>Buff Tiktok</span>
                                    </a>
                                    <div class="collapse" id="buff_tiktok">
                                        <ul>
                                            <li><a href="/services/tiktok/buffview">Tiktok - Buff View<span class="float-right"><span class="color_led" style="color: #ed0202">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/tiktok/bufflike">Tiktok - Buff Like<span class="float-right"><span class="color_led" style="color: #f40606">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                            <li><a href="/services/tiktok/buffsub">Buff Sub TikTok<span class="float-right"><span class="color_led" style="color: #fc0303">HOT</span><span class="ml-2 text-success"><i class="fas fa-check"></i></span></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <div class="col-md-5 col-lg-6 offcanvas-mainbar">
                <div class="card">
                    <div class="card-header with-icon"> <i class="fas fa-list mr-4"></i>Lịch sử
                    </div>
                    <div class="card-body pt-0" id="load_data">
                        <div class="text-danger col-12 text-center font-weight-bold pt-3">Không có kết quả.</div>
                    </div>
                    <script type="2d6e4a66ea54ba854be95520-text/javascript">
                            $('#ha_table').DataTable();
                        </script>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 canvas_right">
                <div class="card">
                    <div class="card-body with-nav">
                        <ul class="side-nav">
                            <li><a href="?action=profile"><i class="fas fa-user-circle mr-2"></i>Tài khoản</a> </li>
                            <li class="active"><a href="?action=history"><i class="fas fa-list-ul mr-2"></i>Lịch sử</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2d6e4a66ea54ba854be95520-|49" defer=""></script></html>
