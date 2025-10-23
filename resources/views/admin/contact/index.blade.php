@extends('admin.dashboard.layouts.master')
@section('content')


    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Contact Data</h2>
            <a href="{{ route('contact.create') }}" class="btn btn-primary">Add New Data</a>
        </div>

        @if (session()->has("success"))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="text-center">
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone_no }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection