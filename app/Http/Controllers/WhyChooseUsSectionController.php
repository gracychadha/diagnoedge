<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseUsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyChooseUsSectionController extends Controller
{
    public function index()
    {
        // Get the only record (there's always just one)
        $section = WhyChooseUsSection::firstOrCreate(
            ['id' => 1], // Ensures only one row exists
            [
                'sub_title' => 'Why Choose Us?',
                'main_title' => 'Why DiagnoEdge Labs?',
                'description_1' => 'DiagnoEdge Labs has been a trusted name in diagnostics for over a decade.',
                'description_2' => 'Our team consists of highly trained <strong>certified pathologists</strong> and <strong>experienced laboratory professionals</strong> who ensure precision, safety, and reliability in every report.',
                'big_card_value' => '10+',
                'big_card_description' => 'Years of Excellence',
                'small_card_1_title' => '50+ Advanced Tests',
                'small_card_2_title' => 'Trusted by Clinics & Hospitals',
                'small_card_3_title' => 'Skilled Diagnostic Experts',
                'small_card_4_title' => 'High Accuracy & Reliability',
                'is_active' => true,
            ]
        );

        return view('admin.pages.whychooseus-section', compact('section'));
    }

    public function update(Request $request, WhyChooseUsSection $section)
    {
        $validated = $request->validate([
            'sub_title'              => 'required|string|max:255',
            'main_title'             => 'required|string|max:255',
            'description_1'              => 'required|string',
            'description_2'          => 'nullable|string',

            'big_card_value'         => 'required|string|max:50',
            'big_card_description'   => 'required|string|max:255',

            'small_card_1_title'     => 'required|string|max:255',
            'small_card_2_title'     => 'required|string|max:255',
            'small_card_3_title'     => 'required|string|max:255',
            'small_card_4_title'     => 'required|string|max:255',

            // Image fields - optional, only when uploading new
            'big_card_image'         => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'small_card_1_image'     => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'small_card_2_image'     => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'small_card_3_image'     => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'small_card_4_image'     => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',

            'is_active'              => 'sometimes|in:1,0,on', // accepts checkbox
        ]);

        // Handle Big Card Image Upload
        if ($request->hasFile('big_card_image')) {
            // Delete old image if exists
            if ($section->big_card_image && Storage::disk('public')->exists($section->big_card_image)) {
                Storage::disk('public')->delete($section->big_card_image);
            }
            $validated['big_card_image'] = $request->file('big_card_image')->store('whychooseus', 'public');
        }

        // Handle Small Cards Images (1 to 4)
        for ($i = 1; $i <= 4; $i++) {
            $field = "small_card_{$i}_image";
            if ($request->hasFile($field)) {
                // Delete old image
                if ($section->$field && Storage::disk('public')->exists($section->$field)) {
                    Storage::disk('public')->delete($section->$field);
                }
                $validated[$field] = $request()->file($field)->store('whychooseus', 'public');
            }
        }

        // Handle is_active checkbox (unchecked = not sent)
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update the record
        $section->update($validated);

        return redirect()
            ->route('whychooseus.section')
            ->with('success', 'Why Choose Us section updated successfully!');
    }
}