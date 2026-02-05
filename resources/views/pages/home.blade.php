@extends('layout.app')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Strategic Business Consulting for Sustainable Growth</h1>
        <p>
            We help startups and enterprises improve performance, 
            optimize operations, and achieve long-term success.
        </p>
        <a href="{{ route('consultation.form') }}" class="btn-primary">
            Book a Free Consultation
        </a>
    </div>
</section>

<!-- Services Preview -->
<section class="section">
    <h2>Our Expertise</h2>
    <div class="grid">
        <div class="card">
            <h3>Business Strategy</h3>
            <p>Data-driven strategies to scale your business efficiently.</p>
        </div>
        <div class="card">
            <h3>Financial Advisory</h3>
            <p>Smart financial planning and risk management solutions.</p>
        </div>
        <div class="card">
            <h3>Market Analysis</h3>
            <p>In-depth research to help you stay ahead of competitors.</p>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section light-bg">
    <h2>Why Choose Us</h2>
    <div class="grid">
        <div class="card">
            <h3>Experienced Consultants</h3>
            <p>Industry experts with years of real-world experience.</p>
        </div>
        <div class="card">
            <h3>Proven Results</h3>
            <p>We focus on measurable outcomes and ROI.</p>
        </div>
        <div class="card">
            <h3>Client-Focused Approach</h3>
            <p>Every solution is tailored to your business needs.</p>
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="cta">
    <h2>Ready to Transform Your Business?</h2>
    <p>Schedule a consultation with our experts today.</p>
    <a href="{{ route('consultation.form') }}" class="btn-primary">
        Get Started
    </a>
</section>

@endsection