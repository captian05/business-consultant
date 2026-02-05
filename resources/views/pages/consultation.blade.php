@extends('layout.app')

@section('content')
<section class="consultation-section">
    <div class="consultation-card">
        <h1>Book a Consultation</h1>
        <p class="subtitle">Schedule a session with our business experts</p>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/book-consultation" class="consultation-form">
            @csrf

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="Optional">
            </div>

            <div class="form-group">
                <label>Preferred Date</label>
                <input type="date" name="preferred_date">
            </div>

            <button type="submit" class="btn-submit">
                Book Consultation
            </button>
        </form>
    </div>
</section>
@endsection