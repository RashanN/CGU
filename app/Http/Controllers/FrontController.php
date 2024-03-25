<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{About, Banner, Category, Faq, General, Link, Page, Partner, Pcategory, Portfolio, Post, Tag, Team, Testimonial, Service, Contact, Subscriber, Company};
class FrontController extends Controller
{
    public function home()
    {
        $about = About::find(1);
        $banner = Banner::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $posts = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $partner = Partner::orderBy('name','asc')->limit(8)->get();
        $pcategories = Pcategory::all();
        $portfolio = Portfolio::orderBy('id','desc')->limit(6)->get();
        $service = Service::orderBy('title','asc')->limit(3)->get();
        $team = Team::where('position','=','Career Guidance Counselors')->get();
        $testi = Testimonial::where('profession','=','Director')->get();
        $recent = Post::orderBy('id','desc')->limit(6)->get();
        return view ('front.home',compact('about','banner','general','link','posts','partner','pcategories','portfolio','service','team','testi','recent','lpost'));
    }

    public function about()
    {
        $about = About::find(1);
        $faq = Faq::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $partner = Partner::orderBy('name','asc')->get();
        $team = Team::orderBy('id','asc')->get();
        return view ('front.about',compact('about','faq','general','link','lpost','partner','team'));
    }

    public function testi()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $team1 = Team::where('position','=','CAREER GUIDANCE COUNSELORS')->orderBy('id','asc')->get();
        $team2 = Team::where('position','=','FORMER DIRECTORS IN CGU')->orderBy('id','asc')->get();
        $team3 = Team::where('position','=','FACULTY CAREER ADVISORS')->orderBy('id','asc')->get();
       // $testi = Testimonial::orderBy('name','asc')->paginate(3);
        $testi = Testimonial::where('profession','<>','Director')->paginate(3);
        return view ('front.testi',compact('general','link','lpost','testi','team1','team2','team3'));
    }
    public function service()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $service = Service::orderBy('title','asc')->get();
        return view ('front.service',compact('general','link','lpost','service'));
    }

    public function serviceshow($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $service = Service::where('slug', $slug)->firstOrFail();
        return view ('front.serviceshow',compact('general','link','lpost','service'));
    }

    public function portfolio()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $pcategories = Pcategory::all();
        $portfolio = Portfolio::all();
        return view ('front.portfolio',compact('general','link','lpost','pcategories','portfolio'));
    }

    public function portfolioshow($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view ('front.portfolioshow',compact('general','link','lpost','portfolio'));
    }

    public function blog()
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $posts = Post::where('status','=','PUBLISH')->orderBy('id','desc')->paginate(3);
        $recent = Post::orderBy('id','desc')->limit(2)->get();
        $tags = Tag::all();

        return view ('front.blog',compact('categories','general','link','lpost','posts','recent','tags'));
    }

    public function blogshow($slug)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $post = Post::where('slug', $slug)->firstOrFail();
        $old = $post->views;
        $new = $old + 1;
        $post->views = $new;
        $post->update();
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::get();

        return view ('front.blogshow',compact('categories','general','link','lpost','post','recent','tags'));
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $posts = $category->posts()->latest()->paginate(6);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();
        return view ('front.blog',compact('categories','general','link','lpost','posts','recent','tags'));
    }

    public function tag(Tag $tag)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $posts = $tag->posts()->latest()->paginate(12);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();
        return view ('front.blog',compact('categories','general','link','lpost','posts','recent','tags'));
    }

    public function search()
    {

        $query = request("query");

        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $posts = Post::where("title","like","%$query%")->latest()->paginate(9);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();

        return view('front.blog',compact('categories','general','link','lpost','posts','query','recent','tags'));
    }

    public function page($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('front.page',compact('general','link','lpost','page'));
    }

    public function subscribe(Request $request)
    {
        \Validator::make($request->all(), [
            "email" => "required|unique:subscribers,email",
        ])->validate();

        $subs = new Subscriber();
        $subs->email = $request->email;
        if ( $subs->save()) {

            return redirect()->route('homepage')->with('success', 'You have successfully subscribed');

           } else {

            return redirect()->back();

           }
    }
     // Create Contact Form
    public function createform() {
        $general = General::find(1);
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        $link = Link::orderBy('name','asc')->get();
      return view('front.contact',compact('general','lpost','link'));
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);


         $input = $request->all();

            Contact::create($input);
        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('cgu@ruh.ac.lk', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);

    }

    public function job()
    {
        return view('front.job');
    }

    public function table(Request $request)
    {
        $companies = Company::filterByRequest($request)->paginate(9);


        return view('mainTable.search', compact('companies'));
    }

}
