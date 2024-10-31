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

    .banner-text {
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
</style>

<div class="banner-section">
    <div class="container-fluid p-0">
        <div class="container">
            <div class="row g-0">
                <!-- Content Column -->
                <div class="col-md-6 content-col">
                    <div class="title-top">
                        <div class="title-dot" style="background-color: #fff;"></div>
                        <div class="trust-badge" style="color:#fff">SERVISES</div>
                    </div>
                    <h1 class="banner-title">Your trusted partner in financial excellence</h1>
                    <p class="banner-text">Fusce volutpat lectus et nisl consectetur finibus. In vitae scelerisque
                        augue, in varius eros. Nunc sapien diam, euismod et pretium id, volutpat et tortor.</p>
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


<!-- ================================================== -->

    <!-- Features Section -->
    <section id="features" class="features section">
    <div class="title-top justify-content-center">
              <div class="title-dot"></div>
              <div class="trust-badge">OUR SERVICES</div>
            </div>

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1 style="font-weight: 300;">We are building a strong foundation for growth</h1>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <div>
                    <h4 class="d-none d-lg-block">Zoho Implementation Services</h4>
                    <p>
                    Empower your business with seamless Zoho solutions. From CRM to analytics, we specialise in implementing and customising Zoho tools to streamline your operations and boost efficiency.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <div>
                    <h4 class="d-none d-lg-block">Expert Accounting Services</h4>
                    <p>
                    Simplify your financial management with our comprehensive accounting solutions. From bookkeeping to taxation, we help businesses of all sizes manage their finances with ease and precision.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <div>
                    <h4 class="d-none d-lg-block">IT Services</h4>
                    <p>
                    Elevate your business with our IT solutions, including website development, software development, app development, and UI/UX design, designed to keep your business competitive and future-ready.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/service-tabs-1.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/service-tabs-2.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/service-tabs-3.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <style>
        /*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
.features .nav-tabs {
  border: 0;
}

.features .nav-item {
  width: 100%;
  margin-bottom: 15px;
}

.features .nav-item:last-child {
  margin-bottom: 0;
}

.features .nav-link {
  color: var(--heading-color);
  border: 0;
  padding: 30px;
  transition: 0.3s;
  border-radius: 10px;
  display: flex;
  cursor: pointer;
}


.features .nav-link h4 {
  font-size: 20px;
  font-weight: 400;
  margin: 0 0 10px 0;
  transition: 0.3s;
}

.features .nav-link p {
  font-size: 15px;
  margin: 0;
}

.features .nav-link:hover {
}

.features .nav-link.active {
  color: var(--default-color);
}

.features .tab-pane img {width: 100%;
  border-radius: 15px;
}

    </style>