@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Edit Profile
                   <a href="{{route('stories.index')}}"class='btn btn-default' style='float:right'>Back</a>
                   
                   </div>
                    
                <div class="card-body">
                 
              
                 
                 <form action="{{route('profile.update', [$user])}}" method="post">
                    @csrf
                    @method('PUT')
                    
                     <div class="form-group"><label for="">Name:</label>
                     <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" value="{{old('name', $user->name)}}">
                     
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{$message}}</strong>
                     </span>
                     
                     @enderror
                     </div>
                     
          
                      <div class="form-group"><label for="">Email:</label>
                     <input type="text" name='email' class="form-control" value="{{$user->email}}" readonly>
                     </div>
                     
                     
                      <div class="form-group"><label for="">Biography:</label>
                    <textarea name="biography" class="form-control @error('biography') is-invalid @enderror"  id="">
                         {{old('biography', $user->profile->biography ?? '')}}
                    </textarea>
                       @error('biography')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{$message}}</strong>
                     </span>
                     
                     @enderror
                     
                     </div>
                     
                     
                      <div class="form-group"><label for="">Address:</label>
                     <input type="text" name='address' class="form-control @error('address') is-invalid @enderror" value="{{old('address', $user->profile->address ?? '')}}">
                     
                     @error('address')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{$message}}</strong>
                     </span>
                     
                     @enderror
                     </div>
                     
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