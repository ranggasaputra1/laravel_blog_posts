@extends('dashboard.layouts.main')


@section('container')
      {{-- Body --}}
      <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->tittle }}</h2>
                 
                    <a href="/dashboard/posts" class="badge bg-success text-decoration-none" ><span data-feather="arrow-left"></span> Back to all My Posts</a>
                    <a href="" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
                    <a href="" class="badge bg-danger text-decoration-none"><span data-feather="trash"></span> Delete</a>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    <article class="my-3 fs-6">
                     <p>{!! $post->body !!}</p>
                    </article>
    <a href="/dashboard/posts" class="d-block mt-3">Back my post</a>
            </div>
        </div>
    </div>
    {{-- End Body --}}
@endsection