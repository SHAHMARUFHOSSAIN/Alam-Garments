

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title ?? 'Alam Garments' }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('front/assets/img/favi.JPEG') }}" rel="icon">
  <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->




  <style>
  body {
    font-family: Arial, sans-serif;
  }
  svg {
    width: 600px;
    height: 700px;
    border: 1px solid #ccc;
    display: block;
    margin: 20px auto;
  }
  path {
    stroke: #000;
    stroke-width: 1;
    cursor: pointer;
    transition: fill 0.3s ease;
  }
  .live-on {
    fill: green !important;
  }
  .live-off {
    fill: lightgreen !important;
  }
  #tooltip {
    position: absolute;
    padding: 6px 10px;
    background: rgba(0,0,0,0.7);
    color: #fff;
    border-radius: 4px;
    pointer-events: none;
    transition: opacity 0.2s ease;
    opacity: 0;
    z-index: 1000;
  }



  /* ===== HERO FIX ===== */
/* ===== HERO FULL SCREEN ===== */
/* ===== HERO FIX WITH HEIGHT & ADJUSTMENT ===== */

/* ১. সমস্ত স্ক্রিনে হিরো সেকশন এবং ক্যারোসেলের উচ্চতা বাড়ানো (ওয়েব ভিউ-র জন্য) */
.hero,
.hero .carousel,
.hero .carousel-inner,
.hero .carousel-item {
  height: 90vh; /* স্ক্রিনের 90% উচ্চতা নিবে (বাড়ানো হলো) */
  height: 90dvh;
}

/* ২. বড় স্ক্রিন বা ডেসকটপের জন্য উচ্চতা আরো বাড়ানো (Fix for greater height) */
@media (min-width: 992px) {
  .hero,
  .hero .carousel,
  .hero .carousel-inner,
  .hero .carousel-item {
    height: 100vh; /* বা আরো বেশি চাইলে নির্দিষ্ট পিক্সেল দিতে পারেন, যেমন 800px */
  }
}

/* ৩. ইমেজ এডজাস্টমেন্ট - ছবি কন্টেইনার ফিলাপ করবে এবং আসপেক্ট রেশিও ঠিক রাখবে */
.hero .carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;    /* ফিলাপ করার জন্য cover-ই দরকার, কিন্তু আমরা ফোকাস ঠিক করব */
  object-position: center center; /* ছবির একদম মাঝখানের অংশ ফোকাস করবে */
}

/* ===== DARK OVERLAY ===== */
.hero .carousel-item::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.35); /* বাটন ও টেক্সট স্পষ্ট করার জন্য ডার্ক ওভারলে */
  z-index: 1;
}

/* ===== CONTENT ===== */
.hero .container {
  position: relative;
  z-index: 2;
  text-align: center;
}

/* ===== CONTROLS ===== */
.hero .carousel-control-prev,
.hero .carousel-control-next {
  z-index: 3;
  top: 50%;
  transform: translateY(-50%);
}

/* ৪. মোবাইল বা ছোট স্ক্রিনের জন্য বিশেষ টিউনিং (মোবাইল ভিউ ঠিক করার জন্য) */
@media (max-width: 768px) {
  .hero,
  .hero .carousel,
  .hero .carousel-inner,
  .hero .carousel-item {
    height: 70vh !important; /* মোবাইলে অনেক বেশি লম্বা স্ক্রিন ভালো দেখায় না, তাই একটু কমানো হলো */
  }

  .hero .carousel-item img {
    /* মোবাইলে ছবিকে আরো ভালো দেখাতে ছবির অবস্থান পরিবর্তন */
    object-position: center top; /* মোবাইল স্ক্রিনে ছবির ওপরের অংশ (পোশাকের ওপরের অংশ) বেশি জরুরি */
  }
}
</style>






  @livewireStyles

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">ALAM GARMENTS</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('home') }}" class="active">Home</a></li>

        <li class="dropdown">
            <a href="{{ route('about') }}">
                <span>About</span> 
                <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
                <li><a href="{{ route('team') }}">Board of Directors</a></li>
                <li><a href="{{ route('mission') }}">Mission</a></li>
                <li><a href="{{route('history')}}">History</a></li>
            </ul>
        </li>

        @php
    $concerns = \App\Models\Concern::all();
@endphp

<li class="dropdown">
    <a href="#">
        Concern
        <i class="bi bi-chevron-down toggle-dropdown"></i>
    </a>

    <ul>
        @foreach($concerns as $item)
            <li>
                <a href="{{ route('concern.page', $item->slug) }}">
                    {{ $item->name }}
                </a>
            </li>
        @endforeach
    </ul>
</li>

        <li><a href="{{ route('portfolio') }}">Product Portfolio</a></li>
        <li><a href="{{ route('showroom') }}">Showroom</a></li>
        <li><a href="{{ route('careers') }}">Career</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  {{$slot}}
  
   <main class="main">
    @yield('content')
</main>
  
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span class="sitename">ALAM GARMENTS</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Elephant Road</p>
            <p>New Market,</p>
            <p class="mt-3"><strong>Phone:</strong> <span>16332</span></p>
            <p><strong>Email:</strong> <span>junaedalam@alamgarments.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
          </ul>
        </div>

         <!-- service
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Wholesale</a></li>
            <li><a href="#">Retail</a></li>
            <li><a href="#">Agro</a></li>
            <li><a href="#">Garments Accesoriess</a></li>
            <li><a href="#">Cloth</a></li>
          </ul>
        </div>
-->

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">ALAM GARMENTS</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">IT DEPARTMENT</a> Distributed by <a href=“https://themewagon.com> alamgarments
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset ('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{asset ('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{asset ('front/assets/js/main.js')}}"></script>




  

<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    var map = L.map('map').setView([23.6850, 90.3563], 7);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var clients = [
        { name: "Dhaka Client", lat: 23.8103, lng: 90.4125 },
        { name: "Chittagong Client", lat: 22.3569, lng: 91.7832 },
        { name: "Rajshahi Client", lat: 24.3745, lng: 88.6042 },
        { name: "Khulna Client", lat: 22.8456, lng: 89.5403 },
        { name: "Sylhet Client", lat: 24.8949, lng: 91.8687 },
        { name: "Barisal Client", lat: 22.7010, lng: 90.3535 }
    ];

    var redIcon = L.divIcon({
        className: 'live-dot'
    });

    clients.forEach(client => {
        L.marker([client.lat, client.lng], { icon: redIcon })
            .addTo(map)
            .bindPopup("<b>" + client.name + "</b><br>Active Client");
    });

    // Bangladesh border
    fetch('https://raw.githubusercontent.com/johan/world.geo.json/master/countries/BGD.geo.json')
        .then(res => res.json())
        .then(data => {
            L.geoJSON(data, {
                style: {
                    color: "#22c55e",
                    weight: 2,
                    fillOpacity: 0.05
                }
            }).addTo(map);
        });

    // blinking effect
    setInterval(() => {
        document.querySelectorAll('.live-dot').forEach(dot => {
            dot.style.opacity = dot.style.opacity === "0.3" ? "1" : "0.3";
        });
    }, 800);

});
</script>





<script>
const swiper = new Swiper(".mySwiper", {
    loop: true,
    speed: 800,
    spaceBetween: 20,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1 },
        768: { slidesPerView: 1 },
        1024: { slidesPerView: 2 },
    }
});
</script>





<script>
const counters = document.querySelectorAll(".counter");

const animateCounter = (counter) => {
    const target = +counter.dataset.target;
    let count = 0;

    const speed = target / 120;

    const update = () => {
        count += speed;

        if (count < target) {
            counter.innerText = Math.floor(count);
            requestAnimationFrame(update);
        } else {
            counter.innerText = target;
        }
    };

    update();
};

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => observer.observe(counter));
</script>


        @livewireScripts

</body>

</html>