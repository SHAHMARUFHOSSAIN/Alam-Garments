
<main class="main">


   <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
          
        </div><!-- End Carousel Item -->
        
      
        <div class="carousel-item">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
        
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
         
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-4.jpg') }}" alt="">
        
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
      
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('front/assets/img/hero-carousel/hero-carousel-6.jpg') }}" alt="">
       
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->



    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ asset('front/assets/img/about.PNG')}}"></div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title">ALAM GARMENTS</h2>
            <div class="our-story">
              <h4>Est 1997</h4>
              <h3>Our Story</h3>
              <p>Alam Garments was founded by Md. Shah Alam Howlader in 1997. Mr. Shah Alam Howlader had started his career as a trader, procuring and selling products from local garments factory to retailers through his wholesale outlet named Alam Hosiery & Store. Through his trading experience he recognised the gap in the market for quality kids wear products. And thus began the journey of Alam garments by designing its now signature woven frock for new- borns using its class A voile fabric.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Deliver high-quality, comfortable, and safe kidswear</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ensure premium fabric and consistent product standards</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Build trust with customers through reliability and design</span></li>
              </ul>
              <p>We bring elegance and excellence to everyday comfort wear</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

   


    <livewire:show-history />

    <livewire:portfolio />


    


   
<section id="clients-map" class="bd-map-section">

  <div class="container">

    <!-- HEADER -->
    <div class="map-header" data-aos="fade-up">
      <span class="badge">🇧🇩 Bangladesh Coverage</span>
      <h1>Our Nationwide Client Network</h1>
      <p>Live growing presence across Bangladesh</p>
    </div>

    <!-- MAP CARD -->
    <div class="map-wrapper">
      <div class="map-card" data-aos="zoom-out">

        <div id="tooltip" class="map-tooltip"></div>

        <img src="{{ asset('front/assets/img/map-3.PNG') }}" class="bd-map-img w-100" alt="">

        <!-- HOTSPOTS -->
        <div class="map-hotspot" style="top:40%; left:52%;" data-name="Dhaka"></div>
        <div class="map-hotspot" style="top:65%; left:70%;" data-name="Chattogram"></div>
        <div class="map-hotspot" style="top:35%; left:40%;" data-name="Rajshahi"></div>
        <div class="map-hotspot" style="top:60%; left:45%;" data-name="Khulna"></div>

      </div>
    </div>

    <!-- COUNTERS -->
    <div class="counter-grid" data-aos="fade-up">
      <div class="counter-card">
        <h1 class="counter" data-target="64">0</h1>
        <p>Districts Covered</p>
      </div>

      <div class="counter-card">
        <h1 class="counter" data-target="1000000">0</h1>
        <p>Happy Clients</p>
      </div>

      <div class="counter-card">
        <h1 class="counter" data-target="25000">0</h1>
        <p>Retail Partners</p>
      </div>
    </div>

  </div>
</section>

<livewire:contact-page />


</main>


  