<?php

namespace App\Http\Controllers;

use App\Models\Testimonial; // <-- Add this import
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // Fetch the testimonials here
        $testimonials = Testimonial::where('is_visible', true)
                                   ->orderBy('created_at', 'desc')
                                   ->get();

        // Pass the $testimonials variable to your view
        return view('/', [
            'testimonials' => $testimonials
        ]);
    }
}
