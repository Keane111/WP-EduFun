@extends('layouts.app')

@section('title', 'Home - EduFun')

@section('content')
<div class="home-hero">
    <img src="/images/Home.png" alt="EduFun Home" class="home-hero-image">
</div>

<div class="container">
    <div class="home-cards-section">
        @if($hciCourse)
        <div class="home-card">
            <div class="home-card-image">
                <img src="{{ $hciCourse['image'] }}" alt="{{ $hciCourse['title'] }}" class="home-card-img">
            </div>
            <div class="home-card-content">
                <h3 class="home-card-title">{{ $hciCourse['title'] }}</h3>
                <p class="home-card-text">{{ $hciCourse['description'] }}</p>
                <a href="{{ route('course.detail', $hciCourse['slug']) }}" class="home-card-btn">Read more...</a>
            </div>
        </div>
        @endif

        @if($uxCourse)
        <div class="home-card">
            <div class="home-card-image">
                <img src="{{ $uxCourse['image'] }}" alt="{{ $uxCourse['title'] }}" class="home-card-img">
            </div>
            <div class="home-card-content">
                <h3 class="home-card-title">{{ $uxCourse['title'] }}</h3>
                <p class="home-card-text">{{ $uxCourse['description'] }}</p>
                <a href="{{ route('course.detail', $uxCourse['slug']) }}" class="home-card-btn">Read more...</a>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
