@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stories') }}
               
               <div class="float-right">
                   <a href="{{route('dashboard.index')}}">All</a>
                   |
                   <a href="{{route('dashboard.index', ['type' => 'short'])}}">Short</a>
                   |
                   <a href="{{route('dashboard.index', ['type' => 'long'])}}">Long</a>
               </div>
               <!--
                  @foreach($story->tags as $tag)
                     
                      <button type="button" class="btn btn-sm btn-outline-primary">{{$tag->name}}</button>
                      @endforeach
-->
               
                </div>

                <div class="card-body">
                 
                  <table class="table table-hover table bordered">
                      <thead>
                          <tr>
                             <td>Image</td>
                              <td><strong>Title</strong></td>
                              
                              <td>Type</td>
                              <td>Authur</td>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach($stories as $story)
                          <tr>
                              <td><img src="{{$story->thumbnail}}" alt='image'></td>
                              <td><a href="{{route('dashboard.show',[$story] )}}">{{$story->title}}</a></td>
                               
                              <td>{{$story->type}}</td>
                              <td>{{$story->user->name}} </td>
                              <td></td>
                             
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{$stories->withQueryString()->links()}}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
