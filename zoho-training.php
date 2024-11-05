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

    .banner-text1 {
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
        .banner-section img{display: none;}

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
                    <h1 class="banner-title">Zoho Training</h1>
                    <p class="banner-text1">Learn from experts on how to effectively implement and administer your ERP
                        application with Zoho. Obtain training and maintain a competitive edge. We offer a comprehensive
                        learning experience that includes adequate instruction.</p>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 image-col">
                    <img src="assets/img/zoho-training.jpg" alt="Financial advisors"
                        class="img-fluid w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services-section">
    <div class="container">
        <h2 class="services-title">Zoho Training</h2>

        <div class="card-container">
            <!-- Training Card 1 -->
            <div class="card service-card">
                    <div class="card-top">
                        <h5 class="card-title"> Functional Training</h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text">Designed for clients, end-users, and business owners aiming for in-depth
                            functional knowledge of Zoho.</p>
                    </div>
                    <div class="tab-bottom">
                            <a href="#fungtional-training" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
                        </div>

            </div>

            <!-- Training Card 2 -->
            <div class="card service-card">
                    <div class="card-top">
                        <h5 class="card-title">Technical Training</h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text">Designed for IT professionals and new developers interested in customising
                            and developing with Zoho, this training covers:</p>
                    </div>
                    <div class="tab-bottom">
                            <a href="#fungtional-training2" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
                        </div>

            </div>

            <!-- Training Card 3 -->
            <div class="card service-card">
                    <div class="card-top">
                        <h5 class="card-title">Corporate Training</h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text">Our corporate training is designed for businesses utilising Zoho and those
                            transitioning their operations to the platform.</p>
                    </div>
                    <div class="tab-bottom">
                            <a href="#fungtional-training3" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
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

    .services-section .service-card {display: flex;justify-content: space-between;
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
    .services-section .tab-bottom .btn{padding: 0;}
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
    .contact-section {margin-bottom: 50px;
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
            max-width: 100%;
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
            <h1> Functional Training
            </h1>
            <p>Designed for clients, end-users, and business owners aiming for in-depth functional knowledge of Zoho.
            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Gain Expert Insight into Zoho Modules
                </li>
                <p>Dive deep into key modules like CRM, Books, and Projects with guidance from Zoho experts.
                </p>
                <li><i class="bi bi-chevron-double-right"></i>Stay Updated with the Latest Zoho Versions
                </li>
                <p>Training includes the latest versions, ensuring your knowledge stays current.

                </p>
                <li><i class="bi bi-chevron-double-right"></i>Hands-On Configuration and Setup Skills

                </li>
                <p>Learn to configure and manage foundational modules for daily operations.

                </p>
                <li><i class="bi bi-chevron-double-right"></i>Custom App Creation with Zoho Creator

                </li>
                <p>Master customization techniques to fit your unique business needs.
                </p>
                <li><i class="bi bi-chevron-double-right"></i>Optimise Efficiency & Reduce Costs
                </li>
                <p>Practical tips to save time and increase overall business efficiency.

                </p>
            </ul>
        </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/training.svg" alt="People working on laptops">
    </div>
</div>

<style>
    /* General Card Styling */
.training-package-card {
    display: flex;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin:50px auto;
}

/* Left Section Styling */
.package-info {
    background-color: var(--accent-color);
    color: #fff;
    padding: 20px;
    text-align: center;
    width: 35%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.package-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.package-info .price {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.package-info .duration {
    font-size: 1rem;
    font-weight: bold;
    color: #ffd700;
}

/* Right Section Styling */
.package-details {
    padding: 20px;
    width: 65%;
}

.package-details h4 {
    font-size: 1.1rem;
    margin-bottom: 15px;
    color: #333;
}

.package-details ul {
    list-style: none;
    padding: 0;
    margin: 0 0 15px 0;
}

.package-details ul li {
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    color: #333;
    margin-bottom: 10px;
}

.package-details ul li i {
    color: #4caf50;
    margin-right: 8px;
}

.package-details p {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 20px;
}

.package-details a {
    color: var(--accent-color);
    text-decoration: none;
    font-weight: bold;
}


/* Responsive Styling */
@media (max-width: 768px) {
    .training-package-card {
        flex-direction: column;
    }

    .package-info, .package-details {
        width: 100%;
    }

    .package-info {
        padding: 15px;
    }
}

</style>


<!-- 2 -->

<div class="contact-section" id="fungtional-training2">
    <div class="contact-image contact-image2" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="https://www.zohowebstatic.com/sites/zweb/images/zoho_general_pages/zh-homev2-banner-india-3.webp" alt="People working on laptops">
    </div>

    <div class="contact-content contact-content2">

        <div class="contact-text">
        <h1>Technical Training
            </h1>
            <p>Designed for IT professionals and new developers interested in customising and developing with Zoho, this training covers:

            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Zoho Installation on Multiple Platforms  
                </li>
                <p>Step-by-step guidance for installing Zoho on Linux and Windows systems.

                </p>
                <li><i class="bi bi-chevron-double-right"></i>In-Depth Overview of Zoho Framework 

                </li>
                <p>Understanding the framework to develop custom solutions with Zoho.


                </p>
                <li><i class="bi bi-chevron-double-right"></i>App Development in Zoho


                </li>
                <p>Learn essential skills to create and deploy tailored applications.

                </p>
                <li><i class="bi bi-chevron-double-right"></i>Troubleshooting Technical Issues

                </li>
                <p>Techniques for diagnosing and solving common technical problems.
                </p>
                <li><i class="bi bi-chevron-double-right"></i>Integrating Diverse Programming Languages 
                </li>
                <p>Explore various programming languages compatible with Zoho development.
                </p>
            </ul>
        </div>
    </div>
</div>



<div class="contact-section" id="fungtional-training3">
    <div class="contact-content">

        <div class="contact-text">
        <h1>Corporate Training

            </h1>
            <p>Our corporate training is designed for businesses utilising Zoho and those transitioning their operations to the platform. 

            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Module-Specific Training

                </li>
                <p>Tailored sessions focusing on Zoho modules relevant to your business processes.
                </p>
                <li><i class="bi bi-chevron-double-right"></i>Interactive Live Demos

                </li>
                <p>Engage in live demonstrations for a hands-on learning experience.


                </p>
                <li><i class="bi bi-chevron-double-right"></i>Video Tutorials


                </li>
                <p>Access a library of training videos for self-paced learning.

                </p>
                <li><i class="bi bi-chevron-double-right"></i>Ongoing Live Support


                </li>
                <p>Receive real-time assistance to address any questions or challenges.

                </p>
            </ul>
        </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/training.svg" alt="People working on laptops">
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
