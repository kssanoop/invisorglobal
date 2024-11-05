<main class="main">
  <div id="banner" class="banner">

    <div class="container hero-section">
      <div class="row banner-hero">
        <div class="col-md-6 banner-text">
          <div class="title-top">
            <div class="title-dot"></div>
            <div class="trust-badge">DON'T JUST TRUST, TRY</div>
          </div>
          <h1 class="hero-title">Let <img src="assets/img/zoho-logo.svg" alt="" style="width: 100px;"> help your
            business grow
          </h1>
          <p class="hero-subtitle">We specialise in implementing expert Zoho solutions for businesses of all sizes
          </p>
          <a href="?page=services" class="hover-button2 me-2">Our Services</a>
          <a href="?page=contact" class="hover-button">Book Consultation</a>
        </div>
        <div class="col-md-6">
          <img src="assets/img/banner-img.png" alt="Two professional women working together" class="img-fluid">
        </div>
      </div>
      <div class="imgs d-none justify-content-between mt-5" style="width: 50%;">
        <img src="assets/img/zoho-logo.svg" alt="">
        <img src="assets/img/Zoho_Mail-256.png" alt="">
      </div>

    </div>
  </div>
  <style>
        @media (max-width:991px) {
          .hero-section .title-top{justify-content: center !important;}

    }
    .imgs img {
      width: 50px;
    }

    .imgs img {
      /* Add the infinite animation for continuous movement */
      animation: move-left-right 2s infinite ease-in-out;
    }

    @keyframes move-left-right {
      0% {
        transform: translateX(0);
      }

      50% {
        transform: translateX(50px);
        /* Move 20px to the right */
      }

      100% {
        transform: translateX(0);
        /* Back to the original position */
      }
    }

    .imgs img:first-child {
      /* Add reverse animation for the first image */
      animation: move-left-right-reverse 2s infinite ease-in-out;
    }

    @keyframes move-left-right-reverse {
      0% {
        transform: translateX(0);
      }

      50% {
        transform: translateX(-50px);
        /* Move 20px to the left */
      }

      100% {
        transform: translateX(0);
        /* Back to the original position */
      }
    }
  </style>
  <!-- ====================================servise==================================== -->

  <style>
    /* General Styles for the Services Section */
    .services-section {
      position: relative;
      padding: 50px 0;
    }

    .services-section .card-body {
      background-color: #fff;
      padding: 0;
    }

    .services-section .card-bdy {
      padding: 20px;
    }

    .services-section .services-title {
      font-size: 2.5rem;
      font-weight: 400;
      margin-bottom: 30px;
      color: #333;
    }

    .services-section .services-badge {
      color: var(--accent-color);
      padding: 5px 10px;
      display: inline-block;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    /* Nav Tab Styles */
    .services-section .nav-tabs {
      margin-bottom: 30px;
    }

    .services-section .nav-tabs .nav-link {
      border: none;
      color: #6c757d;
      padding: 10px 0;
      margin-right: 20px;
      font-weight: 500;
      font-size: 16px;
      text-align: center;
    }

    .services-section .nav-tabs .nav-link.active {
      background-color: transparent;
      color: var(--accent-color);
      border-bottom: 2px solid var(--accent-color);
    }

    /* Service Cards */
    .services-section .service-card {position: relative;
      border: none;
      border-radius: 8px;
      height: 260px;
      max-height: 350px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      transition: all 0.3s ease;
    }


    @media (max-width:767px) {
      .services-section .service-card {
        height: auto;
      }

      .services-section .service-card {
        width: 80%;
        margin: auto;
        display: block;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .services-section .service-card {
        height: 300px;
      }

    }

    .services-section .service-card:hover {
      transform: translateY(-5px);
      box-shadow: rgba(99, 99, 99, 0.3) 0px 4px 12px 0px;
    }

    .services-section .service-card .card-title {
      color: #fff;
      font-weight: 500;
      padding: 20px;
      font-size: 18px;
      margin-bottom: 15px;
      background-color: var(--accent-color);
    }

    .services-section .service-card .card-text {
      color: #1d1d1dcc;
      font-weight: 300;
      font-size: 1rem;
    }

    .services-section .service-card .btn-link {
      color: var(--accent-color);
      text-decoration: none;
      font-weight: 600;
      padding: 0;
    }


    /* Show More Link */
    .services-section .show-more a {
      color: #6c757d;
      text-decoration: none;
      font-size: 1rem;
      white-space: nowrap;
      /* Ensures the button doesn't wrap */
    }

    /* =========== */

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
      .tab-bottom{position: absolute;bottom: 10px;min-width: 300px;}
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
      padding: 0 20px 20px;
      display: flex !important;
      align-items: center !important;
    }

    .tab-bottom img {margin: auto !important;
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

    .services-section .tab-content img {
      margin: 0;
    }
  </style>

  <div class="services-section">
    <div class="container">
      <div class="title-top">
        <div class="title-dot"></div>
        <div class="trust-badge">SERVICES</div>
      </div>
      <h2 class="services-title">The Operating System for your Business</h2>

      <!-- Flexbox container for Tabs and Show More Button -->
      <div class="tab-top">
        <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tax-tab" data-bs-toggle="tab" data-bs-target="#tax" type="button"
              role="tab" aria-controls="tax" aria-selected="true">Zoho Implementation</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="bookkeeping-tab" data-bs-toggle="tab" data-bs-target="#bookkeeping"
              type="button" role="tab" aria-controls="bookkeeping" aria-selected="false">Zoho Training
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="consulting-tab" data-bs-toggle="tab" data-bs-target="#consulting" type="button"
              role="tab" aria-controls="consulting" aria-selected="false">Zoho Support
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="hire-tab" data-bs-toggle="tab" data-bs-target="#hire" type="button" role="tab"
              aria-controls="hire" aria-selected="false">Zoho Cunsultant Hire
            </button>
          </li>

        </ul>
        <!-- Show More Link placed to the right of the tabs -->
      </div>

      <div class="tab-content" id="serviceTabsContent" data-aos="zoom-in-up">
        <div class="tab-pane fade show active" id="tax" role="tabpanel" aria-labelledby="tax-tab">
          <!-- Swiper -->
          <div class="swiper-container" style="overflow: hidden;">
            <div class="swiper-wrapper">
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zohoone">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zohoone">
                        <h5 class="card-title">Zoho One
                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">An all-in-one suite offering 50+ integrated apps to run your entire
                        business
                        from one platform.</p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohoone" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/zoho-logo.svg" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 2 -->
              <div class="swiper-slide">
                <a href="?page=zohocrm">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho CRM</h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A powerful CRM tool to manage sales, marketing, and customer support,
                        streamlining your customer interactions.</p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohocrm" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/crm.svg" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 3 -->
              <div class="swiper-slide">
                <a href="?page=zohobooks">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho Books
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">An intuitive cloud-based accounting software to automate your finances and
                        manage business accounts effortlessly.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohobooks" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/zoho-books_3ex2.png" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 4 -->
              <div class="swiper-slide">
                <a href="?page=zohoinventory">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho Inventory
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A robust inventory management system for tracking stock, fulfilling orders,
                        and managing warehouses.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohoinventory" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/inventory.png" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 5 -->
              <div class="swiper-slide">
                <a href="?page=zohoanalytics">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho Analytics</h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A business intelligence platform offering deep data insights with
                        customisable reports and dashboards.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohoanalytics" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/zoho-analytics-logo-lockup.png" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 6 -->
              <div class="swiper-slide">
                <a href="?page=zohocreator">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho creator
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A low-code platform to build custom applications that automate business
                        processes without heavy coding.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohocreator" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/creator.png" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 6 -->
              <div class="swiper-slide">
                <a href="?page=zohoprojects">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho projects

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A project management tool to plan, track, and collaborate on projects,
                        ensuring timely completion and efficiency.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohoprojects" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/zoho-Projects-logo-lockup.jpg" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 6 -->
              <div class="swiper-slide">
                <a href="?page=zohodesk">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho Desk

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A customer service platform that helps businesses provide top-tier support
                        through multi-channel ticketing and automation.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohodesk" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/zoho-desk.webp" alt="">
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 6 -->
              <div class="swiper-slide">
                <a href="?page=zohopeople">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho People

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A comprehensive HR management solution for streamlining employee records,
                        attendance, and performance reviews.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohopeople" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/People-logo-lockup.jpg" alt="">
                    </div>
                  </div>
                </a>
              </div>
              <!-- Card 6 -->
              <div class="swiper-slide">
                <a href="?page=zohopayroll">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Zoho Payroll
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">A simple, efficient payroll software for automating salary calculations and
                        ensuring compliance with tax regulations.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zohopayroll" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                      <img src="assets/img/Payroll-logo-lockup.jpg" alt="">
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
        <div class="tab-pane fade" id="bookkeeping" role="tabpanel" aria-labelledby="bookkeeping-tab">
          <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zoho-training">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zoho-training">
                        <h5 class="card-title">Functional Training

                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Designed for clients, end-users, and business owners aiming for in-depth
                        functional knowledge of Zoho.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>

                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 2 -->
              <div class="swiper-slide">
                <a href="?page=zoho-training">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Technical Training
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Designed for IT professionals and new developers interested in customising
                        and developing with Zoho, this training covers:
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 3 -->
              <div class="swiper-slide">
                <a href="?page=zoho-training">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Corporate Training

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Our corporate training is designed for businesses utilising Zoho and those
                        transitioning their operations to the platform. The training covers
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-training" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
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
        <div class="tab-pane fade" id="consulting" role="tabpanel" aria-labelledby="consulting-tab">
          <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zoho-support">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zoho-support">
                        <h5 class="card-title">Zoho Support & Maintenance

                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text"> Invisor’s expert team offers end-to-end Zoho support, resolving technical
                        issues and providing tailored solutions to enhance your business.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zoho-support">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zoho-support">
                        <h5 class="card-title">Responsive Support

                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Get timely assistance for any Zoho-related queries or issues.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 2 -->
              <div class="swiper-slide">
                <a href="?page=zoho-support">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Expert Guidance
                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Benefit from our team's extensive knowledge and experience with Zoho
                        applications.
                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 3 -->
              <div class="swiper-slide">
                <a href="?page=zoho-support">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Customised Solutions

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">We tailor our support to meet the specific needs of your business.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 4 -->
              <div class="swiper-slide">
                <a href="?page=zoho-support">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Proactive Monitoring

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Stay ahead of potential issues with our regular system checks.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-support" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
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
        <div class="tab-pane fade" id="hire" role="tabpanel" aria-labelledby="hire-tab">
          <div class="swiper-container trining-tab1" style="overflow: hidden;">
            <div class="swiper-wrapper">
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zoho-hire">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zoho-hire">
                        <h5 class="card-title">Hire


                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text"> Hire Dedicated & Certified Zoho consultants From Invisor on Contract Basis
                        For Short Term Or Long Term.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 1 -->
              <div class="swiper-slide">
                <a href="?page=zoho-hire">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <a href="?page=zoho-hire">
                        <h5 class="card-title">Assign

                        </h5>
                      </a>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Assign Your Tasks And Manage Our Resources According to Your Project Plan.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
                    </div>

                  </div>
                </a>
              </div>
              <!-- Card 2 -->
              <div class="swiper-slide">
                <a href="?page=zoho-hire">
                  <div class="card service-card hvr-underline-from-left">
                    <div class="card-top">
                      <h5 class="card-title">Get Output

                      </h5>
                    </div>
                    <div class="card-bdy">
                      <p class="card-text">Get Outputs on Time And Deliver It to Clients successfully.

                      </p>
                    </div>
                    <div class="tab-bottom">
                      <a href="?page=zoho-hire" class="btn btn-link contact-btn">Learn more <i
                          class="bi bi-arrow-right-short"></i></a>
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

    </div>
  </div>

  <!-- =============================================about=============================================== -->
  <div class="about-section">
    <div class="image-side">
      <img src="assets/img/about-img.jpg" alt="Three professional women reviewing documents">
    </div>

    <div class="content-side">
      <div class="title-top">
        <div class="title-dot"></div>
        <div class="trust-badge">ABOUT US</div>
      </div>
      <h1 class="about-heading">Your Success, Simplified with Our Expert Solutions</h1>

      <p class="about-description">
        At Invisor, our global team of certified finance professionals, focusing on transforming businesses through
        innovative finance and digital solutions. With extensive experience in sectors such as IT, hospitality,
        financial services, and retail, we specialise in high-impact consulting and large-scale change management.

      </p>

      <div class="stats-container d-none">
        <div class="stat-item">
          <div class="stat-number">43mil+</div>
          <div class="stat-label">REVENUE</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">14+</div>
          <div class="stat-label">EMPLOYEES</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">120+</div>
          <div class="stat-label">CLIENTS</div>
        </div>
      </div>
    </div>

    <div class="learn-more-section" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
      <a href="?page=about">
        <div class="lern-more" style="width: 50%;margin: auto;display: block;">
          <span class="arrow" style="color: #fff;">→</span>
          <div class="learn-more-text">Get a glimpse into our team and work ethics</div>
        </div>
      </a>
    </div>
  </div>
  <style>
    .about-section {
      position: relative;
      display: flex;
      height: 600px;
      background: white;
      overflow: hidden;
    }

    .image-side {
      position: relative;
      width: 50%;
      clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
    }

    .image-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content-side {
      max-width: 550px;
      width: 50%;
      padding: 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: white;
    }

    .about-label {
      color: var(--accent-color);
      font-size: 14px;
      text-transform: uppercase;
      margin-bottom: 20px;
      letter-spacing: 0.5px;
    }

    .about-heading {
      font-size: 42px;
      color: #333;
      margin-bottom: 30px;
      font-weight: 500;
      line-height: 1.2;
    }

    .about-description {
      color: #1d1d1dcc;
      font-weight: 300;
      line-height: 1.6;
      margin-bottom: 50px;
      font-size: 18px;
    }

    .stats-container {
      display: flex;
      gap: 80px;
      margin-bottom: 50px;
    }

    .stat-item {
      display: flex;
      flex-direction: column;
    }

    .stat-number {
      font-size: 38px;
      color: var(--accent-color);
      font-weight: 500;
      margin-bottom: 8px;
    }

    .stat-label {
      color: #666;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .learn-more-section {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60%;
      background: var(--accent-color);
      padding: 30px;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      clip-path: polygon(0 0, 79% 0, 95% 170%, 0 100%);
    }

    .learn-more-text {
      font-size: 24px;
      color: white;
      font-weight: 300;
    }

    .arrow {
      font-size: 24px;
      margin-right: 20px;
    }

    @media (min-width: 1100px) {
      .learn-more-section {
        padding-left: 10%;
      }
    }

    @media (max-width: 1024px) {
      .about-section {
        flex-direction: column;
        height: auto;
      }

      .image-side,
      .content-side {
        width: 100%;
      }

      .content-side {
        margin: auto;
      }

      .image-side {
        height: 400px;
        clip-path: none;
      }

      .content-side {
        padding: 40px 20px;
      }

      .stats-container {
        gap: 40px;
      }

      .learn-more-section {
        position: relative;
        width: 100%;
      }
    }

    @media (min-width: 1024px) and (max-width: 1400px) {
      .about-section .lern-more {
        margin: 0 !important;
      }
    }

    @media (max-width: 1200px) {
      .about-section .lern-more {
        width: 60% !important;
      }

      .learn-more-text br {
        display: none;
        /* Hide the <br> on screens 991px and below */
      }
    }
  </style>
  <!-- =============================================testimonial====================================== -->

  <section class="testimonials-section" data-aos="zoom-in-up">
    <div class="container">
      <div class="section-heading">
        <div class="title-top align-items-center justify-content-center mb-4">
          <div class="title-dot"></div>
          <div class="trust-badge">TESTIMONIALS</div>
        </div>
        <h2 class="section-title">Hear what our satisfied clients have to say</h2>
      </div>

      <div class="testimonials-container">
        <!-- Swiper -->
        <div class="swiper-container" style="overflow: hidden;">
          <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Invisor made our Zoho setup easy and stress-free. Their team really listened to what we
                  needed, and
                  now
                  our daily tasks run so much smoother!
                  "
                </p>
                <div class="client-info">
                  <img src="assets/img/team/Xavier-photo.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Xavier Tom Joseph</p>
                    <p class="client-title"> CEO Happix </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Invisor made our Zoho setup easy and stress-free. Their team really listened to what we
                  needed, and
                  now our daily tasks run so much smoother!
                  "
                </p>
                <div class="client-info">
                  <img src="assets/img/team/team-3.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title"> CEO Netflix </p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Invisor delivered a flawless Zoho integration for our company. Their professionalism
                  and dedication
                  to understanding our requirements made all the difference in achieving our operational
                  goals. "
                </p>
                <div class="client-info">
                  <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title">CEO</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "The training and ongoing support from Invisor were invaluable during our Zoho
                  transition. They
                  empowered our team with the knowledge and tools to maximise the system's potential."
                </p>
                <div class="client-info">
                  <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title">PROJECT MANAGER</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Invisor's team exhibited a high level of expertise throughout our Zoho implementation.
                  Their
                  strategic insights and hands-on approach helped us leverage Zoho to its fullest, driving
                  measurable
                  results. "
                </p>
                <div class="client-info">
                  <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title">IT DIRECTOR</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 6 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "The Invisor team provided exceptional support during our Zoho implementation. They
                  tailored
                  everything to fit our business, and their training made it simple for our team to get on
                  board. "
                </p>
                <div class="client-info">
                  <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title">CEO DHL</p>
                  </div>
                </div>
              </div>

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
  </section>

  <style>
    .swiper-pagination {
      position: relative;
      bottom: 0px;
      text-align: center;
      margin-top: 10px;
    }

    .testimonials-section {
      background-color: #f9f9f9;
      padding: 50px 0;
      text-align: center;
    }

    .section-heading {
      margin-bottom: 30px;
    }

    .section-title {
      font-size: 36px;
      font-weight: 300;
      color: #333;
    }

    .testimonials-container {
      position: relative;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .testimonial-card {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      flex: 1;
    }

    @media (min-width:768px) {
      .testimonial-card {
        height: 280px;
        max-height: 320px;
      }
    }

    .testimonial-text {
      font-size: 16px;
      font-style: italic;
      color: #666;
      margin-bottom: 20px;
    }

    .client-info {
      display: flex;
      align-items: center;
    }

    .client-photo {
      width: 50px;
      height: 50px;
      object-fit: cover;
      margin-right: 10px;
    }

    .client-details {
      text-align: left;
    }

    .client-name {
      font-size: 16px;
      font-weight: bold;
      color: #333;
      margin-bottom: 0;
    }

    .client-title {
      font-size: 14px;
      color: #999;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .testimonials-container {
        flex-direction: column;
      }

      .testimonial-card {
        margin-bottom: 20px;
      }
    }

    /* Positioning */
    .swiper-button-next {
      display: none;
      right: 0%;
      /* Place the next button 20px from the right */
    }

    .swiper-button-prev {
      display: none;
      left: -0%;
      /* Place the prev button 20px from the left */
    }
  </style>
  <!-- ===============================contact=========================== -->
  <style>
    .contact-section {
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: stretch;
      max-height: 400px;
      background-color: #f8f9fa;
    }

    .contact-content {
      background-color: var(--accent-color);
      padding-top: 50px;
      flex: 1;
      position: relative;
      color: #fff;
      clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* Footer stays at the bottom */
    }

    .contact-text {
      max-width: 400px;
      margin: auto;
    }

    @media (min-width:1400px) {
      .contact-text {
        max-width: 400px;
        margin: auto 22% auto 44%;
      }

      .contact-section .contact-btn {
        width: 70% !important;
        padding-left: 32% !important;
      }

      .contact-footer {
        gap: 0;
      }
    }

    @media (min-width:1400px) and (max-width:1637px) {
      .contact-text {
        max-width: 400px;
        margin: auto 22% auto 35%;
      }
    }

    .contact-text h5 {
      color: #fff;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 1rem;
      font-weight: 600;
    }

    .contact-text h1 {
      color: #fff;
      font-size: 36px;
      font-weight: 300;
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }

    .contact-text p {
      font-size: 18px;
      font-weight: 300;
      margin-bottom: 2.5rem;
      line-height: 1.6;
      opacity: 0.9;
    }

    .contact-footer {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
      margin-top: auto;
      /* Ensures footer is at the bottom */
    }

    /* Updated contact-btn with clip-path */
    .contact-btn {
      width: 50%;
      background-color: #fff;
      color: var(--accent-color);
      padding: 0.875rem 2.5rem;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      text-align: center;
      position: relative;
      transition: all var(--transition-speed) ease;
      clip-path: polygon(0 0, 85% 0, 90% 100%, 0% 100%);
    }

    .contact-btn {
      justify-content: center;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all var(--transition-speed) ease;
    }


    .contact-btn i {
      transition: transform 0.3s ease;
    }

    .contact-btn:hover i {
      transform: translateX(5px);
    }

    .phone-details {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 1.125rem;
      transition: all 0.3s ease;
    }

    .phone-details img {
      transition: transform 0.6s ease;
      /* Smooth rotation */
    }

    /* Hover effect on phone details */
    .phone-details:hover img {
      transform: rotate(-20deg);
      /* Half rotation */
    }

    .contact-footer i {
      font-size: 1.25rem;
    }

    .contact-image {
      flex: 1;
      position: relative;
      overflow: hidden;
      clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 10% 100%);
    }

    .contact-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    @media (max-width: 768px) {
      .contact-section {
        height: auto !important;
        max-height: 100%;
        flex-direction: column;
      }

      .contact-content {
        clip-path: none;
        padding: 3rem 0 0;
        justify-content: center;
        /* Center content vertically on smaller screens */
      }

      .contact-text {
        padding-left: 5%;
      }

      .contact-text p {
        padding-right: 5%;
      }

      .contact-image {
        height: 50vh;
      }

      .contact-footer {
        align-items: center;
        gap: 1.5rem;
        margin-top: 2rem;
      }
    }
  </style>

  <div class="contact-section">
    <div class="contact-content">

      <div class="contact-text">
        <div class="title-top align-items-center mb-4">
          <div class="title-dot" style="background-color: #fff;"></div>
          <div class="trust-badge" style="color: #fff;">CONTACTS</div>
        </div>
        <h1>Let's get in Touch</h1>
        <p>Your partner in delivering tailored solutions for limitless growth
        </p>
      </div>
      <div class="contact-footer">
        <a href="#" class="contact-btn">Contact Us <i class="bi bi-arrow-right-short"></i></a>
        <div class="phone-details">
          <img src="assets/img/phonecall.svg" alt="">
          <span>+574 7348 531</span>
        </div>
      </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
      <img src="assets/img/touch.jpg" alt="People working on laptops">
    </div>
  </div>

  <!-- ===================================blog================================ -->

  <style>
    .blog-section {
      margin: 0 auto;
      padding: 3rem 1.5rem;
    }

    .blog-section h5 {
      color: var(--accent-color);
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 0.5rem;
      font-weight: 600;
      font-size: 1rem;
    }

    .blog-section h1 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .blog-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 3rem;
      border-bottom: 1px solid #ccc;
    }

    .blog-section .show-more {
      padding-bottom: 10px;
      display: flex;
      align-items: center;
      font-size: 0.9rem;
      color: #888;
      cursor: pointer;
    }

    .blog-section .show-more:hover {
      color: #000;
    }

    .blog-section .show-more i {
      margin-left: 5px;
    }

    .blog-item {
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      margin-bottom: 1.5rem;
    }

    .blog-item:hover {
      transform: translateY(-10px);
    }

    .blog-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .blog-image {
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .blog-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform var(--transition-speed) ease;
    }

    .blog-card:hover .blog-image img {
      transform: scale(1.05);
    }


    .blog-content {
      padding: 1rem;
    }

    .blog-content h3 {
      font-size: 1.25rem;
      color: #333;
      margin-bottom: 1rem;
      font-weight: 400;
    }

    .blog-content .read-more {
      display: flex;
      align-items: center;
      color: var(--accent-color);
      font-weight: 600;
      margin-top: 1rem;
      cursor: pointer;
    }

    .blog-content .read-more i {
      margin-left: 5px;
    }

    .blog-content .read-more:hover {
      color: var(--accent-color);
    }

    @media (max-width:991px) {
      .blog-htext {
        width: 100% !important;
      }

      .blog-header {
        display: block;
      }

      .blog-section .show-more {
        justify-content: end;
      }

      .blog-section h1 {
        font-size: 1.5rem;
      }

    }

    @media (min-width:1010px) {
      .blog-item {
        height: 390px;
        max-height: 400px;
      }
    }
  </style>

  <div class="container blog-section" data-aos="zoom-in-up">
    <div class="title-top">
      <div class="title-dot"></div>
      <div class="trust-badge">BLOG</div>
    </div>

    <div class="blog-header">
      <div class="blog-htext" style="width: 45%;">
        <h1>Delve into our blog for expert insights and inspiring stories</h1>
      </div>
      <div class="show-more right-arrow hvr-underline-from-left">
        <a href="">Show more <img src="assets/img/arrow.svg" alt=""></a>
      </div>
    </div>

    <div class="row">
      <!-- Blog Item 1 -->
      <div class="col-md-4 col-sm-6 col-12">
        <a href="?page=blog1">
          <div class="blog-item hvr-underline-from-left">
            <div class="blog-image">
              <img src="assets/img/blog1.jpg" alt="Retirement Planning 101">
            </div>
            <div class="blog-content">
              <h3>Why Zoho? Uncover the Key Benefits of Zoho Implementation</h3>
              <div class="read-more">Read <i class="bi bi-arrow-right-short"></i></div>
            </div>
          </div>
        </a>
      </div>

      <!-- Blog Item 2 -->
      <div class="col-md-4 col-sm-6 col-12">
        <a href="?page=blog2">
          <div class="blog-item hvr-underline-from-left">
            <div class="blog-image">
              <img src="assets/img/blog2.jpg" alt="Retirement Planning 101">
            </div>
            <div class="blog-content">
              <h3>Zoho Implementation Success Stories: Real-World Examples of Business Transformation
              </h3>
              <div class="read-more">Read <i class="bi bi-arrow-right-short"></i></div>
            </div>
          </div>
        </a>
      </div>

      <!-- Blog Item 3 -->
      <div class="col-md-4 col-sm-6 col-12">
        <a href="?page=blog3">
          <div class="blog-item hvr-underline-from-left">
            <div class="blog-image">
              <img src="assets/img/blog3.jpg" alt="Retirement Planning 101">
            </div>
            <div class="blog-content">
              <h3>Accounting Made Simple: How Zoho Books Can Revolutionise Your Finances
              </h3>
              <div class="read-more">Read <i class="bi bi-arrow-right-short"></i></div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- ==================================faq====================================== -->

  <style>
    .faq-section {
      margin: 0 auto;
      padding: 4rem 1.5rem;
    }

    .faq-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 3rem;
      border-bottom: 1px solid #cccccc;
    }

    .faq-title {
      font-size: clamp(2rem, 4vw, 2.5rem);
      color: var(--text-color);
      max-width: 500px;
      line-height: 1.2;
      font-weight: 300;
    }

    .contact-link {
      padding-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--text-color);
      text-decoration: none;
      font-size: 1rem;
      transition: color var(--transition-speed) ease;
    }

    .contact-link:hover {
      color: var(--accent-color);
    }

    .faq-item {
      background: white;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
    }

    .faq-question {
      width: 100%;
      text-align: left;
      padding: 1.5rem;
      background: none;
      border: none;
      font-size: 1.125rem;
      color: var(--text-color);
      font-weight: 500;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: color var(--transition-speed) ease;
    }

    .faq-question:hover {
      color: var(--accent-color);
    }

    .faq-question.active {
      color: var(--accent-color);
    }

    .faq-question .icon {
      color: var(--accent-color);
      width: 24px;
      height: 24px;
      position: relative;
      transition: transform var(--transition-speed) ease;
    }

    .faq-question .icon::before,
    .faq-question .icon::after {
      content: '';
      position: absolute;
      background: currentColor;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .faq-question .icon::before {
      width: 16px;
      height: 2px;
    }

    .faq-question .icon::after {
      width: 2px;
      height: 16px;
      transition: transform var(--transition-speed) ease;
    }

    .faq-question.active .icon::after {
      transform: translate(-50%, -50%) rotate(90deg);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      padding: 0 1.5rem;
      line-height: 1.6;
      color: #666;
      transition: all var(--transition-speed) ease;
    }

    .faq-answer.active {
      max-height: 300px;
      padding-bottom: 1.5rem;
    }

    @media (max-width: 768px) {
      .faq-section {
        padding: 2rem 1rem;
      }

      .faq-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }

      .contact-link {
        margin-top: 1rem;
      }
    }
  </style>

  <div class="faq-section container" data-aos="zoom-in-up">
    <div class="title-top">
      <div class="title-dot"></div>
      <div class="trust-badge">FAQ</div>
    </div>

    <div class="faq-header">
      <h1 class="faq-title">Explore your financial queries answered</h1>
      <a href="#" class="contact-link right-arrow hvr-underline-from-left">
        Contact Us
        <img src="assets/img/arrow.svg" alt="arrow">
      </a>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            How can I get started?
            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            To begin, fill out our contact form or call us. Our team will assist you in navigating our services.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            What services do you offer?


            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            We provide Zoho implementation, accounting solutions, and IT services to optimise your business operations.
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            What sets us apart?
            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            Our personalised approach, industry expertise, and commitment to delivering effective solutions distinguish
            us in the market.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            How do you ensure quality in your services?

            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            We follow strict quality control measures and continuously monitor our processes to guarantee exceptional
            results for our clients.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            Who are your typical clients?

            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            We work with businesses of all sizes, including startups, SMEs, and established corporations across various
            industries.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            Can you customise your services for my business?

            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            Absolutely! We tailor our solutions to meet the specific needs and goals of your business.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            Do you offer training for your solutions?

            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            Yes, we provide comprehensive training to help your team effectively use our Zoho solutions and services.

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="faq-item">
          <button class="faq-question">
            What is the typical timeline for implementation?

            <span class="icon"></span>
          </button>
          <div class="faq-answer">
            The timeline varies based on the complexity of your needs, but we ensure efficient planning to meet your
            deadlines.

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const questions = document.querySelectorAll('.faq-question');

      questions.forEach(question => {
        question.addEventListener('click', () => {
          questions.forEach(q => {
            if (q !== question) {
              q.classList.remove('active');
              q.nextElementSibling.classList.remove('active');
            }
          });

          question.classList.toggle('active');
          question.nextElementSibling.classList.toggle('active');
        });
      });
    });
  </script>

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

</main>