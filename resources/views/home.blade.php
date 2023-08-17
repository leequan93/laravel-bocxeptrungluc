@extends('layouts.app')

@section('content')
    <div class="section swiper-slider-wrapper">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="swiper-container swiper-slider main-slider context-dark text-left swiper-modern" data-loop="false" data-autoplay="7500" data-custom-effect="parallax">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure class="slide-bgimg" style="background-image:url(assets/images/slide-001.jpg)">
                        <img class="entity-img" src="/assets/images/slide-001.jpg" alt="" width="1894" height="777">
                    </figure>
                    <div class="container">
                        <div class="swiper-slide-content section-lg">
                            <img src="/assets/images/logo.png" alt="" width="44" height="54" data-caption-animate="fadeInUpSmall" data-caption-delay="0" data-caption-duration="800">
                            <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="200" data-caption-duration="800">
                                <span class="head-text">Bốc xếp Trung Lực</span>
                            </h6>
                            <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="300" data-caption-duration="800">
                                <span>Chuyên cung cấp dịch vụ</span>
                                <br class="d-none d-sm-block">
                                <span>Bốc Xếp Bình Dương</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <figure class="slide-bgimg" style="background-image:url(assets/images/slide-002.jpg)">
                        <img class="entity-img" src="/assets/images/slide-002.jpg" alt="" width="1894" height="777">
                    </figure>
                    <div class="container">
                        <div class="swiper-slide-content section-lg">
                            <img src="/assets/images/logo.png" alt="" width="44" height="54" data-caption-animate="fadeInUpSmall" data-caption-delay="0" data-caption-duration="800">
                            <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="200" data-caption-duration="800">
                                <span class="head-text">Bốc xếp Trung Lực</span>
                            </h6>
                            <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="300" data-caption-duration="800">
                                <span>Bốc Xếp</span>
                                <br class="d-none d-sm-block">
                                <span>Kho hàng, kho bãi</span>
                                <br class="d-none d-sm-block">
                                <span>Hàng hóa container, xe tải</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <figure class="slide-bgimg" style="background-image:url(assets/images/slide-003.jpg)">
                        <img class="entity-img" src="/assets/images/slide-003.jpg" alt="" width="1894" height="777">
                    </figure>
                    <div class="container">
                        <div class="swiper-slide-content section-lg">
                            <img src="/assets/images/logo.png" alt="" width="44" height="54" data-caption-animate="fadeInUpSmall" data-caption-delay="0" data-caption-duration="800">
                            <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="200" data-caption-duration="800">
                                <span class="head-text">Bốc xếp Trung Lực</span>
                            </h6>
                            <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="300" data-caption-duration="800">
                                <span>Bốc Xếp</span>
                                <br class="d-none d-sm-block">
                                <span>Khu công nghiệp Bàu Bàng</span>
                                <br class="d-none d-sm-block">
                                <span>Tân Bình, VSIP 2, Mỹ Phước 1 2 3</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev fa-angle-left fas"></div>
            <div class="swiper-button-next fa-angle-right fas"></div>
        </div>
    </div>
    <!-- Section Welcome -->
    <div class="section section-lg bg-default bg-with-icon" style="z-index: 3" id="about-us">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="bg-with-icon-item-2"></div>
        <div class="container">
            <div class="row row-30 flex-lg-row-reverse justify-content-center">
                <div class="col-md-9 col-lg-6">
                    <div class="image-wrap-wide">
                        <div class="image-wrap-wide-item image-wrap-wide-item-absolute wow fadeInRightSmall" data-wow-delay=".3s">
                            <div class="image-wrap-wide-achivka">
                                <span class="image-wrap-wide-achivka-title">Since</span>
                                <span class="image-wrap-wide-achivka-count">2020</span>
                            </div>
                            <img src="/assets/images/about-002.jpg?v={{ config('constants.fe_cache_version') }}" alt="" width="832" height="347">
                        </div>
                        <div class="image-wrap-wide-item wow fadeInRightSmall">
                            <img src="/assets/images/about-001.jpg?v={{ config('constants.fe_cache_version') }}" alt="" width="530" height="347">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6">
                    <h6>
                        <span class="head-text">Về chúng tôi</span>
                    </h6>
                    <h1 class="mt-3">Dịch vụ bốc xếp chuyên nghiệp</h1>
                    <p class="mt-5"><b>CÔNG TY TNHH VẬN TẢI BỐC XẾP TRUNG LỰC</b> thành lập từ năm 2020.</p>
                    <p>Mã số thuế <a target="_blank" href="https://masothue.com/3702855530-cong-ty-tnhh-van-tai-boc-xep-trung-luc">3702855530</a>.</p>
                    <p>Chuyên cung cấp dịch vụ bốc xếp kho hàng, kho bãi, hàng hóa container, xe tải tại Bình Duơng với giá thành cạnh tranh.</p>
                    <p>Đã và đang hợp tác với nhiều công ty, xí nghiệp tại các khu công nghiệp Bàu Bàng, Tân Bình, VSIP 2, Mỹ Phước 1 2 3, ....</p>
                    <p>Bốc xếp Trung Lực cung cấp dịch vụ bốc vác / bốc xếp nhanh, hỗ trợ 24/24h kể cả ban đêm, hoạt động 24/7 kể cả ngày chủ nhật và ngày lễ.</p>
                    <p>Đảm bảo dịch vụ uy tín, chất lượng và giá thành cạnh tranh.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Call To Action-->
    <div class="section section-md bg-secondary">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="unit unit-spacing-sm align-items-center d-block d-xs-flex">
                        <div class="unit-left">
                            <svg class="icon icon-lg icon-primary" role="img">
                                <use xlink:href="/assets/images/svg/sprite.svg#phone"></use>
                            </svg>
                        </div>
                        <div class="unit-body">
                            <h3 class="font-weight-medium">Liên hệ ngay qua <b>Số điện thoại</b> hoặc <b>Zalo</b>:</h3>
                            <h2>
                                <a href="tel:0984050424">098 405 0424</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Our Services-->
    <div class="section section-lg bg-gray-100 text-center" id="our-services">
        <div class="container">
            <h2>Quy trình làm việc</h2>
            <div class="row row-2 row-narrow-xxs justify-content-center">
                <div class="col-xs-6 col-md-5 col-lg-3 wow fadeInUpSmall" data-wow-delay=".15s">
                    <!-- Service-->
                    <div class="service">
                        <div class="service-icon">
                            <div class="service-icon-svg">
                                <svg class="icon icon-lg" role="img">
                                    <use xlink:href="/assets/images/svg/sprite.svg#phone"></use>
                                </svg>
                            </div>
                            <div class="service-icon-shadow"></div>
                        </div>
                        <h4 class="service-title">
                            <a href="services.html">Tiếp nhận thông tin</a>
                        </h4>
                        <p class="service-text">Quý khách liên hệ qua Số điện thoại hoặc Zalo 0984050424 và báo số lượng container trước 1 ngày.</p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-5 col-lg-3 wow fadeInUpSmall" data-wow-delay=".3s">
                    <!-- Service-->
                    <div class="service">
                        <div class="service-icon">
                            <div class="service-icon-svg">
                                <svg class="icon icon-lg" role="img">
                                    <use xlink:href="/assets/images/svg/sprite.svg#contract"></use>
                                </svg>
                            </div>
                            <div class="service-icon-shadow"></div>
                        </div>
                        <h4 class="service-title">
                            <a href="services.html">Báo giá - ký hợp đồng</a>
                        </h4>
                        <p class="service-text">Trung Lực sẽ báo giá tùy vào loại hàng và tính theo container hoặc tấn. Liên hệ để được báo giá chi tiết.</p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-5 col-lg-3 wow fadeInUpSmall" data-wow-delay=".45s">
                    <!-- Service-->
                    <div class="service">
                        <div class="service-icon">
                            <div class="service-icon-svg">
                                <svg class="icon icon-lg" role="img">
                                    <use xlink:href="/assets/images/svg/sprite.svg#carry"></use>
                                </svg>
                            </div>
                            <div class="service-icon-shadow"></div>
                        </div>
                        <h4 class="service-title">
                            <a href="services.html">Thực hiện</a>
                        </h4>
                        <p class="service-text">Đội bốc xếp sắp xếp nhân lực có mặt đúng giờ, hoàn thành lên hàng xuất hoặc xuống hàng nhập nhanh chóng. </p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-5 col-lg-3 wow fadeInUpSmall" data-wow-delay=".6s">
                    <!-- Service-->
                    <div class="service">
                        <div class="service-icon">
                            <div class="service-icon-svg">
                                <svg class="icon icon-lg" role="img">
                                    <use xlink:href="/assets/images/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="service-icon-shadow"></div>
                        </div>
                        <h4 class="service-title">
                            <a href="services.html">Nghiệm thu - thanh toán</a>
                        </h4>
                        <p class="service-text">Quý khách nghiệm thu và thanh toán theo thoả thuận. Trung Lực sẽ xuất hoá đơn VAT theo yêu cầu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Helping You-->
    <div class="section section-lg bg-gray-100">
        <div class="container">
            <div class="row row-30 align-items-md-center justify-content-center">
                <div class="col-md-10 col-lg-5 cell-xl-6">
                    <h2>
                        <span class="head-small">Đội ngũ Trung Lực nhiệt tình, uy tín, chất lượng.</span>
                    </h2>
                </div>
                <div class="col-md-10 col-lg-7 cell-xl-6 text-center text-lg-right">
                    <div class="video-mini">
                        <div class="unit unit-spacing-md align-items-center d-block d-xs-flex">
                            <div class="unit-body">
                                <p class="video-mini-title">Video hoạt động của đội ngũ  <br class="d-none d-xl-block">Trung Lực</p>
                            </div>
                            <div class="unit-right wow fadeInUpSmall" data-wow-delay=".2s">
                                <div class="video-mini-play">
                                    <img src="/assets/images/video-bg.png" alt="" width="200" height="127">
                                    <a target="_blank" class="video-mini-play-link" href="https://www.facebook.com/trung.luc.5011/videos/573184757590763" data-lightgallery="item">
                                        <span class="fa-play fas"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Moving Is Always Easy-->
    <div class="section section-lg bg-default text-center" id="our-strength">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="container">
            <h6>
                <span class="head-text">Điểm mạnh</span>
            </h6>
            <h2>Vì sao chọn chúng tôi</h2>
            <div class="row row-30 row-lg flex-md-row-reverse text-left justify-content-center">
                <div class="col-xs-10 col-sm-12 col-md-6 col-lg-7 col-xl-8">
                    <div class="row row-20 row-lg-50">
                        <div class="col-sm-6 col-md-12 col-lg-6 wow fadeInUpSmall" data-wow-delay=".1s">
                            <img src="/assets/images/about-003.jpg" alt="" width="370" height="273">
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6 wow fadeInUpSmall" data-wow-delay=".2s">
                            <img src="/assets/images/about-004.jpg" alt="" width="370" height="273">
                        </div>
                        <div class="col-12">
                            <div class="unit unit-spacing-sm d-block d-xs-flex d-md-block d-lg-flex">
                                <div class="unit-left">
                                    <svg class="icon icon-xl icon-primary" role="img">
                                        <use xlink:href="/assets/images/svg/sprite.svg#dolly"></use>
                                    </svg>
                                </div>
                                <div class="unit-body">
                                    <p>_ Luôn hỗ trợ nếu có hàng đột xuất.</p>
                                    <p>_ Đội ngũ khoẻ mạnh, nhanh nhẹn và có tinh thần hợp tác trong công việc.</p>
                                    <p>_ Có mặt đúng giờ và hoàn thành công việc đúng thời hạn.</p>
                                    <p>_ Hoá đơn VAT đầy đủ.</p>
                                    <a class="small-md link-inline text-uppercase text-spacing-200" href="tel:0984050424">Liên hệ ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="box-info">
                        <svg class="icon icon-xxl icon-primary" role="img">
                            <use xlink:href="/assets/images/svg/sprite.svg#cart-flatbed"></use>
                        </svg>
                        <h3 class="box-info-title">Phương châm tại Trung Lực:  "Uy tín là nền tảng hợp tác lâu dài".</h3>
                    </div>
                    <a class="button button-lg button-secondary button-block button-ujarak" href="javascript:void(0)">Hơn 3 năm kinh nghiệm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section With Sponsors-->
    <div class="section section-md bg-default">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="container">
            <div class="slick-slider carousel-parent brand-slider text-center" data-arrows="false" data-loop="true" data-autoplay="true" data-dots="false" data-swipe="true" data-items="2" data-xs-items="3" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="5" data-xxl-items="5">
                <div class="brand-slide wow fadeInUpSmall" data-wow-delay=".15s">
                    <a class="link-brand" href="#">
                        <img src="/assets/images/sponsor-01-117x70.png" alt="" width="117" height="70">
                    </a>
                </div>
                <div class="brand-slide wow fadeInUpSmall" data-wow-delay=".3s">
                    <a class="link-brand" href="#">
                        <img src="/assets/images/sponsor-02-100x58.png" alt="" width="100" height="58">
                    </a>
                </div>
                <div class="brand-slide wow fadeInUpSmall" data-wow-delay=".45s">
                    <a class="link-brand" href="#">
                        <img src="/assets/images/sponsor-03-99x38.png" alt="" width="99" height="38">
                    </a>
                </div>
                <div class="brand-slide wow fadeInUpSmall" data-wow-delay=".6s">
                    <a class="link-brand" href="#">
                        <img src="/assets/images/sponsor-04-66x83.png" alt="" width="66" height="83">
                    </a>
                </div>
                <div class="brand-slide wow fadeInUpSmall" data-wow-delay=".75s">
                    <a class="link-brand" href="#">
                        <img src="/assets/images/sponsor-05-119x33.png" alt="" width="119" height="33">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Gallery Demo-->
    <div class="section section-xxs bg-default" id="our-gallery">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="container-fluid container-fluid-minus-gutter">
            <div class="row row-30">
                <div class="col-xl-8 flex-column">
                    <div class="slick-slider carousel-parent thumb-big-slider" data-arrows="false" data-loop="true" data-autoplay="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="2" data-sm-items="2" data-md-items="2" data-lg-items="3" data-xl-items="2" data-xxl-items="3" data-lightgallery="group">
                        <div class="thumb-big-slide wow fadeInRightSmall" data-wow-delay=".15s">
                            <img src="/assets/images/gallery/001.jpg" alt="" width="400" height="453">
                        </div>
                        <div class="thumb-big-slide wow fadeInRightSmall" data-wow-delay=".3s">
                            <img src="/assets/images/gallery/002.jpg" alt="" width="400" height="453">
                        </div>
                        <div class="thumb-big-slide wow fadeInRightSmall" data-wow-delay=".45s">
                            <img src="/assets/images/gallery/003.jpg" alt="" width="400" height="453">
                        </div>
                        <div class="thumb-big-slide">
                            <img src="/assets/images/gallery/004.jpg" alt="" width="400" height="453">
                        </div>
                        <div class="thumb-big-slide">
                            <img src="/assets/images/gallery/005.jpg" alt="" width="400" height="453">
                        </div>
                        <div class="thumb-big-slide">
                            <img src="/assets/images/gallery/006.jpg" alt="" width="400" height="453">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 flex-column text-center text-xl-left">
                    <div class="bg-secondary section-md">
                        <div class="block-md">
                            <h6>
                                <span class="head-text">Kho ảnh</span>
                            </h6>
                            <h2>Hình ảnh thực tế.</h2>
                            <a target="_blank" class="button button-white button-ujarak" href="https://www.facebook.com/trung.luc.5011/photos">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection