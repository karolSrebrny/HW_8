@extends('tag-layout')

@section('content')

    <form action="tag-form.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id ="title" name ="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id ="slug" name ="slug">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Save"></input>
        </div>
    </form>

@endsection