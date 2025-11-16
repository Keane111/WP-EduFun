@extends('layouts.app')

@section('title', 'Popular - EduFun')

@section('content')
<div class="container">
    <div class="popular-header">
        <h1 class="popular-title">Popular</h1>
    </div>

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
            <p>No popular courses available yet.</p>
        </div>
        @endforelse
    </div>

    @if($totalPages > 1)
    <div class="pagination-container">
        <div class="pagination">
            <span class="pagination-label">Page |</span>
            @for($i = 1; $i <= $totalPages; $i++)
                <a href="{{ route('popular', ['page' => $i]) }}"
                   class="pagination-number {{ $currentPage == $i ? 'active' : '' }}">
                    {{ $i }}
                </a>
            @endfor
        </div>
    </div>
    @endif
</div>
@endsection
