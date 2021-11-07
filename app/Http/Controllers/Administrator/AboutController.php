<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
// use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(CreateAboutRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = "About_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/about', $image);
        }
        About::create([
            "image" => $image,
            "alt" => $request->alt,
            "title" => $request->title,
            "description" => $request->description,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('about.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $file = $request->file('image');
        $about = About::findOrFail($id);
        // $image = "";
        if (!empty($file)) {
            $imageAbout = $about->image;
            if (file_exists("images/about/" . $imageAbout)) {
                unlink("images/about/" . $imageAbout);
            }
            $image = "About_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/about', $image);
        } else {
            $image = $about->image;
        }
        $about->update([
            "image" => $image,
            "alt" => $request->alt,
            "title" => $request->title,
            "description" => $request->description,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('about.index');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $imageAbout = $about->image;
        if (file_exists("images/about/" . $imageAbout)) {
            unlink("images/about/" . $imageAbout);
        }
        About::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('about.index');
    }
}
