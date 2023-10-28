{{-- @dd($post) --}}


@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    <a href="/blog">Back to Posts</a>
</article>
    
@endsection