@extends("website.layout.master-layout")
@section("title", "Blog Details | Diagnoedge")
@section("content")
    <!-- main start -->
    <main class="main">
        <!-- breadcrumb section start -->
        <section class="breadcrumb-section" data-img-src="{{  asset("assets/images/breadcrumb/breadcrumb.png") }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb content start -->
                        <div class="breadcrumb-content">
                            <!-- breadcrumb title start -->
                            <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                                <h1>Blog Details</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route("our-blogs") }}">Our Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- breadcrumb content end -->
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
                <img class="breadcrumb-shape-one" src="{{ asset("assets/images/shape/shape-4.png") }}"
                    alt="breadcrumb shape one">
                <img class="breadcrumb-shape-two" src="{{ asset("assets/images/shape/square-blue.png") }}"
                    alt="breadcrumb shape two">
                <img class="breadcrumb-shape-three" src="{{ asset("assets/images/shape/plus-orange.png") }}"
                    alt="breadcrumb shape three">
            </div>
        </section>
        <!-- breadcrumb section end -->

        <!-- blog single section start -->
        <section class="blog-single-section pt-100 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- blog single post start -->
                        <div class="blog-single-post">
                            <!-- blog block one start -->
                            <div class="blog-block-one">
                                <!-- blog single media start -->
                                <div class="blog-single-media">
                                    <figure class="image-anime">
                                        <img src="{{ asset("assets/images/blog/blog-details/blog-single-1.jpg") }}"
                                            alt="blog single image">
                                    </figure>
                                </div>
                                <!-- blog single media end -->
                                <!-- blog single contain start -->
                                <div class="blog-single-contain">
                                    <!-- blog entry content start -->
                                    <div class="blog-entry-content">
                                        <ul class="blog-single-meta">
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
                                            <li>
                                                <a href="#">
                                                    <i class="fa-solid fa-comment"></i>
                                                    <span>15 Comments</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <h2>How do Inherited Retinal Diseases Happen?</h2>
                                        <p>
                                            Gubergren sit et facilisis eirmod ut in takimata sanctus ipsum est diam duo
                                            eirmod ipsum tempor takimata stet. Diam ullamcorper mazim clita sit est
                                            consetetur ut sed commodo duis lorem sea
                                            ut nihil esse dolore. Iusto kasd diam at luptatum dolores sea duo quis laoreet
                                            sit sed commodo. Duo voluptua ipsum qui accumsan aliquyam lorem accusam euismod
                                            sit lorem tempor in ipsum.
                                            Possim velit erat et duo lorem consequat dolor. Nonumy elitr est tempor ad lorem
                                            est. Sit elitr dignissim feugiat sit diam eros duis ea sit ad diam takimata
                                            justo placerat no labore et
                                            dolore. Takimata dolore sit feugiat erat sit nibh aliquip amet iriure. Eirmod
                                            facilisis tempor illum. Sed labore justo nostrud kasd nulla odio justo est nulla
                                            vero. Adipiscing nonumy est
                                            quod eos diam sanctus dolore sea. Blandit nihil kasd consetetur clita justo
                                            consetetur tincidunt vel et elitr et minim nonumy ad nonumy vel ipsum.
                                        </p>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum. There are many
                                            variations of passages of Lorem Ipsum available, but majority have suffered
                                            alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum.
                                        </p>
                                        <div class="blog-quote">
                                            <div class="blog-quote-icon">
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                            <p>
                                                “Mosico has been an invaluable partner to us. Any talent we've worked with
                                                has shown a deep understanding of digital experiences. They're seamlessly
                                                integrate with our team and meet
                                                the level of craft that we hold ourselves accountable with our team and meet
                                                to.” - David Warner
                                            </p>
                                        </div>
                                        <p>
                                            Labore et elitr eum tation duo sanctus et ipsum. Elitr kasd sed consetetur velit
                                            vero erat et diam. Ipsum iusto exerci nobis nonumy. Ea ut lorem veniam elit
                                            iusto rebum elit. Blandit ut
                                            sadipscing exerci eos et et nonumy. At ipsum gubergren illum autem duo dolore
                                            blandit tempor tempor amet stet. Gubergren aliquip vero cum et nihil voluptua
                                            eirmod magna ea nibh eros
                                            dolores sadipscing invidunt sit lorem. Nonumy dolore dolore. Molestie tincidunt
                                            magna facilisi tempor sed clita illum. Ipsum liber vero sadipscing takimata.
                                        </p>

                                        <h3>Share Your Experience</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.
                                        </p>
                                        <div class="row gy-4 mb-20">
                                            <div class="col-sm-6">
                                                <div class="blog-post-gallary reveal">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset("assets/images/blog/blog-details/blog-single-gallary-1.jpg") }}"
                                                            alt="blog gallary image one">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blog-post-gallary reveal">
                                                    <figure class="image-anime">
                                                        <img src="{{  asset("assets/images/blog/blog-details/blog-single-gallary-2.jpg") }}"
                                                            alt="blog gallary image two">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Minim nihil molestie sed no no soluta nonumy nonumy tempor velit sit kasd clita.
                                            Voluptua vel erat vero et lorem tempor nulla. Dolor dolores sanctus eros justo
                                            accusam soluta aliquyam
                                            gubergren luptatum duo consetetur esse aliquyam diam sit diam. Ea kasd quod et
                                            kasd nulla. Vel accusam soluta ea justo erat dolor est exerci diam placerat
                                            dolor at. Dolores ea quod.
                                        </p>

                                        <h3>Let's Build a Healthy</h3>
                                        <p>
                                            Sanctus dolore et voluptua sea diam diam no vero consequat praesent. Dolore
                                            dolor dolore dolore amet nisl at. Dolore vel dolor dolores accusam. Vero veniam
                                            qui vero et kasd voluptua esse
                                            sit dolores sit at. Liber et nam sit sed dolore vero sed. Amet volutpat eum amet
                                            illum tempor magna aliquyam et duis. Facer ut lobortis no. Lorem odio zzril eum
                                            amet lorem eirmod sea. Diam
                                            hendrerit voluptua dolor sanctus lorem. Sea et lorem ipsum quis et sit in
                                            hendrerit eros labore vel aliquam dolor diam feugait.
                                        </p>
                                        <div class="check-list mb-30">
                                            <ul>
                                                <li>Residential and commercial cleaning expertise</li>
                                                <li>Crystal-clear windows guaranteed</li>
                                                <li>Processing customer feedback to improve cleaning</li>
                                                <li>Eco-friendly cleaning solutions used</li>
                                            </ul>
                                        </div>
                                        <div class="row mb-30">
                                            <div class="col-12">
                                                <div class="blog-post-video">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset("assets/images/blog/blog-details/blog-single-video.jpg") }}"
                                                            alt="blog video image">
                                                    </figure>
                                                    <div class="blog-video-wapper">
                                                        <a class="video-popup video-play play-center"
                                                            href="https://www.youtube.com/watch?v=Y-x0efG1seA"
                                                            aria-label="play video">
                                                            <span class="icon"><i class="fa-solid fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Dolor zzril iriure sanctus sanctus facilisis et aliquyam sanctus sit at.
                                            Consequat dolor et ipsum no sed clita exerci invidunt elitr dolor dolores amet
                                            tincidunt amet dolor sanctus ad
                                            volutpat. Ea quod wisi accumsan erat vero diam sea lorem aliquyam. Ipsum
                                            facilisi ut tempor sea erat eirmod sanctus labore dolore aliquyam labore. Stet
                                            in gubergren option veniam quod
                                            labore sea amet mazim stet takimata aliquip consetetur justo hendrerit. Ut et
                                            kasd gubergren et sed kasd tempor eos tation sit at sit lorem.
                                        </p>
                                        <p class="mb-0">
                                            Et amet est takimata erat adipiscing dolore invidunt diam eu dolor sed sit.
                                            Dolore et erat rebum no lorem et. Ut lorem dignissim nostrud aliquyam. Elitr
                                            vulputate diam et sed invidunt in
                                            tempor lorem accusam dolores gubergren no. Congue stet dignissim stet aliquyam
                                            ipsum ipsum ipsum et consetetur magna consetetur ut feugiat sadipscing sanctus
                                            possim gubergren ut. Amet
                                            facilisi nonumy eos magna gubergren lorem sit.
                                        </p>
                                    </div>
                                    <!-- blog entry content end -->
                                    <!-- share links start -->
                                    <div class="share-links">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <!-- share tag start -->
                                                <div class="share-tag">
                                                    <span class="share-links-title">Releted Tags</span>
                                                    <ul class="tagcloud">
                                                        <li><a href="{{ route("blog-details") }}">Medical</a></li>
                                                        <li><a href="{{ route("blog-details") }}">Glasses</a></li>
                                                    </ul>
                                                </div>
                                                <!-- share tag end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 text-md-end">
                                                <!-- share social start -->
                                                <div class="share-social">
                                                    <span class="share-links-title">Social Share</span>
                                                    <ul class="d-flex justify-content-md-end gap-4">
                                                        <li>
                                                            <a href="#" aria-label="instagram"><i
                                                                    class="fa-brands fa-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="facebook"><i
                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="twitter"><i
                                                                    class="fa-brands fa-x-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="pinterest"><i
                                                                    class="fa-brands fa-pinterest-p"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- share social end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- share links end -->
                                </div>
                                <!-- blog single contain end -->
                                <!-- post navigation -->
                                <nav class="navigation post-navigation" aria-label="Posts">
                                    <div class="row nav-links">
                                        <div class="col-md-6">
                                            <!-- nav previous start -->
                                            <div class="nav-previous">
                                                <a href="{{ route("blog-details") }}" rel="prev">
                                                    <span class="post-nav-icon">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                        <span class="post-nav-head">Previous Post</span>
                                                    </span>
                                                    Agricultural Infrastructure in Rural Areas
                                                </a>
                                            </div>
                                            <!-- nav previous end -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- nav next start -->
                                            <div class="nav-next">
                                                <a href="{{ route("blog-details") }}" rel="next">
                                                    <span class="post-nav-icon">
                                                        <span class="post-nav-head">Next Post</span>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                    Hidden Advantages And Information
                                                </a>
                                            </div>
                                            <!-- nav next end -->
                                        </div>
                                    </div>
                                </nav>
                                <!-- blog author start -->
                                <div class="blog-author">
                                    <!-- blog author image start -->
                                    <div class="blog-author-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset("assets/images/blog/blog-details/author/blog-author.jpg") }}"
                                                alt="blog author">
                                        </figure>
                                    </div>
                                    <!-- blog author image end -->
                                    <!-- blog author content start -->
                                    <div class="blog-author-content">
                                        <h3>Richard M. Fudge</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.</p>
                                        <ul class="social-icon">
                                            <li>
                                                <a href="#" aria-label="instagram"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="facebook"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="pinterest"><i
                                                        class="fa-brands fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- blog author content end -->
                                </div>
                                <!-- blog author end -->
                            </div>
                            <!-- blog block one end -->
                            <!-- comment wapper start -->
                            <div class="comment-wapper">
                                <!-- comments title start -->
                                <h3 class="comments-title">4 Comments</h3>
                                <!-- comments title end -->
                                <!-- comment list start -->
                                <ul class="comment-list">
                                    <li>
                                        <div class="comment-list-item">
                                            <div class="comment-user-profile">
                                                <figure class="image-anime">
                                                    <img src="{{ asset("assets/images/blog/blog-details/comment/comment-author-1.jpg") }}"
                                                        alt="comment author one">
                                                </figure>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-author">by <a href="#"
                                                            class="comment-author-name">Tracey Liam</a></div>
                                                    <div class="comment-date">
                                                        <i class="fa-solid fa-clock"></i>
                                                        3 days ago
                                                    </div>
                                                </div>
                                                <p class="desc">Undertakes laborious physical exercise, except to obtain
                                                    some advantage from it but who has any right to find fault with man who
                                                    chooses to enjoy.</p>
                                                <a href="#" class="comment-reply">
                                                    <i class="fa-solid fa-reply"></i>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                        <div class="comment-list-item comment-nesting">
                                            <div class="comment-user-profile">
                                                <figure class="image-anime">
                                                    <img src="{{ asset("assets/images/blog/blog-details/comment/comment-author-2.jpg") }}"
                                                        alt="comment author two">
                                                </figure>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-author">by <a href="#"
                                                            class="comment-author-name">John Doe</a></div>
                                                    <div class="comment-date">
                                                        <i class="fa-solid fa-clock"></i>
                                                        2 days ago
                                                    </div>
                                                </div>
                                                <p class="desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                                                    explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id
                                                    facere, expedita quasi, quisquam veniam
                                                    molestiae.
                                                </p>
                                                <a href="#" class="comment-reply">
                                                    <i class="fa-solid fa-reply"></i>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-list-item">
                                            <div class="comment-user-profile">
                                                <figure class="image-anime">
                                                    <img src="{{ asset("assets/images/blog/blog-details/comment/comment-author-3.jpg") }}"
                                                        alt="comment author three">
                                                </figure>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-author">by <a href="#"
                                                            class="comment-author-name">Mithcel Adnan</a></div>
                                                    <div class="comment-date">
                                                        <i class="fa-solid fa-clock"></i>
                                                        6 days ago
                                                    </div>
                                                </div>
                                                <p class="desc">Undertakes laborious physical exercise, except to obtain
                                                    some advantage from it but who has any right to find fault with man who
                                                    chooses to enjoy.</p>
                                                <a href="#" class="comment-reply">
                                                    <i class="fa-solid fa-reply"></i>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-list-item">
                                            <div class="comment-user-profile">
                                                <figure class="image-anime">
                                                    <img src="{{ asset("assets/images/blog/blog-details/comment/comment-author-4.jpg") }}"
                                                        alt="comment author four">
                                                </figure>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-author">by <a href="#"
                                                            class="comment-author-name">Roberr Martin</a></div>
                                                    <div class="comment-date">
                                                        <i class="fa-solid fa-clock"></i>
                                                        10 days ago
                                                    </div>
                                                </div>
                                                <p class="desc">Undertakes laborious physical exercise, except to obtain
                                                    some advantage from it but who has any right to find fault with man who
                                                    chooses to enjoy.</p>
                                                <a href="#" class="comment-reply">
                                                    <i class="fa-solid fa-reply"></i>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- comment list end -->
                            </div>
                            <!-- comment wapper end -->
                            <!-- comment respond start -->
                            <div class="comment-respond">
                                <!-- comments respond title start -->
                                <h3 class="comments-respond-title">Leave a Comment</h3>
                                <!-- comments respond title end -->
                                <!-- default form start -->
                                <div class="default-form comment-respond-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-floating field-inner">
                                                        <input id="firstname" class="form-control" name="firstname"
                                                            type="text" placeholder="Ex. your name" autocomplete="off">
                                                        <label for="firstname">First Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-floating field-inner">
                                                        <input id="lasttname" class="form-control" name="lasttname"
                                                            type="text" placeholder="Ex. your name" autocomplete="off">
                                                        <label for="lasttname">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-floating field-inner">
                                                        <input id="email" class="form-control" name="email" type="email"
                                                            placeholder="Ex. info@domain.com" autocomplete="off">
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-floating field-inner">
                                                        <input id="Website" class="form-control" name="Website" type="text"
                                                            placeholder="Ex. www.example.com" autocomplete="off">
                                                        <label for="Website">Website</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-floating field-inner">
                                                        <textarea id="message" class="form-control" name="message"
                                                            placeholder="Ex. type messege" autocomplete="off"></textarea>
                                                        <label for="message">Message</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-30">
                                                    <div class="field-inner checkbox">
                                                        <input id="instockcheckbox" class="form-check-input" type="checkbox"
                                                            name="checkbox">
                                                        <label for="instockcheckbox">Save my name, email, and website in
                                                            this browser for the next time I comment.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="availability-btn-wapper">
                                                    <button type="submit" class="theme-button style-1"
                                                        data-text="Post Comment">
                                                        <span data-text="Post Comment">Post Comment</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- default form end -->
                            </div>
                            <!-- comment respond end -->
                        </div>
                        <!-- blog single post end -->
                    </div>
                    {{-- blog sidebar start --}}
                    @include("website.components.blog-sidebar")
                    {{-- blog sidebar end --}}
                </div>
            </div>
        </section>
        <!-- blog single section end -->
    </main>
    <!-- main end -->

@endsection