@extends('layouts.app')
@section('content')
 


<div class="container">
        <div class="row">
            <div class="col-12 pt-2">
             <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
             <img class="card-img-top" src="{{ asset('/images/'.$post->image) }}" alt="blog image">
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p> 
                <hr>
                 
           
               
            </div>
        </div>
    </div>













@endsection