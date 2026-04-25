<main>

<div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Mission</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>
    
    <div class="container py-5">

        {{-- Page Header --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5">Our Mission, Vision & Values</h1>
            <p class="text-muted fs-5">Driving positive change and delivering value</p>
        </div>

        @foreach($missions as $mission)
            <div class="row align-items-center mb-5">

                {{-- Image --}}
                <div class="col-md-5 mb-4 mb-md-0">
                    @if($mission->image)
                        <img src="{{ asset('storage/'.$mission->image) }}" 
                             class="img-fluid rounded shadow-sm hover-zoom" 
                             alt="{{ $mission->title }}">
                    @else
                        <img src="https://via.placeholder.com/500x300" 
                             class="img-fluid rounded shadow-sm">
                    @endif
                </div>

                {{-- Content --}}
                <div class="col-md-7">
                    <h3 class="fw-bold mb-3 text-primary">{{ $mission->title }}</h3>
                    <p class="text-muted fs-6">
                    {!! $mission->description !!}
                    </p>

                    {{-- Mission Points --}}
                    <ul class="list-unstyled mt-4">
                        @foreach($mission->points as $point)
                            <li class="d-flex mb-3 align-items-start">
                                <span class="badge bg-primary rounded-circle me-3 mt-1" style="width:12px; height:12px;"></span>
                                <div>
                                    <strong class="d-block">{{ $point->title }}</strong>
                                    <p class="mb-0 text-muted small">{!! $point->description !!}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <hr class="my-5">
        @endforeach

    </div>
</main>