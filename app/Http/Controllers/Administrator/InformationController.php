<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInformationRequest;
use App\Models\Information;

// use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index()
    {
        $info = Information::paginate(5);
        return view('admin.info.index', compact('info'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function store(CreateInformationRequest $request)
    {
        Information::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'working_hours' => $request->working_hours,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('info.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $info = Information::findOrFail($id);
        return view('admin.info.edit', compact('info'));
    }

    public function update(CreateInformationRequest $request, $id)
    {
        $info = Information::findOrFail($id);
        $info->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'working_hours' => $request->working_hours,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('info.index');
    }

    public function destroy($id)
    {
        Information::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('info.index');
    }

}
