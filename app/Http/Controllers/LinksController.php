<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {

        $links = Links::get();

        return view('test.index',compact('links'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

           ]);
        if(!Links::where('link' ,'=', $request->title)->first())
        {


            $request->file('image')->storeAs('Image',$request->image->getClientOriginalName(),'local');
            $request->merge(array('image'=> $request->image->getClientOriginalName()));
            $data = $request->all();
            $data['image'] = $request->image->getClientOriginalName();
            Links::create($data);

        }
        return redirect(route('link.index'));
    }

    public function Delete($id){

        if(Links::find($id))
        {
            $link = Links::find($id);
            $link->delete();
        }
        return redirect(route('link.index'));
    }

    public function linkToUpdate($id){

        $linkToUpdate = Links::find($id);
        $links = Links::get();

            return view('test.index',compact('links', 'linkToUpdate'));

    }

    public function update(Request $request)
    {
        $link = Links::findOrFail($request->id);
        $link->update($request->all());

        return redirect()->route('link.index');
    }


}
