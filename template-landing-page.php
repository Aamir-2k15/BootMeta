<?php /*
 * Template Name: Landing Page
 */ ?>
<?php get_header(); ?>
<style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            /* background-color: #007bff;
            color: #fff; */
            padding: 100px 0;
            text-align: center;
        }
        .features-section,
        .how-it-works-section,
        .product-details-section,
        .pricing-section,
        .faq-section {
            padding: 60px 0;
        }
        .social-proof-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .testimonial,
        .faq-item {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        .bg{    background-repeat: no-repeat;
    background-size: contain;
    background-position: center center;}
    </style>
 

    <!-- Hero Section -->
    <section class="hero-section bg" style="background-image: url(https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg);">
        <div class="container">
            <h1 class=""><?php $herosection= get_post_meta(get_the_ID(), 'hero_title', true); echo !empty($herosection) ? $herosection : '';?></h1>
            <p class="lead"><?php $sub_title= get_post_meta(get_the_ID(), 'sub_title', true); echo !empty($sub_title) ? $sub_title : '';?></p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
            <!-- <img src="https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg" class="img-fluid mt-4" alt="Product Image"> -->
        </div>
    </section>

        <!-- Image & Description Section -->
        <section class="product-details-section pt-4 pb-4">
        <div class="container">
            <h2 class="text-center">Product/Service Details</h2>
            <div class="row pt-4">
                <div class="col-md-6">
                    <img src="path/to/your/image.jpg" class="img-fluid" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <h4>Detailed Description</h4>
                    <p>Our product is designed to deliver outstanding performance with a user-friendly interface. You can rely on our service to handle your tasks efficiently.</p>
                    <p>Whether you're looking for speed, security, or ease of use, our product covers all bases. Explore the endless possibilities with our cutting-edge technology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features/Benefits Section -->
    <section class="features-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-bolt fa-3x mb-3"></i>
                    <h3>Fast</h3>
                    <p>Our product is incredibly fast and reliable.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-lock fa-3x mb-3"></i>
                    <h3>Secure</h3>
                    <p>We prioritize your security with top-notch protection.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-thumbs-up fa-3x mb-3"></i>
                    <h3>User-Friendly</h3>
                    <p>Designed with the user in mind for easy navigation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="social-proof-section">
        <div class="container">
            <h2 class="text-center">Trusted by Leading Companies</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="path/to/client-logo1.png" class="img-fluid mb-4" alt="Client Logo 1">
                </div>
                <div class="col-md-3">
                    <img src="path/to/client-logo2.png" class="img-fluid mb-4" alt="Client Logo 2">
                </div>
                <div class="col-md-3">
                    <img src="path/to/client-logo3.png" class="img-fluid mb-4" alt="Client Logo 3">
                </div>
                <div class="col-md-3">
                    <img src="path/to/client-logo4.png" class="img-fluid mb-4" alt="Client Logo 4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <i class="fas fa-quote-left"></i>
                        <p>This product has changed my life for the better. I can't imagine living without it!</p>
                        <p><strong>- Jane Doe</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <i class="fas fa-quote-left"></i>
                        <p>Excellent customer service and an even better product. Highly recommend!</p>
                        <p><strong>- John Smith</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <i class="fas fa-quote-left"></i>
                        <p>Five stars! This product exceeded all my expectations. Worth every penny.</p>
                        <p><strong>- Sarah Johnson</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works-section">
        <div class="container">
            <h2 class="text-center">How It Works</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-search fa-3x mb-3"></i>
                    <h4>Step 1: Discover</h4>
                    <p>Explore our product to see how it fits your needs.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h4>Step 2: Customize</h4>
                    <p>Tailor the features to match your specific requirements.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-check fa-3x mb-3"></i>
                    <h4>Step 3: Implement</h4>
                    <p>Seamlessly integrate the product into your workflow.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <h2 class="text-center">Pricing</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Basic Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$9.99 <small class="text-muted">/ mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-outline-primary">Sign Up for Free</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Pro Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29.99 <small class="text-muted">/ mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Enterprise Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$49.99 <small class="text-muted">/ mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone & email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-item">
                        <h5>What is included in the Basic Plan?</h5>
                        <p>The Basic Plan includes access to all core features, 10 users, and 2 GB of storage.</p>
                    </div>
                    <div class="faq-item">
                        <h5>Can I upgrade my plan later?</h5>
                        <p>Yes, you can upgrade to a higher plan at any time from your account settings.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item">
                        <h5>Do you offer customer support?</h5>
                        <p>We offer email support with the Basic Plan and priority email support with the Pro Plan. The Enterprise Plan includes phone and email support.</p>
                    </div>
                    <div class="faq-item">
                        <h5>Is there a free trial available?</h5>
                        <p>Yes, we offer a 14-day free trial for new users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('your-background-image.jpg') no-repeat center center/cover;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.5rem;
        }
        .services-section {
            padding: 80px 0;
        }
        .services-section .service {
            margin-bottom: 30px;
        }
        .why-choose-us-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .portfolio-section {
            padding: 80px 0;
        }
        .process-section {
            padding: 80px 0;
        }
        .about-us-section {
            padding: 80px 0;
        }
        .contact-section {
            background-color: #343a40;
            color: white;
            padding: 80px 0;
        }
    </style>
 

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>Building Modern Websites, Designing Brands</h1>
        <p>We help startups and businesses grow with cutting-edge web solutions and digital strategies.</p>
        <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3 service">
                <div class="icon mb-3">
                    <i class="fas fa-code fa-3x"></i>
                </div>
                <h4>Web Development</h4>
                <p>Custom web development solutions to meet your business needs.</p>
            </div>
            <div class="col-md-3 service">
                <div class="icon mb-3">
                    <i class="fas fa-paint-brush fa-3x"></i>
                </div>
                <h4>Web Design</h4>
                <p>Creating beautiful, user-friendly websites that represent your brand.</p>
            </div>
            <div class="col-md-3 service">
                <div class="icon mb-3">
                    <i class="fas fa-bullhorn fa-3x"></i>
                </div>
                <h4>Digital Marketing</h4>
                <p>Effective digital marketing strategies to grow your online presence.</p>
            </div>
            <div class="col-md-3 service">
                <div class="icon mb-3">
                    <i class="fas fa-chart-line fa-3x"></i>
                </div>
                <h4>SEO</h4>
                <p>Improving your website's visibility in search engines.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="why-choose-us-section text-center">
    <div class="container">
        <h2>Why Choose Us?</h2>
        <p>We provide tailored solutions, an experienced team, and innovative design to help your business thrive online.</p>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-cogs fa-2x mb-3"></i>
                <h4>Tailored Solutions</h4>
                <p>We craft customized solutions to meet the unique needs of your business.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-2x mb-3"></i>
                <h4>Experienced Team</h4>
                <p>Our team has years of experience in web development, design, and digital marketing.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-lightbulb fa-2x mb-3"></i>
                <h4>Innovative Design</h4>
                <p>We stay ahead of design trends to deliver visually stunning websites.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section text-center">
    <div class="container">
        <h2>Our Portfolio</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="project1.jpg" class="img-fluid mb-3" alt="Project 1">
                <h5>Project Title 1</h5>
            </div>
            <div class="col-md-4">
                <img src="project2.jpg" class="img-fluid mb-3" alt="Project 2">
                <h5>Project Title 2</h5>
            </div>
            <div class="col-md-4">
                <img src="project3.jpg" class="img-fluid mb-3" alt="Project 3">
                <h5>Project Title 3</h5>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="process-section text-center">
    <div class="container">
        <h2>Our Process</h2>
        <div class="row">
            <div class="col-md-3">
                <i class="fas fa-comments fa-3x mb-3"></i>
                <h5>Consultation</h5>
                <p>We begin with understanding your business needs and goals.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-pencil-ruler fa-3x mb-3"></i>
                <h5>Design</h5>
                <p>Our design team creates visually appealing and user-friendly designs.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-laptop-code fa-3x mb-3"></i>
                <h5>Development</h5>
                <p>We build your website with the latest technologies and best practices.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-rocket fa-3x mb-3"></i>
                <h5>Launch</h5>
                <p>After thorough testing, we launch your website to the world.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about-us" class="about-us-section text-center">
    <div class="container">
        <h2>About Us</h2>
        <p>We are a passionate team of developers, designers, and marketers dedicated to helping businesses grow online.</p>
        <div class="row">
            <div class="col-md-4">
                <img src="team1.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member 1">
                <h5>Team Member 1</h5>
                <p>Lead Developer</p>
            </div>
            <div class="col-md-4">
                <img src="team2.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member 2">
                <h5>Team Member 2</h5>
                <p>Lead Designer</p>
            </div>
            <div class="col-md-4">
                <img src="team3.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member 3">
                <h5>Team Member 3</h5>
                <p>Marketing Expert</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section text-center">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Get in touch with us to discuss your project or ask any questions.</p>
        <form class="form-inline justify-content-center">
            <div class="form-group mb-2">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Send</button>
        </form>
        <p class="mt-3">Or email us at <a href="mailto:info@yourstartup.com">info@yourstartup.com</a></p>
    </div>
</section>
 


<style>
        .stats-section {
            background-color: #f9f9f9;
            padding: 60px 0;
            position: relative;
        }
        .stats-section .section-header span {
            color: #ff6600;
            font-weight: bold;
        }
        .stats-section .stat-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .stats-section .stat-box h3 {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .stats-section .stat-box p {
            margin: 0;
            font-size: 16px;
        }
        .text-orange {
            color: #ff6600;
        }
        .text-blue {
            color: #0066ff;
        }
        .stats-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .stats-list li i {
            color: #ff6600;
            margin-right: 10px;
        }
    </style>

<div class="hero-section bg-dark text-white d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4 font-weight-bold mb-4">Empower Your Business with Cutting-Edge Solutions</h1>
                <p class="lead mb-5">We provide top-tier web development, design, and digital marketing services to help your business thrive online.</p>
                <a href="#services" class="btn btn-lg btn-primary px-5 py-3">Explore Our Services</a>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="hero-image" style="background: url('https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?w=826&t=st=1723936406~exp=1723937006~hmac=2153958b029ca4993bd8e6e94d74ed3bc192995efba68c35c89d4de83b22034d') no-repeat center right/cover; height: 100%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- BOXES SECTION -->
<section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header mb-4">
                        <span>About Company</span>
                        <h2 class="font-weight-bold">Torttitor scelerisque feugiat ut, congue non elit.</h2>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin luctus mauris vitae elementum. Nunc magna lacus, porttitor scelerisque feugiat ut, congue non elit.</p>
                    <ul class="stats-list list-unstyled">
                        <li><i class="fa fa-check text-orange"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fa fa-check text-orange"></i> Consectetur adipiscing elit.</li>
                        <li><i class="fa fa-check text-orange"></i> Curabitur sollicitudin luctus mauris vitae elementum.</li>
                        <li><i class="fa fa-check text-orange"></i> Nunc magna lacus, porttitor scelerisque feugiat ut, congue non elit.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stat-box">
                                <h3>12k</h3>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-box">
                                <h3>98%</h3>
                                <p>Dolor sit amet</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-box">
                                <h3>23+</h3>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-box">
                                <h3>45k</h3>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- CTA -->
<div class="cta-section bg-primary text-white py-5">
    <div class="container d-flex align-items-center">
        <div class="col-md-8">
            <h2 class="mb-4">Ready to Take Your Business to the Next Level?</h2>
            <p class="lead mb-0">Discover our expert services and transform your online presence today.</p>
        </div>
        <div class="col-md-4 text-right">
            <a href="#contact" class="btn btn-lg btn-light px-5 py-3">Get Started Now</a>
        </div>
    </div>
</div>

    <?php get_footer(); ?>
