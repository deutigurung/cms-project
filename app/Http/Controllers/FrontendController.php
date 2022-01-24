<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Faq;
use App\Models\Partners;
use App\Models\QueryForm;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $SliderBanners = Banner::where('status', 1)->get();
        $Services = Service::where('status', 1)->get();
        $Testimonials = Testimonial::where('status', 1)->get();
        $Partners = Partners::all();
        $Faqs = Faq::latest()->get();
        return view('frontend.index',compact('SliderBanners','Services',
            'Testimonials','Partners','Faqs'));
    }
    public function faqs()
    {
        $Faqs = Faq::latest()->get();
        return view('frontend.faqs',compact('Faqs'));
    }
    public function services()
    {
        $Services = Service::where('status', 1)->latest()->get();
        return view('frontend.services.services',compact('Services'));
    }
    public function serviceBySlug($slug)
    {
        $ServiceAll = Service::where('status', 1)->latest()->get();
        $Service = Service::where('slug',$slug)->where('status', 1)->first();
        return view('frontend.services.service-single',compact('Service','ServiceAll'));
    }
    public function queryForm(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string',
            'email' => 'nullable|string|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);
        $query = QueryForm::create([
            'first_name'      => $request->get('first_name'),
            'last_name'      => $request->get('last_name'),
            'message'      => $request->get('message'),
            'phone'      => $request->get('phone'),
            'email'      => $request->get('email'),
        ]);
        return redirect()->back()->with('success', 'Your query has been submit Successfully');

    }
}
