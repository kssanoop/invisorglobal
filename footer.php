
  <!-- ==========================================footer======================== -->

  <style>
    .footer-container-fluid {
      background-color: #fff;
      padding: 3rem 0;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      align-items: flex-start;
    }


    .footer-logo img {
      margin-bottom: 1rem;
      width: 150px;
    }

    .footer-address {
      max-width: 300px;
      margin-bottom: 2rem;
    }

    .footer-address p {line-height: 30px;
      color: #666;
      margin: 0.5rem 0;
      font-size: 1rem;
    }

    .footer-address p a {
      color: #666;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-address p a:hover {
      color: var(--accent-color);
    }

    .footer-links {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .footer-links div {
      margin-bottom: 1.5rem;
    }

    .footer-links h4 {
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #666;
      margin-bottom: 2rem;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links ul li {
      margin-bottom: 0.5rem;
    }

    .footer-links ul li a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links ul li a:hover {
      color: var(--accent-color);
    }

    .footer-bottom-container-fluid {
      background-color: var(--accent-color);
      color: white;
      padding: 1rem 0;
    }

    .footer-bottom {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      align-items: center;
      text-align: center;
    }

    .footer-bottom p {
      margin: 0;
      font-size: 0.875rem;
    }

    .footer-bottom a {
      color: white;
      text-decoration: none;
      margin-left: 1rem;
      transition: color 0.3s ease;
    }

    .footer-bottom a:hover {
      color: #dddddd;
    }

    /* Responsive adjustments */
    @media (max-width: 500px) {
      .footer-container {
        flex-direction: column;
        align-items: baseline;
      }


    }

    @media (max-width: 768px) {
      .footer-logo img {
        width: 150px;
      }

      .footer-address p {
        font-size: 0.85rem;
      }

      .footer-bottom {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>

  <!-- Full-Width Background Container -->
  <div class="footer-container-fluid container-fluid">
  <div class="footer-container container">
      <!-- Footer Logo and Address Section -->
      <div class="footer-logo footer-address">
        <a href="?page=home"><img src="assets/img/Invisor-footer-logo.jpeg" alt="Prospera Logo"></a>
        <p><strong>India:</strong> 2nd Floor, Phase 1, Carnival Infopark, Kakkanad, Cochin : 682042
        </p>
        <p><strong>Canada:</strong> Suite 337V, 341 Talbot Street, London, Ontario, N6A2R5, Canada
        </p>
        <p><strong>Saudi Arabia:</strong>  KSA, Arabian Software, 5th Floor,Le Cygne Commercial Center-2
Kaab Bin Malik Street, Al Olaya District, Kingdom of Saudi Arabia 

        </p>
      </div>

      <!-- Footer Links Section -->
      <div class="footer-links">
        <div>
          <h4>Shortcuts</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            
          </ul>
        </div>
        <div>
          <h4>&nbsp;</h4> <!-- Empty title to match alignment -->
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4>Services</h4>
          <ul>
            <li><a href="#">Financial Consulting</a></li>
            <li><a href="#">Bookkeeping</a></li>
            <li><a href="#">Tax Services</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Full-Width Bottom Section with Terms & Conditions -->
  <div class="footer-bottom-container-fluid container-fluid">
    <div class="footer-bottom container">
      <p>&copy; Invisor. All Rights Reserved.</p>
      <div>
        <a href="#">Terms & Conditions</a>
        <a href="#">Cookies</a>
        <a href="#">Licenses</a>
      </div>
    </div>
  </div>




  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000, // 5 seconds between each auto-slide
            disableOnInteraction: false, // Auto-slide continues even after manual interaction
        },
        breakpoints: {
            // When window width is <= 200px
            200: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // When window width is <= 767px
            767: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            // When window width is <= 1023px
            1023: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            // When window width is >= 1024px
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>