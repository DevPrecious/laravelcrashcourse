<?php

namespace App\Http\Controllers;

use App\Models\ListData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return '<h1> About US </h1>';
    }

    public function contact()
    {
        return '<h1> Contact US </h1>';
    }

    public function profile($username)
    {
        return '<h1>Welcome ' . $username . '</h1>';
    }

    public function insert(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        ListData::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Post Created');

        // $list = new ListData();
        // $list->title = 'Hello new method';
        // $list->content = 'Hello new method content';

        // $list->save();
    }

    public function read()
    {
        $lists = ListData::latest()->get();

        return view('index', compact('lists'));
    }

    public function single(ListData $listdata)
    {
        // $list = ListData::findOrFail($id);
        // // select * from list_data where id = $id
        // echo $list->title;

        return view('single', compact('listdata'));
    }

    public function updateView(ListData $listdata)
    {
        return view('update', compact('listdata'));
    }

    public function update(ListData $listdata, Request $request)
    {
        // ListData::where('id', $id)->update([
        //     'title' => 'Hello world updated',
        //     'content' => 'Hello world content updated',
        // ]);

        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        $listdata->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('read')->with('success', 'Post updated');
    }

    public function delete(ListData $listdata)
    {
        $listdata->delete();

        return back();
    }
}
