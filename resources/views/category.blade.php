@extends('layouts.app')

@section('title', $major['name'] . ' - EduFun')

@section('content')
<div class="container">
    <div class="major-header">
        <h1 class="major-title">{{ $major['name'] }}</h1>
        <p class="major-description">{{ $major['description'] }}</p>
    </div>

    <div class="courses-grid">
        @foreach($major['courses'] as $course)
        <div class="course-card">
            <div class="course-image">
                <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="course-img">
            </div>
            <div class="course-content">
                <h3 class="course-title">{{ $course['title'] }}</h3>
                <div class="course-meta">
                    {{ \Carbon\Carbon::parse($course['release_date'])->format('M d, Y') }} | by {{ $course['writer'] }}
                </div>
                <p class="course-description">{{ $course['description'] }}</p>
                <a href="{{ route('course.detail', $course['slug']) }}" class="read-more-btn">Read more...</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
