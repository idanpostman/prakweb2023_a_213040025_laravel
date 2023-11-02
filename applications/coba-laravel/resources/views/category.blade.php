{{-- @dd($posts) --}}



@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
{{-- <h1>Halaman Posts</h1> --}}
    <article>
        @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>  
    @endforeach


@endsection
