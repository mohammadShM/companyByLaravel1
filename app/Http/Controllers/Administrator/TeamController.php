<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

// use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index()
    {
        $team = Team::paginate(5);
        return view('admin.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(CreateTeamRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "Team_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/team', $image);
        }
        Team::create([
            "image" => $image,
            "alt" => $request->alt,
            "fullName" => $request->fullName,
            "job" => $request->job,
            "linkedin" => $request->linkedin,
            "telegram" => $request->telegram,
            "instagram" => $request->instagram,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('team.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        $file = $request->file('image');
        $team = Team::findOrFail($id);
        // $image = "";
        if (!empty($file)) {
            $imageTeam = $team->image;
            if (file_exists("images/team/" . $imageTeam)) {
                unlink("images/team/" . $imageTeam);
            }
            $image = "Team_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/team', $image);
        } else {
            $image = $team->image;
        }
        $team->update([
            "image" => $image,
            "alt" => $request->alt,
            "fullName" => $request->fullName,
            "job" => $request->job,
            "linkedin" => $request->linkedin,
            "telegram" => $request->telegram,
            "instagram" => $request->instagram,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('team.index');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $imageTeam = $team->image;
        if (file_exists("images/team/" . $imageTeam)) {
            unlink("images/team/" . $imageTeam);
        }
        Team::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('team.index');
    }

}
