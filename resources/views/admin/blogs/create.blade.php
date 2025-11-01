@extends('admin.dashboard.layouts.master');
@section('content')

<div class="container mt-4">
    <h2 class="text-primary mb-4">Add New Blog</h2>

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Image:</label>
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status:</label>
            <select name="status" class="form-control">
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
            @error('status') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <div class="div">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id">
            <option value="">Select Category</option>
                @foreach($blog_category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>


        <button class="btn btn-success">Save Blog</button>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
