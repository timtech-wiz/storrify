@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">{{$story->title}}
                   <a href="{{route('stories.index')}}"class='btn btn-default' style='float:right'>Back</a>
                   
                   </div>
                    
                <div class="card-body">
                 
                   <div class="well">
                  
                       {{$story->body}}
                       
                    <p class="font-weight-bold">
                        Status: {{$story->status == 1 ? 'yes' : 'no'}}
                        <br>
                      Type: <em>{{$story->type}}</em>
                    </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection