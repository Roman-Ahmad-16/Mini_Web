@extends('admin.dashboard.layouts.master');
@section('content')

<div class="container mt-4">
    <h2 class="text-primary mb-4">Edit Blog</h2>

    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $blog->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Image:</label>
            <input type="file" name="image" class="form-control">
            @if($blog->image)
                <img src="{{ asset($blog->image) }}" alt="Blog Image" class="mt-2" width="80">
            @endif
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status:</label>
            <select name="status" class="form-control">
                <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Update Blog</button>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
