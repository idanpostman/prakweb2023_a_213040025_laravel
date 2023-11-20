@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to all my posts</a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}
            " class="img-fluid">

            <article class="my-3 fs-5">
              {!! $post->body !!} {{-- Melakukan sebuah escaping. sebuah escape character agar tag html dijalankan --}}
            </article>
        
        </div>
    </div>
</div>

@endsection