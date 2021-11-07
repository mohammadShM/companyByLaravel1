<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSocialRequest;
use App\Models\Social;

// use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::paginate(5);
        return view('admin.social.index', compact('social'));
    }

    public function create()
    {
        return view('admin.social.create');
    }

    public function store(CreateSocialRequest $request)
    {
        Social::create([
            'telegram' => $request->telegram,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('social.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $social = Social::findOrFail($id);
        return view('admin.social.edit', compact('social'));
    }

    public function update(CreateSocialRequest $request, $id)
    {
        $social = Social::findOrFail($id);
        $social->update([
            'telegram' => $request->telegram,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('social.index');
    }

    public function destroy($id)
    {
        Social::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('social.index');
    }

}
