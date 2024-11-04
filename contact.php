<section class="contact-section">
  <div class="container">
    <div class="row align-items-start contact-row">
      <!-- Left Section: Contact Text -->
      <div class="col-md-6 contact-text">
        <div class="title-top">
          <div class="title-dot" style="background-color: #fff;"></div>
          <div class="trust-badge" style="color:#fff">OUR VISION</div>
        </div>
        <h1 class="contact-title">Let's get in touch: igniting conversations, sparking connections!</h1>
        <p class="contact-description">Fusce volutpat lectus et nisl consectetur finibus. In vitae scelerisque augue, in
          varius eros. Nunc sapien diam, euismod et pretium id, volutpat et tortor.</p>
      </div>
      <!-- Right Section: Contact Form -->
      <div class="col-md-6 contact-form">
        <form action="#" method="POST">
          <input type="text" name="first_name" placeholder="First Name" required>
          <input type="text" name="last_name" placeholder="Last Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <textarea name="message" placeholder="Message" required></textarea>
          <button type="submit" class="submit-btn">Submit</button>
          <p class="terms-text">*By clicking "Send Message" you agree to our <a href="#">Terms of Services</a></p>
        </form>
      </div>
    </div>
  </div>
</section>

<style>
  .contact-section {
    background-color: var(--accent-color);
    /* Green background for the left section */
    padding: 60px 20px;
  }

  @media (min-width:1200px) {
    .contact-section {
      height: 410px;
      overflow: visible;
    }
  }

  .contact-section .container {
    max-width: 1100px;
    margin: auto;
  }

  .contact-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
  }

  /* Left Section */
  .contact-text {
    color: #ffffff;
    padding-right: 20px;
  }


  .contact-title {
    font-size: 2.5rem;
    font-weight: 300;
    color: #ffffff;
    margin-bottom: 20px;
  }

  .contact-description {
    font-size: 1rem;
    color: #ffffff;
    margin-bottom: 20px;
    line-height: 1.6;
  }

  .contact-info {
    font-size: 1rem;
    color: #ffffff;
  }

  .contact-info a {
    color: #ffffff;
    text-decoration: underline;
  }

  /* Right Section */
  .contact-form {
    margin: auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
  }

  .contact-form form {
    display: flex;
    flex-direction: column;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
  }

  .contact-form textarea {
    resize: vertical;
    min-height: 100px;
  }

  .submit-btn {
    background-color: var(--accent-color);
    color: #ffffff;
    padding: 12px 0;
    border: none;
    border-radius: 5px;
    font-weight: 400;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .submit-btn:hover {
    background-color: var(--accent-color);
  }

  .terms-text {
    font-size: 0.85rem;
    color: #666;
    margin-top: 10px;
  }

  .terms-text a {
    color: var(--accent-color);
    text-decoration: none;
  }

  .terms-text a:hover {
    text-decoration: underline;
  }

  /* Responsive Styling */
  @media (max-width: 768px) {
    .contact-row {
      flex-direction: column;
    }

    .contact-text {
      padding-right: 0;
      margin-bottom: 30px;
    }

    .contact-title {
      font-size: 2rem;
    }
  }

  .contact-form input:hover,
  .contact-form textarea:hover,
  .contact-form input:focus,
  .contact-form textarea:focus {
    border-color: var(--accent-color);
    /* Border color on hover and active */
  }
</style>

<div class="container cntct-info">
  <p class="contact-info">General inquiries<br>
    Reach us at <a href="mailto:email@example.com">email@example.com</a> <br> and we will get back to you asap.
  </p>
</div>
<style>
  .cntct-info {
    padding: 50px 10px;
  }

  .contact-info {
    font-size: 1rem;
    color: #1d1d1d;
  }

  .contact-info a {
    color: var(--accent-color);
    text-decoration: underline;
  }
</style>

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
          Our personalised approach, industry expertise, and commitment to delivering effective solutions distinguish us
          in the market.

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
