@extends('Themes.theme1.layout.app')

@section('content')
    {{ config('config') }}
    <!-- hero section -->
    <section id="hero">

        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">

                    <!-- featured post large -->
                    <div class="post featured-post-lg">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge bd-font">সারপ্রাইজ</a>
                            <h2 class="post-title bd-font" style="letter-spacing: 2px;"><a href="blog-single.html">নিশোর
                                    সারপ্রাইজ দ্বিতীয় পর্ব বউকে
                                    ন্যাংটো দিলাম পর্ব ১</a>
                            </h2>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                        <a href="blog-single.html">
                            <div class="thumb rounded">
                                <div class="inner data-bg-image" data-bg-image="images/posts/featured-lg.jpg"></div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- post tabs -->
                    <div class="post-tabs rounded bordered">
                        <!-- tab navs -->
                        <ul class="nav nav-tabs nav-pills nav-fill bd-font" id="postsTab" role="tablist">
                            <li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true"
                                    class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab"
                                    role="tab" type="button">জনপ্রিয়</button></li>
                            <li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false"
                                    class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab"
                                    role="tab" type="button">নতুন</button></li>
                        </ul>
                        <!-- tab contents -->
                        <div class="tab-content" id="postsTabContent">
                            <!-- loader -->
                            <div class="lds-dual-ring"></div>
                            <!-- popular posts -->
                            <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular"
                                role="tabpanel">
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">১</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব
                                                নিশোর </a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">২</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">সারপ্রাইজ দ্বিতীয় পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৩</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">দ্বিতীয় সারপ্রাইজ পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৪</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয়
                                                পর্ব</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- recent posts -->
                            <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">১</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয়
                                                পর্ব
                                                নিশোর </a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">২</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">সারপ্রাইজ দ্বিতীয় পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৩</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">দ্বিতীয় সারপ্রাইজ পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৪</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয়
                                                পর্ব</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section main content -->
    <section class="main-content">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title bd-font">জনপ্রিয়</h3>
                        <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                    </div>

                    <div class="row gy-5">
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- horizontal ads -->
                    <div class="ads-horizontal text-md-center">
                        <span class="ads-title">- Sponsored Ad -</span>
                        <a href="#">
                            <img src="{{ asset('Themes/Theme1/images/ads/bannerads1.png') }}" alt="Advertisement" />
                        </a>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">বিখ্যাত</h3>
                        <img src="{{ asset('Themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                    </div>

                    <div class="row gy-5">
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">অনুপ্রেরণা</h3>
                        <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                        <div class="slick-arrows-top">
                            <button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons"
                                aria-label="Previous"><i class="icon-arrow-left"></i></button>
                            <button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons"
                                aria-label="Next"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="row post-carousel-twoCol post-carousel">
                        {{-- item --}}
                        <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                            {{-- <a style="bottom: -16px; width:160px;"
                                class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                href="#">Read</a> --}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর সারপ্রাইজ দ্বিতীয়
                                            পর্ব</h5>
                                        <p class="text-secondary mt-3">
                                            প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                            আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="font-size: 13px">
                                    <div class="col-6 text-secondary">
                                        by <span class="text-uppercase fw-bolder">khaalifa</span>
                                    </div>
                                    <div class="col-6 fw-bolder" style="text-align: end">
                                        <p class="text-secondary"><span>i</span>156 view</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                            {{-- <a style="bottom: -16px; width:160px;"
                                class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                href="#">Read</a> --}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর সারপ্রাইজ দ্বিতীয়
                                            পর্ব</h5>
                                        <p class="text-secondary mt-3">
                                            প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                            আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="font-size: 13px">
                                    <div class="col-6 text-secondary">
                                        by <span class="text-uppercase fw-bolder">khaalifa</span>
                                    </div>
                                    <div class="col-6 fw-bolder" style="text-align: end">
                                        <p class="text-secondary"><span>i</span>156 view</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                            {{-- <a style="bottom: -16px; width:160px;"
                                class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                href="#">Read</a> --}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর সারপ্রাইজ দ্বিতীয়
                                            পর্ব</h5>
                                        <p class="text-secondary mt-3">
                                            প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                            আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="font-size: 13px">
                                    <div class="col-6 text-secondary">
                                        by <span class="text-uppercase fw-bolder">khaalifa</span>
                                    </div>
                                    <div class="col-6 fw-bolder" style="text-align: end">
                                        <p class="text-secondary"><span>i</span>156 view</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">নতুন</h3>
                        <img src="{{ asset('Themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                    </div>

                    <div class="row gy-5">
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- item --}}
                        <div class="col-lg-6 mb-2">
                            <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                <a style="bottom: -16px; width:160px;"
                                    class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                    href="#">Read</a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="fw-bolder">নিশোর সারপ্রাইজ দ্বিতীয় পর্ব</h5>
                                            <p class="text-secondary mt-3">
                                                প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 13px">
                                        <div class="col-6 text-secondary">
                                            by <span class="text-uppercase fw-bolder">khaalifa</span>
                                        </div>
                                        <div class="col-6 fw-bolder" style="text-align: end">
                                            <p class="text-secondary"><span>i</span>156 view</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer" data-height="50"></div>
                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget about -->
                        <div class="widget rounded">
                            <div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
                                <img src="images/logo.svg" alt="logo" class="mb-4" />
                                <p class="mb-4 bd-font">প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                    আপনি।
                                    যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                </p>
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title bd-font">চিরকাল বিখ্যাত</h3>
                                <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">১</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয়
                                                পর্ব
                                                নিশোর </a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">২</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">সারপ্রাইজ দ্বিতীয় পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৩</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">দ্বিতীয় সারপ্রাইজ পর্ব
                                                নিশোর</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <span class="inner-text bd-font">৪</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="blog-single.html">নিশোর সারপ্রাইজ দ্বিতীয়
                                                পর্ব</a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- widget categories -->
                        <div class="widget rounded bd-font">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">বিভাগ</h3>
                                <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="#">কুমারী</a><span>(5)</span></li>
                                    <li><a href="#">পরিপক্ব</a><span>(2)</span></li>
                                    <li><a href="#">গৃহবধূর</a><span>(4)</span></li>
                                    <li><a href="#">স্বামী</a><span>(1)</span></li>
                                    <li><a href="#">সেরা</a><span>(7)</span></li>
                                    <li><a href="#">বান্ধবী</a><span>(3)</span></li>
                                </ul>
                            </div>

                        </div>

                        <!-- widget newsletter -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title bd-font">সংযুক্ত থাকুন</h3>
                                <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <span class="newsletter-headline text-center mb-3">Join ৭০,০০০ subscribers!</span>
                                <form>
                                    <div class="mb-2">
                                        <input class="form-control w-100 text-center" placeholder="Email address…"
                                            type="email">
                                    </div>
                                    <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                </form>
                                <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a
                                        href="#">Privacy Policy</a></span>
                            </div>
                        </div>

                        <!-- widget post carousel -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Celebration</h3>
                                <img src="{{ asset('themes/Theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <div class="post-carousel-widget">
                                    <!-- post -->
                                    <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                        {{-- <a style="bottom: -16px; width:160px;"
                                            class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                            href="#">Read</a> --}}
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর
                                                        সারপ্রাইজ দ্বিতীয়
                                                        পর্ব</h5>
                                                    <p class="text-secondary mt-3">
                                                        প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                        আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" style="font-size: 13px">
                                                <div class="col-6 text-secondary">
                                                    by <span class="text-uppercase fw-bolder">khaalifa</span>
                                                </div>
                                                <div class="col-6 fw-bolder" style="text-align: end">
                                                    <p class="text-secondary"><span>i</span>156 view</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                        {{-- <a style="bottom: -16px; width:160px;"
                                            class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                            href="#">Read</a> --}}
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর
                                                        সারপ্রাইজ দ্বিতীয়
                                                        পর্ব</h5>
                                                    <p class="text-secondary mt-3">
                                                        প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                        আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" style="font-size: 13px">
                                                <div class="col-6 text-secondary">
                                                    by <span class="text-uppercase fw-bolder">khaalifa</span>
                                                </div>
                                                <div class="col-6 fw-bolder" style="text-align: end">
                                                    <p class="text-secondary"><span>i</span>156 view</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="card bd-card p-1 position-relative shadow-sm rounded bd-font">
                                        {{-- <a style="bottom: -16px; width:160px;"
                                            class="btn btn-default shadow text-white position-absolute start-50 translate-middle-x rounded-5"
                                            href="#">Read</a> --}}
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="fw-bolder" style="color: #C60B0D !important;">নিশোর
                                                        সারপ্রাইজ দ্বিতীয়
                                                        পর্ব</h5>
                                                    <p class="text-secondary mt-3">
                                                        প্লিজ বস, আপনার ধোনের পানি ফেলে দিচ্ছি আমি, তাও আমার ক্ষতি করেন না
                                                        আপনি। যেভাবে বলবেন সেভাবেই আপনার পানি বের করে দিচ্ছি
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" style="font-size: 13px">
                                                <div class="col-6 text-secondary">
                                                    by <span class="text-uppercase fw-bolder">khaalifa</span>
                                                </div>
                                                <div class="col-6 fw-bolder" style="text-align: end">
                                                    <p class="text-secondary"><span>i</span>156 view</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- carousel arrows -->
                                <div class="slick-arrows-bot">
                                    <button type="button" data-role="none"
                                        class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i
                                            class="icon-arrow-left"></i></button>
                                    <button type="button" data-role="none"
                                        class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i
                                            class="icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- widget advertisement -->
                        <div class="widget no-container rounded text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#" class="widget-ads">
                                <img src="{{ asset('themes/Theme1/images/wave.svg') }}" alt="Advertisement" />
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- instagram feed -->
    {{-- <div class="instagram">
        <div class="container-xl">
            <!-- button -->
            <a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
            <!-- images -->
            <div class="instagram-feed d-flex flex-wrap">
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-1.jpg" alt="insta-title" />
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-2.jpg" alt="insta-title" />
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-3.jpg" alt="insta-title" />
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-4.jpg" alt="insta-title" />
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-5.jpg" alt="insta-title" />
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-6.jpg" alt="insta-title" />
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
