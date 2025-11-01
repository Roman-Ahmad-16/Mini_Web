@extends('admin.dashboard.layouts.master');
@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Blog Categories</h2>
        <a href="{{ route('blog_category.create') }}" class="btn btn-primary">Add New Category</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Enroll Blogs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blog_category as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ Str::limit($category->description, 50) }}</td>
                <td>
                    @if($category->status == 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('blog_category.detail', $category->id) }}"  class="btn btn-sm btn-warning">
                        {{$category->blogs ? $category->blogs->count():0 }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('blog_category.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('blog_category.detail', $category->id) }}" class="btn btn-sm btn-primary">Detail</a>
                    <form action="{{ route('blog_category.delete', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
