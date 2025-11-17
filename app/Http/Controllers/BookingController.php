<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Booking;

class BookingController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'mobile' => 'required',
        'agreeTerms' => 'accepted',
        'g-recaptcha-response' => 'required',
    ]);

    // Save to database
    Booking::create([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'source' => $request->source,
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Thank you! Our health advisor will contact you shortly.'
    ]);
}

}
