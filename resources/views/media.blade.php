@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 text-center">
    <h2 class="text-2xl font-bold">Media Showcase</h2>

    <figure class="mt-2">
        <img src="{{ asset('build/media/jjk.jpg') }}" alt="Sample Image" class="mx-auto w-12 h-auto rounded-lg shadow-lg">
        <figcaption class="text-gray-600 mt-2">Sample Image</figcaption>
    </figure>

    <div class="mt-5">
        <video controls class="mx-auto w-1/2 rounded-lg shadow-lg">
            <source src="{{ asset('build/media/jjk.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="text-gray-600 mt-2">Sample Video</p>
    </div>
</div>
@endsection
