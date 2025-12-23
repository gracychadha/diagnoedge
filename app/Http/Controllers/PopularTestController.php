<?php

namespace App\Http\Controllers;
use App\Models\PopularTests;
use Illuminate\Http\Request;

class PopularTestController extends Controller
{
     // to fetch data 

    public function index()
    {
        //  dd("INDEX IS RUNNING");
        $PopularTest = PopularTests::all();
        return view('admin.pages.admin-popuplar-test', compact('PopularTest'));
    }

    // for view
    public function view($id)
    {
        $PopularTest = PopularTests::findOrFail($id);
        return response()->json($PopularTest);
    }

    // to add or store data
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:active,inactive',
            'description' => 'required|string|max:5000',
            'overview' => 'required|string|max:5000',
            'price' => 'required|string|max:5000',
        ]);

        // Upload image
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        // Store in DB
        PopularTests::create([
            'title' => $request->title,
            'image' => $imageName,
            'status' => $request->status,
            'description' => $request->description,
            'overview' => $request->overview,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Popular Test Added Successfully');
    }
    public function update(Request $request)
    {
        $PopularTest = PopularTests::find($request->id);

        $PopularTest->title = $request->title;
        $PopularTest->status = $request->status;
        $PopularTest->description = $request->description;
        $PopularTest->overview = $request->overview;
        $PopularTest->price = $request->price;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // update new image
            $PopularTest->image = $imageName;
        }

        $PopularTest->save();

        return response()->json(['success' => true]);
    }

    public function delete($id)
    {
        $PopularTest = PopularTests::findOrFail($id);

        // delete old image
        if ($PopularTest->image && file_exists(public_path('uploads/' . $PopularTest->image))) {
            unlink(public_path('uploads/' . $PopularTest->image));
        }

        $PopularTest->delete();

        return response()->json(['success' => true]);
    }
    public function deleteSelected(Request $request)
    {
        if (!$request->ids || count($request->ids) == 0) {
            return response()->json(['error' => true, 'message' => 'No IDs received']);
        }

        PopularTests::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }

}
