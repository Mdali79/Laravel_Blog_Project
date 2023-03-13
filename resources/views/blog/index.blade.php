@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-2">
                <h1 class="display-one">Our Blog!</h1>
                <p>Click on a post to read!</p>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
            <div class="col-md-4 pt-2">
                <div class="card">
                    <div class="card-header">
                        Create new Post
                    </div>
                    <div class="card-body text-right">
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
