<div class="col-lg-4">
    <!-- widget sidebar start -->
    <div class="widget-sidebar">
        <!-- widget search start -->
        <div class="widget widget-search">
            <!-- widget title start -->
            <div class="widget-title">
                <h3>Search</h3>
            </div>
            <!-- widget title end -->
            <!-- widget content start -->
            <div class="widget-content">
                <form action="#">
                    <div class="form-group mb-0">
                        <div class="form-floating field-inner">
                            <input id="widgetsearch" name="widgetsearch" class="form-control white-field"
                                placeholder="Search here...." type="text" autocomplete="off">
                            <label for="widgetsearch">Search </label>
                            <button type="submit" aria-label="search submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- widget content end -->
        </div>
        <!-- widget search end -->
        <!-- widget categories list start -->
        <div class="widget widget-categories-list">
            <!-- widget title start -->
            <div class="widget-title">
                <h3>Categories List</h3>
            </div>
            <!-- widget title end -->
            <!-- widget content start -->
            <div class="widget-content">
                <ul class="category-list">
                    <li>
                        <a href="{{ route ("blog-details") }}"><span class="categories-name">Eye Care</span> <span
                                class="categories-count">(18)</span></a>
                    </li>
                    <li>
                        <a href="{{ route ("blog-details") }}"><span class="categories-name">Glasses</span> <span
                                class="categories-count">(22)</span></a>
                    </li>
                    <li>
                        <a href="{{ route ("blog-details") }}"><span class="categories-name">Eye treatment</span> <span
                                class="categories-count">(10)</span></a>
                    </li>
                    <li>
                        <a href="{{ route ("blog-details") }}"><span class="categories-name">Glaucoma</span> <span
                                class="categories-count">(15)</span></a>
                    </li>
                    <li>
                        <a href="{{ route ("blog-details") }}"><span class="categories-name">Ophthalmology</span> <span
                                class="categories-count">(17)</span></a>
                    </li>
                </ul>
            </div>
            <!-- widget content end -->
        </div>
        <!-- widget categories list end -->
        <!-- widget recent post start -->
        <div class="widget widget-recent-post">
            <!-- widget title start -->
            <div class="widget-title">
                <h3>Recent Post</h3>
            </div>
            <!-- widget title end -->
            <!-- widget content start -->
            <div class="widget-content">
                <div class="recent-post-item d-flex">
                    <div class="recent-post-image flex-shrink-0">
                        <figure class="image-anime">
                            <img src="{{ asset("assets/images/widgets/recent-post/recent-post-1.jpg") }}" alt="recent post one">
                        </figure>
                    </div>
                    <div class="recent-post-content flex-grow-1 ms-3">
                        <h4><a href="{{ route ("blog-details") }}">Signs or risk factors for eye disease</a></h4>
                        <p class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            March 12, 2025
                        </p>
                    </div>
                </div>
                <div class="recent-post-item d-flex">
                    <div class="recent-post-image flex-shrink-0">
                        <figure class="image-anime">
                            <img src="{{ asset("assets/images/widgets/recent-post/recent-post-2.jpg") }}" alt="recent post two">
                        </figure>
                    </div>
                    <div class="recent-post-content flex-grow-1 ms-3">
                        <h4><a href="{{ route ("blog-details") }}">What Can You Do To Reduce Dry Eyes</a></h4>
                        <p class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            March 15, 2025
                        </p>
                    </div>
                </div>
                <div class="recent-post-item d-flex">
                    <div class="recent-post-image flex-shrink-0">
                        <figure class="image-anime">
                            <img src="{{ asset("assets/images/widgets/recent-post/recent-post-3.jpg") }}" alt="recent post three">
                        </figure>
                    </div>
                    <div class="recent-post-content flex-grow-1 ms-3">
                        <h4><a href="{{ route ("blog-details") }}">Protect Your Eyes From Dust And Disease</a></h4>
                        <p class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            March 18, 2025
                        </p>
                    </div>
                </div>
            </div>
            <!-- widget content end -->
        </div>
        <!-- widget recent post end -->
        <!-- widget tag start -->
        <div class="widget widget-tag">
            <!-- widget title start -->
            <div class="widget-title">
                <h3>Popular Tags</h3>
            </div>
            <!-- widget title end -->
            <!-- widget content start -->
            <div class="widget-content">
                <div class="widget-tag-box d-flex flex-wrap gap-3">
                    <a href="#" class="widget-tag-item">Medical</a>
                    <a href="#" class="widget-tag-item">Glasse</a>
                    <a href="#" class="widget-tag-item">Repair</a>
                    <a href="#" class="widget-tag-item">Health Care</a>
                    <a href="#" class="widget-tag-item">Professional</a>
                    <a href="#" class="widget-tag-item">Service</a>
                    <a href="#" class="widget-tag-item">Technology</a>
                </div>
            </div>
            <!-- widget content end -->
        </div>
        <!-- widget tag end -->
    </div>
    <!-- widget sidebar end -->
</div>