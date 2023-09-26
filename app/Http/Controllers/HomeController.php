<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $clients = Client::all();
        $services = Service::all();
        $portfolios = Portfolio::all();

        // $testimonial = Testimonial::all();
        // $client = Client::all();
        // $contact = Contact::first();
        return view('home.index', compact(
            'sliders',
            'about',
            'clients',
            'services',
            'portfolios',
        ));
    }
    public function about()
    {
        $about = About::first();
        $clients = Client::all();
        $teams = Team::all();
        return view('home.about', compact(
            'about',
            'clients',
            'teams',
        ));
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function portfolio()
    {
        return view('home.portfolio');
    }
    public function services()
    {
        return view('home.services');
    }
    public function team()
    {
        return view('home.team');
    }
    public function testimonis()
    {
        return view('home.testimonis');
    }
    public function faq()
    {
        return view('home.faq');
    }
}
