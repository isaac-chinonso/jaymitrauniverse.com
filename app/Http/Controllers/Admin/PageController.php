<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Analytics;
use App\About;
use App\Home;
use App\Impact;
use App\Journal;
use App\Profile;
use App\Publication;
use App\Position;
use Spatie\Analytics\Period;

class PageController extends Controller
{
    public function dashboard()
    {
        $data['journals'] = Journal::where('status', '=', 1)->count();
        $data['publications'] = Publication::where('status', '=', 1)->count();
        $data['impacts'] = Impact::where('status', '=', 1)->count();
        $data['positions'] = Position::where('status', '=', 1)->count();
        return view('Admin.index', $data);
    }

    public function home()
    {
        $data['homesection'] = Home::where('status', '=', 1)->get();
        return view('Admin.home', $data);
    }

    public function homedetails($id)
    {
        $data['homesectiondetails'] = Home::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.homedetails', $data);
    }

    public function homeedit($id)
    {
        $data['homeedit'] = Home::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.edithome', $data);
    }

    public function about()
    {
        $data['aboutsection'] = About::where('status', '=', 1)->get();
        $data['profilesection'] = Profile::where('status', '=', 1)->first();
        return view('Admin.about', $data);
    }

    public function aboutdetails($id)
    {
        $data['aboutsectiondetails'] = About::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.aboutdetails', $data);
    }

    public function aboutedit($id)
    {
        $data['aboutedit'] = About::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.editabout', $data);
    }

    public function journal()
    {
        $data['journalsection'] = Journal::where('status', '=', 1)->get();
        return view('Admin.journal', $data);
    }

    public function editjournal($id)
    {
        $data['editjournal'] = Journal::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.editjournal', $data);
    }

    public function publication()
    {
        $data['pbooks'] = Publication::where('status', '=', 1)->where('category_id', '=', 1)->get();
        $data['pchapters'] = Publication::where('status', '=', 1)->where('category_id', '=', 2)->get();
        $data['pseries'] = Publication::where('status', '=', 1)->where('category_id', '=', 3)->get();
        $data['particles'] = Publication::where('status', '=', 1)->where('category_id', '=', 4)->get();
        $data['ppapers'] = Publication::where('status', '=', 1)->where('category_id', '=', 5)->get();
        return view('Admin.publication', $data);
    }

    public function addpublication()
    {
        return view('Admin.addpublication');
    }

    public function editpublication($id)
    {
        $data['editpbooks'] = Publication::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.editpublication', $data);
    }

    public function impact()
    {
        $data['impactacademics'] = Impact::where('status', '=', 1)->where('category_id', '=', 1)->get();
        $data['impactindustry'] = Impact::where('status', '=', 1)->where('category_id', '=', 2)->get();
        $data['impactpublic'] = Impact::where('status', '=', 1)->where('category_id', '=', 3)->get();
        $data['impactexternal'] = Impact::where('status', '=', 1)->where('category_id', '=', 4)->get();
        return view('Admin.impactactivites', $data);
    }

    public function addimpact()
    {
        return view('Admin.addimpact');
    }

    public function editimpact($id)
    {
        $data['editimpact'] = Impact::where('status', '=', 1)->where('id', $id)->first();
        return view('Admin.editimpact', $data);
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
        return view('Admin.position', $data);
    }
}
