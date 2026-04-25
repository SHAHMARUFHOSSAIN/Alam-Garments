<main class="py-5 bg-light">

<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Our Concern</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Concern</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">

    {{-- HERO --}}
    <div class="p-5 mb-4 rounded-3 shadow-lg bg-white border-0 position-relative overflow-hidden"
         style="background: linear-gradient(135deg,#ffffff,#f8fafc);"
         data-aos="fade-up">

        <div class="d-flex flex-column flex-md-row align-items-center gap-4">

            <div class="p-2 rounded-3 shadow-sm bg-light">
                <img src="{{ asset('storage/' . $concern->logo) }}"
                     style="width:120px;height:120px;object-fit:contain;">
            </div>

            <div>
                <h1 class="fw-bold mb-2 text-dark display-6">
                    {{ $concern->name }}
                </h1>

                <p class="text-secondary fs-6 mb-2" style="max-width:600px;">
                    {{ $concern->short_description }}
                </p>

                <div class="d-flex gap-2 flex-wrap mt-2">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2">Verified Business</span>
                    <span class="badge bg-success-subtle text-success px-3 py-2">Active</span>
                </div>
            </div>

        </div>
    </div>


       <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-body p-4">

                    <h4 class="fw-semibold mb-3">Gallery</h4>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            @foreach($concern->galleries as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $img->image) }}"
                                     class="rounded-3 w-100"
                                     style="height:700px;object-fit:cover;">
                            </div>
                            @endforeach

                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>

    <div class="row g-4">

        {{-- LEFT --}}
        <div class="col-lg-8">

            {{-- ABOUT --}}
            <div class="card border-0 shadow-sm rounded-3 mb-4 hover-shadow">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">About Company</h4>
                    <p class="text-muted lh-lg">
                        {!! nl2br(e($concern->about)) !!}
                    </p>
                </div>
            </div>


            {{-- GALLERY --}}
            <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-body p-4">

                    <h4 class="fw-semibold mb-3">Gallery</h4>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            @foreach($concern->galleries as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $img->image) }}"
                                     class="rounded-3 w-100"
                                     style="height:360px;object-fit:cover;">
                            </div>
                            @endforeach

                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>


            {{-- PDF --}}
            @if($concern->pdf)
            <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-body p-4">

                    <h4 class="fw-semibold mb-3">Company Profile</h4>

                    <iframe src="{{ asset('storage/' . $concern->pdf) }}"
                            class="w-100 rounded-3 border"
                            style="height:500px;"></iframe>

                    <a href="{{ asset('storage/' . $concern->pdf) }}"
                       target="_blank"
                       class="btn btn-danger mt-3 rounded-3">
                        📄 Open Full PDF
                    </a>

                </div>
            </div>
            @endif

        </div>


        {{-- RIGHT --}}
        <div class="col-lg-4">

            <div class="card border-0 shadow-lg rounded-3 sticky-top"
                 style="top:20px; backdrop-filter: blur(10px);"
                 data-aos="fade-left">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-3">Contact Info</h5>

                    <div class="text-muted mb-2">📞 {{ $concern->phone }}</div>
                    <div class="text-muted mb-2">📧 {{ $concern->email }}</div>
                    <div class="text-muted mb-3">📍 {{ $concern->address }}</div>

                    <a href="https://wa.me/{{ $concern->phone }}"
                       target="_blank"
                       class="btn btn-success w-100 mb-2 rounded-3">
                        💬 WhatsApp
                    </a>

                    <a href="mailto:{{ $concern->email }}"
                       class="btn btn-primary w-100 mb-3 rounded-3">
                        📧 Email Us
                    </a>


                   {{-- LINKS SECTION --}}
 <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="fw-semibold mb-3">Useful Links</h5>

            <div class="list-group">
                @foreach($concern->links ?? [] as $link)
                    <a href="{{ $link['url'] }}"
                       target="_blank"
                       class="list-group-item list-group-item-action">
                        🔗 {{ $link['name'] }}
                    </a>
                @endforeach
            </div>

        </div>
    </div>

                </div>
            </div>

        </div>

    </div>

</div>

{{-- LOCATION MAP (MIDDLE SECTION) --}}
@if(!empty($concern->location))
<div class="card border-0 shadow-sm rounded-5 mb-4 hover-shadow"
     data-aos="fade-up">

    <div class="card-body p-4">

        <h4 class="fw-semibold mb-3">📍 Our Location</h4>

        <p class="text-muted mb-3">
            {{ $concern->location }}
        </p>

        <div class="rounded-4 overflow-hidden border shadow-sm">

            <iframe
                width="100%"
                height="300"
                style="border:0;"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q={{ urlencode($concern->location) }}&output=embed">
            </iframe>

        </div>

        <div class="d-flex gap-2 mt-3 flex-wrap">

            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($concern->location) }}"
               target="_blank"
               class="btn btn-outline-primary btn-sm rounded-3">
                🧭 Open Map
            </a>

            <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($concern->location) }}"
               target="_blank"
               class="btn btn-success btn-sm rounded-3">
                🚗 Get Directions
            </a>

        </div>

    </div>
</div>
@endif

</main>