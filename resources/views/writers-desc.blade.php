@extends('layouts.app')

@section('title', $writer['name'] . ' - EduFun')

@section('content')
<div class="container">
    <div class="writer-detail-header">
        <div class="writer-header-image-container">
            <img src="{{ $writer['image'] }}" alt="{{ $writer['name'] }}" class="writer-header-image">
        </div>
        <div class="writer-header-info">
            <h1 class="writer-header-name">{{ $writer['name'] }}</h1>
            <p class="writer-header-specialty">{{ $writer['specialty'] }}</p>
        </div>
    </div>

    <div class="writer-courses-section">
        <h2 class="writer-courses-title">Courses by {{ $writer['name'] }}</h2>

        <div class="courses-list">
            @forelse($courses as $course)
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
            @empty
            <div class="no-courses">
                <p>No courses available from this writer yet.</p>
            </div>
            @endforelse
        </div>
    </div>

    <div class="course-actions">
        <a href="{{ route('writers') }}" class="back-btn">← Back to Writers</a>
    </div>
</div>
@endsection
