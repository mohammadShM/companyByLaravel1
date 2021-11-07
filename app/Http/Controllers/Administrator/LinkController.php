<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLinkRequest;
use App\Models\Link;

// use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function index()
    {
        $link = Link::paginate(5);
        return view('admin.link.index', compact('link'));
    }

    public function create()
    {
        return view('admin.link.create');
    }

    public function store(CreateLinkRequest $request)
    {
        Link::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('link.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $link = Link::findOrFail($id);
        return view('admin.link.edit', compact('link'));
    }

    public function update(CreateLinkRequest $request, $id)
    {
        $link = Link::findOrFail($id);
        $link->update([
            'name' => $request->name,
            'link' => $request->link,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('link.index');
    }

    public function destroy($id)
    {
        Link::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('link.index');
    }

}
