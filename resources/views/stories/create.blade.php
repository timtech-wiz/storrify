@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Create Story
                   <a href="{{route('stories.index')}}"class='btn btn-default' style='float:right'>Back</a>
                   
                   </div>
                    
                <div class="card-body">
                 
              
                 
                 <form action="{{route('stories.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                     @include('stories.form')
                     <div class="form-group">
                      <button class="btn btn-primary">Create</button>
                     
                     </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection