@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Todo List</div>

                <div class="card-body">
                    <h4>Edit Info</h4>
                <form>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control">
    </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" cols="5" rows="5">
        </textarea>
    <input type="password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
