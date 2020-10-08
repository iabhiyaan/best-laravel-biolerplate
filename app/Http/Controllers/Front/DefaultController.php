<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Pillar;
use App\Models\Team;
use App\Models\Video;
use Mail;

class DefaultController extends Controller
{
    protected $pillar;
    protected $course;
    protected $team;
    protected $alumni;
    protected $blog;
    protected $gallery;
    protected $video;
    protected $page;

    public function __construct(Pillar $_pillar, Course $_course, Team $_team, Alumni $_alumni, Blog $_blog, Gallery $_gallery, Video $_video, Page $_page)
    {
        $this->pillar = $_pillar;
        $this->course = $_course;
        $this->team = $_team;
        $this->alumni = $_alumni;
        $this->blog = $_blog;
        $this->gallery = $_gallery;
        $this->video = $_video;
        $this->page = $_page;
    }
    public function index()
    {
        $datas['pillars'] = $this->pillar->latest()->get();
        $datas['courses'] = $this->course->latest()->get();
        $datas['teams'] = $this->team->latest()->get();
        $datas['alumnis'] = $this->alumni->latest()->get();
        $datas['blogs'] = $this->blog->latest()->where('publish', 1)->get();

        return view('front.index', $datas);
    }

    public function blogList()
    {
        try {
            $details = $this->blog->latest()->where('publish', 1)->get();
            if (is_null($details)) {
                abort('404');
            } else {
                return view('front.blog.list', compact('details'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function blogInner($slug)
    {
        try {
            $detail = $this->blog->latest()->where('publish', 1)->where('slug', $slug)->first();

            $relatedBlogs = $this->blog->latest()->where('publish', 1)->where('slug', '!=', $slug)->inRandomOrder()->take(5)->get();

            return view('front.blog.details', compact('detail', 'relatedBlogs'));
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function courseList()
    {
        try {
            $courses = $this->course->latest()->get();
            if (is_null($courses)) {
                abort('404');
            } else {
                return view('front.course.list', compact('courses'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function courseInner($slug)
    {
        try {
            $detail = $this->course->latest()->where('slug', $slug)->first();

            $relatedcourses = $this->course->latest()->where('slug', '!=', $slug)->inRandomOrder()->take(5)->get();

            return view('front.course.details', compact('detail', 'relatedcourses'));
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function galleryList()
    {
        try {
            $details = $this->gallery->latest()->where('published', '1')->get();
            if (is_null($details)) {
                abort('404');
            } else {
                return view('front.gallery.list', compact('details'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function galleryInner($slug)
    {
        try {
            $detail = $this->gallery->latest()->where('slug', $slug)->with('imagegallery')->first();
            $galleryImages = $detail->imagegallery;
            return view('front.gallery.details', compact('detail', 'galleryImages'));
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function teamList()
    {
        try {
            $teams = $this->team->latest()->get();
            if (is_null($teams)) {
                abort('404');
            } else {
                return view('front.team.list', compact('teams'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function teamDetail($slug)
    {
        try {
            $detail = $this->team->latest()->where('slug', $slug)->first();

            $otherteams = $this->team->latest()->where('slug', '!=', $slug)->inRandomOrder()->take(5)->get();
            return view('front.team.detail', compact('detail', 'otherteams'));
        } catch (\Exception $e) {
            abort('404');
        }
    }
    public function videoList()
    {
        try {
            $details = $this->video->latest()->get();
            if (is_null($details)) {
                abort('404');
            } else {
                return view('front.video', compact('details'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function dynamicPages($slug)
    {
        //for contact us
        if ($slug == 'contact-us') {
            return view('front.pages.contactus');
            die;
        }
        //for about us
        if ($slug == 'about-us') {
            try {
                $detail = $this->page->where('slug', $slug)->where('published', 1)->first();
                $relatedBlogs = $this->blog->latest()->where('publish', 1)->get();
                return view('front.pages.aboutus', compact('detail', 'relatedBlogs'));
                die;
            } catch (\Exception $ae) {
                abort('404');
            }
        }

        try {
            $detail = $this->page->where('slug', $slug)->where('published', 1)->first();
            $relatedBlogs = $this->blog->latest()->where('publish', 1)->get();

            if (is_null(@$detail)) {
                abort('404');
            } else {
                return view('front.pages.automatic', compact('detail', 'relatedBlogs'));
            }
        } catch (\Exception $e) {
            abort('404');
        }
    }

    public function saveEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $formData = $request->all();
        \App\Models\Contactus::create($formData);
        $data = [
            'email' => $request->email,
            'body_message' => $request->message,
            'name' => $request->name,
            'subject' => $request->subject,
        ];
        // Mail::send('email.contactTemplate', $data, function ($message) use ($data, $request) {
        //     $message->to('iabhiyaan@gmail.com')->from($data['email'], $data['name']);
        //     $message->subject($data['subject']);
        // });

        return redirect()->back()->with('message', 'Message Send Successfully.');
    }

    public function saveSubscribers(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $data = $request->all();
        \App\Models\Subscriber::create($data);
        return redirect()->back()->with('message', 'Subscribed!!! Successfully.');
    }
}
