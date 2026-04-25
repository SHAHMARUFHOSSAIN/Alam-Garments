
   <main class="main">

  <!-- Page Title -->
  <div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Board of Directors</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Board of Directors</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <section id="team" class="team section">
    <div class="container">
      <div class="row gy-4">

        @foreach($members as $member)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('storage/'.$member->image) }}" class="img-fluid" alt="{{ $member->name }}">
                <div class="social">
                  <a href="{{ $member->x_url}}"><i class="bi bi-twitter-x"></i></a>
                  <a href="{{ $member->fb_url}}"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $member->in_url}}"><i class="bi bi-instagram"></i></a>
                 <!--<a href="#"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info text-center">
                <h4>{{ $member->name }}</h4>
                <span>{{ $member->designation }}</span>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

</main>