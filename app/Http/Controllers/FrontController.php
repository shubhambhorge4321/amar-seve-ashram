<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Sidegallery;

class FrontController extends Controller
{
    public function home ()
    {
        $galleryimages = Gallery::where('category', 'homepage')->get();
        $shapemockups = [
            [
                'class' => 'hero-shape-3-1',
                'top' => '20%',
                'left' => '50%',
                'masking_class' => 'shake',
                'mask_src' => 'hero-bg-shape2-3.png',
            ],
            [
                'class' => 'hero-shape-3-2',
                'top' => '25%',
                'left' => '5%',
                'masking_class' => '',
                'mask_src' => 'hero-bg-shape2-1.png',
            ],
            [
                'class' => 'hero-shape-3-3',
                'top' => '0',
                'left' => '-2%',
                'masking_class' => 'color-masking2',
                'mask_src' => 'hand-shape3.png',
            ],
        ];


        $volunteer=Testimonial::all();

        return view('front.home-3',compact('galleryimages','shapemockups','volunteer'));
    }
    
    public function aboutus ()
    {
        return view('front.about');
    }
    public function donation ()
    {
        return view('front.donation-details');
    }
    public function contact ()
    {
        return view('front.contact');
    }
    public function volunteer ()
    {
        $volunteer=Testimonial::all();

        return view('front.team',compact('volunteer'));
    }

    public function becomevolunteer ()
    {
        return view('front.add-team');
    }

    public function gallery ()
    {
        $sidegalley= Sidegallery::all();
        return view('front.gallery',compact('sidegalley'));
    }
}
