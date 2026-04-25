<main>
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Our Showrooms</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Our Showrooms</li>
        </ol>
      </nav>
    </div>
  </div>


<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Our Showrooms</h1>
        <p class="text-muted fs-5">Explore all our locations and offerings</p>
    </div>


    
    @foreach($showrooms as $showroom)
    
    <div class="row align-items-center mb-5">
     
        {{-- Left: Image Slider --}}
        <div class="col-md-5 mb-4 mb-md-0">
            @if($showroom->images)
            <div class="swiper-container swiper-{{ $showroom->id }}">
                <div class="swiper-wrapper">
                    @foreach($showroom->images as $img)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/'.$img) }}" class="img-fluid rounded shadow-sm hover-zoom">
                    </div>
                    @endforeach
                </div>

                {{-- Navigation --}}
               
            </div>
            @else
            <img src="https://via.placeholder.com/500x300" class="img-fluid rounded shadow-sm">
            @endif
        </div>

        {{-- Right: Details + Video --}}
        <div class="col-md-7">
            <h3 class="fw-bold mb-3 text-primary">{{ $showroom->name }}</h3>
            <h2 class="mb-2 mb-lg-0">{{ $showroom->title }}</h2>
            <p class="text-muted">{{ $showroom->description }}</p>

            <p><strong>Location:</strong> {{ $showroom->location }}</p>
            <p><strong>Contact:</strong> {{ $showroom->contact }}</p>

            @if($showroom->video_url)
            <div class="mt-4">
                <iframe width="70%" height="250" src="{{ $showroom->video_url }}" 
                        title="YouTube video" frameborder="0" allowfullscreen></iframe>
            </div>
            @endif
        </div>

    </div>
    @endforeach

</div>
</section>


{{-- Swiper CSS & JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener('livewire:load', function () {
    @foreach($showrooms as $showroom)
    new Swiper('.swiper-{{ $showroom->id }}', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    });
    @endforeach
});
</script>

</main>