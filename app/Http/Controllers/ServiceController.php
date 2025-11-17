<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.test-services', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:services,name',
            'status' => 'required|in:Active,InActive',
            'time' => 'required|string|max:50',
        ]);

        Services::create($request->only('name', 'status', 'time'));

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function update(Request $request)
    {
        $service = Services::findOrFail($request->id);

        $request->validate([
            'name' => 'required|string|max:255|unique:services,name,' . $service->id,
            'status' => 'required|in:Active,InActive',
            'time' => 'required|string|max:50',
        ]);

        $service->update($request->only('name', 'status', 'time'));

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Services $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
