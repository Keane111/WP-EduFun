@extends('layouts.app')

@section('title', 'Writers - EduFun')

@section('content')
<div class="container">
    <div class="writers-section">
        <h1 class="writers-page-title">Our Writers</h1>

        <div class="writers-grid">
            @foreach($writers as $writer)
            <div class="writer-card">
                <a href="{{ route('writer.detail', $writer['id']) }}" class="writer-link">
                    <div class="writer-image-container">
                        <img src="{{ $writer['image'] }}" alt="{{ $writer['name'] }}" class="writer-image">
                    </div>
                    <h3 class="writer-name">{{ $writer['name'] }}</h3>
                    <p class="writer-specialty">{{ $writer['specialty'] }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
