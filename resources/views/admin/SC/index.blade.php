@extends('admin.dashboard.layouts.master');

@section('content')
    <div class="container">
        <h2 class="mb-4">Service Categories</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('service_categories.create') }}" class="btn btn-primary mb-5">+ Add New Category</a>

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th width="180px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($service_categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($category->image)
                                <img src="{{ asset($category->image) }}" alt="Image" width="50">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($category->icon)
                                <i class="{{ $category->icon }}" width="30"></i>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->order }}</td>
                        <td>
                            @if($category->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('service_categories.edit', $category->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('service_categories.delete', $category->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No categories found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection