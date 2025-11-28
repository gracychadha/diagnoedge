<?php

namespace App\Http\Controllers;

use App\Models\Subparameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubparameterController extends Controller
{
    public function index()
    {
        $subparameters = Subparameter::latest()->get();
        return view('admin.pages.admin-subparameters', compact('subparameters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'required|string|max:255|unique:subparameters,title',
            'parameter_id'    => 'required|array|min:1',
            'parameter_id.*'  => 'exists:parameters,id',
            'price'           => 'nullable|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'test_ids'        => 'nullable|array',
            'test_ids.*'      => 'exists:tests,id',
            'description'     => 'nullable|string',
            'status'          => 'required|in:active,inactive',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('subparameters', 'public');
        }

        Subparameter::create($data);

        return back()->with('success', 'Subparameter created successfully!');
    }

    public function update(Request $request, Subparameter $subparameter)
    {
        $request->validate([
            'title'           => 'required|string|max:255|unique:subparameters,title,' . $subparameter->id,
            'parameter_id'    => 'required|array|min:1',
            'parameter_id.*'  => 'exists:parameters,id',
            'price'           => 'nullable|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'test_ids'        => 'nullable|array',
            'test_ids.*'      => 'exists:tests,id',
            'description'     => 'nullable|string',
            'status'          => 'required|in:active,inactive',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($subparameter->image) {
                Storage::disk('public')->delete($subparameter->image);
            }
            $data['image'] = $request->file('image')->store('subparameters', 'public');
        }

        $subparameter->update($data);

        return back()->with('success', 'Subparameter updated successfully!');
    }

    public function destroy(Subparameter $subparameter)
    {
        if ($subparameter->image) {
            Storage::disk('public')->delete($subparameter->image);
        }
        $subparameter->delete();

        return back()->with('success', 'Subparameter deleted successfully!');
    }
}
