<div class="container pt-3">
    <div class="title-top mt-5 pt-5">
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
@media (max-width:500px) {
    .left-side,.right-side{clip-path: none;}
    .paragraph-wrap {
        width: 100% !important;
    }

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

<section id="features" class="features section">
    <div class="title-top justify-content-center">
        <div class="title-dot"></div>
        <div class="trust-badge">OUR PARTNER</div>
    </div>

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h1 style="font-weight: 300;">Together shaping a future of Success</h1>
    </div><!-- End Section Title -->

    <div class="container-fluid partners">
        <div class="container">
            <div class="row partner-sm">
                <div class="col-md-3 ptner">
                    <img src="assets/img/arabian-software.svg" alt="">
                </div>
                <div class="col-md-1 ptner">
                    <img src="assets/img/icons/handshake.svg" alt="" class="hand-shake">
                </div>
                <div class="col-md-4 ptner">
                    <img src="assets/img/zoho-logo.svg" alt="">
                </div>
                <div class="col-md-1 ptner">
                <img src="assets/img/icons/handshake.svg" alt="" class="hand-shake">
                </div>
                <div class="col-md-3 ptner">
                    <img class="partner-img" src="assets/img/Invisor_logo-rbg.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <h6 class="partner-text">Our partnership with Arabian Software, an award-winning Zoho One partner with over a
            decade of
            experience, brings our clients top-tier solutions. With a shared commitment to “serving better,” we
            provide tailored, high-impact tools that streamline processes, increase productivity, and empower
            businesses to meet challenges head-on. Together, we’re dedicated to driving meaningful results and
            supporting our clients’ success in a competitive landscape.</h6>
    </div>
</section>

<style>
    /*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
    .partners {
        height: auto;
        margin-bottom: 50px;
    }
.partners .ptner{margin: auto;}
    .partners img {
        height: auto;
        width: 50%;
        margin: auto;
        display: block;
    }

    .partners .partner-img {
        width: 60%;
    }
    .partners .partner-sm {width: 92%;margin: auto;

    }
    .partners h6,
    .partner-text {
        width: 80%;
        margin: 10px auto;
        text-align: justify;
        line-height: 1.6;
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
        font-weight: 300;
        color: #1d1d1d;
    }



    @media (max-width:991px) {
        .partners {
            height: auto;
        }

        .partners img {
            height: auto;
            width: 50%;
        }
    }
    @media (max-width:767px) {
        .ptner{margin-bottom: 30px;}
.hand-shake{width: 20% !important;}
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
                <a
                    href="https://www.linkedin.com/in/alextomjoseph?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                        class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/alex.jpeg" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Alex Tom Joseph</h3>
                    <p>CMA</p>
                </div>
                <a
                    href="https://www.linkedin.com/in/alextomjoseph?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                        class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-3.jpeg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Ashfaq Abdullah</h3>
                    <p>CMA</p>
                </div>
                <a href="https://www.linkedin.com/in/ashfaq-abdullah-9840b9141/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/sanoop4.jpeg" alt="Jane Jacobs">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sanoop KS</h3>
                    <p>MCA</p>
                </div>
                <a
                    href="https://www.linkedin.com/in/sanoop-developer?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                        class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/bernie-invisor.webp" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Bernie Keim</h3>
                    <p>MBA,FCPA,FCGA</p>
                </div>
                <a
                    href="https://www.linkedin.com/in/bernie-keim-mba-fcpa-fcga-9063819?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                        class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/sisir-2.jpg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sisir Sasikumar</h3>
                    <p>ITIL V4</p>
                </div>
                <a
                    href="https://www.linkedin.com/in/sisir-sasikumar-peroth-93552872?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                        class="bi bi-linkedin"></i></a>
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

    .team-member img {
        max-width: 400px;
        max-height: 200px;
        object-fit: cover;
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

<div class="vision-section hvr-shutter-in-horizontal" id="vision">
    <div class="vision-content">
        <div class="title-top justify-content-center">
            <div class="title-dot" style="background-color: #fff;"></div>
            <div class="trust-badge" style="color:#fff">OUR VISION</div>
        </div>
        <p class="vision-text">
            We aspire to set new standards for precision and efficiency, becoming the catalyst for our clients' enduring
            success and prosperity.
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
        color: #000 !important;
        /* Change text color to black */

    }

    .vision-section:hover .title-dot {
        background-color: #000 !important;
    }

    .vision-text {
        font-weight: 300;
        color: #ffffff;
        font-size: 1.8rem;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto;
    }
</style>


  <!-- =============================================testimonial====================================== -->
  <!-- =============================================testimonial====================================== -->

  <section class="testimonials-section" id="testimonial" data-aos="zoom-in-up">
    <div class="container">
      <div class="section-heading">
        <div class="title-top align-items-center justify-content-center mb-4">
          <div class="title-dot"></div>
          <div class="trust-badge">TESTIMONIALS</div>
        </div>
        <h2 class="section-title pb-0">Hear what our satisfied clients have to say</h2>
      </div>

      <div class="testimonials-container">
        <!-- Swiper -->
        <div class="swiper-container" style="overflow: hidden;">
          <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Our Zoho setup was made easy and stress-free by Invisor. Their team really listened to what we needed, and now our daily tasks run so much smoother!
                  "
                </p>
                <div class="client-info">
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
                  "Working with Invisor was a game-changer for our team. Their thorough understanding of Zoho's capabilities allowed us to optimise our workflows and enhance our overall efficiency.
                  "
                </p>
                <div class="client-info">
                  <div class="client-details">
                    <p class="client-name">Christopher Bryn Murray</p>
                    <p class="client-title">Vamoose Electric Cycle Ltd</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "The team provided exceptional support during our Zoho implementation. They tailored everything to fit our business, and their training made it simple for our team to get on board."
                </p>
                <div class="client-info">
                  <div class="client-details">
                    <p class="client-name">Tarun Tadepalli</p>
                    <p class="client-title">Zelecloud</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Their approach to Zoho implementation transformed how we operate. Invisor's insights into workflow optimization have increased our productivity and streamlined our processes effortlessly."
                </p>
                <div class="client-info">
                  <div class="client-details">
                    <p class="client-name">Mujeeb T C</p>
                    <p class="client-title">Al Farha Coal Ind LLC</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "From planning to execution, the team’s attention to detail and expertise with Zoho ensured a smooth setup. They tailored everything perfectly to our needs, making the system intuitive and valuable for our team."
                </p>
                <div class="client-info">
                  <div class="client-details">
                    <p class="client-name">Arunkumar</p>
                    <p class="client-title">Asala of East Gulf LLC</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- Card 6 -->
            <div class="swiper-slide">
              <div class="testimonial-card">
                <p class="testimonial-text">
                  "Their expertise allows us to fully customise our Zoho systems to our needs, allowing us to focus on growth without worrying about the details."
                </p>
                <div class="client-info">
                  <div class="client-details">
                    <p class="client-name">Andrew McArthur</p>
                    <p class="client-title">Frenzimpex Building Materials Trading LLC</p>
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
      font-size: 2.8rem;
      font-weight: 300;
      color: #333;
    }
@media (max-width:991px) {
  .section-title {
      font-size: 2rem;
  }
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
        height: 250px;
        max-height: 310px;
      }
      .testimonial-text {text-align: justify;
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
      align-items: center;justify-content: center;
    }


    .client-details {
      text-align: left;
    }
@media (min-width:768px) {
  .client-details {position: absolute;bottom: 20px;
  }
}
    .client-name {text-align: center;
      font-size: 16px;
      font-weight: bold;
      color: #333;
      margin-bottom: 0;
    }

    .client-title {text-align: center;
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


<div class="clients-section d-none">
    <div class="clients-content">
        <div class="title-top justify-content-center">
            <div class="title-dot"></div>
            <div class="trust-badge">DON'T JUST TRUST, TRY</div>
        </div>
        <h2 class="clients-heading">Organizations we've worked with</h2>
        <div class="clients-logos">
            <a href="https://www.pg.com" target="_blank" aria-label="P&G"><img src="pg-logo.png" alt="P&G"></a>
            <a href="https://www.att.com" target="_blank" aria-label="AT&T"><img src="att-logo.png" alt="AT&T"></a>
            <a href="https://www2.deloitte.com" target="_blank" aria-label="Deloitte"><img src="deloitte-logo.png"
                    alt="Deloitte"></a>
            <a href="https://www.allianz.com" target="_blank" aria-label="Allianz"><img src="allianz-logo.png"
                    alt="Allianz"></a>
            <a href="https://www.coca-cola.com" target="_blank" aria-label="Coca-Cola"><img src="cocacola-logo.png"
                    alt="Coca-Cola"></a>
            <a href="https://www.amazon.com" target="_blank" aria-label="Amazon"><img src="amazon-logo.png"
                    alt="Amazon"></a>
        </div>
    </div>
</div>
<style>
    .clients-section {
        background-color: #ffffff;
        /* white background for the section */
        padding: 60px 20px;
        text-align: center;
    }


    .clients-heading {
        color: #333333;
        font-size: 1.5rem;
        margin-bottom: 40px;
        font-weight: 300;
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