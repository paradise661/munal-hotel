<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Room;
use App\Models\Team;
use App\Models\Album;
use App\Models\Event;
use App\Models\Branch;
use App\Models\Course;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Success;
use App\Models\Settings;
use App\Models\Enquiries;
use App\Models\University;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use App\Models\DocumentImage;
use App\Models\ContactInquiry;
use App\Models\CountryLocation;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //
    public function home()
    {
        $sliders = Slider::where('status', 1)->oldest("order")->first();
        $about_us = Page::where('status', 1)->where('slug', 'about-us')->first();
        $why_choose_us = WhyChooseUs::where('status', 1)->first();
        $teams = Team::where('status', 1)->oldest("order")->get();
        $faq = Faq::where('status', 1)->limit(6)->get();

        $home_country = Settings::where('key', 'home_countries')->first();
        $countryIds = explode(',', $home_country->value);
        $countries = Country::whereIn('id', $countryIds)->where('status', 1)->get();

        $home_service = Settings::where('key', 'home_services')->first();
        $serviceIds = explode(',', $home_service->value);
        $services = Service::whereIn('id', $serviceIds)->where('status', 1)->get();

        $home_course = Settings::where('key', 'home_courses')->first();
        $courseIds = explode(',', $home_course->value);
        $courses = Course::whereIn('id', $courseIds)->where('status', 1)->get();

        $home_testimonial = Settings::where('key', 'home_testioninals')->first();
        $testimonialIds = explode(',', $home_testimonial->value);
        $testimonials = Testimonial::whereIn('id', $testimonialIds)->where('status', 1)->get();

        $home_blog = Settings::where('key', 'home_blogs')->first();
        $blogIds = explode(',', $home_blog->value);
        $blogs = Blog::whereIn('id', $blogIds)->where('status', 1)->get();
        $universities = University::where('status', 1)->oldest("order")->get();

        $abroadstudies = Country::where('status', 1)->oldest("order")->get();
        $rooms = Room::where('status', 1)->oldest("order")->limit(6)->get();


        $faq_page = Page::where('status', 1)->where('slug', 'faq')->first();
        // $members = Member::where('status', 1)->oldest("order")->get();

        return view('frontend.home.index', compact('sliders', 'faq_page',  'faq', 'abroadstudies', 'universities', 'courses', 'countries', 'blogs', 'services', 'about_us', 'why_choose_us', 'teams', 'testimonials', 'rooms'));
    }
    public function about()
    {
        $about_us = Page::where('status', 1)->where('slug', 'about-us')->first();
        $about_us_banner = Page::where('status', 1)->where('slug', 'about-us_banner')->first();
        $our_vision = Page::where('status', 1)->where('slug', 'our-vision')->first();
        $our_mission = Page::where('status', 1)->where('slug', 'our-mission')->first();
        $why_us = Page::where('status', 1)->where('slug', 'why-choose-us')->first();
        $commitment = Page::where('status', 1)->where('slug', 'commitment-to-sustainability')->first();
        $teams = Team::where('status', 1)->oldest("order")->get();
        $objectives = Page::where('status', 1)->where('slug', 'objectives')->first();
        $services = Service::where('status', 1)->oldest("order")->get();
        return view('frontend.about.index', compact('about_us', 'commitment', 'objectives', 'services', 'our_vision', 'our_mission', 'why_us', 'teams'));
    }
    public function service()
    {
        $service_page = Page::where('status', 1)->where('slug', 'service')->first();
        $services = Service::where('status', 1)->oldest("order")->get();
        return view('frontend.service.index', compact('service_page', 'services'));
    }
    function servicesingle($slug)
    {
        $service_page = Page::where('status', 1)->where('slug', 'service')->first();
        $servicesingle = Service::where('slug', $slug)->where('status', 1)->first();
        $services = Service::where('status', 1)->oldest("order")->get();

        return view('frontend.service.show', compact('servicesingle', 'services', 'service_page'));
    }
    public function event()
    {
        $event_page = Page::where('status', 1)->where('slug', 'event')->first();
        $events = Event::where('status', 1)->oldest("order")->get();

        return view('frontend.event.index', compact('event_page', 'events'));
    }
    function eventsingle($slug)
    {
        $event_page = Page::where('status', 1)->where('slug', 'event')->first();
        $eventsingle = Event::where('slug', $slug)->where('status', 1)->first();
        $popular_events = Event::where('status', 1)->take(5)->get();
        return view('frontend.event.show', compact('eventsingle', 'event_page', 'popular_events'));
    }
    function abroadstudies()
    {
        $abroad_page = Page::where('status', 1)->where('slug', 'abroad-studies')->first();
        $abroadstudies = Country::where('status', 1)->oldest("order")->get();
        $rooms = Room::where('status', 1)->oldest('order')->get();
        return view('frontend.room.index', compact('abroadstudies', 'abroad_page', 'rooms'));
    }
    function abroadstudiesingle($slug)
    {
        $abroad_page = Page::where('status', 1)->where('slug', 'abroad-studies')->first();
        $roomsingle = Room::where('slug', $slug)->where('status', 1)->first();
        $faq = Faq::where('status', 1)->get();
        // $universities = University::where('country_id', $abroadstudiesingle->id)->where('status', 1)->oldest("order")->get();
        if ($roomsingle) {
            $roomsingle->save();
            $rooms = Room::where('id', '!=', $roomsingle->id)->where('status', 1)->oldest("order")->limit(3)->get();
        }
        return view('frontend.room.show', compact('roomsingle', 'rooms', 'faq', 'abroad_page'));
    }
    function course()
    {
        $course_page = Page::where('status', 1)->where('slug', 'Ameenties')->first();
        $amenities = Course::get();
        $serenity_spa_wellness = Page::where('status', 1)->where('slug', 'serenity-spa-wellness')->first();
        $complete_amenities = Member::where('status', 1)->oldest("order")->get();

        return view('frontend.amenities.index', compact('amenities', 'complete_amenities', 'course_page', 'serenity_spa_wellness'));
    }
    function coursesingle($slug)
    {
        $course_page = Page::where('status', 1)->where('slug', 'course')->first();
        $coursesingle = Course::where('slug', $slug)->where('status', 1)->first();
        if ($coursesingle) {
            $coursesingle->save();
            $courses = Course::where('id', '!=', $coursesingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
            return view("frontend.amenities.show", compact('courses', 'coursesingle', 'course_page'));
        }
    }
    function blog()
    {
        $blog_page = Page::where('status', 1)->where('slug', 'blog')->first();
        $blog = Blog::where('status', 1)->limit(3)->oldest("order")->get();
        return view('frontend.blog.index', compact('blog', 'blog_page'));
    }
    function blogsingle($slug)
    {
        $blog_page = Page::where('status', 1)->where('slug', 'blog')->first();
        $abroadstudies = Country::where('status', 1)->limit(3)->oldest("order")->get();
        $blogsingle = Blog::where('slug', $slug)->where('status', 1)->first();

        if ($blogsingle) {
            $blogsingle->views += 1;
            $blogsingle->save();
            $blogs = Blog::where('id', '!=', $blogsingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
            return view("frontend.blog.show", compact('blogs', 'blogsingle', 'blog_page', 'abroadstudies'));
        }
    }
    public function dinning()
    {
        $dinning_page = Page::where('status', 1)->where('slug', 'dinning')->first();
        $dinning = WhyChooseUs::where('status', 1)->oldest("order")->get();

        return view('frontend.dinning.index', compact('dinning_page', 'dinning'));
    }
    function dinningsingle($slug)
    {
        // $event_page = Page::where('status', 1)->where('slug', 'event')->first();
        // $eventsingle = Event::where('slug', $slug)->where('status', 1)->first();
        // $popular_events = Event::where('status', 1)->take(5)->get();
        // return view('frontend.dinning.show', compact('eventsingle', 'event_page','popular_events'));
    }
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.pages.index', compact('page'));
    }
    function team()
    {
        $team_page = Page::where('status', 1)->where('slug', 'our-team')->first();
        $teams = Team::where('status', 1)->oldest("order")->get() ?? [];
        return view('frontend.team', compact('teams', 'team_page'));
    }
    function testimonial()
    {
        $testimonial_page = Page::where('status', 1)->where('slug', 'testimonial')->first();
        $testimonial = Testimonial::where('status', 1)->latest('order')->get() ?? [];
        return view('frontend.testimonial', compact('testimonial', 'testimonial_page'));
    }
    function gallery()
    {
        $gallery_page = Page::where('status', 1)->where('slug', 'testimonial')->first();
        $gallery = Gallery::get();
        return view('frontend.gallery', compact('gallery', 'gallery_page'));
    }
    function studentvoice()
    {
        $gallery_page = Page::where('status', 1)->where('slug', 'testimonial')->first();

        return view('frontend.studentvoice', compact('gallery_page'));
    }
    function visagrantes()
    {
        $gallery_page = Page::where('status', 1)->where('slug', 'gallery')->first();
        $visagranted = Success::get() ?? [];
        $albums = Album::with('galleries')
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->get();
        // dd($albums);
        return view('frontend.gallery.index', compact('visagranted', 'gallery_page', 'albums'));
    }
    function messagefromfounder()
    {
        $message_page = Page::where('status', 1)->where('slug', 'message-from-ceo')->first();
        $message_from_founder_1 = Page::where('status', 1)->where('slug', 'message-from-director')->first();
        $message_from_founder_2 = Page::where('status', 1)->where('slug', 'message-from-founder-2')->first();
        return view('frontend.messagefromceo', compact('message_page', 'message_from_founder_1', 'message_from_founder_2'));
    }
    function messagefromdirector()
    {
        $message_page_director = Page::where('status', 1)->where('slug', 'message-from-director')->first();

        return view('frontend.messagefromdirector', compact('message_page_director'));
    }
    function interviewquestion()
    {
        $interviewquestion = Page::where('status', 1)->where('slug', 'interview-questions')->first();

        return view('frontend.interviewquestion', compact('interviewquestion'));
    }
    public function contact()
    {
        $contact_page = Page::where('status', 1)->where('slug', 'contact-us')->first();
        $branches = Branch::where('status', 1)->orderBy('order')->get();
        return view('frontend.contact.index', compact('branches', 'contact_page'));
    }

    public function contact_submite(Request $request)
    {
        //
        $input = $request->all();
        // dd($input);
        $rules = [
            'name' => 'required|min:3',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        // Create a new Inquiry instance with the validated data
        ContactInquiry::create($input);
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
    public function contact_submite_home(Request $request)
    {
        //
        $input = $request->all();
        // dd($input);
        $rules = [
            'name' => 'required|min:3',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        // Create a new Inquiry instance with the validated data
        ContactInquiry::create($input);
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
    function stregister()
    {
        $register_banner = Page::where('status', 1)->where('slug', 'register')->first();
        return view("frontend.booknow.index", compact('register_banner'));
    }
    public function registerstudent(Request $request)
    {
        $rules = [
            'room_type' => 'required|string|max:100',

            'checkin_date' => 'required|date|after_or_equal:today',
            'checkout_date' => 'required|date|after:checkin_date',

            'adults' => 'required|integer|min:1|max:10',
            'children' => 'nullable|integer|min:0|max:10',

            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',

            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',

            'special_request' => 'nullable|string|max:1000',

            'add_ons' => 'nullable|array',
            'add_ons.*' => 'string|max:100',
        ];

        $validated = $request->validate($rules);

        Booking::create($validated);

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
