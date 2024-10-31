<div class="container blog1">
    <h1 class="post-title">Retirement Planning 101: Securing Your Golden Years</h1>
    <div class="post-image">
        <img src="assets/img/blog3.jpg" alt="Retirement Celebration">
    </div>
</div>

<style>
     .blog1 {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Title styling */
        .post-title {
            font-size: 2.6rem;
            font-weight: 300;
            color: #1d1d1d;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Image styling */
        .post-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            overflow: hidden;
        }

        .post-image img {
            width: 100%;
            height: auto;max-height: 450px;
            object-fit: cover;
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
