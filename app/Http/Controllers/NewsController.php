<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        $categories = Category::all();

        $categoryId = $request->input('category_id');
        if($categoryId) {
            $news = News::where('category_id', $categoryId)->get();
        } else {
            $news = News::all();
        }

        return view('news.index', compact('categories', 'news'));

    }

    public function view(int $id)
    {
        $news = News::findorFail($id);

        return view ('news.view',[
            'news' => $news,
        ]);
    }

    public function createForm()
    {
        $categories = Category::all();

        return view('news.create-form', compact('categories'));
    }

    public function createProcess(Request $request){

        $request->validate([
            'title' => 'required',
            'resume' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'description_image' => 'required',
        ]);

        $input = $request->only(['title', 'resume', 'content', 'image', 'description_image', 'category_id', 'url']);

        if($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('imgs');

            Image::read(\Storage::path($input['image']))->coverDown(1000,1000)->save();
        }
        News::create($input);

        return redirect()
            ->route('news.index')
            ->with('feedback.message', 'El articulo se publicó con éxito.');
    }

    public function editForm(int $id)
    {
        $categories = Category::all();

        return view('news.edit-form', compact('categories'), [
            'news' => News::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'resume' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'description_image' => 'required',
        ]);

        $input = $request->only(['title', 'resume', 'content', 'image', 'description_image', 'category_id', 'url']);

        $news = News::findOrFail($id);

        $oldImage = $news->image;

        if($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('imgs');

            Image::read(\Storage::path($input['image']))->coverDown(1000,1000)->save();
        }

        $news->update($input);

        if($request->hasFile('image') && $oldImage !== null && \Storage::exists($oldImage)) {
            \Storage::delete($oldImage);
        }

        return redirect()
            ->route('news.index')
            ->with('feedback.message', 'El articulo se editó con éxito.');
    }

    public function deleteForm(int $id)
    {
        return view('news.delete-form', [
            'news' => News::findOrFail($id),
        ]);
    }

    public function deleteProcess(int $id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        if($news->image !== null && \Storage::exists($news->image)) {
            \Storage::delete($news->image);
        }

        return redirect()
            ->route('news.index')
            ->with('feedback.message', 'El articulo se eliminó con éxito.');
    }
}
