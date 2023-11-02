{{-- @dd($post) --}}


@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h2>

    <p>By, Wildan Fauzan in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!} {{-- Melakukan sebuah escaping. sebuah escape character agar tag html dijalankan --}}

    <a href="/posts">Back to Posts</a>
</article>
    
@endsection