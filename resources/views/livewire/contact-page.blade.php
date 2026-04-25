<main>

  <!-- Page Title 
  <div class="page-title accent-background py-4">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Contact</h1>
      <nav class="breadcrumbs">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
   End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section py-5">

    <!-- Google Map -->
    <div class="mb-5">
      <iframe 
        style="width: 100%; height: 500px; border:0;" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9396733874976!2d90.39177321543038!3d23.750903994657895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8575e77a24b%3A0x6c8887c76a743e68!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1700000000000" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>

    <!-- Contact Header -->
    <div class="text-center mb-6">
      <h2 class="fw-bold">Get in Touch</h2>
      <p class="text-muted">We’d love to hear from you. Reach out with any questions or inquiries.</p>
    </div>

    <div class="container" data-aos="fade">

      <div class="row gy-5 gx-lg-5">

        <!-- Contact Info -->
        <div class="col-lg-4">
          <div class="info p-4 shadow-sm rounded bg-white">
            <h3 class="mb-4">Contact Information</h3>
            <p class="mb-4 text-muted">Feel free to reach out to us through any of the channels below.</p>

            <div class="info-item d-flex mb-3">
              <i class="bi bi-geo-alt flex-shrink-0 me-3 fs-4"></i>
              <div>
                <h5 class="mb-1">Location:</h5>
                <p class="mb-0">Dhaka, Bangladesh</p>
              </div>
            </div>

            <div class="info-item d-flex mb-3">
              <i class="bi bi-envelope flex-shrink-0 me-3 fs-4"></i>
              <div>
                <h5 class="mb-1">Email:</h5>
                <p class="mb-0">junaedalam@alamgarments.com</p>
              </div>
            </div>

            <div class="info-item d-flex mb-3">
              <i class="bi bi-phone flex-shrink-0 me-3 fs-4"></i>
              <div>
                <h5 class="mb-1">Call:</h5>
                <p class="mb-0">+880 1234 567 890</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-6">
          <div class="p-4 shadow rounded bg-white">

            @if(session()->has('success'))
              <div class="alert alert-success text-center">
                {{ session('success') }}
              </div>
            @endif

            
            <form wire:submit.prevent="submit" class="row g-3">

              <div class="col-md-6">
                <input type="text" wire:model="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6">
                <input type="email" wire:model="email" class="form-control" placeholder="Your Email" required>
              </div>

              <div class="col-12">
                <input type="text" wire:model="subject" class="form-control" placeholder="Subject" required>
              </div>

              <div class="col-12">
                <textarea wire:model="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>


    
  </section>
  <!-- End Contact Section -->

</main>


















