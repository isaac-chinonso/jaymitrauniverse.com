<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use App\Home;
use App\Impact;
use App\Journal;
use App\Profile;
use App\Publication;
use App\Position;

class PageController extends Controller
{
    public function index()
    {
        $data['home'] = Home::where('status', '=', 1)->get();
        return view('Frontend.index', $data);
    }

    public function gill()
    {
        return view('Frontend.gill');
    }

    public function about()
    {
        $data['profile'] = Profile::where('status', '=', 1)->first();
        $data['aboutcurrent'] = About::where('status', '=', 1)->where('id', '=', 1)->first();
        $data['aboutbackground'] = About::where('status', '=', 1)->where('id', '=', 2)->first();
        $data['aboutwriting'] = About::where('status', '=', 1)->where('id', '=', 3)->first();
        $data['aboutinterest'] = About::where('status', '=', 1)->where('id', '=', 4)->first();
        $data['about'] = About::where('status', '=', 1)->get();
        return view('Frontend.about', $data);
    }

    public function position()
    {
        $data['position1'] = Position::where('category', '=', 1)->where('status', '=', 1)->get();
        $data['position2'] = Position::where('category', '=', 2)->where('status', '=', 1)->get();
        $data['position3'] = Position::where('category', '=', 3)->where('status', '=', 1)->get();
        $data['position4'] = Position::where('category', '=', 4)->where('status', '=', 1)->get();
        $data['position5'] = Position::where('category', '=', 5)->where('status', '=', 1)->get();
        $data['position6'] = Position::where('category', '=', 6)->where('status', '=', 1)->get();
        $data['position7'] = Position::where('category', '=', 7)->where('status', '=', 1)->get();
        $data['position8'] = Position::where('category', '=', 8)->where('status', '=', 1)->get();
        $data['position9'] = Position::where('category', '=', 9)->where('status', '=', 1)->get();
        $data['profile'] = Profile::where('status', '=', 1)->first();
        return view('Frontend.position', $data);
    }

    public function publication()
    {
        $data['pbooks'] = Publication::where('status', '=', 1)->where('category_id', '=', 1)->get();
        $data['pchapters'] = Publication::where('status', '=', 1)->where('category_id', '=', 2)->get();
        $data['pseries'] = Publication::where('status', '=', 1)->where('category_id', '=', 3)->get();
        $data['particles'] = Publication::where('status', '=', 1)->where('category_id', '=', 4)->get();
        $data['ppapers'] = Publication::where('status', '=', 1)->where('category_id', '=', 5)->get();
        return view('Frontend.publication', $data);
    }

    public function impact()
    {
        $data['impactacademics'] = Impact::where('status', '=', 1)->where('category_id', '=', 1)->get();
        $data['impactindustry'] = Impact::where('status', '=', 1)->where('category_id', '=', 2)->get();
        $data['impactpublic'] = Impact::where('status', '=', 1)->where('category_id', '=', 3)->get();
        $data['impactexternal'] = Impact::where('status', '=', 1)->where('category_id', '=', 4)->get();
        $data['profile'] = Profile::where('status', '=', 1)->first();
        return view('Frontend.impact', $data);
    }

    public function journal()
    {
        $data['journalsection'] = Journal::where('status', '=', 1)->get();
        $data['profile'] = Profile::where('status', '=', 1)->first();
        return view('Frontend.journal', $data);
    }

    public function login()
    {
        return view('Frontend.login');
    }
}
