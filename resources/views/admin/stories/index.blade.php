@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Deleted Stories
                
                </div>

                <div class="card-body">
                 
                  <table class="table table-hover table bordered">
                      <thead>
                          <tr>
                              <td>Title</td>
                            
                              <td>Type</td>
                              <td>User</td>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach($stories as $story)
                          <tr>
                              <td>{{$story->title}}</td>
                              
                              <td>{{$story->type}}</td>
                              <td>{{$story->user->name}} </td>
<!--
                              <td><a href="{{ route('stories.show', [$story])}}" class="btn btn-primary">View</a></td>
                              <td><a href="{{ route('stories.edit', [$story])}}" class="btn btn-warning">Edit</a></td>
                              
                              <td><form action="{{route('stories.destroy', [$story])}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Delete</button>
                              </form>
                              </td>
-->
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{$stories->links()}}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
