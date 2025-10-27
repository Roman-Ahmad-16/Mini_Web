@extends('admin.dashboard.layouts.master');

@section('content')
    <div class="container">
        <h2>Add Service Category</h2>

        <form action="{{ route('service_categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="mb-3 col-6">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" placeholder="fa-solid fa-eye">
                </div>
                @error('icon')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    <small class="text-muted">Allowed: jpg, jpeg, png, webp | Max: 2MB</small>
                </div>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="mb-3 col-6">
                    <label class="form-label">Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order') }}" required>
                </div>
                @error('order')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('service_categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection