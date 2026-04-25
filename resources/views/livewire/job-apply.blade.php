<main>

 <!-- Page Title -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Job Apply</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Job Apply</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->



<div> {{-- ROOT ELEMENT FOR LIVEWIRE --}}

    <div class="container py-5" style="max-width:650px;">
        
        {{-- Header --}}
        <div class="text-center mb-4">
            <span class="badge bg-primary px-4 py-2 mb-3" style="border-radius:20px;">
                Apply Now
            </span>
            <h2 class="fw-bold">Apply for {{ $career->title }}</h2>
            <p class="text-muted">Fill up the form below and join our team</p>
        </div>

        {{-- Success Message --}}
        @if(session()->has('success'))
            <div x-data="{ show: true }" x-show="show" 
                 x-init="setTimeout(() => show = false, 3000)" 
                 class="alert alert-success text-center rounded-pill">
                {{ session('success') }}
            </div>
        @endif

        {{-- Card Form --}}
        <form wire:submit.prevent="submit" 
              class="p-5 shadow-lg text-center"
              style="border-radius:20px; background:#fff;">

            {{-- Name --}}
            <div class="mb-3 text-start">
                <label class="form-label">Name</label>
                <input type="text" wire:model="name" 
                       placeholder="John Doe"
                       class="form-control rounded-pill px-3 py-2">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3 text-start">
                <label class="form-label">Email</label>
                <input type="email" wire:model="email" 
                       placeholder="example@mail.com"
                       class="form-control rounded-pill px-3 py-2">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- Phone --}}
            <div class="mb-3 text-start">
                <label class="form-label">Phone</label>
                <input type="text" wire:model="phone" 
                       placeholder="+8801XXXXXXXXX"
                       class="form-control rounded-pill px-3 py-2">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- CV --}}
            <div class="mb-3 text-start">
                <label class="form-label">Upload CV</label>
                <input type="file" wire:model="cv" 
                       class="form-control rounded-pill">
                
                <div wire:loading wire:target="cv" class="text-primary mt-2">
                    Uploading...
                </div>

                @if($cv)
                    <div class="mt-2 text-success">
                        {{ $cv->getClientOriginalName() }}
                    </div>
                @endif

                @error('cv') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- Message --}}
            <div class="mb-4 text-start">
                <label class="form-label">Message</label>
                <textarea wire:model="message"
                          rows="4"
                          placeholder="Write your message..."
                          class="form-control rounded-3"></textarea>
            </div>

            {{-- Button --}}
            <button type="submit" 
                    class="btn btn-primary rounded-pill px-5 py-2 w-100"
                    wire:loading.attr="disabled">

                <span wire:loading.remove>Submit Application</span>
                <span wire:loading>Submitting...</span>

            </button>

        </form>

    </div>

</div>

</main>