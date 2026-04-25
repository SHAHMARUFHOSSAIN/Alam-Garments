@php
use Carbon\Carbon;
@endphp

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-10">

            <header class="mb-2 border-bottom pb-3">
                <h1 class="display-4 fw-bold">Privacy Policy</h1>
                <p class="text-muted">
                    Last Updated: {{ Carbon::parse('2026-04-16')->format('F j, Y') }}
                </p>
            </header>

            <section class="mb-2">
                <p>
                    Protecting our customers’ privacy is an important priority at Alam Garments...
                </p>
            </section>

            <h2 class="h4 mt-4">1. Information We Collect</h2>
            <p>
                We collect information when you communicate with us...
            </p>

            <ul>
                <li><strong>Personal Data:</strong> Email address, first and last name, and usage data.</li>
                <li><strong>Cookies:</strong> We use cookies to store preferences and usage data.</li>
            </ul>

            <hr class="my-5">

            <h2 class="h4">2. How We Use Your Information</h2>
            <p>
                We use trusted third-party vendors for payments, delivery, and support...
            </p>

            <h5 class="h5">We may disclose your information if required by law:</h5>

            <ul class="list-group list-group-flush mb-4">
                <li>To comply with legal obligations</li>
                <li>To protect our rights, property, or safety</li>
                <li>To prevent fraud or abuse</li>
                <li>To enforce our terms</li>
            </ul>

            <h2 class="h4">4. Data Retention</h2>
            <p>
                We retain your personal data only as long as necessary...
            </p>

            <h2 class="h4 mt-4">5. Contact Us</h2>

            <div class="alert alert-info">
                <ul class="mb-0">
                    <li>Email: <strong>junaedalam@alamgarments.com</strong></li>
                    <li>Website: www.alamgarments.com</li>
                </ul>
            </div>

            <footer class="mt-5 pt-4 border-top text-center text-muted">
                <p>&copy; {{ date('Y') }} Alam Garments. All rights reserved.</p>
            </footer>

        </div>
    </div>
</div>