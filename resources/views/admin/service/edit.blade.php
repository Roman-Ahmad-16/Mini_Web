@extends('admin.dashboard.layouts.master');
@section('content')

    <div class="container mt-4">
        <h2 class="text-dark mb-4">Edit Service</h2>

        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data"
            class="shadow p-4 rounded bg-light">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Sub Title:</label>
                    <input type="text" name="sub_title" class="form-control"
                        value="{{ old('sub_title', $service->sub_title) }}">
                    @error('sub_title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea name="description" class="form-control"
                    rows="4">{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Banner Image:</label>
                    <input type="file" name="banner_image" class="form-control">
                    @if($service->banner_image)
                        <img src="{{ asset($service->banner_image) }}" alt="Banner image" class="mt-2" width="80">
                    @endif
                    @error('banner_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Font Awesome Icon:</label>
                    <input type="text" name="icon" class="form-control" placeholder="e.g. fa-solid fa-gear"
                        value="{{ old('icon', $service->icon ?? '') }}">
                    @if($service->icon)
                        <i class="{{ $service->icon }}" style="font-size:32px;"></i>
                    @endif
                    @error('icon')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Other Description:</label>
                <textarea name="other_description" class="form-control"
                    rows="4">{{ old('other_description', $service->other_description) }}</textarea>
                @error('other_description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Thumbnail:</label>
                    <input type="file" name="thumbnail" class="form-control">
                    @if($service->thumbnail)
                        <img src="{{ asset($service->thumbnail) }}" alt="thumbnail" class="mt-2" width="80">
                    @endif
                    @error('thumbnail')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>





                <div class="mb-3 col-6">
                    <label class="form-label">Order No</label>
                    <input type="number" name="order_no" class="form-control"
                        value="{{ old('order_no', $service->order_no) }}">
                    @error('other_description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Status:</label>
                    <select name="status" class="form-control">
                        <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>


                <div class="mb-3 col-6">
                    <label for="category_id" class="form-label">Select Category:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($service_categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $service->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>




            </div>

            <button class="btn btn-success">Update Service</button>
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection