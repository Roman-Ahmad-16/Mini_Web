@extends('admin.dashboard.layouts.master');

@section('content')
    <div class="container">
        <h2>Edit Service Category</h2>

        <form action="{{ route('service_categories.update', $service_categories->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control"
                        value="{{ old('title', $service_categories->title) }}" required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" placeholder="fa-solid fa-eye"
                        value="{{ old('icon', $service_categories->icon) }}">
                    @if($service_categories->icon)
                        <div class="mt-2">
                            <i class="{{ $service_categories->icon }}" style="font-size: 24px;"></i>
                        </div>
                    @endif
                    @error('icon')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description"
                    class="form-control">{{ old('description', $service_categories->description) }}</textarea>
            </div>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Image</label>

                    <input type="file" name="image" class="form-control">
                    @if($service_categories->image)
                        <div class="mb-2">
                            <img src="{{ asset($service_categories->image) }}" alt="Image" class="img-thumbnail" width="120">
                        </div>
                    @endif
                    <small class="text-muted">Leave empty if you don't want to change.</small>
                </div>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="mb-3 col-6">
                    <label class="form-label">Order</label>
                    <input type="number" name="order" class="form-control"
                        value="{{ old('order', $service_categories->order) }}" required>
                </div>
                @error('order')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="1" {{ old('status', $service_categories->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $service_categories->status) == 0 ? 'selected' : '' }}>Inactive
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('service_categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection