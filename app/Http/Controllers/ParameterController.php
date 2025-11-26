<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Parameter::latest()->get();
        return view('admin.pages.parameter', compact('parameters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'detail_id' => 'nullable|integer',
            'overview' => 'nullable|string',
        ]);

        Parameter::create($request->all());

        return redirect()->route('admin.pages.parameter')
            ->with('success', 'Parameter created successfully!');
    }

    public function update(Request $request, Parameter $parameter)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'detail_id' => 'nullable|integer',
            'overview' => 'nullable|string',
        ]);

        $parameter->update($request->all());

        return redirect()->route('admin.pages.parameter')
            ->with('success', 'Parameter updated successfully!');
    }

    public function destroy(Parameter $parameter)
    {
        $parameter->delete();
        return back()->with('success', 'Parameter deleted successfully!');
    }
}