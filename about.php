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
        font-size: 16px;
        color: #1d1d1d;
        line-height: 1.6;
    }
</style>

<section class="team-section">
    <div class="team-container">
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-1.jpg" alt="Jane Jacobs">
            <div class="member-info">
                <div class="team-name">
                    <h3>Geevar Thambi</h3>
                    <p>CMA, CSCA</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-2.jpg" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Alex Tom Joseph</h3>
                    <p>CMA</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-3.jpg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Ashfaq</h3>
                    <p>SENIOR TAX SPECIALIST</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-1.jpg" alt="Jane Jacobs">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sanoop KS</h3>
                    <p>SENIOR TAX SPECIALIST</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-2.jpg" alt="Olivia Wallberg">
            <div class="member-info">
                <div class="team-name">
                    <h3>Bernie Keim</h3>
                    <p>MBA,FCPA,FCGA</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member hvr-underline-from-left">
            <img src="assets/img/team/team-3.jpg" alt="Marta Cooper">
            <div class="member-info">
                <div class="team-name">
                    <h3>Sirir Sasikumar</h3>
                    <p>ITIL V4</p>
                </div>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</section>

<style>
    .team-section {
        padding: 50px 20px;
    }

    .team-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .team-name {
        display: flex;
        justify-content: start;
        flex-direction: column;text-align: left;
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
        width: 100%;
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

    <!-- ================================================testimonial========================================== -->

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
          <div class="testimonial-card">
            <p class="testimonial-text">
              "Invisor made our Zoho setup easy and stress-free. Their team really listened to what we needed, and now our daily tasks run so much smoother!
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

          <div class="testimonial-card">
            <p class="testimonial-text">
              "Working with Invisor was a game-changer for our team. Their thorough understanding of Zoho's capabilities allowed us to optimise our workflows and enhance our overall efficiency.
              "
            </p>
            <div class="client-info">
              <img src="assets/img/team/team-2.jpg" alt="Andrew McArthur" class="client-photo">
              <div class="client-details">
                <p class="client-name">Andrew McArthur</p>
                <p class="client-title">CEO Amazon
                </p>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-text">
              "Invisor delivered a flawless Zoho integration for our company. Their professionalism and dedication to understanding our requirements made all the difference in achieving our operational goals. "
            </p>
            <div class="client-info">
              <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
              <div class="client-details">
                <p class="client-name">Andrew McArthur</p>
                <p class="client-title">CEO</p>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <p class="testimonial-text">
              "The training and ongoing support from Invisor were invaluable during our Zoho transition. They empowered our team with the knowledge and tools to maximise the system's potential."
            </p>
            <div class="client-info">
              <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
              <div class="client-details">
                <p class="client-name">Andrew McArthur</p>
                <p class="client-title">PROJECT MANAGER</p>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <p class="testimonial-text">
              "Invisor's team exhibited a high level of expertise throughout our Zoho implementation. Their strategic insights and hands-on approach helped us leverage Zoho to its fullest, driving measurable results. "
            </p>
            <div class="client-info">
              <img src="assets/img/team/team-1.jpg" alt="Andrew McArthur" class="client-photo">
              <div class="client-details">
                <p class="client-name">Andrew McArthur</p>
                <p class="client-title">IT DIRECTOR</p>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <p class="testimonial-text">
              "The Invisor team provided exceptional support during our Zoho implementation. They tailored everything to fit our business, and their training made it simple for our team to get on board. "
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
      </div>
    </section>

    <style>
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
    </style>
