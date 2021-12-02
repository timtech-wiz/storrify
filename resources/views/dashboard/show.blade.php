@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <img src="{{$story->Thumbnail}}" alt="image">
                     <div class="card-body">
                  <p class="card-text">{{$story->title}}</p>
                  Tags:

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                         @foreach($story->tags as $tag)
                     
                      <button type="button" class="btn btn-sm btn-outline-primary">{{$tag->name}}</button>
                      @endforeach

                      <button type="button" class="btn btn-sm btn-outline-secondary">{{$story->user->name}}</button>
                      
                      
                       
                    </div>
                    <small class="text-muted">{{$story->type}}</small>
                  </div>
                </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection