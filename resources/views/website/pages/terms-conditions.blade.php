@extends("website.layout.master-layout")
@section("title", " Terms & Conditions | Diagnoedge")
@section("content")
    {{-- main section --}}
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
                                <h1>Terms & Conditions</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
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
        <div class="container my-4 pt-30 pb-30">

            <div class="section-title-area">
                <div class="section-title wow fadeInLeft" data-wow-delay=".2s">
                    <span class="sub-title">Terms & Conditions — Diagnoedge</span>
                    <strong class="d-block fs-4 mt-2">Diagnoedge Website Terms & Conditions</strong>
                </div>
            </div>

            <div class="container">

                <div class="mb-3">
                    <p class="mb-0 text-justify">
                        Welcome to Diagnoedge! These terms and conditions outline the rules and regulations for
                        the use of Diagnoedge’s website. By accessing this website, you accept these terms and
                        conditions in full. Do not continue to use Diagnoedge if you do not agree to all the
                        terms and conditions stated on this page.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Terminology</strong>
                    <p class="mb-0 text-justify">
                        The following terminology applies to these Terms and Conditions, Privacy Statement, Disclaimer
                        Notice, and all agreements: "Client", "You", and "Your" refers to the user of this website.
                        "Company", "Ourselves", "We", "Our", and "Us" refers to Diagnoedge. "Party", "Parties" or "Us"
                        refers to both the Client and the Company. Any use of terms in singular/plural or any capitalization
                        are considered interchangeable and refer to the same meaning.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Cookies</strong>
                    <p class="mb-0 text-justify">
                        We use cookies to enhance website functionality. By accessing Diagnoedge, you agree to the use
                        of cookies in accordance with our Privacy Policy. Cookies help improve user experience and enable
                        certain features. Some of our affiliates or advertising partners may also use cookies.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">License</strong>
                    <p class="mb-0 text-justify">
                        Unless otherwise stated, Diagnoedge and/or its licensors own all intellectual property rights
                        for material on this website. You may access this website for your personal use, subject to
                        restrictions defined in these terms and conditions.
                    </p>
                    <p class="mt-2 mb-0 text-justify"><strong>You must not:</strong></p>
                    <ul class="mt-2">
                        <li>Republish material from Diagnoedge</li>
                        <li>Sell, rent, or sub-license website content</li>
                        <li>Reproduce, duplicate or copy material</li>
                        <li>Redistribute content without written permission</li>
                    </ul>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Links and External Websites</strong>
                    <p class="mb-0 text-justify">
                        Certain organizations such as government agencies, search engines, news organizations, and
                        online directory distributors may link to our website without prior approval, provided the link
                        is not misleading and fits within the context of the external site.
                    </p>
                    <p class="mt-2 mb-0 text-justify">
                        We may also approve additional link requests from trusted organizations such as business
                        information sources, online portals, directories, accounting or law firms, and educational
                        institutions.
                    </p>
                    <p class="mt-2 mb-0 text-justify">
                        If you wish to link to our website, please contact us with your website details and linking
                        purpose. Approved entities may hyperlink using:
                    </p>
                    <ul class="mt-2">
                        <li>The name Diagnoedge</li>
                        <li>The URL being linked to</li>
                        <li>A descriptive phrase that is relevant to the linking page</li>
                    </ul>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">iFrames</strong>
                    <p class="mb-0 text-justify">
                        You may not create frames around our webpages that alter the visual presentation or appearance
                        of our website without prior written consent.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Content Liability</strong>
                    <p class="mb-0 text-justify">
                        We are not responsible for any content that appears on external websites linking to Diagnoedge.
                        You agree to defend and protect us against any claims resulting from content on your website.
                        No links should appear on any website that may be interpreted as defamatory, obscene, offensive,
                        criminal, or violating third-party rights.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Reservation of Rights</strong>
                    <p class="mb-0 text-justify">
                        We reserve the right to request the removal of any link to our website. By continuing to link to
                        Diagnoedge, you agree to comply with any such removal requests. We also reserve the right to update
                        these terms at any time.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Removal of Links</strong>
                    <p class="mb-0 text-justify">
                        If you find any link on our website that is offensive, you may contact us at any time. We will
                        consider removal requests but are not obligated to do so or respond directly.
                    </p>
                    <p class="mt-2 mb-0 text-justify">
                        We do not guarantee that website information is always accurate or complete, nor do we promise
                        uninterrupted access to the website.
                    </p>
                </div>

                <div class="mb-3">
                    <strong class="d-block mb-2">Disclaimer</strong>
                    <p class="mb-0 text-justify">
                        To the maximum extent permitted by law, we exclude all warranties, representations, or conditions
                        regarding this website and its use. Nothing in this disclaimer will limit or exclude liability for:
                    </p>
                    <ul class="mt-2">
                        <li>Death or personal injury caused by negligence</li>
                        <li>Fraud or fraudulent misrepresentation</li>
                        <li>Liabilities not permitted to be excluded under applicable law</li>
                    </ul>
                    <p class="mt-2 mb-0 text-justify">
                        As long as the website and its services are offered free of charge, we are not liable for any
                        loss or damage of any nature.
                    </p>
                </div>

            </div>
        </div>

    </main>
@endsection