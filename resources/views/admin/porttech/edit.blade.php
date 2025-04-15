@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('porttech.update')}}" id="porttechform">
<input type="hidden" name="id" value="{{$data->id}}">
  @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input name="name" type="text" value="{{$data->name}}" class="form-control" id="name" placeholder="Enter name">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a type="button" href="javascript:void(0);" onclick="window.history.back();" class="btn btn-success">Back</a>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/porttech.js')}}"></script>
@endsection