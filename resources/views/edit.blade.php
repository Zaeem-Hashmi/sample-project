@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/submit/{{$data->id}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$data->email}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$data->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection