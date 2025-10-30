@extends('admin.dashboard.layouts.master');

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Services</h2>
            <a href="{{ route('service.create') }}" class="btn btn-primary">Add New Service</a>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle data_table">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Service Category</th>
                        <th>Title</th>
                        <th>Sub title</th>
                        <th>Description</th>
                        <th>Banner image</th>
                        <th>Icon</th>
                        <th>Thumbnail</th>
                        <th>Order no</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr class="text-center">
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->category->title ?? ''}}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->sub_title }}</td>
                            <td>{{ ($service->description) }}</td>
                            <td>
                                <img src="{{ asset($service->banner_image) }}" alt="Banner Image" width="80">
                            </td>
                            <td>
                                <i class="{{$service->icon}}"></i>
                            </td>
                            <td>
                                <img src="{{ asset($service->thumbnail) }}" alt="thumbnail" width="80">
                            </td>
                            <td>{{ $service->order_no }}</td>
                            <td>
                                @if($service->status=='active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('service.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('service.delete', $service->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection