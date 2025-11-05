@extends('layouts.admin')
@section('content')
<div class="container">
@include('admin.message')
<a type="button" href="{{route('blog.add')}}" class="btn btn-primary">Add Blog</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Tag</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($data->count()>0)
    @foreach($data as $key => $value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        @if($value->image)
          <img src="{{ asset('images/blog/' . $value->image) }}" alt="Blog image" style="max-width: 50px; height: auto;">
        @else
          No Image
        @endif
      </td>
      <td>{{$value->title}}</td>
      <td>{{ Str::limit($value->description, 50) }}</td>
      <td>{{$value->tag}}</td>
      <td>{{$value->date ? \Carbon\Carbon::parse($value->date)->format('M d, Y') : 'N/A'}}</td>
      <td style="display: flex;"> 
        <a type="button" href="/admin/blog/edit/{{$value->id}}" class="btn btn-primary update">Edit</a>
        <a type="button" href="/admin/blog/delete/{{$value->id}}" class="btn btn-danger delete">Delete</a>
      </td>
    </tr>
    @endforeach
    @else
     <tr>
      <td colspan="7"><h1>No blog posts found</h1></td>
    </tr>
    @endif
  </tbody>
</table>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
@endsection
