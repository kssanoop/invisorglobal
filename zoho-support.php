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
                    <h1 class="banner-title">Zoho Support
                    </h1>
                    <p class="banner-text1">At Invisor, we understand that effective support is crucial for leveraging the full potential of Zoho solutions. Our dedicated team is here to assist you with
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
        <h2 class="services-title">Zoho Support</h2>

        <div class="card-container">
            <!-- Training Card 1 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Zoho Support & Maintenance</h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text">Invisor’s expert team offers end-to-end Zoho support, resolving technical issues and providing tailored solutions to enhance your business.
                        </p>
                        <div class="tab-bottom">
                            <a href="#fungtional-training" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Card 2 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Zoho AMC Service
                        </h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text"> Get timely assistance for any Zoho-related queries or issues.
                        </p>
                        <div class="tab-bottom">
                            <a href="#fungtional-training2" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Card 3 -->
            <div class="card service-card">
                <div class="card-body">
                    <div class="card-top">
                        <h5 class="card-title">Customised Solutions</h5>
                    </div>
                    <div class="card-bdy">
                        <p class="card-text"> We tailor our support to meet the specific needs of your business.

                        </p>
                        <div class="tab-bottom">
                            <a href="#fungtional-training3" class="btn btn-link contact-btn">Learn more <i
                                    class="bi bi-arrow-right-short"></i></a>
                        </div>
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
        padding: 30px 20px 30px 10px;
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

    @media (min-width:1400px)  {
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
            <h1>Zoho Support & Maintenance

            </h1>
            <p>Zoho Support and maintenance is a comprehensive service provided by Invisor. Our team of functional consultants and technical experts addresses a full range of Zoho-related issues, helping businesses troubleshoot, resolve bugs, and maintain seamless operations. Our experienced team offers extensive support via customizations, documentation, troubleshooting, guidance, and more.

            </p>
        </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/inner-blog/inner-blog4.jpg" alt="People working on laptops">
    </div>
</div>

<style>
    /* General Card Styling */
.training-package-card {
    display: none;
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

<div class="training-package-card">
    <div class="package-info">
        <h3>Training Package</h3>
        <p class="price">$199</p>
        <p class="duration">4 Hours</p>
    </div>
    <div class="package-details">
        <h4>Plan Benefits & Features</h4>
        <ul>
            <li><i class="bi bi-check-circle-fill"></i> 1 Day (4 Hours/Day)</li>
            <li><i class="bi bi-check-circle-fill"></i> Modules include CRM, Marketing Automation, Social Marketing, SMS Marketing</li>
        </ul>
        <p>Want to know more about our Zoho Training Customized Packages? Send an e-mail to <a href="mailto:odoo@cybrosys.com">inisor@global.com</a>.</p>
    </div>
</div>

<!-- 2 -->

<div class="contact-section" id="fungtional-training2">
    <div class="contact-image contact-image2" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
    <img src="assets/img/inner-blog/inner-blog3.jpg" alt="People working on laptops">
    </div>

    <div class="contact-content contact-content2">

        <div class="contact-text">
        <h1>Zoho AMC Service

            </h1>
            <p>Zoho solutions benefit from continuous support to ensure optimal performance. Invisor, with years of experience, offers tailored support services for ongoing Zoho needs, empowering businesses to streamline their workflows and achieve maximum efficiency.


            </p>
            <ul>
                <li><i class="bi bi-chevron-double-right"></i>Expert team of Zoho consultants

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Dedicated support for troubleshooting

                </li>
                <li><i class="bi bi-chevron-double-right"></i>Customised AMC packages for your business


                </li>
                <li><i class="bi bi-chevron-double-right"></i>Regular contract notifications


                </li>
            </ul>
        </div>
    </div>
</div>

<div class="training-package-card">
    <div class="package-info">
        <h3>Training Package</h3>
        <p class="price">$199</p>
        <p class="duration">4 Hours</p>
    </div>
    <div class="package-details">
        <h4>Plan Benefits & Features</h4>
        <ul>
            <li><i class="bi bi-check-circle-fill"></i> 1 Day (4 Hours/Day)</li>
            <li><i class="bi bi-check-circle-fill"></i> Modules include CRM, Marketing Automation, Social Marketing, SMS Marketing</li>
        </ul>
        <p>Want to know more about our Zoho Training Customized Packages? Send an e-mail to <a href="mailto:odoo@cybrosys.com">inisor@global.com</a>.</p>
    </div>
</div>

<div class="contact-section" id="fungtional-training3">
    <div class="contact-content">

        <div class="contact-text">
        <h1>Customised Solutions
            </h1>
            <p>At Invisor, we understand that every business has unique requirements. Our dedicated Zoho support team works closely with you to create tailored solutions that directly address your specific challenges and objectives. We ensure your Zoho tools are optimised to enhance efficiency and drive growth. With our deep expertise and flexible approach, we help you unlock the full potential of Zoho applications in a way that aligns seamlessly with your business goals.

            </p>
        </div>
    </div>
    <div class="contact-image" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
    <img src="assets/img/inner-blog/inner-blog6.jpg" alt="People working on laptops">
    </div>
</div>

<div class="training-package-card">
    <div class="package-info">
        <h3>Training Package</h3>
        <p class="price">$199</p>
        <p class="duration">4 Hours</p>
    </div>
    <div class="package-details">
        <h4>Plan Benefits & Features</h4>
        <ul>
            <li><i class="bi bi-check-circle-fill"></i> 1 Day (4 Hours/Day)</li>
            <li><i class="bi bi-check-circle-fill"></i> Modules include CRM, Marketing Automation, Social Marketing, SMS Marketing</li>
        </ul>
        <p>Want to know more about our Zoho Training Customized Packages? Send an e-mail to <a href="mailto:odoo@cybrosys.com">inisor@global.com</a>.</p>
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
