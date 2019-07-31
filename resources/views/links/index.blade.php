@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Links</h1>    
    <div>
    <a style="margin: 19px;" href="{{ route('links.create')}}" class="btn btn-primary">New link</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Url</td>
          <td>Description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($links as $link)
        <tr>
            <td>{{$link->id}}</td>
            <td>{{$link->title}}</td>
            <td>{{$link->url}}</td>
            <td>{{$link->description}}</td>
            <td>
                <a href="{{ route('links.edit',$link->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('links.destroy', $link->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection