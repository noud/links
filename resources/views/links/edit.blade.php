@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a link</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('links.update', $link->id) }}">
            @method('PATCH') 
            @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" value="{{ $link->title }}" />
          </div>

          <div class="form-group">
              <label for="url">Url:</label>
              <input type="text" class="form-control" name="url" value="{{ $link->url }}" />
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description" value="{{ $link->description }}" />
          </div>                         
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection