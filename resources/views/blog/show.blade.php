@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
              
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('/images/'.$post->image) }}" alt="blog image">
                    <p class="card-text">{{ $post->description }}</p>
                    
                    <a href="/blog/{{$post->id}}/details" class="btn btn-primary btn-sm">Read more</a>
                </div>
                
                <hr>
                
                <div class="d-flex">
                    <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary mr-2">Edit Post</a>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger ml-2">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
