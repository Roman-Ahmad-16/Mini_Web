
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .table th {
            background: #007bff;
            color: #fff;
        }

        .btn-custom {
            border-radius: 25px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        {{-- Section 1: Category Details --}}
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="section-title">📘 Course Details</h4>
                <p><strong>Category Name:</strong> {{ $blog_category->name }}</p>
                <p><strong> Category Description:</strong> {{ $blog_category->description }}</p>
                <p><strong> Category Status:</strong> {{ $blog_category->status }}</p>
            </div>
        </div>

        {{-- Section 2: Blog Registration Form --}}
        <div class="card mb-4">
            <div class="card-body">
                
                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <h4 class="section-title">📝 Register a New Blog</h4>
                <form action="{{ route('blog.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $blog_category->id }}">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Enter title">
                        </div>
                        <div class="col-md-4">
                            <label for="text" class="form-label">Description</label>
                            <input type="description" id="description" name="description" class="form-control"
                                placeholder="Enter description">
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-1 text-end">
                            <button type="submit" class="btn btn-primary btn-custom w-100">+</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Section 3: Blog List --}}
        <div class="card">
            <div class="card-body">
                <h4 class="section-title">👨‍🎓 Blog List</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>{{ $blog->status }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>
