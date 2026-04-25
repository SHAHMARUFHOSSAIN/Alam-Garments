<main>

 <!-- Page Title -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Job Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Job Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

<div class="container py-5">

    <h2 class="fw-bold">{{ $career->title }}</h2>

    <p><strong>Type:</strong> {{ $career->employment_type }}</p>
    <p><strong>Salary:</strong> {{ $career->salary_range }}</p>
    <p><strong>Experience:</strong> {{ $career->experience_level }}</p>
    <p><strong>Location:</strong> {{ $career->location }}</p>

    <hr>

    <div>
        {!! $career->description !!}
    </div>

    <a href="{{ route('job.apply',$career->id) }}" 
       class="btn btn-primary mt-4">
       Apply Now
    </a>

</div>
</main>