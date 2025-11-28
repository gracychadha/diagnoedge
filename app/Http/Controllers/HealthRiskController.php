<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HealthRisk;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HealthRiskController extends Controller
{
    public function index()
    {
        $healthRisks = HealthRisk::latest()->get();
        $parameters = Parameter::where('status', 'active')->orderBy('title')->get();
        return view('admin.pages.health-risks', compact('healthRisks', 'parameters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:health_risks,title',
            'parameter_id' => 'required|array',
            'parameter_id.*' => 'exists:parameters,id',
            'icon' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable'
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('health-risks', 'public');
        }

        $data['parameter_id'] = $request->parameter_id;

        HealthRisk::create($data);

        return back()->with('success', 'Health Risk added successfully!');
    }

    public function update(Request $request, HealthRisk $healthRisk)
    {
        $request->validate([
            'title' => 'required|unique:health_risks,title,' . $healthRisk->id,
            'parameter_id' => 'required|array',
            'parameter_id.*' => 'exists:parameters,id',
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable'
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            if ($healthRisk->icon && Storage::disk('public')->exists($healthRisk->icon)) {
                Storage::disk('public')->delete($healthRisk->icon);
            }
            $data['icon'] = $request->file('icon')->store('health-risks', 'public');
        }

        $data['parameter_id'] = $request->parameter_id;

        $healthRisk->update($data);

        return back()->with('success', 'Health Risk updated successfully!');
    }

    public function destroy(HealthRisk $healthRisk)
    {
        if ($healthRisk->icon && Storage::disk('public')->exists($healthRisk->icon)) {
            Storage::disk('public')->delete($healthRisk->icon);
        }
        $healthRisk->delete();

        return back()->with('success', 'Health Risk deleted successfully!');
    }
}