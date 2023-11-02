{{-- @dd($post) --}}


@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h2>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!} {{-- Melakukan sebuah escaping. sebuah escape character agar tag html dijalankan --}}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
</article>
    
@endsection