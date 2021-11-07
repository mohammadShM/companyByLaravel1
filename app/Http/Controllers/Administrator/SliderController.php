<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;

// use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $slider = Slider::paginate(5);
        return view('admin.slider.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(CreateSliderRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "Slider_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/slider', $image);
        }
        Slider::create([
            "image" => $image,
            "alt" => $request->alt,
            "title" => $request->title,
            "caption" => $request->caption,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('slider.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, $id)
    {
        $file = $request->file('image');
        $slider = Slider::findOrFail($id);
        // $image = "";
        if (!empty($file)) {
            $imageSlider = $slider->image;
            if (file_exists("images/slider/" . $imageSlider)) {
                unlink("images/slider/" . $imageSlider);
            }
            $image = "Slider_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/slider', $image);
        } else {
            $image = $slider->image;
        }
        $slider->update([
            "image" => $image,
            "alt" => $request->alt,
            "title" => $request->title,
            "caption" => $request->caption,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $imageSlider = $slider->image;
        if (file_exists("images/slider/" . $imageSlider)) {
            unlink("images/slider/" . $imageSlider);
        }
        Slider::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('slider.index');
    }

}
