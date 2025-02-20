<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
   <head>
      <meta charset="utf-8"/>
      {{-- @php
      $seo = \App\Helpers\SeoHelper::getSEO('home');
  @endphp --}}
  
  <title>{{ $seo->meta_title ?? 'Default Title' }}</title>
  <meta name="description" content="{{ $seo->meta_description ?? 'Default Description' }}">
  <meta name="keywords" content="{{ $seo->meta_keywords ?? 'default, keywords' }}">
  <link rel="canonical" href="{{ $seo->canonical_url ?? url('/') }}">
  
  <!-- Open Graph -->
  <meta property="og:title" content="{{ $seo->og_title ?? 'Default OG Title' }}">
  <meta property="og:description" content="{{ $seo->og_description ?? 'Default OG Description' }}">
  <meta property="og:image" content="{{ $seo->og_image ?? asset('default-og-image.jpg') }}">
  
  <!-- Twitter Card -->
  <meta name="twitter:title" content="{{ $seo->twitter_title ?? 'Default Twitter Title' }}">
  <meta name="twitter:description" content="{{ $seo->twitter_description ?? 'Default Twitter Description' }}">
  <meta name="twitter:image" content="{{ $seo->twitter_image ?? asset('default-twitter-image.jpg') }}">
  
  <!-- Tags for better categorization -->
  @if(!empty($seo->tags))
      <meta name="tags" content="{{ implode(',', $seo->tags) }}">
  @endif
  
  <!-- Focus Keywords for better indexing -->
  @if(!empty($seo->focus_keywords))
      <meta name="focus_keywords" content="{{ implode(',', $seo->focus_keywords) }}">
  @endif
      <meta name="author" content="jskraft">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#2e2a8f">
      <!--website-favicon-->
      <link href="{{ asset('frontend/assets/images/favicon.png') }}" rel="icon">
      <!--plugin-css-->
      <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/css/plugin.min.css') }}" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <!-- template-style-->
      <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/css/darkmode.css') }}" rel="stylesheet">

   </head>
   <body>  
      	 <!--Dark Mode Switch start -->
	 <div class="switch-wrapper">
		<label class="switch" for="niwax">
		  <input type="checkbox" id="niwax"/>
		  <div class="slider round"></div>
		</label>
	  </div>
	 <!--Dark Mode Switch end-->  
          <!-- top progress bar start-->
          <div id="progress-bar"></div>
          <!-- top progress bar end -->
          
      <!--Start Preloader -->
      <div class="onloadpage" id="page_loader">
         <div class="pre-content">
            <div class="logo-pre"><img src="images/logo.png" alt="Logo" class="img-fluid" /></div>
            <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
         </div>
       </div>
      <!--End Preloader -->
      <!--Start Header -->
      <header class="nav-bg-b main-header navfix fixed-top menu-white">
         <div class="container-fluid m-pad">
            <div class="menu-header">
               <div class="dsk-logo"><a class="nav-brand" href="index.html">
                  <img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
                  <img src="images/logo.png" alt="Logo" class="mega-darks-logo"/>
                  </a>
               </div>
               <div class="custom-nav" role="navigation">
                  <ul class="nav-list">
                     <li>
                        <a href="digital-agency-dark.html" class="menu-links">
                            <i class="fas fa-home"></i> Start
                        </a>
                    </li >                     <li class="sbmenu">
                        <a href="#" class="menu-links"> <i class="fas fa-code"></i>
                           Services</a>
                        <div class="nx-dropdown">
                           <div class="sub-menu-section">
                              <div class="container">
                                 <div class="col-md-12">
                                    <div class="sub-menu-center-block">
                                       <div class="sub-menu-column">
                                          <div class="menuheading">Multi-Page Demo</div>
                                          <ul>
                                             <li><a href="index.html">Homepage</a></li>
                                             <li><a href="digital-agency.html">Digital Agency</a></li>
                                             <li><a href="digital-agency-dark.html">Digital Agency Dark</a></li>
                                             <li><a href="web-design-agency.html">Web Design Agency</a></li>
                                             <li><a href="web-design-agency-dark.html">Web Design Agency Dark</a></li>
                                             <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                             <li><a href="digital-marketing-dark.html">Digital Marketing Dark</a></li>
                                             <li><a href="lead-generation.html">Lead Generation Agency</a></li>
                                             <li><a href="lead-generation-dark.html">Lead Generation Agency Dark</a></li>
                                          </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          <div class="menuheading">&nbsp;</div>
                                          <ul>
                                             <li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
                                             <li><a href="freelance-portfolio-dark.html">Freelance Portfolio Dark</a></li>
                                             <li><a href="app-development.html">App Development Agency</a></li>
                                             <li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
                                             <li><a href="creative-agency.html">Creative Agency</a></li>
                                             <li><a href="branding-agency.html">Branding  Agency</a></li>
                                             <li><a href="modern-agency.html">Modern Agency</a></li>
                                             <li><a href="business-and-startup.html">Business & Startup</a></li>
                                             <li><a href="graphic-studio.html">Graphic Studio</a></li>
                                          </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          <div class="menuheading">One-Page Demo</div>
                                          <ul>
                                             <li><a href="digital-agency-onepage.html">Digital Agency</a></li>
                                             <li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
                                             <li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
                                             <li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
                                             <li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
                                             <li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
                                             <li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
                                             <li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
                                             <li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
                                          </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          <div class="menuheading">&nbsp;</div>
                                          <ul>
                                             <li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a></li>
                                             <li><a href="app-development-onepage.html">App Development Agency</a></li>
                                             <li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
                                             <li><a href="creative-agency-onepage.html">Creative Agency</a></li>
                                             <li><a href="branding-agency-onepage.html">Branding  Agency</a></li>
                                             <li><a href="modern-agency-onepage.html">Modern Agency</a></li>
                                             <li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
                                             <li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="digital-agency-dark.html" class="menu-links">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li > 
                    <li>
                     <a href="digital-agency-dark.html" class="menu-links">
                         <i class="fas fa-briefcase"></i> Portfolio
                     </a>
                 </li > 
                     <li>
                        <a href="digital-agency-dark.html" class="menu-links">
                            <i class="fas fa-phone-alt"></i> Contact
                        </a>
                    </li > 

                        <a href="#" class="menu-links right-bddr">&nbsp;</a>
                        <!--menu right border-->
                     <li class="contact-show">
                        <a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
                        <div class="contact-inquiry">
                           <div class="contact-info-">
                              <div class="contct-heading">Jskraft Contacts</div>
                              <div class="inquiry-card-nn hrbg">
                                 <div class="title-inq-c">FOR HR DEPARTMENT</div>
                                 <ul>
                                    <li class="mb0"><img src="images/flags/us.svg" alt="us office" class="flags-size"> <a href="tel:1111111111" >+1-123-456-7890</a></li>
                                 </ul>
                              </div>
                              <div class="inquiry-card-nn">
                                 <div class="title-inq-c">FOR SALES DEPARTMENT</div>
                                 <ul>
                                    <li><a href="tel:1111111111"><img src="images/flags/us.svg" alt="us office" class="flags-size"> +1-123-456-7890</a></li>
                                    <li><a href="tel:1111111111"><img src="images/flags/au.svg" alt="australia office" class="flags-size"> +1-123-456-7890</a></li>
                                    <li><i class="fab fa-skype"></i><a href="skype:niwax.company?call" >niwax.company</a></li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:info@businessname.com" >info@businessname.com</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li><a href="get-quote.html" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>

                  </ul>
               </div>
               <div class="mobile-menu2">
                  <ul class="mob-nav2">
                     <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="modal" data-bs-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                     <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                  </ul>
               </div>
            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
               <ul class="first-nav">
                  <li>
                     <a href="#">Services</a>
                  </li>
                  <li>
                     <a href="#">Pages</a>
                     <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="why-us.html">Why Us</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="team-details.html">Team Single</a></li>
                        <li><a href="case-study.html">Case Study</a></li>
                        <li><a href="case-study-details.html">Case Study Single</a></li>
                        <li><a href="mission-vision.html">Mission & Vision</a></li>
                        <li><a href="development-process.html">Development Process</a></li>
                        <li><a href="client-reviews.html">Client Reviews</a> </li>
                        <li><a href="clients.html">Our Clients</a></li>
                        <li><a href="get-quote.html">Contact Us</a> </li>
                        <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                        <li><a href="login.html">Login Page</a> </li>
                        <li><a href="service-card.html">Service Card</a> </li>
                        <li><a href="service-web.html">Service Web</a></li>
                        <li><a href="service-app.html">Service Mobile App</a></li>
                        <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                        <li><a href="service-graphic.html">Service Graphic</a></li>
                        <li><a href="career.html">Careers</a> </li>
                        <li><a href="shop-page.html">Shop Single</a> </li>
                        <li><a href="shop-details.html">Shop Details</a> </li>
                        <li><a href="shop-cart.html">Shop Cart</a> </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Shortcodes</a>
                     <ul>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="button.html">Buttons</a></li>
                        <li><a href="locations.html">Office Location</a></li>
                        <li><a href="faq.html">FAQs</a>	</li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="error.html">404 Page</a></li>
                        <li><a href="gradients.html">Background Gradients</a></li>
                        <li><a href="header-v1.html">Header v1</a></li>
                        <li><a href="header-v2.html">Header v2</a></li>
                        <li><a href="header-v3.html">Header v3</a></li>
                        <li><a href="footer-design.html">Footer</a></li>
                        <li><a href="hover-animation.html">Hover Animation</a></li>
                        <li><a href="popup-modal.html">Popup Modal</a></li>
                        <li><a href="lists.html">Lists</a></li>
                        <li><a href="bootstrap-components.html">Bootstrap Components</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Portfolio</a>
                     <ul>
                        <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                        <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                        <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
<li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                        <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Blog</a>
                     <ul>
                        <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                        <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="bottom-nav">
                  <li class="prb">
                     <a href="tel:+11111111111">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                           <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                              />
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="mailto:somewebmedia@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                           <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="skype:niwax.company?call">
                        <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                           <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
                        </svg>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <!--Mobile contact-->
      <div class="popup-modal1">
         <div class="modal" id="menu-popup">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                     </div>
                     <button type="button" class="closes" data-bs-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                           <div class="fieldsets row">
                              <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                              <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                              <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                              <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                              <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                           </div>
                           <div class="fieldsets mt20 pb20">
                              <button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Mobile contact-->
      <!--End Header -->
      <!--Start Hero-->
      <section class="hero-card-web bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div class="col-lg-5">
                  <div class="hero-heading-sec">
                     <h2 class="wow fadeIn" data-wow-delay="0.3s"><span>Web.</span> <span>Mobile.</span> <span>Graphic.</span> <span>Marketing.</span></h2>
                     <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for transforming and innovating businesses.</p>
                     <a href="case-study.html" class="niwax-btn2 wow fadeIn"  data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i></a>
                     <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="images/hero/awards-logo.png" alt="awards-logo" class="img-fluid"/></div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                     <div class="video-intro-pp"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                     <div class="title-hero-oth">
                        <p><span>for brands and companies</span></p>
                     </div>
                  </div>
                  <div class="hero-right-scmm">
                     <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                           <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/vr.png">
                                    </div>
                                    <div class="title-serv-c"><span>VR</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/app-develop.png">
                                    </div>
                                    <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/startup.png">
                                    </div>
                                    <div class="title-serv-c"><span>Startup</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/car-rental.png">
                                    </div>
                                    <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-e" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/marketing.png">
                                    </div>
                                    <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="images/service/ewallet.png">
                                    </div>
                                    <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Hero-->
      <!--Start About-->
      <section class="about-sec-rpb pad-tb">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-10">
                  <div class="common-heading">
                     <h1 class="mb30"><span class="text-second">Top-rated</span> Web And Mobile App Development Company</h1>
                     <p>Lorem Ipsum is <span class="text-radius text-light text-animation bg-b">simply dummy</span> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. <span class="text-bold">Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. <span class="text-bold">Lorem Ipsum </span> is simply dummy text of the printing and typesetting industry.
                     </p>
                                </div>
               </div>
            </div>
         </div>
      </section>
      <!--End About-->
      <!--Start Service-->
      <section class="service-section-prb pad-tb">
         <div class="container">
            <div class="row upset">
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".2s">
                  <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                     <h4 class="mb10">INTEGRATED SERVICES</h4>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                     <a href="javascript:void(0)" class="mt20 link-prb">Learn More <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".4s">
                  <div class="service-sec-list srvc-bg-nx srcl1">
                     <img src="images/icons/development.svg" alt="service">
                     <h5 class="mb10">Web Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#"><strong>.</strong>Net</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">Joomla</a></li>
                     </ul>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                  </div>
               </div>
               <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".6s">
                  <div class="service-sec-list srvc-bg-nx srcl2">
                     <img src="images/icons/ecommerce.svg" alt="service">
                     <h5 class="mb10">Ecommerce Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Magento </a> </li>
                        <li> <a href="#">WP</a> </li>
                        <li> <a href="#">Shopify </a> </li>
                        <li> <a href="#">Joomla</a></li>
                     </ul>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay=".8s">
                  <div class="service-sec-list srvc-bg-nx srcl3">
                     <img src="images/icons/app.svg" alt="service">
                     <h5 class="mb10">Mobile App Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">iPhone </a> </li>
                        <li> <a href="#">Android</a> </li>
                        <li> <a href="#">Cross Platform </a></li>
                     </ul>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay="1s">
                  <div class="service-sec-list srvc-bg-nx srcl4">
                     <img src="images/icons/tech.svg" alt="service">
                     <h5 class="mb10">Trending Technologies</h5>
                     <ul class="-service-list">
                        <li> <a href="#">React.JS </a> </li>
                        <li> <a href="#">Node.JS </a> </li>
                        <li> <a href="#"> Angular.JS </a></li>
                     </ul>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp" data-wow-delay="1.2s">
                  <div class="service-sec-list srvc-bg-nx srcl5">
                     <img src="images/icons/seo.svg" alt="service">
                     <h5 class="mb10">Digital Marketing</h5>
                     <ul class="-service-list">
                        <li> <a href="#">SEO </a> </li>
                        <li> <a href="#">SMO </a> </li>
                        <li> <a href="#">PPC </a></li>
                        <li> <a href="#">PPC </a></li>
                     </ul>
                     <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                  </div>
               </div>
            </div>
            <div class="-cta-btn mt70">
               <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
                  <p>Hire a <span>Dedicated Developer</span></p>
                  <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </section>
      <!--End Service-->
      <!--Start work-category-->
      <section class="work-category pad-tb">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 v-center">
                  <div class="common-heading text-l">
                     <h2>Helping Businesses in All Domains</h2>
                     <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="work-card-set">
                     <div  class="icon-set wow fadeIn" data-wow-delay=".2s">
                        <div class="work-card cd1">
                           <div class="icon-bg"><img src="images/icons/icon-1.png" alt="Industries" /></div>
                           <p>Social Networking</p>
                        </div>
                     </div>
                     <div  class="icon-set wow fadeIn" data-wow-delay=".4s">
                        <div class="work-card cd2">
                           <div class="icon-bg"><img src="images/icons/icon-2.png" alt="Industries" /></div>
                           <p>Digital Marketing</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                        <div class="work-card cd3">
                           <div class="icon-bg"><img src="images/icons/icon-3.png" alt="Industries" /></div>
                           <p>Ecommerce Development</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                        <div class="work-card cd4">
                           <div class="icon-bg"><img src="images/icons/icon-4.png" alt="Industries" /></div>
                           <p>Video Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                           <div class="icon-bg"><img src="images/icons/icon-5.png" alt="Industries" /></div>
                           <p>Banking Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                           <div class="icon-bg"><img src="images/icons/icon-6.png" alt="Industries" /></div>
                           <p>Enterprise Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                           <div class="icon-bg"><img src="images/icons/icon-7.png" alt="Industries" /></div>
                           <p>Education Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                           <div class="icon-bg"><img src="images/icons/icon-8.png" alt="Industries" /></div>
                           <p>Tour and Travels</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                           <div class="icon-bg"><img src="images/icons/icon-9.png" alt="Industries" /></div>
                           <p>Health Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                           <div class="icon-bg"><img src="images/icons/icon-10.png" alt="Industries" /></div>
                           <p>Event & Ticket</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                        <div class="work-card cd11">
                           <div class="icon-bg"><img src="images/icons/icon-11.png" alt="Industries" /></div>
                           <p>Restaurant Service</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                        <div class="work-card cd12">
                           <div class="icon-bg"><img src="images/icons/icon-12.png" alt="Industries" /></div>
                           <p>Business Consultant</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End  work-category-->
      <!--why choose-->
      <section class="why-choos-lg pad-tb deep-dark">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="common-heading text-l">
                     <span>Why Choose Us</span>
                     <h2 class="mb20">Why The Niwax <span class="text-second text-bold">Ranked Top</span> Among The Leading Web & App Development Companies</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="images/icons/computers.svg" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Streamlined Project Management</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="images/icons/worker.svg" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>A Dedicated Team of Experts</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="images/icons/deal.svg" alt="icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Completion of Project in Given Time</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="images/about/about-company.jpg" alt="image" class="img-fluid"></div>
                  <p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <div class="cta-card mt60 text-center">
                     <h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>
                     <a href="#" class="niwax-btn1 mt30"><span>Request A Quote <i class="fas fa-chevron-right fa-icon"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End why choose-->
        <!--Start Portfolio-->
        <section class="portfolio-page pad-tb">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-lg-6">
               <div class="common-heading">
                 <span>Our Work</span>
                 <h2 class="mb0">Portfolio</h2>
               </div>
             </div>              
           </div>

           <div class="row mt60">

           <div class="col-lg-12 col-sm-12 wptbb">
              <div class="pbwide shadow bg-gradient1">
               <div class="portfolio-item-info-tt">
                 <div class="logowide mb20"><img src="images/client/customer-logo-5.png" alt="logo" class="img-fluid"></div>
                 <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                 <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                 <ul class="info-list-ul">
                   <li>Product Strategy</li>
                   <li>Product UI/UX Design</li>
                   <li>Branding Design</li>
                   <li>Design System</li>
                 </ul>
                 <a href="#" class="btn-outline lnk mt30">View Project  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>                      
               </div>
               <div class="portfolio-wide-image">
                 <div class="img-wide-blocktt tilt-outer">
                   <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                   <div class="desktopblock shadow1"><img src="images/portfolio/portfolio-wide-1.jpg" alt="img" class="img-fluid"> </div>
                   <div class="mobileblock shadow1"><img src="images/portfolio/portfolio-wide-1a.jpg" alt="img" class="img-fluid"> </div>
                  </div>
                  </div>
               </div>
              </div>
            </div>
           

            <div class="col-lg-12 col-sm-12 wptbb">
              <div class="pbwide shadow bg-gradient2">
               <div class="portfolio-item-info-tt">
                <div class="logowide mb20"><img src="images/client/customer-logo-3.png" alt="logo" class="img-fluid"></div>
                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                 <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                 <ul class="info-list-ul">
                   <li>Product Strategy</li>
                   <li>Product UI/UX Design</li>
                   <li>Branding Design</li>
                   <li>Design System</li>
                 </ul>
                 <a href="#" class="btn-outline lnk mt30">View Project  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>                      
               </div>
               <div class="portfolio-wide-image">
                <div class="img-wide-blocktt tilt-outer">
                  <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                  <div class="desktopblock shadow1"><img src="images/portfolio/portfolio-wide-2.jpg" alt="img" class="img-fluid"> </div>
                  <div class="mobileblock shadow1"><img src="images/portfolio/portfolio-wide-2a.jpg" alt="img" class="img-fluid"> </div>
                 </div>
                 </div>
              </div>
              </div>
            </div>

            <div class="col-lg-12 col-sm-12 wptbb">
              <div class="pbwide shadow bg-gradient3">
               <div class="portfolio-item-info-tt">
                <div class="logowide mb20"><img src="images/client/customer-logo-7.png" alt="logo" class="img-fluid"></div>
                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                 <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                 <ul class="info-list-ul">
                   <li>Product Strategy</li>
                   <li>Product UI/UX Design</li>
                   <li>Branding Design</li>
                   <li>Design System</li>
                 </ul>
                 <a href="#" class="btn-outline lnk mt30">View Project  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>                      
               </div>
               <div class="portfolio-wide-image">
                <div class="img-wide-blocktt tilt-outer">
                  <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                  <div class="desktopblock shadow1"><img src="images/portfolio/portfolio-wide-3.jpg" alt="img" class="img-fluid"> </div>
                  <div class="mobileblock shadow1"><img src="images/portfolio/portfolio-wide-3a.jpg" alt="img" class="img-fluid"> </div>
                 </div>
                 </div>
              </div>
              </div>
            </div>

            <div class="col-lg-12 col-sm-12 wptbb">
              <div class="pbwide shadow bg-gradient4">
               <div class="portfolio-item-info-tt">
                <div class="logowide mb20"><img src="images/client/customer-logo-5.png" alt="logo" class="img-fluid"></div>
                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                 <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                 <ul class="info-list-ul">
                   <li>Product Strategy</li>
                   <li>Product UI/UX Design</li>
                   <li>Branding Design</li>
                   <li>Design System</li>
                 </ul>
                 <a href="#" class="btn-outline lnk mt30">View Project  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>                      
               </div>
               <div class="portfolio-wide-image">
                <div class="img-wide-blocktt tilt-outer">
                  <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                  <div class="desktopblock shadow1"><img src="images/portfolio/portfolio-wide-4.jpg" alt="img" class="img-fluid"> </div>
                  <div class="mobileblock shadow1"><img src="images/portfolio/portfolio-wide-4a.jpg" alt="img" class="img-fluid"> </div>
                 </div>
                 </div>
              </div>
              </div>
            </div>


         </div>

         </div>
       </section>
       <!--End Portfolio-->
      <!--Start Clients-->
      <section class="clients-section- bg-gradient15 pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our happy customers</span>
                     <h2 class="mb30">Some of our Clients</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="clients-logos text-center col-12">
                     <ul class="row text-center clearfix">
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
                           <div class="brand-logo"><img src="images/client/clients-1.png" alt="clients" class="img-fluid"></div>
                           <p>Shutter, USA</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".4s">
                           <div class="brand-logo"><img src="images/client/clients-2.png" alt="clients" class="img-fluid"></div>
                           <p>Hipster, USA</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".6s">
                           <div class="brand-logo"><img src="images/client/clients-3.png" alt="clients" class="img-fluid"></div>
                           <p>Happy, USA</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".8s">
                           <div class="brand-logo"><img src="images/client/clients-4.png" alt="clients" class="img-fluid"></div>
                           <p>Opera Tours, USA</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1s">
                           <div class="brand-logo"><img src="images/client/clients-5.png" alt="clients" class="img-fluid"></div>
                           <p>Royale Stone, UK</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
                           <div class="brand-logo"><img src="images/client/clients-6.png" alt="clients" class="img-fluid"></div>
                           <p>QTP, Australia</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.4s">
                           <div class="brand-logo"><img src="images/client/clients-7.png" alt="clients" class="img-fluid"></div>
                           <p>PAPA, Malaysia</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.6s">
                           <div class="brand-logo"><img src="images/client/clients-8.png" alt="clients" class="img-fluid"></div>
                           <p>Coffee, Australia</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.8s">
                           <div class="brand-logo"><img src="images/client/clients-9.png" alt="clients" class="img-fluid"></div>
                           <p>Bakery, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2s">
                           <div class="brand-logo"><img src="images/client/clients-10.png" alt="clients" class="img-fluid"></div>
                           <p>Iconico, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.2s">
                           <div class="brand-logo"><img src="images/client/clients-11.png" alt="clients" class="img-fluid"></div>
                           <p>Tom N Jerry, UK</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.4s">
                           <div class="brand-logo"><img src="images/client/clients-12.png" alt="clients" class="img-fluid"></div>
                           <p>Arch, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.6s">
                           <div class="brand-logo"><img src="images/client/clients-13.png" alt="clients" class="img-fluid"></div>
                           <p>Aro Group, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.8s">
                           <div class="brand-logo"><img src="images/client/clients-14.png" alt="clients" class="img-fluid"></div>
                           <p>Tom Group, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3s">
                           <div class="brand-logo"><img src="images/client/clients-4.png" alt="clients" class="img-fluid"></div>
                           <p>Premier Pipes, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.2s">
                           <div class="brand-logo"><img src="images/client/clients-1.png" alt="clients" class="img-fluid"></div>
                           <p>Dynamic, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.4s">
                           <div class="brand-logo"><img src="images/client/clients-7.png" alt="clients" class="img-fluid"></div>
                           <p>Fns Inc, India</p>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.6s">
                           <div class="brand-logo"><img src="images/client/clients-2.png" alt="clients" class="img-fluid"></div>
                           <p>RP School, India</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Clients-->


      <!--Start Testinomial-->
      <section class="testinomial-section bg-none pad-tb">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2>Over 1200+ Satisfied Clients and Growing</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="video-testimonials owl-carousel">
                     <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        <a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0">
                           <img src="images/client/client-pic.jpg" alt="client" class="img-fluid">
                           <div class="review-vid-details">
                              <div class="-vid-ico"><span class="triangle-play2"></span></div>
                              <p>Cina Cleaves</p>
                           </div>
                        </a>
                     </div>
                     <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        <a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0">
                           <img src="images/client/client-pic-a.jpg" alt="client" class="img-fluid">
                           <div class="review-vid-details">
                              <div class="-vid-ico"><span class="triangle-play2"></span></div>
                              <p>Jokvch Marlin</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="owl-carousel testimonial-card-a pl25">
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info v-center">
                                 <h5>Mike Smith</h5>
                                 <p>Business Owner, <small>Sydney, Australia</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Fred Chener</h5>
                                 <p>CEO of Aramxx, <small>Ohio, US State</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid" /></div>
                              <div class="media-body user-info">
                                 <h5>Mathilda Burns</h5>
                                 <p>Backery Shop, <small>Tronto, Italy</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="review-ref mt100">
                     <div class="review-title-ref">
                        <a href="#"><h4>Read More Reviews</h4></a>
                        <p>Read our reviews from all over world.</p>
                     </div>
                     <div class="review-icons">
                        <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".2s"><img src="images/about/reviews-icon-1.png" alt="review" class="img-fluid"></a>
                        <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".4s"><img src="images/about/reviews-icon-2.png" alt="review" class="img-fluid"></a>
                        <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".6s"><img src="images/about/reviews-icon-3.png" alt="review" class="img-fluid"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Testinomial-->
      <!--Start CTA-->
      <section class="cta-area pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2>We Love to Listen to Your Requirements</h2>
                     <a href="javascript:void(0)" class="btn-outline">Estimate Project <i class="fas fa-chevron-right fa-icon"></i></a>
                     <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i> (123) 456 7890</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
         <div class="shape shape-a2"><img src="images/shape/shape-4.svg" alt="shape"></div>
         <div class="shape shape-a3"><img src="images/shape/shape-13.svg" alt="shape"></div>
         <div class="shape shape-a4"><img src="images/shape/shape-11.svg" alt="shape"></div>
      </section>
      <!--End CTA-->
      <!--Start Location-->
      <section class="our-office pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2>Our Office</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="images/location/newyork.png" alt="New York" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>New York</h4>
                        <p>603 FA Forest Avenue, New York, USA 10021</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="images/location/sydeny.png" alt="sydney" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Sydney</h4>
                        <p>2449 Columbia Boulevard, Sydney, 10021</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
                  <div class="office-card mb0">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="images/location/rome.png" alt="rome" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Rome</h4>
                        <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Location-->
      <!--Start Footer-->
      <footer>

         <div class="footer-row2">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                     <a class="navbar-brand mt30 mb25" href="#"> <img src="images/logo.png" alt="Logo" width="100" /></a>
                     <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                     <a href="#" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h5>Contact Us</h5>
                     <ul class="footer-address-list ftr-details">
                        <li>
                           <span><i class="fas fa-envelope"></i></span>
                           <p>Email <span> <a href="mailto:info@businessname.com">info@businessname.com</a></span></p>
                        </li>
                        <li>
                           <span><i class="fas fa-phone-alt"></i></span>
                           <p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
                        </li>
                        <li>
                           <span><i class="fas fa-map-marker-alt"></i></span>
                           <p>Address <span> 123 Business Centre London SW1A 1AA</span></p>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <h5>Company</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="get-quote.html">Contact</a></li>
                        <li><a href="javascript:void(0)">Customer's FAQ</a></li>
                        <li><a href="javascript:void(0)">Refund Policy</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                        <li><a href="javascript:void(0)">License & Copyright</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <h5>Company</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="get-quote.html">Contact</a></li>
                        <li><a href="javascript:void(0)">Customer's FAQ</a></li>
                        <li><a href="javascript:void(0)">Refund Policy</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                        <li><a href="javascript:void(0)">License & Copyright</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-brands">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 v-center">
                     <h5 class="mb10">Top App Development Companies</h5>
                     <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                  </div>
                  <div class="col-lg-8 v-center">
                     <ul class="footer-badges-">
                        <li><a href="#"><img src="images/about/badges-a.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-b.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-c.png" alt="badges"></a></li>
                        <li><a href="#"><img src="images/about/badges-d.png" alt="badges"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-row3">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="footer-social-media-icons">
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                           <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-">
                           <p>Copyright &copy; 2020-2021 Niwax. All rights reserved. Template By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Rajesh Doot</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--End Footer-->
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script> 
      <script src="{{ asset('frontend/assets/js/plugin.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/preloader.js')}}"></script>
      <!--common script file-->
      <script src="{{ asset('frontend/assets/js/main.js')}}"></script>      
      <script src="{{ asset('frontend/assets/js/progress-bar.js')}}"></script>  
      <script src="{{ asset('frontend/assets/js/dark-mode.js')}}"></script>
    
   </body>
</html>