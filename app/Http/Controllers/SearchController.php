<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchAll(Request $request)
    {
        $keyword = strtolower($request->keyword); // convert to lowercase

        if (!$keyword) {
            return response()->json(['results' => [], 'message' => 'No related option found']);
        }

        $tests = \App\Models\Test::where('status', 'active')
            ->whereRaw('LOWER(title) LIKE ?', ["%{$keyword}%"])
            ->select('id', 'title', \DB::raw("'test' as type"))
            ->get();

        // Search packages
        $packages = \App\Models\Package::where('status', 'active')
            ->whereRaw('LOWER(title) LIKE ?', ["%{$keyword}%"])
            ->select('id', 'title', \DB::raw("'package' as type"))
            ->get();

        // Merge results
        $results = $tests->merge($packages);

        if ($results->isEmpty()) {
            return response()->json([
                'results' => [],
                'message' => 'No related option found'
            ]);
        }

        return response()->json([
            'results' => $results,
            'message' => null
        ]);
    }

}
