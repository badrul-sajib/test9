@extends('layout.master')

@section('title', 'Home || ')

@section('content')
<!--================== Hero Area Section Start ==================-->
<section class="hero-area section">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-8 mx-auto">
          <div class="hero-img mx-auto mb-3 position-relative">
            <img height="120px" width="120px" src="images/file.jpg" alt="img">
            <span class="shape shape-1"></span>
            <span class="shape shape-2"></span>
            <span class="shape shape-3"></span>
            <span class="shape shape-4"></span>
          </div>
          <p class="mb-3 fw-medium fs-4 text-primary">Hello, myself Badrul Hasan Sajib</p>
          <h1 class="mb-4">PHP Developer</h1>
          <p class="mb-5">Knowledge and technologies I use to create websites and applications, I use (PHP v{{ PHP_VERSION }}) language to develop web applications. And for the framework I'm using Laravel v{{ Illuminate\Foundation\Application::VERSION }}.</p>
          <a href="{{ route('about') }}" class="btn btn-primary btn-lg">Know About Me</a>
        </div>
      </div>
    </div>
    <div class="has-circle">
      <span class="circle circle-1"></span>
      <span class="circle circle-2"></span>
      <span class="circle circle-3"></span>
      <span class="circle circle-4"></span>
      <span class="circle circle-5"></span>
      <span class="circle circle-6"></span>
      <span class="circle circle-7"></span>
    </div>
  </section>
  <!--================== Hero Area Section End ==================-->
  
  <!--================== Brand Logo Section start ==================-->
  <section class="brand-logo section pt-0">
    <div class="container">
      <div class="brand-logo-slider" data-aos="fade-up" data-aos-duration="1500">
        <img class="brand-logo-img img-fluid" src="images/facebook.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/tinder.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images//airbnb.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/microsoft.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/hubspp.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/tinder.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/facebook.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/tinder.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images//airbnb.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/microsoft.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/hubspp.svg" alt="img">
        <img class="brand-logo-img img-fluid" src="images/tinder.svg" alt="img">
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--================== Brand Logo Section End ==================-->
  
  <!--================== Section Start ==================-->
  <section class="has-bg-color">
    <div class="container">
      <div class="row  justify-content-center align-items-center">
        <div class="col-md-6">
          <div class="me-4" data-aos="fade-right" data-aos-duration="1500">
            <h2>A Global network of Talent That changeing the way Of creative</h2>
          </div>
        </div>
        <div class=" col-md-6" data-aos="fade-left" data-aos-duration="1500">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Males
            a est sagittis et nulla leo ut nulla aliquam. Nisi, fermentum venentis enim vel suspend wergisse eu magnis
            libero orci. Malesuada tortor aliquam malesuada vitae, ullamcorper nisl eget gravda et. Vivmus arcu laoreet
            gravida purus cras. Et laoreet sit feugiat vehicula dufzi,
            ermentum venentis enim vel suspend wergisse eu magnis libe orci.</p>
        </div>
      </div>
    </div>
  </section>
  <!--================== Section End ==================-->
  
  <!--================== Service Section Start ==================-->
  <section class="services section">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-lg-6 col-12 mx-auto ">
          <div class="section-title mb-md-4">
            <h2>Providing <strong>Services
                <svg width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong></h2>
          </div>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 card-item">
          <div class="card text-center  border-0 bg-white radius shadow px-3 py-5" data-aos="fade-right"
            data-aos-duration="1500">
            <div class="card-icon mb-3">
              <i class="fas fa-cloud "></i>
            </div>
            <div class="card-body">
              <h4 class="card-title">Research And Design</h4>
              <p class="card-text small">Lorem ipsum dolor amet, consesd ctetur adipiscing elit. Malesa est sagittis et
                nuasslla ntis enim vel suspend wergisse eu masgnis suada vitae, ullamchper nisl eget gravda.</p>
              <a href="portfolio-single.html" class="text-primary card-link mb-0 small">View Details<i
                  class="fas fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 card-item">
          <div class="card text-center  border-0 bg-white radius shadow px-3 py-5">
            <div class="card-icon  mb-3">
              <i class="far fa-lightbulb "></i>
            </div>
            <div class="card-body">
              <h4 class="card-title">User Interface Design</h4>
              <p class="card-text small">Lorem ipsum dolor amet, consesd ctetur adipiscing elit. Malesa est sagittis et
                nuasslla ntis enim vel suspend wergisse eu masgnis suada vitae, ullamchper nisl eget gravda.</p>
              <a href="#" class="text-primary card-link mb-0 small">View Details<i
                  class="fas fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 card-item">
          <div class="card text-center  border-0 bg-white radius shadow px-3 py-5" data-aos="fade-left"
            data-aos-duration="1500">
            <div class="card-icon mb-3">
              <i class="fas fa-suitcase-rolling "></i>
            </div>
            <div class="card-body">
              <h4 class="card-title">User Experience Design</h4>
              <p class="card-text small">Lorem ipsum dolor amet, consesd ctetur adipiscing elit. Malesa est sagittis et
                nuasslla ntis enim vel suspend wergisse eu masgnis suada vitae, ullamchper nisl eget gravda.</p>
              <a href="#" class="text-primary card-link mb-0 small">View Details<i
                  class="fas fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================== Service Section End ==================-->
  
  <!--================== Experience Section Start ==================-->
  <section class="experience section">
    <div class="container">
      <div class="row justify-content-between " data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-5">
          <div class="section-title mb-5">
            <h2>I Have brunch Of Huge <strong>
                Experience.....
                <svg width="243" height="19" viewBox="0 0 243 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.21709 14.5397C22.6251 11.094 43.5278 9.994 63.9195 6.62078C83.198 3.43169 103.311 4.48586 122.822 4.14529C147.108 3.72138 171.148 2.75291 195.34 5.24786C205.654 6.31158 217.3 7.49114 227.395 9.95137C230.185 10.6315 240.184 10.4221 241.39 12.7333"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong> </h2>
          </div>
          <p>Lorem ipsum dolor sit amet, conse asdsd ctetur adipiscing elit. Malesa est
            sagittis et nualla leo ut nulla
            aliquam. Nisi, fermetum suspend vene ntis enim vel sussrf bedspend</p>
          <div class="d-sm-flex justify-content-center mb-5 mb-lg-0 border-top pt-4 mt-4">
            <div class="bg-primary me-sm-4 p-3 mb-4 mb-md-0">
              <span class="text-primary h2">287+</span>
              <p class="small">Lorem ipsum dolor sit amet, consesd </p>
            </div>
            <div class="bg-primary me-sm-4 p-3 mb-4 mb-md-0">
              <span class="text-primary h2">12 years</span>
              <p class="small">Lorem ipsum dolor siswsst amet, codvsd nssde esd </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-5">
            <p class="text-secondery fw-normal mb-3 h4">Senior Product Designer</p>
            <h3 class="mb-3 pb-3 border-bottom">Agency Vision Trust</h3>
            <div class="d-md-flex justify-content-between">
              <p class="fw-normal">Dec 2018 - Sep 2019</p>
              <p class=" fw-normal">Thornridge Cir. Shiloh, Hawaii</p>
            </div>
          </div>
          <div class="mb-5">
            <p class="text-secondery fw-normal mb-3 h4">Lead User experience Designer</p>
            <h3 class="mb-3 pb-3 border-bottom">Balkan Brothers Ltd.</h3>
            <div class="d-md-flex justify-content-between">
              <p class="fw-normal">Dec 2018 - Sep 2019</p>
              <p class=" fw-normal">Washington. Manchester, Kentucky</p>
            </div>
          </div>
          <div class="mb-5">
            <p class="text-secondery fw-normal h4 mb-3">user Experience Designer</p>
            <h3 class="mb-3 pb-3 border-bottom">Grabstar Design House</h3>
            <div class="d-sm-flex justify-content-between">
              <p class="fw-normal">Dec 2018 - Sep 2019</p>
              <p class=" fw-normal">Thoridge. Syracuse, Connecticut</p>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>
  <!--================== Experience Section End ==================-->
  
  <!--================== Testimonial Section Start ==================-->
  <section class="testimonial section pt-0">
    <div class="container">
      <div class="row mb-3  text-center">
        <div class="col-lg-6 col-12 mx-auto ">
          <div class="section-title mb-md-5">
            <h2>Our <strong>Testimonial
                <svg width="288" height="20" viewBox="0 0 288 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M1.5542 13.3865C8.73165 13.3396 16.0446 12.002 22.9875 10.3399C27.8345 9.17953 32.4949 9.48038 37.3191 8.46843C57.1014 4.31885 77.8606 4.85593 97.98 5.19219C133.674 5.78877 169.523 5.16219 205.291 5.76C232.293 6.2113 259.037 9.10976 285.99 9.56025"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong></h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center bg-primary" data-aos="fade-up"
        data-aos-duration="2000">
        <div class="col-md-7 order-1 order-md-0">
          <div class="testimonial-left-slider">
            <div class="testimonial-left-slider-item">
              <svg class="quotation" width="60" height="61" viewBox="0 0 60 61" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24.1044 14.1903C25.6048 13.561 26.2341 11.7702 25.5564 10.3181L23.1847 5.33265C22.5071 3.92946 20.8614 3.29975 19.4093 3.92946C15.2951 5.67195 11.7618 7.94686 8.95443 10.7058C5.51786 13.9483 3.19455 17.6752 1.93609 21.7894C0.677632 25.9525 0 31.6151 0 38.827V53.6866C0 55.2838 1.30686 56.5907 2.90414 56.5907H21.9262C23.5235 56.5907 24.8304 55.2838 24.8304 53.6866V34.6644C24.8304 33.0667 23.5235 31.7603 21.9262 31.7603H12.8266C12.9234 26.8712 14.0851 22.9511 16.2148 19.9981C17.9573 17.6273 20.571 15.6912 24.1044 14.1903Z"
                  fill="#DBDBDB" />
                <path
                  d="M58.2764 14.1903C59.7769 13.5611 60.4056 11.7702 59.7285 10.3181L57.3568 5.38159C56.6791 3.97792 55.0335 3.34869 53.5814 3.97792C49.5156 5.72041 46.0301 7.99532 43.1749 10.7058C39.7378 13.9972 37.3666 17.7242 36.1077 21.8384C34.8492 25.9037 34.2205 31.5672 34.2205 38.8276V53.6871C34.2205 55.2844 35.5273 56.5913 37.1246 56.5913H56.1467C57.744 56.5913 59.0509 55.2844 59.0509 53.6871V34.665C59.0509 33.0672 57.744 31.7609 56.1467 31.7609H46.9987C47.0955 26.8717 48.2576 22.9516 50.3868 19.9986C52.1293 17.6274 54.743 15.6913 58.2764 14.1903Z"
                  fill="#DBDBDB" />
              </svg>
              <div class="ms-lg-5 ms-md-4  mb-3">
                <div class="ms-md-4">
                  <p>Lorem ipsum dolor sit amet, conse ctetur addipis cing elit. Malesa est sagittis
                    et nulla leo ut nulsla aliquam. Nisi, fermentum venentis enim vel sussp end wergisse eu magnis
                    libero
                    orci. Males uasda eget gravda et. Vivmus arcu laoreet gravida purus cras. Et laoreet sit feugiat
                    vehicula dufzi, eme tum venentis enim vel suspend wergisse eu maAgnis .</p>
                </div>
                <div class="d-flex ms-md-4   align-items-center justify-content-md-start justify-content-center">
                  <img class="img" src="images/tstimonial-left-img.png" alt="img">
                  <div class="text ms-3">
                    <h5 class="mt-4 mb-1">Ronald Richards</h5>
                    <p>CEO, Themeexpart Limited</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-left-slider-item">
              <svg class="quotation" width="60" height="61" viewBox="0 0 60 61" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24.1044 14.1903C25.6048 13.561 26.2341 11.7702 25.5564 10.3181L23.1847 5.33265C22.5071 3.92946 20.8614 3.29975 19.4093 3.92946C15.2951 5.67195 11.7618 7.94686 8.95443 10.7058C5.51786 13.9483 3.19455 17.6752 1.93609 21.7894C0.677632 25.9525 0 31.6151 0 38.827V53.6866C0 55.2838 1.30686 56.5907 2.90414 56.5907H21.9262C23.5235 56.5907 24.8304 55.2838 24.8304 53.6866V34.6644C24.8304 33.0667 23.5235 31.7603 21.9262 31.7603H12.8266C12.9234 26.8712 14.0851 22.9511 16.2148 19.9981C17.9573 17.6273 20.571 15.6912 24.1044 14.1903Z"
                  fill="#DBDBDB" />
                <path
                  d="M58.2764 14.1903C59.7769 13.5611 60.4056 11.7702 59.7285 10.3181L57.3568 5.38159C56.6791 3.97792 55.0335 3.34869 53.5814 3.97792C49.5156 5.72041 46.0301 7.99532 43.1749 10.7058C39.7378 13.9972 37.3666 17.7242 36.1077 21.8384C34.8492 25.9037 34.2205 31.5672 34.2205 38.8276V53.6871C34.2205 55.2844 35.5273 56.5913 37.1246 56.5913H56.1467C57.744 56.5913 59.0509 55.2844 59.0509 53.6871V34.665C59.0509 33.0672 57.744 31.7609 56.1467 31.7609H46.9987C47.0955 26.8717 48.2576 22.9516 50.3868 19.9986C52.1293 17.6274 54.743 15.6913 58.2764 14.1903Z"
                  fill="#DBDBDB" />
              </svg>
              <div class="ms-lg-5 ms-md-4 mb-3">
                <div class="ms-md-4">
                  <p>Lorem ipsum dolor sit amet, conse ctetur addipis cing elit. Malesa est sagittis
                    et nulla leo ut nulsla aliquam. Nisi, fermentum venentis enim vel sussp end wergisse eu magnis
                    libero
                    orci. Males uasda eget gravda et. Vivmus arcu laoreet gravida purus cras. Et laoreet sit feugiat
                    vehicula dufzi, eme tum venentis enim vel suspend wergisse eu maAgnis .</p>
                </div>
                <div
                  class="d-flex ms-md-4 mb-4 mb-md-0 align-items-center justify-content-md-start justify-content-center">
                  <img class="img" src="images/tstimonial-left-img.png" alt="img">
                  <div class="text ms-3">
                    <h5 class="mt-4 mb-1">Ronald Richards</h5>
                    <p>CEO, Themeexpart Limited</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-left-slider-item">
              <svg class="quotation" width="60" height="61" viewBox="0 0 60 61" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24.1044 14.1903C25.6048 13.561 26.2341 11.7702 25.5564 10.3181L23.1847 5.33265C22.5071 3.92946 20.8614 3.29975 19.4093 3.92946C15.2951 5.67195 11.7618 7.94686 8.95443 10.7058C5.51786 13.9483 3.19455 17.6752 1.93609 21.7894C0.677632 25.9525 0 31.6151 0 38.827V53.6866C0 55.2838 1.30686 56.5907 2.90414 56.5907H21.9262C23.5235 56.5907 24.8304 55.2838 24.8304 53.6866V34.6644C24.8304 33.0667 23.5235 31.7603 21.9262 31.7603H12.8266C12.9234 26.8712 14.0851 22.9511 16.2148 19.9981C17.9573 17.6273 20.571 15.6912 24.1044 14.1903Z"
                  fill="#DBDBDB" />
                <path
                  d="M58.2764 14.1903C59.7769 13.5611 60.4056 11.7702 59.7285 10.3181L57.3568 5.38159C56.6791 3.97792 55.0335 3.34869 53.5814 3.97792C49.5156 5.72041 46.0301 7.99532 43.1749 10.7058C39.7378 13.9972 37.3666 17.7242 36.1077 21.8384C34.8492 25.9037 34.2205 31.5672 34.2205 38.8276V53.6871C34.2205 55.2844 35.5273 56.5913 37.1246 56.5913H56.1467C57.744 56.5913 59.0509 55.2844 59.0509 53.6871V34.665C59.0509 33.0672 57.744 31.7609 56.1467 31.7609H46.9987C47.0955 26.8717 48.2576 22.9516 50.3868 19.9986C52.1293 17.6274 54.743 15.6913 58.2764 14.1903Z"
                  fill="#DBDBDB" />
              </svg>
              <div class="ms-lg-5 ms-md-4 mb-3">
                <div class="ms-md-4">
                  <p>Lorem ipsum dolor sit amet, conse ctetur addipis cing elit. Malesa est sagittis
                    et nulla leo ut nulsla aliquam. Nisi, fermentum venentis enim vel sussp end wergisse eu magnis
                    libero
                    orci. Males uasda eget gravda et. Vivmus arcu laoreet gravida purus cras. Et laoreet sit feugiat
                    vehicula dufzi, eme tum venentis enim vel suspend wergisse eu maAgnis .</p>
                </div>
                <div
                  class="d-flex ms-md-4 mb-4 mb-md-0 align-items-center justify-content-md-start justify-content-center">
                  <img class="img" src="images/tstimonial-left-img.png" alt="img">
                  <div class="text ms-3">
                    <h5 class="mt-4 mb-1">Ronald Richards</h5>
                    <p>CEO, Themeexpart Limited</p>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-5 col-xl-4 order-0 order-md-1">
          <div class="testimonial-right-slider mb-md-0 mb-5">
            <img class="img img-fluid" src="images/tstimonial-right-img.png" alt="img">
            <img class="img img-fluid" src="images/tstimonial-right-img-two.png" alt="img">
            <img class="img img-fluid" src="images/tstimonial-right-img-three.png" alt="img">
          </div>
        </div>
      </div>
  
    </div>
    </div>
  </section>
  <!--================== Testimonial Section End ==================-->
  
  <!--================== Project Section Start ==================-->
  <section class="projects section pt-0">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-lg-6 col-12 mx-auto ">
          <div class="section-title mb-md-4">
            <h2>My <strong>
                Selected
                <svg class="" width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong> projects
  
            </h2>
          </div>
        </div>
      </div>
      <div class="row g-4 g-md-5 ">
        <div class="col-md-6 image-item">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="1500">
            <img class="img-fluid" src="images/project-img.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white"> Drinking from the sea of knowledge</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Exhibition</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 image-item">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="1500">
            <img class="img-fluid" src="images/project-img-one.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">A Feast Of A Time-Honored History</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Branding</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-6 image-item">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid" src="images/project-img-two.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">Google Play ACG Interactive Game</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Events</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-6 image-item">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid" src="images/project-img-three.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">Monopoly Dreams Hong Kong</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Marketing</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-12 mx-auto text-center">
          <a href="{{ route('project') }}" class="btn btn-outline-primary text-capitailize fw-medium py-2">view all</a>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--================== Project Section End ==================-->

  <div class="backtotop">
    <i class="fas fa-angle-up"></i>
  </div>
@endsection
