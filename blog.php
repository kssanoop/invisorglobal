<section class="latest-article">
  <div class="container pt-5">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6 content">
        <div class="title-top">
          <div class="title-dot"></div>
          <div class="trust-badge">LATEST ARTICLE</div>
        </div>

        <h1 class="article-title">Zoho Insights and Innovation
        </h1>
        <p class="article-description">Discover expert insights, real-world success stories, and actionable tips on
          everything from CRM to inventory management, helping you maximise productivity and streamline your business
          operations with Zoho. Explore our articles to find out how Zoho can make a difference in your day-to-day
          workflow and support your growth journey.
        </p>
        <div class="hover-button mt-2" style="border-radius: 5px;">
          <a href="#newsletter">Learn more</a>
        </div>
      </div>
      <!-- Image Content -->
      <div class="col-md-6 image">
        <img src="assets/img/blog.jpg" alt="Man celebrating with champagne">
      </div>
    </div>
  </div>
</section>

<style>
  /* style.css */

  .latest-article {
    position: relative;
  }


  .article-title {
    font-size: 2.4rem;
    font-weight: 300;
    color: #1d1d1d;
    margin-bottom: 20px;
  }

  .article-description {
    font-size: 1.2rem;
    color: #1d1d1dcc;
    margin-bottom: 30px;
    line-height: 1.6;
    font-weight: 300
  }


  .image img {height: 100%;object-fit: cover;
    position: absolute;
    right: 0;
    top: 0;
    width: 50%;
    clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%);
  }

  /* Responsive Styling */
  @media (max-width: 992px) {
    .latest-article .row {
      text-align: left;
    }

    .image {
      margin-top: 20px;
    }
  }
  @media (max-width:767px) {
    .image {
      display: none;
    }

  }
</style>

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
    font-size: 1.2rem;
    color: #333;
    font-weight: 300;
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

  @media (min-width:992px) {
    .blog-item {position: relative;
      height: 390px;
      max-height: 400px;
    }
    .blog-item .read-more{position: absolute;bottom: 20px;}
  }

  @media (max-width:991px) {
    .blog-htext {
      width: 100% !important;
    }

    .blog-header {
      display: block;
    }


    .blog-section h1 {
      font-size: 1.5rem;
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
  </div>

  <div class="row">
    <!-- Blog Item 1 -->
    <div class="col-md-4 col-sm-6 col-12">
      <a href="?page=blog2">
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
      <a href="?page=blog1">
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