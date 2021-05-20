<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\Category;
use Illuminate\Http\Request;

class LinksController extends Controller
{

    private $category;

    public function __construct()
    {
        $this->category = Category::orderBy('name')->get();
    }

    public function store(Request $request)
    {


        if(!Links::where('link' ,'=', $request->title)->first())
        {

            $this->saveImage($request);
            $idcat = Category::where('name', '=', $request->category)->first()->id;
            $request->merge(array('category_id'=>$idcat));
            $data = $request->all();
            $data['image'] = $request->image->getClientOriginalName();

            Links::create($data);

        }
        return redirect(route('category.index'));
    }

    public function Delete($id){

        if(Links::find($id))
        {
            $link = Links::find($id);
            $link->delete();
        }
        return redirect(route('category.index'));
    }

    public function linkToUpdate($id){



        $linkToUpdate = Links::find($id);
        $categoryLink = Category::where('id', '=', $linkToUpdate->category_id)->first()->name;
        $links = Links::get();
        $category = $this->category;
        $listCategory = $this->sortCategory($categoryLink);
            return view('test.index',compact('links', 'linkToUpdate','category','listCategory'));

    }

    public function update(Request $request)
    {
        $link = Links::findOrFail($request->id);

        $idcat = Category::where('name', '=', $request->category)->first()->id;
        $request->merge(array('category_id'=>$idcat));
        $this->saveImage($request);
        $data = $request->all();
        $data['image'] = $request->image->getClientOriginalName();
        $link->update($data);

        return redirect()->route('category.index');
    }

    public function sortCategory ($linkCategory)
    {
        $array[0] = $linkCategory;
        foreach($this->category as $cat)
        {


            if($cat->name !== $linkCategory)
            {
                array_push($array, $cat->name);
            }
        }
        return $array;
    }

    public static function saveImage(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

           ]);

           $request->file('image')->storeAs('Image',$request->image->getClientOriginalName(),'local');
           $request->merge(array('image'=> $request->image->getClientOriginalName()));



    }


}
