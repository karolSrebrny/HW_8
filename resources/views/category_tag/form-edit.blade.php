@extends('layout')

@section('content')
    <form action="category-form-edit.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id ="title" name ="title" value="{{  $category->title  }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id ="slug" name ="slug"value="{{$category -> slug}}">
        </div>

        <input type="hidden" name="id" value="{{$category -> id}}">

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Save"></input>
        </div>
    </form>

@endsection