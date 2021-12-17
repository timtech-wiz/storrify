@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stories') }}
                @can('create', App\Story::class)
                <a href="{{route('stories.create')}}" class="btn btn-secondary float-right">Add</a>
                @endcan
                </div>

                <div class="card-body">
                 
                  <table class="table table-hover table bordered">
                      <thead>
                          <tr>
                               
                              <td>Image</td>
                              <td>Title</td>
                              <td>Tags</td>
                           
                              <td>Type</td>
                              <td>Status</td>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach($stories as $story)
                          <tr>
                             <td><img src="{{$story->thumbnail}}" alt='image'></td>
                              <td>{{$story->title}}</td>
                              <td>
                              @foreach($story->tags as $tag)
                              {{$tag->name.','}}
                              @endforeach
                              </td>
                              <td>{{$story->type}}</td>
                              <td>{{$story->status == 1 ? 'yes' : 'no'}} </td>
                              <td><a href="{{ route('stories.show', [$story])}}" class="btn btn-primary">View</a></td>
                              <td><a href="{{ route('stories.edit', [$story])}}" class="btn btn-warning">Edit</a></td>
                              
                              <td><form action="{{route('stories.destroy', [$story])}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Delete</button>
                              </form>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{$stories->links()}}
                   
                </div>
            </div>
        </div>
    </div>
    
<!--
    <x-alert message='This is first message'/>
    <hr>
    <x-alert message='This is second message' class="w-25 alert-danger"/>
    <hr>
    <x-alert message='This is third message'/>
-->
    
</div>
@endsection
