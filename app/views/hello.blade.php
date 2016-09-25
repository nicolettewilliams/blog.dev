@extends('layouts.master')


@section('content')
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> Nicolette Williams</a> </div>
    
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="#about">About</a> </li>
        <li> <a class="page-scroll" href="#services">Services</a> </li>
        <li> <a class="page-scroll" href="#works">Portfolio</a> </li>
        <!-- <li> <a class="page-scroll" href="#testimonials">Testimonials</a> </li> -->        
        <li> <a class="page-scroll" href="#resume">Resume</a> </li>
        <li> <a class="page-scroll" href="#contact">Contact</a> </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Nicolette <span class="brand-heading">Williams</span></h1>
          <p class="intro-text">Full Stack Web Developer</p>
          <a href="#about" class="btn page-scroll arrow bounce"> <i class="fa fa-arrow-down fa-5x"></i>  </a> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-5"><img src="../img/about.jpg" class="img-responsive"></div>
      <div class="col-md-7">
        <div class="about-text">
          <h4>Hey! I'm Nicolette</h4>
          <h3>I'm a design-minded, detail oriented web developer passionate about combining beautiful code with beautiful design.</h3>
          <p>I have experience developing and designing products for the web, from simple landing pages to multi-tier web applications. I strive to create software that not only functions efficiently under the hood, but also provides intuitive, pixel-perfect user experiences.
          <br>
          <br>
          I love finding new and better ways to create seamless user experiences with clean, efficient, and scalable code. I consider work an ongoing education, and I'm always looking for opportunities to work with those who are willing to share their knowledge as much as I want to learn. At the end of the day, my primary goal is to create something awe-spiring, that not only appeases me, but my client as well.
          <br>
          <br>
          <span style="font-weight:bold">When I'm not in front of a screen </span>, I'm with my two kiddos and awesome <a href="www.remingtonwilliams.com">husband</a> .</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>What I Do</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <div class="service"> <i class="fa fa-file-code-o"></i>
          <h3>WEB DEVELOPMENT</h3>
          <p>Using HTML5, CSS3, and JavaScript, I produce semantic, modular front-end code and concise, efficient back-end code to produce mobile-first web interfaces and applications.</p>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-2 col-sm-12">
        <div class="service"> <i class="fa fa-mobile"></i> <i class="fa fa-tablet"></i> <i class="fa fa-desktop"></i>
          <h3>RESPONSIVE WEB DESIGN</h3>
          <p>In a day and age where people depend on their mobile devices just as much as their computers, I always design and develop responsive websites and apps that adapt to any type of device, platform, or browser.</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="service"> <i class="fa fa-pencil-square-o"></i>
          <h3>USER INTERFACE DESIGN</h3>
          <p>"If you have to explain it, it's not that good."  I'm a strong believer that user interfaces can make or break a product. User interfaces must be empathetic and intuitive to keep users coming back.</p>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-2 col-sm-12">
        <div class="service"> <i class="fa fa-paper-plane-o"></i>
          <h3>EXPERIENCE DESIGN</h3>
          <p>Good design should anticipate, engage, and delight users for the right reasons, and be invisible at all other times. Coupling aesthetic design with engaging user experiences, I strive to design and build experiences for all use cases.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    
    <div class="row">
      <div class="portfolio-items">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="www.presidentobamabook.com" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>President Obama Book</h4>
              </div>
              <img src="../img/portfolio/obama.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="www.bluestarcoloring.com" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Blue Star Coloring</h4>
              </div>
              <img src="../img/portfolio/bluestar.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="www.codingkids.xyz" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Coding Kids</h4>
              </div>
              <img src="../img/portfolio/codingkids.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://nicolettewilliams.github.io/WhackAMole.html" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Whack-A-Mole</h4>
              </div>
              <img src="../img/portfolio/squirrel.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Bullnanza Bulldogges</h4>
              </div>
              <img src="../img/portfolio/dog.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://nicolettewilliams.github.io/SimpleSimon.html" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Simple Simon</h4>
              </div>
              <img src="../img/portfolio/simon.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Coming Soon</h4>
              </div>
              <img src="../img/portfolio/soon.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Coming Soon</h4>
              </div>
              <img src="../img/portfolio/soon.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials Section -->
<!-- <div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>What our clients say</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row testimonials">
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>John Doe</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>Jane Doe</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>Chris Smith</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Resume Section -->
<a href="../Resume.pdf"> 
  <div id="resume" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2 class="resume-link">Click Here To See My Resume</h2>
      </div>
    </div>
  </div>
</a>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4 contact-col">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <br>
            San Antonio, TX</p>
        </div>
      </div>
      <div class="col-md-4 contact-col">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p> <a class="email-link" href="mailto:nicolette.williams8@icloud.com"> nicolette.williams8@icloud.com</a></p>
        </div>
      </div>
      <div class="col-md-4 contact-col">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p> 210-605-4797<br>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>

@stop