<?php

// In app/Http/Controllers/Api/TestimonialController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_visible', true)
                                   ->orderBy('created_at', 'desc')
                                   ->get();

        // Přidáme plnou URL k obrázku
        $testimonials->transform(function ($testimonial) {
            $testimonial->image_url = asset('storage/' . $testimonial->image);
            return $testimonial;
        });

        return response()->json($testimonials);
    }
}
