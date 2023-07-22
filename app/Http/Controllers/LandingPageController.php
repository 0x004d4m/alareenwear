<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Certification;
use App\Models\ContactRequest;
use App\Models\Counter;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimony;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Backpack\LangFileManager\app\Models\Language;

class LandingPageController extends Controller
{
    public function setLanguage(Request $request, $locale)
    {
        if (in_array($locale, Language::where('active',1)->pluck('abbr')->toArray())) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
    public function welcome(Request $request){
        return view('welcome',[
            "Hero"=>Hero::where('id',1)->first(),
            "Services"=>Service::get(),
            "Video"=>Video::where('id',1)->first(),
            "Counter"=>Counter::where('id',1)->first(),
            "Testimonies"=>Testimony::get(),
            "Products"=>Product::limit(3)->get(),
            "Blogs"=>Blog::limit(3)->get(),
            "Galleries"=>Gallery::limit(9)->get(),
            "Team"=>Team::limit(3)->get(),
            "Certifications"=>Certification::get(),
            "Partners"=>Partner::get(),
        ]);
    }
    public function about(Request $request){
        return view('about',[
            "About"=>About::where('id',1)->first(),
            "Video"=>Video::where('id',1)->first(),
            "Counter"=>Counter::where('id',1)->first(),
            "Testimonies"=>Testimony::get(),
        ]);
    }
    public function products(Request $request){
        return view('products',[
            "Products"=>Product::paginate(9),
        ]);
    }
    public function team(Request $request){
        return view('team',[
            "Team"=>Team::get(),
        ]);
    }
    public function blog(Request $request){
        return view('blog',[
            "Blogs"=>Blog::paginate(9),
        ]);
    }
    public function gallery(Request $request){
        return view('gallery',[
            "Galleries"=>Gallery::paginate(18),
        ]);
    }
    public function contact(Request $request){
        return view('contact');
    }
    public function contact2(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);
        ContactRequest::create([
            'name'=>$request->name??'-',
            'email'=>$request->email??'-',
            'subject'=>$request->subject??'-',
            'message'=>$request->message??'-',
        ]);
        Session::flash('Success',1);
        return redirect('/contact#contact');
    }
}
