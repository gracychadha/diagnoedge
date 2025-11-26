<?php
// app/Http/Controllers/TestController.php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::latest()->get();
        return view('admin.pages.test', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'icon'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:active,inactive'
        ]);

        $data = $request->only('title', 'status');

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('tests', 'public');
        }

        Test::create($data);

        return back()->with('success', 'Test created successfully!');
    }

    public function update(Request $request, Test $test)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'icon'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:active,inactive'
        ]);

        $data = $request->only('title', 'status');

        if ($request->hasFile('icon')) {
            if ($test->icon) {
                Storage::disk('public')->delete($test->icon);
            }
            $data['icon'] = $request->file('icon')->store('tests', 'public');
        }

        $test->update($data);

        return back()->with('success', 'Test updated successfully!');
    }

    public function destroy(Test $test)
    {
        if ($test->icon) {
            Storage::disk('public')->delete($test->icon);
        }
        $test->delete();

        return back()->with('success', 'Test deleted!');
    }
}