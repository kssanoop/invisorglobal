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
                        <div class="trust-badge" style="color:#fff">SERVICES</div>
                    </div>
                    <h1 class="banner-title">
                        Zoho Cunsultant Hire
                    </h1>
                    <p class="banner-text">Invisor offers skilled & certified Zoho consultants with deep technical and
                        functional knowledge. Our industry-expert developers provide comprehensive services across all
                        domains, including Implementation, Customization, Support, Training, Integration, Migration, and
                        App creation. Gain full control and efficiency by hiring Invisor's Zoho consultants for both
                        short and long-term projects. Simplify and enhance your business with the best Zoho consultants
                        in town.
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


<div class="services-section">
    <div class="container">
        <h2 class="services-title">
            Zoho Cunsultant Hire</h2>

        <div class="card-container">
            <!-- Training Card 1 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Hire
                        </h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text">Hire Dedicated & Certified  Zoho consultants From Invisor on Contract Basis For Short Term Or Long Term.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Training Card 2 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Assign
                        </h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text"> Assign Your Tasks And Manage Our Resources According to Your Project Plan.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Training Card 3 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Get Output
                        </h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text"> Get Outputs on Time And Deliver It to Clients successfully.

                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<style>
    .services-section {
        position: relative;
        padding: 50px 0;
    }

    .services-section .container {
        max-width: 1100px;
        margin: auto;
    }

    .services-section .title-top {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .services-section .title-dot {
        width: 8px;
        height: 8px;
        background-color: #333;
        border-radius: 50%;
        margin-right: 5px;
    }

    .services-section .trust-badge {
        color: #333;
        font-weight: bold;
    }

    .services-section .services-title {
        font-size: 2.5rem;
        font-weight: 400;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
    }

    .services-section .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .services-section .service-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .services-section .card-body {
        padding: 0;
    }

    .services-section .service-card:hover {
        transform: translateY(-5px);
        box-shadow: rgba(99, 99, 99, 0.3) 0px 4px 12px 0px;
    }

    .services-section .card-title {
        border-radius: 8px 8px 0 0;
        color: #fff;
        font-weight: 500;
        padding: 20px;
        font-size: 18px;
        margin-bottom: 15px;
        background-color: var(--accent-color);
    }

    .services-section .card-text {
        color: #666;
        padding: 0 20px 20px;
        font-weight: 300;
        font-size: 1rem;
    }

    .services-section .tab-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px 20px;
    }

    .services-section .tab-bottom img {
        max-width: 50px;
    }

    .services-section .contact-btn {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .services-section .services-title {
            font-size: 2rem;
        }
    }
</style>


<!-- ===============================contact=========================== -->
<style>
    .contact-section {
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        align-items: stretch;
        background-color: #f8f9fa;
    }

    .contact-content {
        background-color: var(--accent-color);
        padding: 30px ;
        flex: 1;
        position: relative;
        color: #fff;
        clip-path: polygon(0 0, 95% 0, 100% 100%, 0% 100%);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Footer stays at the bottom */
    }

    .contact-content ul {
        list-style: none;
        padding: 0;
    }

    .contact-content li {
        display: flex;
        margin-bottom: 10px;
    }

    .contact-content i {
        margin-right: 10px;
    }

    .contact-text {
        max-width: 600px;
        margin: auto;
    }

    @media (min-width:1400px) {
        .contact-text {
            max-width: 50%;
            margin: auto;
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
            max-width: 520px;
            margin: auto;
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

    .contact-text h4 {
        font-size: 22px;
        font-weight: 400;
        margin-bottom: 2.5rem;
        line-height: 1.6;
        color: #fff;
    }

    .contact-text p {
        font-size: 15px;
    }

    .contact-image {
        flex: .6;
        position: relative;
        overflow: hidden;
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 10% 100%);
    }

    .contact-image2 {
        clip-path: polygon(0% 0%, 100% 0%, 95% 100%, 0% 100%);
    }

    .contact-content2 {
        clip-path: polygon(3% 0, 100% 0, 100% 100%, 0% 100%);
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

<div class="contact-section" id="fungtional-training">
    <div class="contact-content">

        <div class="contact-text">
            <div class="title-top">
                <div class="title-dot" style="background-color: #fff;"></div>
                <div class="trust-badge" style="color: #fff;">How We Work

                </div>
            </div>

            <h1>Our Hiring Process

            </h1>
            <p>Supercharge your project with the expertise of our Certified Zoho consultants. From concept to execution,
                our team delivers tailor-made solutions. Harness the power of our experienced Zoho consultants for a
                seamless and successful project.

            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Hiring Request
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Agreement Signing
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Make Payment
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Resource Allocation
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Assign Task
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Analysis
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Implementation
                </li>
                <li><i class="bi bi-chevron-double-right"></i>Contract Renewal
                </li>
            </ul>
        </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/hiring-process.jpg" alt="People working on laptops">
    </div>
</div>


<!-- 2 -->

<div class="contact-section" id="fungtional-training2">
    <div class="contact-image contact-image2" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/hire-2.jpg" alt="People working on laptops">
    </div>

    <div class="contact-content contact-content2">

    <div class="contact-text">
            <div class="title-top">
                <div class="title-dot" style="background-color: #fff;"></div>
                <div class="trust-badge" style="color: #fff;">What We Offer

                </div>
            </div>

            <h1>Our Zoho Support Includes

            </h1>
            <p>Experience comprehensive Zoho support with our top-tier consultants. From impeccable coding to complete project management, we've got you covered.


            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>High-Quality Standards

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Comprehensive Project Oversight

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Consistent Updates

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Multidisciplinary Expertise

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Confidentiality Commitment

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Advanced Infrastructure

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Customer-Centric Focus

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Data Protection Protocols

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Adaptive Solutions

                </li>
            </ul>
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
        .slide-bg,.slide-bg-1{display: none
        }
        .newsletter-image {
    position: absolute;
    bottom: 0;
    right: 0%;
    max-width: 400px;
    height: auto;
}
    }

    @media (max-width: 769px) {.newsletter-image{display: none;}

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
