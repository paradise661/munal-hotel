<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Member;
use App\Models\Page;
use App\Models\Team;
use App\Models\Branch;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Country;
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
use App\Models\Event;
use App\Models\Gallery;
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
       

        $faq_page = Page::where('status', 1)->where('slug', 'faq')->first();
        // $members = Member::where('status', 1)->oldest("order")->get();

        return view('frontend.home.index', compact('sliders','faq_page',  'faq', 'abroadstudies', 'universities', 'courses', 'countries', 'blogs', 'services', 'about_us', 'why_choose_us', 'teams', 'testimonials'));
    }
    public function about()
    {
        $about_us = Page::where('status', 1)->where('slug', 'about-us')->first();
        $our_vision = Page::where('status', 1)->where('slug', 'our-vision')->first();
        $our_mission = Page::where('status', 1)->where('slug', 'our-mission')->first();
        $why_us = Page::where('status', 1)->where('slug', 'why-choose-us')->first();
        $teams = Team::where('status', 1)->oldest("order")->get();
        $objectives = Page::where('status', 1)->where('slug', 'objectives')->first();
        return view('frontend.about.index', compact('about_us','objectives','our_vision','our_mission', 'why_us', 'teams'));
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
        return view('frontend.event.show', compact('eventsingle', 'event_page','popular_events'));
    }
    function abroadstudies()
    {
        $abroad_page = Page::where('status', 1)->where('slug', 'abroad-studies')->first();
        $abroadstudies = Country::where('status', 1)->oldest("order")->get();
        return view('frontend.abroad.index', compact('abroadstudies', 'abroad_page'));
    }
    function abroadstudiesingle($slug)
    {
        $abroad_page = Page::where('status', 1)->where('slug', 'abroad-studies')->first();
        $abroadstudiesingle = Country::where('slug', $slug)->where('status', 1)->first();
        $faq = Faq::where('status', 1)->get();
        $universities = University::where('country_id', $abroadstudiesingle->id)->where('status', 1)->oldest("order")->get();
        if ($abroadstudiesingle) {
            $abroadstudiesingle->save();
            $abroads = Country::where('id', '!=', $abroadstudiesingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
           
        }
        return view('frontend.abroad.show', compact('abroadstudiesingle','abroads','faq', 'abroad_page', 'universities'));
    }
    function course()
    {
        $course_page = Page::where('status', 1)->where('slug', 'course')->first();
        $courses = Course::get();
        return view('frontend.course.index', compact('courses', 'course_page'));
    }
    function coursesingle($slug)
    {
        $course_page = Page::where('status', 1)->where('slug', 'course')->first();
        $coursesingle = Course::where('slug', $slug)->where('status', 1)->first();
        if ($coursesingle) {
            $coursesingle->save();
            $courses = Course::where('id', '!=', $coursesingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
            return view("frontend.course.show", compact('courses', 'coursesingle', 'course_page'));
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
        $visagrantes_page = Page::where('status', 1)->where('slug', 'gallery')->first();
        $visagranted = Success::get() ?? [];
        return view('frontend.visagrant', compact('visagranted', 'visagrantes_page'));
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
        return view("frontend.register", compact('register_banner'));
    }
    public function registerstudent(Request $request)
    {
        $input = $request->all();

        $rules = [
            // Basic Info
            'full_name' => 'required|string|max:255',
            'dob' => 'required',

            // Academic Qualification
            'qualification' => 'required|string|max:255',
            'see_school_name' => 'nullable|string|max:255',
            'see_gpa' => 'nullable|string|max:255',
            'see_passed_year' => 'nullable|string|max:255',
            'plus_two_college_name' => 'nullable|string|max:255',
            'plus_two_gpa' => 'nullable|string|max:255',
            'plus_two_passed_year' => 'nullable|string|max:255',
            'bachelor_college_name' => 'nullable|string|max:255',
            'bachelor_gpa' => 'nullable|string|max:255',
            'bachelor_passed_year' => 'nullable|string|max:255',
            'master_college_name' => 'nullable|string|max:255',
            'master_gpa' => 'nullable|string|max:255',
            'master_passed_year' => 'nullable|string|max:255',

            // Additional Info
            'marital_status' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required',
            'email' => 'required|email|max:255',
            'phone2' => 'nullable|string|max:255',

            // Guardian Info
            'parents_name' => 'required|string|max:255',
            'g_address' => 'required|string|max:255',
            'g_mobile' => 'required|string|max:255',
            'g_email' => 'nullable|email|max:255',

            // Other Details
            'preferred_country' => 'required|string|max:255',
            'language_test' => 'required|string|max:255',
            'test_type' => 'nullable|string|max:255',
            'test_score' => 'nullable|string|max:255',
            'preferred_education' => 'required|string|max:255',
            'preferred_institution_name' => 'nullable|string|max:255',
            'source' => 'required|array',
            'message' => 'nullable|string',

            // File Uploads
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            // return redirect()->route("frontend.register")->withInput()->withErrors($validator);
        } else {
            // Convert the 'dob' field from dd-mm-yyyy to yyyy-mm-dd format
            // $input['dob'] = Carbon::createFromFormat('d-m-Y', $input['dob'])->format('Y-m-d');

            // Convert the source array to a JSON string
            $input['source'] = json_encode($input['source']);

            $enquiry = Enquiries::create($input);
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('enquiry_document_images', 'public');
                }
            }

            return redirect()->back()->with('success', 'Registration successful!');
        }
    }
}
