<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchAll(Request $request)
    {
        $keyword = strtolower($request->keyword);

        if (!$keyword) {
            return response()->json(['results' => [], 'message' => 'No related option found']);
        }

        // $tests = \App\Models\Test::where('status', 'active')
        //     ->whereRaw('LOWER(title) LIKE ?', ["%{$keyword}%"])
        //     ->select('id', 'title', \DB::raw("'test' as type"))
        //     ->get();

        // Search packages
        $packages = \App\Models\Package::where('status', 'active')
            ->whereRaw('LOWER(title) LIKE ?', ["%{$keyword}%"])
            ->select('id', 'title', 'slug', \DB::raw("'package' as type"))
            ->get()
            ->map(function ($item) {
                $item->url = route('package-details', $item->slug);
            });


        // Search healthRisks
        $healthRisks = \App\Models\HealthRisk::where('status', 'active')
            ->whereRaw('Lower(title) LIKE ?', ["%{$keyword}%"])
            ->select('id', 'title', 'slug', \DB::raw("'healthrisk' as type"))
            ->get()
            ->map(function ($item) {
                $item->url = route('healthrisk', $item->slug);
                return $item;
            });

        // Merge results
        $results = $healthRisks->merge($packages);

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
