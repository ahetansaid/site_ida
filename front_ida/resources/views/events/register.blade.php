@extends('layouts.default')

@section('content')
<section class="register-section">
    <div class="auto-container">
        <div class="sec-title style-three centred">
            <h2>Inscription pour l'événement : {{ $event->title }}</h2>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('events.register.submit', $event->id) }}" class="default-form">
            @csrf
            <div class="row clearfix">
                <div class="form-group col-12">
                    <label for="name">Nom complet *</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Nom complet *" required>
                </div>
                <div class="form-group col-12">
                    <label for="email">Adresse email *</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Adresse email *" required>
                </div>
                <div class="form-group col-12">
                    <label for="phone">Numéro de téléphone *</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="Numéro de téléphone *" required>
                </div>
                <div class="form-group col-12 message-btn text-center">
                    <button class="theme-btn style-two" type="submit" name="submit-form">
                        <i class="fas fa-arrow-right"></i><span>Soumettre</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
