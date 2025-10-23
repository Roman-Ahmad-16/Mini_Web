@extends('admin.dashboard.layouts.master')
@section('content')

    <div class="container mt-4">
        <h2 class="text-dark mb-4">Edit Project</h2>

        <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data"
            class="shadow p-4 rounded bg-light">
            @csrf

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name) }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Phone No:</label>
                    <input type="phone_no" name="phone_no" class="form-control" value="{{ old('phone_no', $contact->phone_no) }}">
                    @error('phone_no')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Message:</label>
                    <textarea name="message" class="form-control"
                        rows="4">{{ old('message', $contact->message) }}</textarea>
                    @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <button class="btn btn-success">Update Detail</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection