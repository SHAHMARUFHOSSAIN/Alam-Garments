<main class="bg-white">

<!--<div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">History</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div> -->
    
    <div class="container py-5">

        {{-- Page Header --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5">Our Company History</h1>
            <p class="text-muted fs-5">A journey of growth and achievements over the years</p>
        </div>

        @foreach($histories as $history)
            <div class="row align-items-center mb-5">

                {{-- Alternate image left/right --}}
                <div class="col-md-5 mb-4 mb-md-0 @if($loop->index % 2 != 0) order-md-2 @endif">
                    @if($history->image)
                        <img src="{{ asset('storage/' . $history->image) }}" 
                             class="img-fluid rounded shadow-sm hover-zoom" 
                             alt="{{ $history->title }}">
                    @else
                        <img src="https://via.placeholder.com/500x300" 
                             class="img-fluid rounded shadow-sm" 
                             alt="{{ $history->title }}">
                    @endif
                </div>

                {{-- Content --}}
                <div class="col-md-7 @if($loop->index % 2 != 0) order-md-1 @endif">
                    <h3 class="fw-bold mb-3 text-primary">{{ $history->year }} - {{ $history->title }}</h3>
                    <p class="text-muted fs-6">{!! $history->description !!}</p>
                </div>

            </div>

            @if(!$loop->last)
                <hr class="my-5">
            @endif
        @endforeach

    </div>
</main>