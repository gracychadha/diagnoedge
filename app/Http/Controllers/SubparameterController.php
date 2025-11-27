<?php

namespace App\Http\Controllers;
use App\Models\Subparameter;
use Illuminate\Http\Request;

class SubparameterController extends Controller
{


    // FOR FETCH ALL THE DATA

public function index(){
    $subparameter = Subparameter::orderBy('id', 'desc')->get();

    return view('admin.pages.admin-subparameters', compact('subparameter'));
}


// FOR VIEW THE DATA OF SUB-PARAMETERS
public function view($id)
{
    $subparameter = Subparameter::with('parameter')->findOrFail($id);

    return response()->json([
        'id' => $subparameter->id,
        'title' => $subparameter->title,
        'slug' => $subparameter->slug,
        'status' => $subparameter->status,
        'description' => $subparameter->description,
        'parameter_id' => $subparameter->parameter_id,
        'parameter_title' => $subparameter->parameter->title ?? '—',
    ]);
}


    // TO STORE DATA OF SUB PARAMETER
     public function store(Request $request)
{
    // Validation
    $request->validate([
        'title'      => 'required|string|max:255',
        'slug'      => 'required|string|max:255',
        'status' => 'required|in:active,inactive',
        'description'   => 'required|string|max:255',
        'parameter_id'=> 'nullable|string|max:5000',
    ]);

  
    // Store in DB
    Subparameter::create([
        'title'      => $request->title,
        'slug'      => $request->slug,
        'status'        => $request->status,
        'description'   => $request->description,
        'parameter_id'=> $request->parameter_id,
    ]);

    return redirect()->back()->with('success', 'Sub-Parameter Added Successfully');
}


// FOR EDIT DATA OF SUB PARAMETER
public function update(Request $request)
{
    $subparameter = Subparameter::find($request->id);

    $subparameter->title = $request->title;
    $subparameter->slug = $request->slug;
    $subparameter->status = $request->status;
   $subparameter->description = $request->description;
    $subparameter->parameter_id = $request->parameter_id;

    $subparameter->save();

    return response()->json(['success' => true]);
}


// DELETE SUB-PARAMETER
public function delete($id)
{
    $subparameter = Subparameter::findOrFail($id);
    $subparameter->delete();

    return response()->json(['success' => true]);
}
}
