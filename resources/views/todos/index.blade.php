@extends('layouts.app')

@section('styles')
<style>
#outer
{
    width: auto;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

        @if  (Session::has('alert-success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('alert-success') }}
            </div>
        @endif

@if (count($todos) > 0)  
  <table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($todos as $todo)
        <tr>
          <td> {{ $todo->Title }} </td>
          <td> {{ $todo->Description }} </td>
      <td> 
         
            @if($todo->Done == 1) 
                <a class="btn btn-success" href = "">Done</a> 
            @else
            <a class="btn btn-danger" href = "">Not Done</a>
            @endif
        </td>
          <td id="outer">  
          <a class="inner btn btn-info" href = "{{ route('todos.show', $todos->id) }}">View</a>
          <a class="inner btn btn-success" href = "">Edit</a>
              <form action="" class="inner">
                  <input type = "hidden" name="todo_id" value = "{{ $todo->id}}">
                  <input type = "submit" class="btn btn-info">
          </td>
        </tr>
      @endforeach
  </tbody>
</table> 

@else 
<h4> No Todos has been created yet! </h4>
@endif

</div>
            </div>
        </div>
    </div>
</div>
@endsection
