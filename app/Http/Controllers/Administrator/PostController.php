<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

//use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::paginate(5);
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(CreatePostRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "Post_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/post', $image);
        }
        Post::create([
            "image" => $image,
            'alt' => $request->alt,
            'subject' => $request->subject,
            'body' => $request->body,
            'title' => $request->title,
            'author' => $request->author,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('post.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $file = $request->file('image');
        $post = Post::findOrFail($id);
        // $image = "";
        if (!empty($file)) {
            $imagePost = $post->image;
            if (file_exists("images/post/" . $imagePost)) {
                unlink("images/post/" . $imagePost);
            }
            $image = "Post_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/post', $image);
        } else {
            $image = $post->image;
        }
        $post->update([
            "image" => $image,
            'alt' => $request->alt,
            'subject' => $request->subject,
            'body' => $request->body,
            'title' => $request->title,
            'author' => $request->author,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $imagePost = $post->image;
        if (file_exists("images/post/" . $imagePost)) {
            unlink("images/post/" . $imagePost);
        }
        Post::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('post.index');
    }
}
