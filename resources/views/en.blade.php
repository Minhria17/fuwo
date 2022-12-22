<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuwo</title>
    <link rel="shortcut icon" type="image/png" href="/images/favicon.ico"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- custom css file -->
    <link href="{{ asset('./css/header.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./css/body.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('./fontawesome-free-5.12.1-web/css/all.css') }}">
</head>
<header>
    <div class="header">
        <div class="box_1">
            <a href=""><img src="/images/FUWO_White.png" alt=""></a>
        </div>
        <div class="box_2">
            <a href="#info">THÔNG TIN</a>
            <a href="#team">ĐỘI NGŨ</a>
            <a href="#features">MÔ HÌNH KINH TẾ</a>
            <a href="#benifit">LỢI ÍCH</a>
            <a href="#roadmap">ROADMAP</a>
            <a href="">ĐẦU TƯ</a>
            <a href="#contact">LIÊN HỆ</a>
            <a href="">TIẾNG VIỆT</a>
            <a href="{{ asset('/en/en-Fuwo-is-an-e-commerce-floor-that-helps-people-can-buy-anything-easily/') }}">ENGLISH</a>
        </div>
        <div class="box_3">
            <button>
                TELEGRAM
            </button>
        </div>
        <div class="box_4">
            <button type="button" onclick="open_menu()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
            </button>
        </div>
    </div>
    <div class="header header_respn" id="header_respn">
        <div class="box_2" id="box_2">
            <div class="box_2_list">
                <a href="#info">THÔNG TIN</a>
                <a href="#team">ĐỘI NGŨ</a>
                <a href="#features">MÔ HÌNH KINH TẾ</a>
                <a href="#benifit">LỢI ÍCH</a>
                <a href="#roadmap">ROADMAP</a>
                <a href="">ĐẦU TƯ</a>
                <a href="#contact">LIÊN HỆ</a>
                <a href="">TIẾNG VIỆT</a>
                <a href="{{ asset('/en/en-Fuwo-is-an-e-commerce-floor-that-helps-people-can-buy-anything-easily/') }}">ENGLISH</a>
            </div>
        </div>
        <div class="box_3" id="box_3">
            <button>
                TELEGRAM
            </button>
        </div>
    </div>
</header>
<body>
    <div class="container">
            <canvas id="canvas">
        </canvas>
        <div class="banner_slogan">
            <h1>FUWO</h1>
            <span>Fuwo là một sàn thương mại điện tử giúp mọi người có thể mua sắm bất cứ thứ gì một cách dễ dàng, nhanh chóng với chi phí cực kỳ rẻ.</span>
            <div class="info_contact">
                <a href="#info">GIỚI THIỆU</a>
                <a href="#contact">LIÊN HỆ</a>
            </div>
        </div>
        <div class="introduce" id="info">
            <div class="video"><img src="/images/318523409_675206140761738_3097735632649911_n-768x511.jpg" alt=""></div>
            <div class="content">
                <h3>GIỚI THIỆU</h3>
                <h2>FUWO</h2>
                <span>Fuwo là một sàn thương mại điện tử giúp mọi người có thể mua sắm bất cứ thứ gì một cách dễ dàng, nhanh chóng với chi phí cực kỳ rẻ. </span>
            </div>
        </div>
        <div class="team" id="team">
            <div class="title">
                <h3>FUWO</h3>
            <h2>ĐỘI NGŨ PHÁT TRIỂN</h2>
            </div>
            <div class="content">
                <div class="image"><img src="/images/318523409_675206140761738_3097735632649911_n-768x511.jpg" alt=""></div>
                <div class="text">
                    <span>
                        Với hơn 8 năm kinh nghiệm thiết kế nền tảng giải trí và lập trình Game. Chúng tôi khát vọng xây dựng ra một nền tảng phát hành game với giao diện thân thiện đơn giản, sử dụng dễ dàng nhưng tích hợp tất cả các tiện ích giải trí, kinh doanh và đầu tư trong một tài khoản. Chúng tôi tin tưởng, phụng sự người dùng bằng sáng tạo công nghệ là chìa khóa của thịnh vượng, và với nền tảng công nghệ giải trí Meta Game, chúng tôi quyết tâm là đội ngũ tiên phong mang những lợi ích thiết thực nhất tới từng giây phút giải trí của khách hàng.
                        <br><br>
                        Đội ngũ FUWO
                    </span>
                </div>
            </div>
        </div>
        <div class="features" id="features">
            <div class="title">
                <h3>ƯU ĐIỂM</h3>
                <h2>MÔ HÌNH KINH TẾ</h2>
            </div>
            <div class="content">
                <span>Chúng tôi kết hợp với nhiều nền tảng công nghệ xây dựng thành siêu thành phố ảo để giải trí và kiếm tiền. Người dùng có thể thanh toán và đầu tư để tạo nên ứng dụng giải trí và kiếm tiền.</span>
                <div class="image">
                    <img src="/images/318948290_3036880153125142_2873115539152232310_n-1.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="benifit" id="benifit">
            <div class="title">
                <h3>LỢI ÍCH KINH TẾ</h3>
                <h2>KHI ĐẦU TƯ</h2>
            </div>
            <div class="content">
                <div class="box">
                    <div class="icon"> <i class="fa-solid fa-people-group"></i></div>
                    <div class="text">
                        <h4>Nhà đầu tư :</h4>
                        <span>Có thể đầu tư, tiết kiệm với khoản tài chính từ siêu nhỏ tới lớn. </span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-store"></i></div>
                    <div class="text">
                        <h4>Đối tác - đại lý :</h4>
                        <span>Bất kỳ ai đều có thể trở thành đại lý của Fuwo. Được đào tạo và hướng dẫn một cách bài bản.</span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-bag-shopping"></i></div>
                    <div class="text">
                        <h4>Người tiêu dùng :</h4>
                        <span>Có thể mua sắm thoải mái không lo về giá. Được bảo hành đảm bảo khi mua hàng hoá tại sàn Fuwo.</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="roadmap" id="roadmap">
            <div class="title">
                <h3>FUWO</h3>
                <h2>ROADMAP</h2>
            </div>
            <div class="content">
                <img src="/images/317347720_859799791836912_3515483139462350274_n.jpg" alt="">
            </div>
        </div>
        <div class="system">
            <div class="title">
                <h3>FUWO</h3>
                <h2>ĐỐI TÁC PHÁT TRIỂN</h2>
            </div>
            <div class="content">
                <div class="block">
                    <div class="image"><img src="/images/vne.jpg" alt=""></div>
                    <div class="text">
                        <img src="images/4.png" alt="">
                        <h5>Đối tác cung cấp hàng hoá</h5>
                    </div>
                </div>
                <div class="block">
                    <div class="image"><img src="/images/vtv.jpg" alt=""></div>
                    <div class="text">
                        <img src="images/VTVcab_logo_2013.svg" alt="">
                        <h5>Đối tác truyền thông</h5>
                    </div>
                </div>
                <div class="block">
                    <div class="image"><img src="/images/amazon.jpg" alt=""></div>
                    <div class="text">
                        <img src="images/logo-amazon-1.png" alt="">
                        <h5>Đối tác công nghệ và server</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistical">
            <div class="total">
                <h3>MCH Total 18.000.000</h3>
                <canvas id="myChart2"></canvas>
            </div>
            <div class="contact" id="contact">
                <h3>LIÊN HỆ VỚI</h3>
                <div class="icon_contact">
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="js/cdn/chart.min.js"></script>
<script src="js/cdn/chart_3.8.min.js"></script>
<script src="js/scrip.js"></script>
<script src="js/animation_en.js"></script>
</html>