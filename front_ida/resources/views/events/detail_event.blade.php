@extends('layouts.default')

@section('content')
<section class="event-detail-section py-5" style="background-color: #f5f7fa;">
    <div class="auto-container">
        <div class="text-center mb-4">
            <h1 class="event-title">{{ $event->title }} {{ $event->start_date ? \Carbon\Carbon::parse($event->start_date)->format('Y') : 'TBD' }}</h1>
            <span class="badge bg-danger text-white">B2B EVENT</span>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <div class="event-image-circle">
                    <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/b2b/1.png') }}" alt="{{ $event->title }}" class="img-fluid rounded-circle">
                </div>
            </div>

            <div class="col-md-8">
                <div class="event-content">
                    <h2 class="event-subtitle">{{ $event->subtitle }}</h2>
                    <div class="event-text">
                        <p><strong>{{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }} - {{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') : 'TBD' }}</strong></p>
                        <p>{{ $event->description }}</p>
                       
                    </div>

                    <div class="event-cta mt-4">
                        <p>{{ $event->cta_message }}</p>
                        <a href="{{ route('events.register', $event->id) }}" class="btn btn-primary btn-lg mt-3">
                            <i class="fas fa-arrow-right"></i>  
                            {{ $event->cta_text ?: 'Inscrivez-vous maintenant' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .event-detail-section {
        padding: 60px 0;
    }
    .event-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
    }
    .badge {
        padding: 5px 10px;
        font-size: 1rem;
    }
    .event-image-circle {
        border: 5px solid #28a745;
        border-radius: 50%;
        overflow: hidden;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    .event-image-circle img {
        width: 100%;
        height: auto;
    }
    .event-subtitle {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
        position: relative;
    }
    .event-subtitle::before {
        content: "";
        position: absolute;
        top: 50%;
        left: -20px;
        width: 10px;
        height: 2px;
        background-color: #f4a261;
        transform: translateY(-50%);
    }
    .event-text p {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 15px;
        color: #555;
    }
    .event-text p:first-child {
        font-weight: bold;
        color: #333;
    }
    .event-cta p {
        font-size: 1rem;
        color: #666;
    }
    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
        padding: 10px 20px;
        font-size: 1.1rem;
    }
    .btn-primary:hover {
        background-color: #218838;
        border-color: #218838;
    }
</style>
@endpush
