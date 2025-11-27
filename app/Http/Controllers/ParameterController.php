<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Parameter::latest()->get();
        return view('admin.pages.parameter', compact('parameters'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255|unique:parameters,title',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'overview'    => 'nullable|string',
            'detail_id'   => 'nullable|array',
            'detail_id.*' => 'integer|exists:tests,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['detail_id'] = $validated['detail_id'] ?? [];

        Parameter::create($validated);

        return redirect()->route('admin.pages.parameter')
            ->with('success', 'Parameter created successfully!');
    }

    public function update(Request $request, Parameter $parameter)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255|unique:parameters,title,' . $parameter->id,
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'overview'    => 'nullable|string',
            'detail_id'   => 'nullable|array',
            'detail_id.*' => 'integer|exists:tests,id',
        ]);

        if ($request->filled('title') && $request->title !== $parameter->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $validated['detail_id'] = $validated['detail_id'] ?? [];

        $parameter->update($validated);

        return redirect()->route('admin.pages.parameter')
            ->with('success', 'Parameter updated successfully!');
    }

    public function destroy(Parameter $parameter)
    {
        $parameter->delete();
        return back()->with('success', 'Parameter deleted successfully!');
    }
}