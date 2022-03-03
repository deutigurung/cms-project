<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Partners;
use App\Models\Project;
use App\Models\QueryForm;
use App\Models\Service;
use App\Models\TeamMember;
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
        $Blogs = Blog::where('status', 1)->latest()->get();
        $Projects = Project::where('status', 1)->latest()->get();
        return view('frontend.index',compact('SliderBanners','Services',
            'Testimonials','Partners','Faqs','Blogs','Projects'));
    }
    public function faqs()
    {
        $Faqs = Faq::latest()->get();
        return view('frontend.faqs',compact('Faqs'));
    }
    public function testimonials()
    {
        $Testimonials = Testimonial::latest()->get();
        return view('frontend.testimonials',compact('Testimonials'));
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
    public function pageByUrl($url)
    {
        $Pages = Page::where('url',$url)->where('status', 1)->first();
        return view('frontend.pages',compact('Pages'));
    }
    public function blogs()
    {
        $Blogs = Blog::where('status', 1)->latest()->get();
        $BlogCategories = BlogCategory::where('status', 1)->latest()->get();
        return view('frontend.blogs.blog',compact('Blogs','BlogCategories'));
    }
    public function blogBySlug($slug)
    {
        $BlogAll = Blog::where('status', 1)->latest()->get();
        $Blog = Blog::where('slug',$slug)->where('status', 1)->first();
        $BlogCategories = BlogCategory::where('status', 1)->latest()->get();
        return view('frontend.blogs.blog-detail',compact('Blog','BlogAll','BlogCategories'));
    }
    public function projects()
    {
        $Projects = Project::where('status', 1)->latest()->get();
        return view('frontend.projects.projects',compact('Projects'));
    }
    public function projectBySlug($slug)
    {
        $Project = Project::where('slug',$slug)->where('status', 1)->first();
        return view('frontend.projects.project-single',compact('Project'));
    }
    public function about()
    {
        $About = Page::where('title','like','about%')->first();
        $Teams = TeamMember::latest()->get();
        $Partners = Partners::latest()->get();
        return view('frontend.about',compact('About','Teams','Partners'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function queryForm(Request $request)
    {
        if($request->get('service') !== null ){
            $msg = 'We are requesting for service - '.$request->get('service');
        }else{
            $msg = $request->get('note');
        }
        $query = QueryForm::create([
            'first_name'      => $request->get('f_name'),
            'last_name'      => $request->get('l_name'),
            'message'      => $msg,
            'phone'      => $request->get('phone'),
            'email'      => $request->get('email'),
        ]);
        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
