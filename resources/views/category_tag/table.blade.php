@extends('layout')

@section('content')
    <a href="category-form.php" type="button" class="btn btn-primary">Add category</a>
    <table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                 <tr>
                     <th scope="row">{{$category -> id}}</th>
                     <td>{{$category -> title}}</td>
                     <td>{{$category -> slug}}</td>
                     <td>{{$category -> created_at}}</td>
                     <td>{{$category -> updated_at}}</td>
                     <td>
                         <a href="category-form-edit.php?id={{$category ->id}}" type="button" class="btn btn-primary">Edit</a>
                         <a href="category-delete.php?id={{$category ->id}}" type="button" class="btn btn-primary">Delete</a>
                     </td>
            </tr>
            @empty
                <tr><td colspan="6"> No Category</td></tr>
            @endforelse
            </tbody>
        </table>

@endsection