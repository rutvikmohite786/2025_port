@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('porttech.store')}}" id="porttechform">
  @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/porttech.js')}}"></script>
@endsection