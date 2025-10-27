<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\SerivceCategory;
use App\Models\Service;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $service_categories = SerivceCategory::all();
        return view('admin.SC.index', compact('service_categories'));
    }

    public function create()
    {
        return view('admin.SC.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icon' => 'nullable|string',
                'order' => 'required|integer',
                'status' => 'required|in:0,1',
            ]
            ,
            [
                'title.required' => 'The category title is required.',
                'title.string' => 'The category title must be a valid string.',
                'title.max' => 'The category title cannot be longer than 255 characters.',

                'description.required' => 'The category description is required.',
                'description.string' => 'The category description must be a valid string.',

                'image.image' => 'Please upload a valid image file.',
                'image.mimes' => 'Image must be in JPG, JPEG, PNG, or WEBP format.',
                'image.max' => 'Image size cannot exceed 2MB.',

                'order.required' => 'Please provide an order number.',
                'order.integer' => 'The order number must be a valid integer.',

                'status.required' => 'Please select a status.',
                'status.in' => 'Status must be either Active (1) or Inactive (0).',
            ]
        );

        $service_categories = new SerivceCategory();

        if ($request->hasFile('image')) {
            $this->ensureServiceFolderExists();

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $file->move(public_path('uploads/SC'), $store);
            $service_categories->image = 'uploads/SC/' . $store;
        }

        $service_categories->title = $request->title;
        $service_categories->description = $request->description;
        $service_categories->icon = $request->icon;
        $service_categories->order = $request->order;
        $service_categories->status = $request->status;

        $service_categories->save();

        return redirect()->route('service_categories.index')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service_categories = SerivceCategory::findOrFail($id);
        return view('admin.SC.edit', compact('service_categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'icon' => 'nullable|string',
            'order' => 'required|integer',
            'status' => 'required|in:0,1',
        ], [
            'title.required' => 'The category title is required.',
            'title.string' => 'The category title must be a valid string.',
            'title.max' => 'The category title cannot be longer than 255 characters.',

            'description.required' => 'The category description is required.',
            'description.string' => 'The category description must be a valid string.',

            'image.image' => 'Please upload a valid image file.',
            'image.mimes' => 'Image must be in JPG, JPEG, PNG, or WEBP format.',
            'image.max' => 'Image size cannot exceed 2MB.',

            'order.required' => 'Please provide an order number.',
            'order.integer' => 'The order number must be a valid integer.',

            'status.required' => 'Please select a status.',
            'status.in' => 'Status must be either Active (1) or Inactive (0).',

        ]);

        $service_categories = SerivceCategory::findOrFail($id);

        if ($request->hasFile('image')) {
            $this->ensureServiceFolderExists();

            if ($service_categories->image && File::exists(public_path($service_categories->image))) {
                File::delete(public_path($service_categories->image));
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $file->move(public_path('uploads/SC'), $store);
            $service_categories->image = 'uploads/SC/' . $store;
        }

        $service_categories->title = $request->title;
        $service_categories->description = $request->description;
        $service_categories->icon = $request->icon;
        $service_categories->order = $request->order;
        $service_categories->status = $request->status;

        $service_categories->save();

        return redirect()->route('service_categories.index')->with('success', 'Service updated successfully!');
    }

    public function delete($id)
    {
        $service_categories = SerivceCategory::findOrFail($id);

        if ($service_categories->image && File::exists(public_path($service_categories->image))) {
            File::delete(public_path($service_categories->image));
        }

        $service_categories->delete();
        return redirect()->route('service_categories.index')->with('success', 'Service deleted successfully!');
    }

    private function ensureServiceFolderExists()
    {
        $path = public_path('uploads/SC');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
    }

}
