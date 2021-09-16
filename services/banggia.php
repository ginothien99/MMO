<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="assets/js/popper.min.js" type="2f5b6f1ade86073f9d339093-text/javascript"></script>
    <script src="assets/js/jquery.js" type="2f5b6f1ade86073f9d339093-text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="2f5b6f1ade86073f9d339093-text/javascript"></script>
    <script src="assets/js/index.js" type="2f5b6f1ade86073f9d339093-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="2f5b6f1ade86073f9d339093-text/javascript"></script>
    <title>LIKESIEUVIP.VN</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <link rel="stylesheet" href="assets/css/custom.css">
<body>

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
                            <li>
                                <a href="/profile?action=history"><i class="fas fa-history icon_silde text-warning"></i><span>Lịch sử giao dịch </span></a>
                            </li>
                            <li>
                                <a href="/support" target="_blank"><i class="fas fa-life-ring icon_silde text-primary"></i><span>Liên hệ hỗ trợ</span></a>
                            </li>
                            <li class="pt-1 pb-1"> <strong><small class="text-muted">YÊU THÍCH</small></strong> </li>
                            <li>
                                <a href="/"><i class="fas fa-rss icon_silde"></i><span>Bảng tin</span></a>
                            </li>
                            <li>
                                <a href="/message"><i class="fas fa-comments icon_silde text-info"></i><span>Nhắn tin</span></a>
                            </li>
                            <li>
                                <a href="/profile"><i class="fab fa-dev icon_silde text-success"></i><span>Api key</span></a>
                            </li>
                            <li class="pt-1 pb-1"> <strong><small class="text-muted">CHỨC NĂNG</small></strong> </li>
                            <li class="active">
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
                <div class="card-header with-icon"> <i class="fas fa-shopping-cart mr-4"></i>Bảng giá dịch vụ
                </div>
                <div class="body">
                    <table class="table table-responsive-sm table-bordered">
                        <thead class="bg-warning text-white ">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên gói</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Bảo hành</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td colspan="4" class="row-chung" ;>VIP FACEBOOK</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="/services/vip-like-avatar">Vip like avatar</a></td>
                            <td>
                                1,200 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="/services/vip-like-clone">VIP Like Clone</a></td>
                            <td>
                                900 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="/services/vip-cmt">Vip cmt</a></td>
                            <td>
                                9,000 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a href="/services/vip-like-nguoi-dung">VIP Like người dùng</a></td>
                            <td>
                                1,400 VND
                            </td>
                            <td>1 tháng</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung" ;>LIKE PAGE FACEBOOK</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td><a href="/services/like-page">Like Page</a></td>
                            <td>
                                70 VND
                            </td>
                            <td>3 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td><a href="/services/like-page-kbh">Like Page KBH</a></td>
                            <td>
                                50 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td><a href="/services/buff-like-page">Buff like page</a></td>
                            <td>
                                40 VND
                            </td>
                            <td>3 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td><a href="/services/like-page-bam-tay">Like page bấm tay</a></td>
                            <td>
                                40 VND
                            </td>
                            <td>3 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td><a href="/services/buff-like-page-v2">Buff Like Page 2</a></td>
                            <td>
                                25 VND
                            </td>
                            <td>Không</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung" ;>BUFF FACEBOOK</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung-2" ;>BUFF LIKE</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td><a href="/services/buff-like-v2">Buff Like Server 2</a></td>
                            <td>
                                22 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td><a href="/services/buff-like-v3">Buff Like Server 3</a></td>
                            <td>
                                6 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td><a href="/services/buff-like-basic">Buff Like Basic</a></td>
                            <td>
                                <div>Đơn giá 1: 10 VND</div>
                                <div>Đơn giá 2: 20 VND</div>
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td><a href="/services/buff-like-bam-tay">Buff like bấm tay</a></td>
                            <td>
                                20 VND
                            </td>
                            <td>Không</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung-2" ;>BUFF SUB</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td><a href="/services/buff-sub">Buff Sub</a></td>
                            <td>
                                30 VND
                            </td>
                            <td>3 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td><a href="/services/buff-sub-kbh">Buff Sub KBH</a></td>
                            <td>
                                25 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td><a href="/services/sub-bam-tay">Sub bấm tay</a></td>
                            <td>
                                <div>Đơn giá 1: 20 VND</div>
                                <div>Đơn giá 2: 25 VND</div>
                            </td>
                            <td>1 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td><a href="/services/buff-sub-s2">Buff Sub server 2</a></td>
                            <td>
                                24 VND
                            </td>
                            <td>Không</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung-2" ;>BUFF MẮT</td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td><a href="/services/buff-mat-v2">Buff Mắt sever 2</a></td>
                            <td>
                                5 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td><a href="/services/buff-mat-v1">Buff Mắt sever 1</a></td>
                            <td>
                                300 VND
                            </td>
                            <td>Không</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung-2" ;>DỊCH VỤ BUFF KHÁC</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td><a href="/services/bot-tuong-tac">BOT tương tác</a></td>
                            <td>
                                50,000 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td><a href="/services/buff-cmt">Buff cmt</a></td>
                            <td>
                                450 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td><a href="/services/buff-mem-group">Buff mem group</a></td>
                            <td>
                                50 VND
                            </td>
                            <td>12 tháng</td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td><a href="/services/buff-share-live">Buff Share Live</a></td>
                            <td>
                                350 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td><a href="/services/doi-ten-fan-page">Đổi tên fanpage</a></td>
                            <td>
                                200,000 VND
                            </td>
                            <td>Không</td>
                        </tr>

                        <tr>
                            <td colspan="4" class="row-chung" ;>BUFF INSTAGRAM</td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td><a href="/services/instagram/bufflike">Instagram - Buff like</a></td>
                            <td>
                                50 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td><a href="/services/instagram/buffsub">Instagram - Buff sub</a></td>
                            <td>
                                95 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="row-chung" ;>BUFF TIKTOK</td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td><a href="/services/tiktok/buffview">Tiktok - Buff View</a></td>
                            <td>
                                4 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td><a href="/services/tiktok/bufflike">Tiktok - Buff Like</a></td>
                            <td>
                                25 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        <tr>
                            <th scope="row">29</th>
                            <td><a href="/services/tiktok/buffsub">Buff Sub TikTok</a></td>
                            <td>
                                55 VND
                            </td>
                            <td>Không</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 canvas_right">
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script type="2f5b6f1ade86073f9d339093-text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-customerchat" attribution=setup_tool page_id="112667230084759" logged_in_greeting="Likengay có thể giúp gì cho bạn. Nếu có bất cứ vấn đề gì hãy liên lạc với fanpage để được giải quyết ngay" logged_out_greeting="Likengay có thể giúp gì cho bạn. Nếu có bất cứ vấn đề gì hãy liên lạc với fanpage để được giải quyết ngay">
</div><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2f5b6f1ade86073f9d339093-|49" defer=""></script></body>
</html>
