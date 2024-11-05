<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Invisor Global</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/Invisor logo.jpeg" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <!-- Add this in the <head> section -->
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,300,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Switzer:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="green-overlay"></div>

    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="?page=home" class="logo d-flex align-items-center me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><img src="assets/img/Invisor logo.jpeg" alt=""></h1>
      </a>

      <nav id="navmenu" class="navmenu d-flex justify-content-center align-items-center m-xl-auto">
        <ul>
        <li><a href="?page=home" id="home">Home<br></a></li>
        <li><a href="?page=services" id="services">Services<br></a></li>
<li style="display: none;"><a href="?page=pricing" id="pricing">Pricing</a></li>
<li><a href="?page=about" id="about">About Us</a></li>
<li><a href="?page=blog" id="blog">Blog</a></li>
<li><a href="?page=contact" id="contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
    <div class="phone">
    <a style="color: #fff;" href="tel:+918136826665">
        <img src="assets/img/phonecall.svg" alt="">+91 8136826665
    </a>
</div>
  
  </header>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get the current page parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const currentPage = urlParams.get("page");

    // If there's a current page, find the matching link and set it as active
    if (currentPage) {
        const activeLink = document.getElementById(currentPage);
        if (activeLink) {
            activeLink.classList.add("active");
        }
    }
});

  </script>
  <style>
    @media (min-width:1200px) {
      .header .active {
    position: relative;
    color: var(--accent-color); /* Change to your desired color */
}

.header .active::after {
    content: "";
    position: absolute;
    bottom: -5px; /* 5px below the text */
    left: 0;
    width: 100%;
    height: 1px;
    background-color: var(--accent-color); /* Match the accent color or choose a new color */
}
}


  </style>
  <!-- Popup Form HTML -->
<div class="popup-form-overlay" id="popupForm">
  <div class="popup-form">
    <button class="close-btn" onclick="closePopup()">×</button>
    <form action="#" method="POST">
      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" title="Please enter a 10-digit phone number">

      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Message" required></textarea>
      <button type="submit" class="submit-btn">Submit</button>
      <p class="terms-text">*By clicking "Send Message" you agree to our <a href="#">Terms of Services</a></p>
    </form>
  </div>
</div>

<!-- Popup Form CSS -->
<style>
  .popup-form-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .popup-form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    position: relative;
  }

  .popup-form form {
    display: flex;
    flex-direction: column;
  }

  .popup-form input,
  .popup-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
  }

  .popup-form textarea {
    resize: vertical;
    min-height: 100px;
  }

  .popup-form-overlay .submit-btn {
    background-color: var(--accent-color);
    color: #ffffff;
    padding: 12px 0;
    border: none;
    border-radius: 5px;
    font-weight: 400;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .popup-form-overlay .submit-btn:hover {
    background-color: #333;
  }

  .popup-form-overlay .terms-text {
    font-size: 0.85rem;
    color: #666;
    margin-top: 10px;
  }

  .popup-form-overlay .terms-text a {
    color: var(--accent-color);
    text-decoration: none;
  }

  .popup-form-overlay .terms-text a:hover {
    text-decoration: underline;
  }

  .popup-form input:hover,
  .popup-form textarea:hover,
  .popup-form input:focus,
  .popup-form textarea:focus {
    border-color: var(--accent-color);
  }

  .popup-form-overlay .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
  }
</style>

<!-- Popup Form JavaScript -->
<script>
  function showPopup() {
    document.getElementById("popupForm").style.display = "flex";
  }

  function closePopup() {
    document.getElementById("popupForm").style.display = "none";
  }

  window.onload = function() {
    setTimeout(showPopup, 5000); // Show popup 10 seconds after page load
  };
</script>

