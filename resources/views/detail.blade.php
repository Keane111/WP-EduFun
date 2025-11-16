@extends('layouts.app')

@section('title', $course['title'] . ' - EduFun')

@section('content')
<div class="course-detail-page">
    <!-- Course Title -->
    <div class="course-title-section">
        <div class="container">
            <h1 class="course-page-title">{{ $course['title'] }}</h1>
        </div>
    </div>

    <!-- Full Screen Image -->
    <div class="course-fullscreen-image">
        <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="course-fullscreen-img">
    </div>

    <!-- Course Info and Description -->
    <div class="container">
        <div class="course-info-section">
            <!-- Date and Writer -->
            <div class="course-meta-info">
                {{ \Carbon\Carbon::parse($course['release_date'])->format('M d, Y') }} | by {{ $course['writer'] }}
            </div>

            <!-- Course Description -->
            <div class="course-description-section">
                <p class="course-full-description">{{ $course['full_description'] }}</p>
            </div>

            <!-- Back Button -->
            <div class="course-actions">
                <a href="javascript:history.back()" class="back-btn">← Back to Courses</a>
            </div>
        </div>
    </div>
</div>
@endsection
