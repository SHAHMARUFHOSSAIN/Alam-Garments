<main>

 <!-- Page Title -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Career</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Career</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
     
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Career Opportunities</h2>
        <p class="text-muted">Join our team and build your future with us</p>
    </div>

    @foreach($careers as $career)
    <div class="card shadow-sm mb-4 border-0" style="border-radius:16px;">
        
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">

            <div>
                <h5 class="fw-bold mb-1">{{ $career->title }}</h5>
                <small class="text-muted">
                    {{ $career->employment_type }} • {{ $career->location }}
                </small>

                <p class="mb-0 text-primary fw-bold">
                    {{ $career->salary_range }}
                </p>
            </div>

            <div>
                <a href="{{ route('job.details',$career->id) }}" 
                   class="btn btn-primary rounded-pill px-4">
                   View Details
                </a>
            </div>

        </div>

    </div>
    @endforeach

</div>

</main>