<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Impact;
use App\Journal;
use App\Position;
use App\Profile;
use App\Publication;

class PostController extends Controller
{
    // Save Home
    public function savehome(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        // Save Record into Home DB
        $home = new Home();
        $home->title = $request->input('title');
        $home->content = $request->input('content');
        $home->status = 1;
        $home->save();

        \Session::flash('Success_message', 'Posted Successfully');

        return back();
    }

    // Update Home function
    public function updatehomecontent(Request $request, $id)
    {
        $homeedit = Home::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'content' => 'required',
        ));

        $homeedit->title = $request->input('title');

        $homeedit->content = $request->input('content');

        $homeedit->save();

        \Session::flash('Success_message', '✔ Content Updated Successfully');

        return redirect()->route('home');
    }


    // Delete Home Content
    public function deletehomecontent($id)
    {
        $home = Home::where('id', $id)->first();
        $home->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Content');

        return back();
    }

    // Save Profile Function
    public function saveprofile(Request $request, $id)
    {
        $profile = Profile::find($id);
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'bio' => 'required',
        ]);

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->facebookurl = $request->input('facebookurl');
        $profile->linkedinurl = $request->input('linkedinurl');
        $profile->bio = $request->input('bio');
        $profile->save();

        \Session::flash('Success_message', '✔ Profile Updated Successfully');

        return back();
    }

    // Save About Function
    public function saveabout(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        // Save Record into About DB
        $about = new About();
        $about->title = $request->input('title');
        $about->content = $request->input('content');
        $about->status = 1;
        $about->save();

        \Session::flash('Success_message', 'Posted Successfully');

        return back();
    }

    // Update About function
    public function updateaboutcontent(Request $request, $id)
    {
        $aboutedit = About::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'content' => 'required',
        ));

        $aboutedit->title = $request->input('title');

        $aboutedit->content = $request->input('content');

        $aboutedit->save();

        \Session::flash('Success_message', '✔ Content Updated Successfully');

        return redirect()->route('about');
    }

    // Delete About Content
    public function deleteaboutcontent($id)
    {
        $about = About::where('id', $id)->first();
        $about->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Content');

        return back();
    }

    // Save Journal
    public function savejournal(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',

        ]);

        // Save Record into Journal DB
        $journal = new Journal();
        $journal->title = $request->input('title');
        $journal->status = 1;
        $journal->save();

        \Session::flash('Success_message', 'Posted Successfully');

        return back();
    }

    // Delete Journal
    public function deletejournal($id)
    {
        $journal = Journal::where('id', $id)->first();
        $journal->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Journal');

        return back();
    }

    // Update Journal function
    public function updatejournal(Request $request, $id)
    {
        $editjournal = Journal::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
        ));

        $editjournal->title = $request->input('title');

        $editjournal->save();

        \Session::flash('Success_message', '✔ Journal Updated Successfully');

        return redirect()->route('journal');
    }

    // Save Publication Function
    public function savepublication(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'content' => 'required',

        ]);

        // Save Record into Publication DB
        $condition = $request['category_id'];
        foreach ($condition as $key => $condition) {
            $publication = new Publication();
            $publication->category_id = $request['category_id'][$key];
            $publication->content = $request['content'][$key];
            $publication->status = 1;
            $publication->save();
        };

        \Session::flash('Success_message', 'Publication Added Successfully');

        return redirect()->route('publication');
    }

    // Delete Publication
    public function deletepublication($id)
    {
        $publication = Publication::where('id', $id)->first();
        $publication->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Publication');

        return back();
    }

    // Update Publication function
    public function updatepublication(Request $request, $id)
    {
        $editpub = Publication::find($id);
        // Validation
        $this->validate($request, array(
            'category_id' => 'required',
            'content' => 'required',
        ));

        $editpub->category_id = $request->input('category_id');

        $editpub->content = $request->input('content');

        $editpub->save();

        \Session::flash('Success_message', '✔ Publication Updated Successfully');

        return redirect()->route('publication');
    }

    // Save Impact Activities Function
    public function saveimpact(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'activity' => 'required',

        ]);

        // Save Record into Impact Activities DB
        $condition = $request['category_id'];
        foreach ($condition as $key => $condition) {
            $impact = new Impact();
            $impact->category_id = $request['category_id'][$key];
            $impact->activity = $request['activity'][$key];
            $impact->status = 1;
            $impact->save();
        };

        \Session::flash('Success_message', 'Activities Added Successfully');

        return redirect()->route('impact');
    }

    // Delete Impact Activities
    public function deleteimpact($id)
    {
        $delimpact = Impact::where('id', $id)->first();
        $delimpact->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Activities');

        return back();
    }

    // Update Impact Activities function
    public function updateimpact(Request $request, $id)
    {
        $editimpact = Impact::find($id);
        // Validation
        $this->validate($request, array(
            'category_id' => 'required',
            'activity' => 'required',
        ));

        $editimpact->category_id = $request->input('category_id');

        $editimpact->activity = $request->input('activity');

        $editimpact->save();

        \Session::flash('Success_message', '✔ Activity Updated Successfully');

        return redirect()->route('impact');
    }

    // Save Position
    public function saveposition(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category' => 'required',
            'position' => 'required',

        ]);

        // Save Record into Position DB
        $positions = new Position();
        $positions->category = $request->input('category');
        $positions->position = $request->input('position');
        $positions->status = 1;
        $positions->save();

        \Session::flash('Success_message', 'Added Successfully');

        return back();
    }

    // Update positions function
    public function updateposition(Request $request, $id)
    {
        $editposition = Position::find($id);
        // Validation
        $this->validate($request, array(
            'category' => 'required',
            'position' => 'required',
        ));

        $editposition ->category = $request->input('category');

        $editposition ->position = $request->input('position');

        $editposition ->save();

        \Session::flash('Success_message', '✔ Position Updated Successfully');

        return back();
    }

    // Delete Position
    public function deleteposition($id)
    {
        $delposition = Position::where('id', $id)->first();
        $delposition->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted this Position');

        return back();
    }
}
