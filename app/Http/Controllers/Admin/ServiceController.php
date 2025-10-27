<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use App\Models\SerivceCategory;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {

        $service_categories = SerivceCategory::all();
        return view('admin.service.create', compact('service_categories'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [

                'title' => 'required|string',
                'sub_title' => 'nullable|string',
                'description' => 'nullable|string',
                'other_description' => 'nullable|string',
                'order_no' => 'required|integer',
                'status' => 'required|in:active,inactive',
                'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icon' => 'nullable|string|max:255',

            ],
            [
                'title.required' => 'The service title is required.',
                'title.string' => 'The service title must be a valid string.',

                'order_no.required' => 'Please provide the order number.',
                'order_no.integer' => 'The order number must be an integer.',

                'status.required' => 'Please select a status for the service.',
                'status.in' => 'Status must be either Active (1) or Inactive (0).',

                'banner_image.image' => 'Banner image must be a valid image file.',
                'banner_image.mimes' => 'Banner image must be JPG, JPEG, PNG, or WEBP format.',
                'banner_image.max' => 'Banner image size cannot exceed 2MB.',

                'thumbnail.image' => 'Thumbnail must be a valid image file.',
                'thumbnail.mimes' => 'Thumbnail must be JPG, JPEG, PNG, or WEBP format.',
                'thumbnail.max' => 'Thumbnail size cannot exceed 2MB.',

                'icon.string' => 'Icon field must be a valid string.',
                'icon.max' => 'Icon cannot be longer than 255 characters.',


            ]
        );

        $service = new Service();

        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $extension = $image->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $image->move(public_path('uploads/service/banner'), $store);
            $service->banner_image = 'uploads/service/banner/' . $store;
        }

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $image->move(public_path('uploads/service/thumbnail'), $store);
            $service->thumbnail = 'uploads/service/thumbnail/' . $store;
        }

        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->other_description = $request->other_description;
        $service->icon = $request->icon;
        $service->order_no = $request->order_no;
        $service->status = $request->status;
        $service->category_id = $request->category_id;

        $service->save();

        return redirect()->route('service.index');
    }

    public function edit($id)
    {

        $service = Service::findOrFail($id);
        $service_categories = SerivceCategory::all();
        return view('admin.service.edit', compact('service', 'service_categories'));
    }

    public function update(Request $request, $id)
    {


        $request->validate(
            [

                'title' => 'required|string',
                'sub_title' => 'nullable|string',
                'description' => 'nullable|string',
                'other_description' => 'nullable|string',
                'order_no' => 'required|integer',
                'status' => 'required|in:active,inactive',
                'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icon' => 'nullable|string|max:255',

            ]
            ,
            [
                'title.required' => 'The service title is required.',
                'order_no.required' => 'Please provide the order number.',
                'status.required' => 'Please select a status for the service.',
                'status.in' => 'Status must be either Active (1) or Inactive (0).',
                'banner_image.image' => 'Banner image must be a valid image file.',
                'thumbnail.image' => 'Thumbnail must be a valid image file.',
                'icon.max' => 'Icon cannot be longer than 255 characters.'
            ]
        );

        $service = Service::findOrFail($id);

        if ($request->hasFile('banner_image')) {

            if ($service->banner_image && File::exists(public_path($service->banner_image))) {
                File::delete(public_path($service->banner_image));
            }

            $image = $request->file('banner_image');
            $extension = $image->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $image->move(public_path('uploads/service/banner'), $store);
            $service->banner_image = 'uploads/service/banner/' . $store;
        }

        if ($request->hasFile('thumbnail')) {

            if ($service->thumbnail && File::exists(public_path($service->thumbnail))) {
                File::delete(public_path($service->thumbnail));
            }

            $image = $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $store = time() . rand() . '.' . $extension;
            $image->move(public_path('uploads/service/thumbnail'), $store);
            $service->thumbnail = 'uploads/service/thumbnail/' . $store;
        }

        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->other_description = $request->other_description;
        $service->order_no = $request->order_no;
        $service->status = $request->status;
        $service->category_id = $request->category_id;

        $service->save();

        return redirect()->route('service.index');
    }

    public function delete($id)
    {

        $service = Service::findOrFail($id);

        if ($service->banner_image && File::exists(public_path($service->banner_image))) {
            File::delete(public_path($service->banner_image));
        }

        if ($service->thumbnail && File::exists(public_path($service->thumbnail))) {
            File::delete(public_path($service->thumbnail));
        }

        $service->delete();
        return redirect()->route('service.index');
    }
}
