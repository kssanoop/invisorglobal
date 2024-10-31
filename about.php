<div class="container">
    <div class="title-top mt-5">
        <div class="title-dot"></div>
        <div class="trust-badge">Get to know us better</div>
    </div>
    <h2 style="font-weight: 300;">Your Success, Simplified with Our Expert Solutions
    </h2>
</div>
<div class="container-fluid hero">

    <div class="skew-wrapper">
        <div class="skew-column">
            <div class="skew-image-wrap">
                <div class="about-image left-side"></div>
            </div>
            <div class="paragraph-container">
                <div class="paragraph-wrap paragraph-wrap-left">
                    <p class="paragraph paragraph-left">With a wealth of experience across sectors like Information
                        Technology, Hospitality, Financial Services, and Retail, we specialise in delivering high-impact
                        consulting and large-scale change management solutions.

                    </p>
                </div>
            </div>
        </div>
        <div class="skew-column">
            <div class="paragraph-container">
                <div class="paragraph-wrap paragraph-wrap-right">
                    <p class="paragraph paragraph-right">At Invisor, we are a global team of Certified Public
                        Accountants, ACCAs, Cost & Management Accountants, Tax Accountants, and Certified Financial
                        Analysts, dedicated to transforming businesses through finance and digital solutions. </p>
                </div>
            </div>
            <div class="skew-image-wrap">
                <div class="about-image right-side"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Basic styling for the hero section */
    .hero {
        padding: 0;
        text-align: center;
    }


    .title-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }


    /* Flexbox layout for skewed sections */
    .skew-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin-top: 40px;
    }

    .skew-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        position: relative;
    }

    /* Image wrapper with skewed images */
    .skew-image-wrap {
        width: 100%;
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .about-image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    /* Specific alignment for left-side images */
    .left-side {
        background-image: url('assets/img/about/about-left.png');
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
        position: relative;
        left: -15px;
        /* Pull left image to align with container edge */
    }

    .right-side {
        background-image: url('assets/img/about/about-right.png');
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);
    }

    /* Paragraph styling */
    .paragraph-container {
        width: 100%;
        padding: 0 15px;
    }

    .paragraph-wrap {
        width: 70%;
        margin: 0 auto;
        max-width: 450px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    @media (min-width:1500px) {
        .paragraph-wrap {
            width: 60%;
            margin: 0;
            max-width: 100%;

        }

        .paragraph-wrap-left {
            width: 60%;
            margin: 0;
            max-width: 100%;
            margin-left: auto;
            padding-right: 15%;
            padding-left: 7%;
        }

        .paragraph-wrap-right {
            padding-left: 14%;
        }

    }

    .paragraph {
        color: #666;
        line-height: 1.6;
        font-size: 16px;
        text-align: justify;
    }

    /* Centered rectangle */
    .skew-centered-rectangle {
        width: 100px;
        height: 300px;
        background-color: #f5f5f5;
        transform: skew(-10deg);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .skew-wrapper {
            flex-direction: column;
            gap: 20px;
        }

        .skew-column {
            width: 100%;
        }

        .skew-centered-rectangle {
            width: 60px;
            height: 200px;
        }

        /* Adjust left-side image for mobile */
        .left-side {
            left: 0;
        }
    }
</style>

<section class="pillars-section">
    <div class="pillars-container">
        <div class="title-top">
            <div class="title-dot"></div>
            <div class="trust-badge">SERVICES</div>
        </div>
        <h2 class="main-title">We are building a strong foundation for growth
        </h2>
        <div class="pillars-row">
            <div class="pillar-item">
                <h3 class="pillar-title">Zoho Implementation Services
                </h3>
                <p class="pillar-description">
                    Empower your business with seamless Zoho solutions. From CRM to analytics, we specialise in
                    implementing and customising Zoho tools to streamline your operations and boost efficiency.

                </p>
            </div>
            <div class="pillar-item">
                <h3 class="pillar-title">Expert Accounting Services
                </h3>
                <p class="pillar-description">
                    Simplify your financial management with our comprehensive accounting solutions. From bookkeeping to
                    taxation, we help businesses of all sizes manage their finances with ease and precision.

                </p>
            </div>
            <div class="pillar-item">
                <h3 class="pillar-title">IT Services
                </h3>
                <p class="pillar-description">
                    Elevate your business with our IT solutions, including website development, software development,
                    app development, and UI/UX design, designed to keep your business competitive and future-ready.

                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .pillars-section {
        padding: 50px 20px;
    }

    .pillars-container {
        max-width: 1000px;
        margin: 0 auto;
    }


    .main-title {
        font-size: 36px;
        margin: 20px 0 40px;
        color: #333;
        font-weight: 300;
    }

    .pillars-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        border-bottom: 1px solid #e0e0e0;

    }

    .pillar-item {
        flex: 1;
        min-width: 250px;
        max-width: 300px;
        padding: 20px 0;
    }

    .pillar-icon {
        font-size: 30px;
        color: #4CAF50;
        margin-bottom: 15px;
    }

    .pillar-title {
        font-size: 20px;
        font-weight: 400;
        color: #333;
        margin-bottom: 10px;
    }

    .pillar-description {
        font-weight: 300;
        font-size: 18px;
        color: #1d1d1d;
        line-height: 28px;
    }
</style>

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


<section class="team-section">
<div class="title-top justify-content-center">
              <div class="title-dot"></div>
              <div class="trust-badge">OUR TEAM</div>
            </div>

    <div class="team-container ">

        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/geevar-invisor1.jpeg" alt="Jane Jacobs">
            <div class="member-info">
                <div class="team-name">
                    <h3>Geevar Thambi</h3>
                    <p>CMA, CSCA</p>
                </div>
                <a href="https://www.linkedin.com/in/alextomjoseph?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/alex.jpeg" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Alex Tom Joseph</h3>
                    <p>CMA</p>
                </div>
                <a href="https://www.linkedin.com/in/alextomjoseph?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-3.jpg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Ashfaq</h3>
                    <p></p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/sanoop.png" alt="Jane Jacobs">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sanoop KS</h3>
                    <p>MCA</p>
                </div>
                <a href="https://www.linkedin.com/in/sanoop-developer?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/bernie-invisor.webp" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Bernie Keim</h3>
                    <p>MBA,FCPA,FCGA</p>
                </div>
                <a href="https://www.linkedin.com/in/bernie-keim-mba-fcpa-fcga-9063819?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/sisir-2.jpg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sisir Sasikumar</h3>
                    <p>ITIL V4</p>
                </div>
                <a href="https://www.linkedin.com/in/sisir-sasikumar-peroth-93552872?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</section>

<style>
    .team-section {
        padding: 50px 20px;
    }

    .team-container {
        max-width: 1000px;
        margin: 0 auto;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .team-name {
        display: flex;
        justify-content: start;
        flex-direction: column;
        text-align: left;
    }

    .team-member {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 300px;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
    }

    .team-member img {max-width: 400px;max-height: 200px;object-fit: cover;
        width: 300px;
        height: auto;
    }

    .member-info {
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .member-info h3 {
        font-size: 18px;
        color: #333;
        margin-bottom: 5px;
    }

    .member-info p {
        font-size: 12px;
        color: #888;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .member-info .highlight {
        color: #4CAF50;
    }

    .linkedin-icon {
        display: inline-block;
        background-color: #0A66C2;
        color: #fff;
        border-radius: 50%;
        padding: 5px;
        font-size: 12px;
        text-decoration: none;
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>

<div class="vision-section hvr-shutter-in-horizontal">
    <div class="vision-content">
    <div class="title-top justify-content-center">
              <div class="title-dot" style="background-color: #fff;"></div>
              <div class="trust-badge" style="color:#fff">OUR VISION</div>
            </div>
        <p class="vision-text">
            We aspire to set new standards for precision and efficiency, becoming the catalyst for our clients' enduring success and prosperity.
        </p>
    </div>
</div>
<style>
    .vision-section {
    background-color: var(--accent-color); 
    padding: 60px 20px;
    text-align: center;
}

/* Hover Effect */
.vision-section:hover .vision-text,
.vision-section:hover .trust-badge {
    color: #000 !important; /* Change text color to black */

}
.vision-section:hover .title-dot{background-color: #000 !important;}

.vision-text {font-weight: 300;
    color: #ffffff;
    font-size: 1.8rem;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
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
                                <img src="assets/img/team/team-3.jpg" alt="Andrew McArthur" class="client-photo">
                                <div class="client-details">
                                    <p class="client-name">Andrew McArthur</p>
                                    <p class="client-title"> CEO Netflix </p>
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
    margin-top: 0px;
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

    .testimonials-container {position: relative;
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
height: 280px;max-height: 320px;
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
  right:0%;
  /* Place the next button 20px from the right */
}

.swiper-button-prev {
  left: 0%;
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
        clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);
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
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 15% 100%);
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



<div class="clients-section">
    <div class="clients-content">
            <div class="title-top justify-content-center">
              <div class="title-dot"></div>
              <div class="trust-badge">DON'T JUST TRUST, TRY</div>
            </div>
        <h2 class="clients-heading">Organizations we've worked with</h2>
        <div class="clients-logos">
            <a href="https://www.pg.com" target="_blank" aria-label="P&G"><img src="pg-logo.png" alt="P&G"></a>
            <a href="https://www.att.com" target="_blank" aria-label="AT&T"><img src="att-logo.png" alt="AT&T"></a>
            <a href="https://www2.deloitte.com" target="_blank" aria-label="Deloitte"><img src="deloitte-logo.png" alt="Deloitte"></a>
            <a href="https://www.allianz.com" target="_blank" aria-label="Allianz"><img src="allianz-logo.png" alt="Allianz"></a>
            <a href="https://www.coca-cola.com" target="_blank" aria-label="Coca-Cola"><img src="cocacola-logo.png" alt="Coca-Cola"></a>
            <a href="https://www.amazon.com" target="_blank" aria-label="Amazon"><img src="amazon-logo.png" alt="Amazon"></a>
        </div>
    </div>
</div>
<style>
    .clients-section {
    background-color: #ffffff; /* white background for the section */
    padding: 60px 20px;
    text-align: center;
}


.clients-heading {
    color: #333333;
    font-size: 1.5rem;
    margin-bottom: 40px;font-weight: 300;
}

.clients-logos {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}

.clients-logos img {
    max-width: 100px;
    opacity: 0.6;
    transition: opacity 0.3s ease;
}

.clients-logos img:hover {
    opacity: 1;
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
    bottom: 0;right: 10%;
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

  @media (max-width: 991px) {
    .slide-bg{    background-color: #e4e5e5;
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
    <div class="slide-bg">    </div>

      <img src="assets/img/woman.png" alt="Professional woman with clipboard" class="newsletter-image">
  </div>
</div>