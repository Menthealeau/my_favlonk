<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
            return view('test.index', ['category'=>Category::orderBy('name')->get(),'links'=>Links::get()]);
    }

    public function linksByCat(int $id)
    {
        if(Category::find($id))
        {
            $links = Category::find($id)->links;
            $category = Category::orderBy('name')->get();
            return view('test.index',compact('links','category','id'));
        }
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->update($request->all());

        return redirect()->route('category.index');

    }

    public function delete(int $id)
    {
        if(Category::find($id))
        {
            $category = Category::find($id);
            $category->delete();
        }
        return redirect(route('category.index'));
    }
}
