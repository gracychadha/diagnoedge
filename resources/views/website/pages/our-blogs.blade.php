@extends("website.layout.master-layout")
@section("title", " Our Blogs | Diagnoedge")
@section("content")
    <!-- main start -->
    <main class="main">
        <!-- breadcrumb section start -->
        <section class="breadcrumb-section" data-img-src="assets/images/breadcrumb/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb content start -->
                        <div class="breadcrumb-content">
                            <!-- breadcrumb title start -->
                            <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                                <h1>Our Blog</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Blog</li>
                                </ol>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- breadcrumb content end -->
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
                <img class="breadcrumb-shape-one" src="assets/images/shape/shape-4.png" alt="breadcrumb shape one">
                <img class="breadcrumb-shape-two" src="assets/images/shape/square-blue.png" alt="breadcrumb shape two">
                <img class="breadcrumb-shape-three" src="assets/images/shape/plus-orange.png" alt="breadcrumb shape three">
            </div>
        </section>
        <!-- breadcrumb section end -->

        <!-- blog section start -->
        <section class="blog-section pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-posts row">
                            <div class="single-blog-post col-lg-6">
                                <div class="post-image">
                                    <a href="{{ route("blog-details") }}">
                                        <figure>
                                            <img src="assets/images/blog/blog-1.jpg" alt="blog image one">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-user"></i>
                                                <span>By: Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>March 14, 2025</span>
                                        </li>
                                    </ul>
                                    <h2><a href="{{ route("blog-details") }}">How do Inherited Retinal Diseases Happen?</a>
                                    </h2>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available....
                                    </p>
                                    <div class="blog-list-button">
                                        <a href="{{ route("blog-details") }}" class="theme-button style-1"
                                            aria-label="Read Mores">
                                            <span data-text="Read Mores">Read Mores</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-post col-lg-6">
                                <div class="post-image">
                                    <a href="{{ route("blog-details") }}">
                                        <figure>
                                            <img src="assets/images/blog/blog-2.jpg" alt="blog image two">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-user"></i>
                                                <span>By: Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>March 15, 2025</span>
                                        </li>
                                    </ul>
                                    <h2><a href="{{ route("blog-details") }}">Which innovations the eye care industry?</a>
                                    </h2>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available....
                                    </p>
                                    <div class="blog-list-button">
                                        <a href="{{ route("blog-details") }}" class="theme-button style-1"
                                            aria-label="Read Mores">
                                            <span data-text="Read Mores">Read Mores</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-post col-lg-6">
                                <div class="post-image">
                                    <a href="{{ route("blog-details") }}">
                                        <figure>
                                            <img src="assets/images/blog/blog-3.jpg" alt="blog image three">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-user"></i>
                                                <span>By: Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>March 16, 2025</span>
                                        </li>
                                    </ul>
                                    <h2><a href="{{ route("blog-details") }}">We're ready to enhance your clear vision</a>
                                    </h2>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available....
                                    </p>
                                    <div class="blog-list-button">
                                        <a href="{{ route("blog-details") }}" class="theme-button style-1"
                                            aria-label="Read Mores">
                                            <span data-text="Read Mores">Read Mores</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-post col-lg-6">
                                <div class="post-image">
                                    <a href="{{ route("blog-details") }}">
                                        <figure>
                                            <img src="assets/images/blog/blog-4.jpg" alt="blog image four">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-user"></i>
                                                <span>By: Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>March 17, 2025</span>
                                        </li>
                                    </ul>
                                    <h2><a href="{{ route("blog-details") }}">Protect your eyes from dust and disease</a>
                                    </h2>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available....
                                    </p>
                                    <div class="blog-list-button">
                                        <a href="{{ route("blog-details") }}" class="theme-button style-1"
                                            aria-label="Read Mores">
                                            <span data-text="Read Mores">Read Mores</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pagination start -->
                        <div class="pagination mt-0 md-pb-40">
                            <nav aria-label="page navigation">
                                <ul class="page-list">
                                    <li><a aria-current="page" class="page-numbers current" href="#">1</a></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="next page-numbers" href="#">Next Page</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- pagination end -->
                    </div>
                    {{-- blog sidebar --}}
                    @include("website.components.blog-sidebar")
                </div>
            </div>
        </section>
        <!-- blog section end -->
    </main>
    <!-- main end -->
@endsection