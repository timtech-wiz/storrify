@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">{{$story->title}}  by {{$story->user->name}}
                   <a href="{{route('dashboard.index')}}"class='btn btn-default' style='float:right'>Back</a>
                   
                   </div>
                    
                <div class="card-body">
                 
                   <div class="well">
                  
                       {{$story->body}}
                       
                  <p class="font-italic">{{$story->footnote}}</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection