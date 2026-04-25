<div> <!-- Single Root for Livewire -->

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    </head>

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #f8f9ff, #eef1ff);
    }

    .page-title {
        background: linear-gradient(135deg, #1e3990, #1e3990);
        color: #fff;
        padding: 30px 0;
        text-align: center;
    }

    .portfolio-filters {
        text-align: center;
        margin-bottom: 30px;
    }
    .portfolio-filters li {
        display: inline-block;
        padding: 10px 22px;
        margin: 6px;
        border-radius: 30px;
        background: #fff;
        border: 1px solid #ddd;
        cursor: pointer;
        font-weight: 300;
        transition: all 0.3s;
    }
    .portfolio-filters li:hover,
    .portfolio-filters .filter-active {
        background: linear-gradient(135deg, #1e3990, #1e3990);
        color: #fff;
        border: none;
    }

    .portfolio-item .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.4s ease;
        background: #fff;
    }
    .portfolio-item .card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }

    .portfolio-img {
        position: relative;
        overflow: hidden;
    }
    .portfolio-img img {
        width: 100%;
        transition: 0.5s;
    }
    .portfolio-img:hover img {
        transform: scale(1.15);
    }
    .portfolio-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent, rgba(0,0,0,0.7));
        opacity: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.4s;
    }
    .portfolio-img:hover .portfolio-overlay {
        opacity: 1;
    }
    .portfolio-overlay i {
        color: #fff;
        font-size: 28px;
    }

    @media (max-width: 900px) {
        .portfolio-item {
            margin-bottom: 20px;
        }
    }
    </style>

    <!-- Page Title -->
   
    <section class="portfolio section">
        <div class="container">

            <!-- Filters -->
            <ul class="portfolio-filters mb-4">
                <li wire:click="setFilter('*')" class="{{ $filter === '*' ? 'filter-active' : '' }}">All</li>
                <li wire:click="setFilter('boys')" class="{{ $filter === 'boys' ? 'filter-active' : '' }}">Boys</li>
                <li wire:click="setFilter('girls')" class="{{ $filter === 'girls' ? 'filter-active' : '' }}">Girls</li>
                <li wire:click="setFilter('baby')" class="{{ $filter === 'baby' ? 'filter-active' : '' }}">Baby</li>
            </ul>

            <!-- Loading -->
            <div wire:loading class="text-center my-3">
                <div class="spinner-border text-primary"></div>
            </div>

            <!-- Portfolio Items -->
            <div class="row gy-4">
                @foreach($this->portfolios as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $item->category }}" data-aos="fade-up">
                        <div class="card">
                            <div class="portfolio-img">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('storage/' . $item->image) }}" class="glightbox"
                                       data-gallery="portfolio-gallery-{{ $item->category }}">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ Str::limit($item->description, 80) }}</p>
                                <span class="badge bg-primary">{{ ucfirst($item->category) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>
</div>