@extends('admin.dashboard.layouts.master')
@section('content')

    <div class="container mt-4">
        <h2 class="text-dark mb-4">Add New Detail</h2>

        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data"
            class="shadow p-4 rounded bg-light">
            @csrf

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Name:</label>
                    <input type="text" name="your_name" class="form-control" value="{{ old('your_name') }}">
                    @error('your_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Email:</label>
                    <input type="email" name="your_email" class="form-control" value="{{ old('your_email') }}">
                    @error('your_email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Phone No:</label>
                    <input type="phone_no" name="your_phone_no" class="form-control" value="{{ old('your_phone_no') }}">
                        @error('your_phone_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Mesage:</label>
                    <textarea name="your_message" class="form-control" rows="4">{{ old('your_message') }}</textarea>
                    @error('your_message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <button class="btn btn-success">Save Detail</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection