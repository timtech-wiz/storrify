@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Edit Story
                   <a href="{{route('stories.index')}}"class='btn btn-default' style='float:right'>Back</a>
                   
                   </div>
                    
                <div class="card-body">
                 
              
                 
                 <form action="{{route('stories.update', [$story])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('stories.form')
                     
                     <div class="form-group">
                      <button class="btn btn-primary">Update</button>
                     
                     </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection