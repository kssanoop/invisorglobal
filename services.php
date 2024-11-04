<style>
    .banner-section {
        background-color: var(--accent-color);
        overflow: hidden;
        position: relative;
    }

    .content-col {
        color: white;
        position: relative;
        min-height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }


    .services-tag {
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
        margin-bottom: 30px;
    }

    .banner-title {
        font-size: 42px;
        font-weight: 300;
        margin-bottom: 20px;
        line-height: 1.2;
        color: #fff;
    }

    .banner-text2 {
        font-size: 16px;
        line-height: 1.6;
        opacity: 0.9;
    }

    .image-col {
        padding: 0;
        height: 100%;
        background-position: center;
        background-size: cover;
        clip-path: polygon(18% 0, 100% 0, 100% 100%, 0 100%);
        position: absolute;
        top: 0;
        right: 0;
    }

    @media (max-width: 768px) {
        .content-col::after {
            display: none;
        }

        .content-col {
            padding: 40px 20px;
        }

        .banner-title {
            font-size: 32px;
        }
    }

    @media (max-width: 991px) {
        .image-col {
            position: relative;
            clip-path: none;
        }
    }
</style>

<div class="banner-section">
    <div class="container-fluid p-0">
        <div class="container">
            <div class="row g-0">
                <!-- Content Column -->
                <div class="col-md-6 content-col">
                    <div class="title-top">
                        <div class="title-dot" style="background-color: #fff;"></div>
                        <div class="trust-badge" style="color:#fff">SERVICES</div>
                    </div>
                    <h1 class="banner-title">Building a strong foundation for growth 
                    </h1>
                    <p class="banner-text2">With a team of certified Zoho experts, we are committed to delivering the best Zoho solutions tailored to your business. From consultation to post-implementation support, we offer end-to-end services. 
                    </p>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 image-col">
                    <img src="assets/img/service-image.png" alt="Financial advisors"
                        class="img-fluid w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</div>




<!-- ========================================= -->

<style>
    /* General Styles for the Main Service Section */
    .main-service {
        position: relative;
        padding: 50px 0;
    }

    .main-service .card-body {
        padding: 0;
    }

    .main-service .card-top {
        border-radius: 8px 8px 0 0;
    }

    .main-service .card-bdy {
        border-radius: 8px !important;
        padding: 20px;
    }

    .main-service .services-title {
        font-size: 2.5rem;
        font-weight: 400;
        margin-bottom: 30px;
        color: #333;
    }

    /* Service Cards */
    .main-service .service-card {
        border: none;
        border-radius: 8px;
        height: 260px;
        max-height: 350px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        transition: all 0.3s ease;
    }

    .main-service .service-card:hover {
        transform: translateY(-5px);
        box-shadow: rgba(99, 99, 99, 0.3) 0px 4px 12px 0px;
    }

    .main-service .service-card .card-title {
        border-radius: 8px 8px 0 0;
        color: #fff;
        font-weight: 500;
        padding: 20px;
        font-size: 18px;
        margin-bottom: 15px;
        background-color: var(--accent-color);
    }

    .main-service .service-card .card-text {
        color: #1d1d1dcc;
        font-weight: 300;
        font-size: 1rem;
    }

    .main-service .service-card .btn-link {
        margin-top: 20px;
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 600;
        padding: 0;
    }

    /* Responsive Styles */
    @media (max-width: 767px) {
        .main-service .service-card {
            height: auto;
            width: 80%;
            margin: auto;
            display: block;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .main-service .service-card {
            height: 300px;
        }
    }
</style>

<div class="main-service" style="overflow: hidden;">
    <div class="container">
        <div class="title-top mb-3">
            <div class="trust-badge" style="color:#1d1d1d">Zoho Implementation</div>
        </div>
        <hr>
        <div class="swiper-container" style="overflow: hidden;">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zohoone">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <a href="">
                                        <h5 class="card-title">Zoho One
                                        </h5>
                                    </a>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">An all-in-one suite offering 50+ integrated apps to run your
                                        entire
                                        business
                                        from one platform.</p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohoone" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/zoho-logo.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="swiper-slide">
                    <a href="?page=zohocrm">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho CRM</h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A powerful CRM tool to manage sales, marketing, and customer
                                        support,
                                        streamlining your customer interactions.</p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohocrm" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/crm.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="swiper-slide">
                    <a href="?page=zohobooks">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho Books
                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">An intuitive cloud-based accounting software to automate your
                                        finances and
                                        manage business accounts effortlessly.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohobooks" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/zoho-books_3ex2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="swiper-slide">
                    <a href="?page=zohoinventory">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho Inventory
                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A robust inventory management system for tracking stock,
                                        fulfilling orders,
                                        and managing warehouses.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohoinventory" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/inventory.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 5 -->
                <div class="swiper-slide">
                    <a href="?page=zohoanalytics">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho Analytics</h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A business intelligence platform offering deep data insights
                                        with
                                        customisable reports and dashboards.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohoanalytics" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/zoho-analytics-logo-lockup.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 6 -->
                <div class="swiper-slide">
                    <a href="?page=zohocreator">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho creator
                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A low-code platform to build custom applications that automate
                                        business
                                        processes without heavy coding.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohocreator" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/creator.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 6 -->
                <div class="swiper-slide">
                    <a href="?page=zohoprojects">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho projects

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A project management tool to plan, track, and collaborate on
                                        projects,
                                        ensuring timely completion and efficiency.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohoprojects" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/zoho-Projects-logo-lockup.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 6 -->
                <div class="swiper-slide">
                    <a href="?page=zohodesk">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho Desk

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A customer service platform that helps businesses provide
                                        top-tier support
                                        through multi-channel ticketing and automation.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohodesk" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/zoho-desk.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 6 -->
                <div class="swiper-slide">
                    <a href="?page=zohopeople">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho People

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A comprehensive HR management solution for streamlining
                                        employee records,
                                        attendance, and performance reviews.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohopeople" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/People-logo-lockup.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 6 -->
                <div class="swiper-slide">
                    <a href="?page=zohopayroll">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Zoho Payroll
                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">A simple, efficient payroll software for automating salary
                                        calculations and
                                        ensuring compliance with tax regulations.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zohopayroll" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                        <img src="assets/img/Payroll-logo-lockup.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- More cards -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<div class="main-service">
    <div class="container">
    <div class="title-top mb-3">
            <div class="trust-badge" style="color:#1d1d1d">Zoho Training</div>
        </div>
<hr>
        <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
                <!-- Training Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-training">
                        <div class="card service-card">
                            <div class="card-body">
                                <h5 class="card-title">Zoho Functional Training</h5>
                                <div class="card-bdy">
                                    <p class="card-text">Designed for clients, end-users, and business owners aiming for
                                        in-depth functional knowledge of Zoho.</p>
                                    <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                                            class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Training Card 2 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-training">
                        <div class="card service-card">
                            <div class="card-body">
                                <h5 class="card-title">Technical Zoho Training</h5>
                                <div class="card-bdy">
                                    <p class="card-text">For IT professionals and new developers interested in
                                        customising and developing with Zoho.</p>
                                    <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                                            class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Training Card 3 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-training">
                        <div class="card service-card">
                            <div class="card-body">
                                <h5 class="card-title">Corporate Zoho Training</h5>
                                <div class="card-bdy">
                                    <p class="card-text">For businesses utilising Zoho, covering in-depth functional and
                                        technical topics.</p>
                                    <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                                            class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<div class="main-service" style="overflow: hidden;">
    <div class="container">
    <div class="title-top mb-3">
            <div class="trust-badge" style="color:#1d1d1d">Zoho Support</div>
        </div>
        <hr>
        <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-support">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <a href="?page=zoho-support">
                                        <h5 class="card-title">Zoho Support & Maintenance

                                        </h5>
                                    </a>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text"> Invisor’s expert team offers end-to-end Zoho support,
                                        resolving technical
                                        issues and providing tailored solutions to enhance your business.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-support">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <a href="?page=zoho-training">
                                        <h5 class="card-title">Responsive Support

                                        </h5>
                                    </a>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">Get timely assistance for any Zoho-related queries or issues.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-support">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Expert Guidance
                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">Benefit from our team's extensive knowledge and experience with
                                        Zoho
                                        applications.
                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-support">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Customised Solutions

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">We tailor our support to meet the specific needs of your
                                        business.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-support">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Proactive Monitoring

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">Stay ahead of potential issues with our regular system checks.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<div class="main-service">
    <div class="container">
    <div class="title-top mb-3">
            <div class="trust-badge" style="color:#1d1d1d">Zoho Cunsultant Hire</div>
        </div>
        <hr>
        <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-hire">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <a href="?page=zoho-hire">
                                        <h5 class="card-title">Hire


                                        </h5>
                                    </a>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text"> Hire Dedicated & Certified Zoho consultants From Invisor on
                                        Contract Basis
                                        For Short Term Or Long Term.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-hire">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <a href="?page=zoho-hire">
                                        <h5 class="card-title">Assign

                                        </h5>
                                    </a>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">Assign Your Tasks And Manage Our Resources According to Your
                                        Project Plan.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="swiper-slide">
                    <a href="?page=zoho-hire">
                        <div class="card service-card hvr-underline-from-left">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5 class="card-title">Get Output

                                    </h5>
                                </div>
                                <div class="card-bdy">
                                    <p class="card-text">Get Outputs on Time And Deliver It to Clients successfully.

                                    </p>
                                    <div class="tab-bottom">
                                        <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                                                class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>



<style>
    /* =========== */
    .services-section .show-more a:hover {
        color: var(--accent-color);
    }

    /* Flexbox positioning for Tabs and Show More Button */

    /* Responsive Styles */
    @media (min-width: 992px) {
        .services-section .services-title {
            margin-right: 50%;
        }
    }

    @media (max-width: 768px) {
        .services-section .services-title {
            font-size: 2rem;
        }

        .services-section .nav-tabs .nav-link {
            font-size: 0.9rem;
            margin-right: 10px;
        }

        .services-section .service-card .card-title {
            font-size: 1.1rem;
        }

        .services-section .service-card .card-text {
            font-size: 0.9rem;
        }

        .services-section .show-more {
            text-align: center;
            margin-top: 20px;
        }
    }

    @media (max-width: 576px) {
        .services-section .nav-tabs .nav-link {
            padding: 8px;
            font-size: 0.85rem;
        }

        .services-section .services-title {
            font-size: 1.8rem;
        }

        .services-section .show-more {
            margin-top: 20px;
        }
    }

    .tab-bottom {
        margin-top: 10px;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
    }

    .tab-bottom img {
        max-width: 80px !important;
    }

    .services-section .contact-btn {
        justify-content: left !important;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all var(--transition-speed) ease;
    }

    .trining-tab1 .tab-bottom {
        display: block !important;
    }
</style>
<!-- ====================================newsletter================================== -->
<style>
    .newsletter-section {
        background-color: #e4e5e5;
        padding: 40px 0;
        position: relative;
        overflow: hidden;
    }

    .newsletter-container {
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .newsletter-content {
        max-width: 600px;
    }

    .newsletter-label {
        color: var(--accent-color);
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .newsletter-title {
        font-weight: 400;
        font-size: 36px;
        color: #1d1d1d;
        margin: 0;
        line-height: 1.2;
    }

    .newsletter-subtitle {
        font-weight: 400;
        font-size: 36px;
        color: #1d1d1d;
        margin: 0 0 20px 0;
        line-height: 1.2;
    }

    .newsletter-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 500px;
    }

    .newsletter-input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ddd;
        font-size: 16px;
    }

    .newsletter-button {
        background-color: var(--accent-color);
        color: white;
        border: none;
        padding: 12px 25px;
        width: 40%;
        margin: auto;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .newsletter-button:hover {
        background-color: #0f065c;
    }

    .newsletter-image {
        position: absolute;
        bottom: 0;
        right: 10%;
        max-width: 400px;
        height: auto;
    }

    @media (max-width: 768px) {
        .newsletter-container {
            flex-direction: column;
        }

        .newsletter-title,
        .newsletter-subtitle {
            font-size: 25px;
        }

        .newsletter-form {
            width: 100%;
        }

        .newsletter-image {
            display: none;
        }
    }

    .slide-bg-1 {
        z-index: 1;
        background-color: var(--accent-color);
        align-self: center;
        width: 5px;
        height: 120%;
        margin: auto;
        position: absolute;
        top: 0%;
        bottom: 0%;
        left: 60%;
        right: auto;
        transform: skew(-10deg);
    }

    .slide-bg {
        width: 45%;
        background-color: #fff;
        position: absolute;
        right: -5%;
        bottom: 0;
        top: 0;
        transform: skew(-10deg);
    }

    @media (max-width: 900px) {
        .slide-bg {
            background-color: #e4e5e5;
        }
    }

    @media (max-width: 900px) {

        .slide-bg,
        .slide-bg-1 {
            display: none
        }

        .newsletter-image {
            position: absolute;
            bottom: 0;
            right: 0%;
            max-width: 400px;
            height: auto;
        }
    }

    @media (max-width: 769px) {
        .newsletter-image {
            display: none;
        }

    }
</style>

<div class="newsletter-section" data-aos="zoom-in-up" id="newsletter">
    <div class="newsletter-container container">

        <div class="newsletter-content">

            <div class="title-top">
                <div class="title-dot"></div>
                <div class="trust-badge">STAY CONNECTED</div>
            </div>
            <h2 class="newsletter-title">Join our network.
            </h2>
            <h2 class="newsletter-subtitle">Sign up for updates and insights.
            </h2>
            <form class="newsletter-form">
                <input type="text" class="newsletter-input" placeholder="Your Name" required>
                <input type="email" class="newsletter-input" placeholder="Your Email" required>
                <input type="tel" class="newsletter-input" placeholder="Your Phone" required> <button type="submit"
                    class="newsletter-button">Join Now</button>
            </form>
        </div>
        <div class="slide-bg-1"></div>
        <div class="slide-bg"> </div>

        <img src="assets/img/woman.png" alt="Professional woman with clipboard" class="newsletter-image">
    </div>
</div>