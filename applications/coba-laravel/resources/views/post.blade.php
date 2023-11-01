{{-- @dd($post) --}}


@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h2>

    {!! $post->body !!} {{-- Melakukan sebuah escaping. sebuah escape character agar tag html dijalankan --}}

    <a href="/posts">Back to Posts</a>
</article>
    
@endsection