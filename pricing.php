<style>
    /* Pricing Section */
    .pricing-section {
        padding: 3rem 0;
        background-color: #f8f8f8;
    }

    .pricing-section h1 {
        width: 80%;
        text-align: center !important;
        font-weight: 300;
        margin: 0 auto 20px;
    }

    @media (min-width:1000px) {
        .pricing-section h1 {
            width: 40%;
        }
    }

    .pricing-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .pricing-body {
        padding: 0 2rem 2rem;
    }

    .pricing-header {
        background-color: var(--accent-color);
        padding:1rem 2rem;
        color: #fff;
    }

    .plan-title {
        font-size: 1.2rem;
        font-weight: 300;
        margin: 0;
        color: #fff
    }
    .pricing-header p{
margin-bottom: 0;
    }

    .price {
        font-size: 2rem;
        font-weight: 400;
    }

    .pricing-section .hover-button {
        width: 100%;
    }

    .price span {
        font-size: 1rem;
        font-weight: 400;
    }

    .features-list {
        text-align: left;
        list-style-type: none;
        padding: 0;
        margin: 1.5rem 0;
    }

    .features-list li {
        display: flex;
        align-items: center;
        font-size: 0.95rem;
        color: #333;
        padding: 0.5rem 0;
    }

    .features-list li i {
        font-size: 1.5rem;
        color: var(--accent-color);
        margin-right: 10px;

    }

    /* Responsive Styling */
    @media (max-width: 767px) {
        .pricing-card {
            margin-bottom: 1.5rem;
        }
    }
</style>

<div class="pricing-section">
    <div class="title-top justify-content-center" style="margin-bottom: 1%;">
        <div class="title-dot"></div>
        <div class="trust-badge">PRICING</div>
    </div>
    <h1>Hear what our satisfied clients have to say</h1>

    <div class="container">
        <div class="row">
            <!-- Plan 1 -->
            <div class="col-md-4">
                <div class="pricing-card hvr-sweep-to-right">
                    <div class="pricing-header">
                        <h3 class="plan-title">ESSENTIALS PLAN</h3>
                        <p class="price">$149<span>/month</span></p>
                    </div>
                    <div class="pricing-body">
                        <ul class="features-list">
                            <li><i class="bi bi-check-lg"></i> Basic Bookkeeping</li>
                            <li><i class="bi bi-check-lg"></i> Monthly reconciliation of accounts</li>
                            <li><i class="bi bi-check-lg"></i> Financial statements preparation</li>
                            <li><i class="bi bi-check-lg"></i> Expense tracking</li>
                        </ul>
                        <a href="#" class="hover-button">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Plan 2 -->
            <div class="col-md-4">
                <div class="pricing-card hvr-sweep-to-right">
                    <div class="pricing-header">
                        <h3 class="plan-title">TAX & PAYROLL PLAN</h3>
                        <p class="price">$399<span>/month</span></p>
                    </div>
                    <div class="pricing-body">

                        <ul class="features-list">
                            <li><i class="bi bi-check-lg"></i> Individual & Business tax returns</li>
                            <li><i class="bi bi-check-lg"></i> Tax planning consultation</li>
                            <li><i class="bi bi-check-lg"></i> Weekly or bi-weekly processing</li>
                            <li><i class="bi bi-check-lg"></i> Payroll tax filings</li>
                            <li><i class="bi bi-check-lg"></i> Financial Record keeping</li>
                        </ul>
                        <a href="#" class="hover-button">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Plan 3 -->
            <div class="col-md-4">
                <div class="pricing-card hvr-sweep-to-right">
                    <div class="pricing-header">
                        <h3 class="plan-title">ENTERPRISE PLAN</h3>
                        <p class="price">$899<span>/month</span></p>
                    </div>
                    <div class="pricing-body">

                        <ul class="features-list">
                            <li><i class="bi bi-check-lg"></i> Budgeting and forecasting</li>
                            <li><i class="bi bi-check-lg"></i> Cash flow analysis</li>
                            <li><i class="bi bi-check-lg"></i> CFO Services</li>
                            <li><i class="bi bi-check-lg"></i> Virtual CFO services</li>
                            <li><i class="bi bi-check-lg"></i> Strategic financial planning</li>
                            <li><i class="bi bi-check-lg"></i> Audit Support available</li>
                        </ul>
                        <a href="#" class="hover-button">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<style>
    /* General Styles for the Section */
    .plans {
        position: relative;
        padding: 50px 0;
        background-color: #fff;
    }

    .plans .text-content {
        padding-right: 70px;
    }


    .plans .plan-section-title {
        font-size: 2rem;
        font-weight: 400;
        color: #1d1d1d;
        margin-bottom: 20px;
    }

    .plans .section-description {
        font-size: 1rem;
        color: #1d1d1d;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .plans .features-list {
        list-style-type: none;
        padding: 0;
    }

    .plans .features-list li {
        font-size: 1rem;
        color: #333;
        padding: 5px 0;
        display: flex;
        align-items: center;
    }

    .plans .features-list li i {
        color: var(--accent-color);
        margin-right: 8px;
    }

    /* Image Content Styling */
    .plans .image-content {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 50%;
        clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);
    }

    .plans .image-content img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .plans .section-title {
            font-size: 1.5rem;
        }

        .plans .text-content,
        .plans .image-content {
            text-align: center;
        }

        .plans .image-content {
            clip-path: none;
        }
    .plans .image-content {position: relative;
            clip-path: none;
            width: 100%;
            margin-bottom: 20px;
        }


    }
     /* Responsive Styling */
     @media (max-width: 991px) {
        .plan-image{order: -1;padding: 0;}
        .plans .text-content {
            padding: 0;
            text-align: center;
        }

        .plans .plan-section-title {
            text-align: left !important;
        }

    .plans .section-description {width: 50%;
        text-align: left !important;
    }

        .plans .plan-section-title {
            font-size: 1.8rem;
        }
    }
    @media (max-width: 600px) {
        .plans .section-description {width: 100%;

        }
    }
</style>


<div class="container-fluid plans">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-md-6">
                <div class="text-content">
                    <div class="title-top" style="margin-bottom: 1%;">
                        <div class="title-dot"></div>
                        <div class="trust-badge">ALL PLANS INCLUDE</div>
                    </div>
                    <h2 class="plan-section-title">Some things can’t be estimated</h2>
                    <p class="section-description">
                        We value human connection and ensure the best services for your company.
                    </p>
                    <ul class="features-list">
                        <li><i class="bi bi-check-lg"></i>Dedicated Accountant</li>
                        <li><i class="bi bi-check-lg"></i>Support 24/7</li>
                        <li><i class="bi bi-check-lg"></i>Unlimited Documents</li>
                    </ul>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-md-6 plan-image">
                <div class="image-content">
                    <img src="assets/img/plans.png" alt="Team Collaboration">
                </div>
            </div>
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
        line-height: 1.2;font-weight: 300;
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
            Our personalised approach, industry expertise, and commitment to delivering effective solutions distinguish us in the market.

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
            We follow strict quality control measures and continuously monitor our processes to guarantee exceptional results for our clients.

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
            We work with businesses of all sizes, including startups, SMEs, and established corporations across various industries.

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
            The timeline varies based on the complexity of your needs, but we ensure efficient planning to meet your deadlines.

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
