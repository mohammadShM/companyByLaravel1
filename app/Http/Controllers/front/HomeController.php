<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Link;
use App\Models\Post;
use App\Models\Product;
use App\Models\Seo;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Team;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $sliders = Slider::all();
        $about = About::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $products = Product::paginate(6);
        $team = Team::all();
        $post = Post::paginate(6);
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(10)->skip(0)->get();
        return view('front.index', compact('seo', 'sliders', 'about', 'products',
            'team', 'post', 'info', 'social', 'link'));
    }

    public function product($id)
    {
        $recentProduct = Product::orderBy('id', 'desc')->take(5)->skip(0)->get();
        $singleProduct = Product::findOrFail($id);
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(10)->skip(0)->get();
        return view('front.product', compact('recentProduct', 'singleProduct',
            'info', 'social', 'link'));
    }

    public function post($id)
    {
        $recentPost = Post::orderBy('id', 'desc')->take(5)->skip(0)->get();
        $singlePost = Post::findOrFail($id);
        $info = Information::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $social = Social::orderBy('id', 'desc')->take(1)->skip(0)->first();
        $link = Link::orderBy('id', 'desc')->take(10)->skip(0)->get();
        return view('front.post', compact('singlePost', 'recentPost',
            'info', 'social', 'link'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'fullName' => ['required','string','max:100'],
            'email' => ['required','string','max:100'],
            'subject' => ['required','string','max:100'],
            'message' => ['required','string'],
        ]);
        /** @noinspection PhpUndefinedFieldInspection */
        /** @noinspection PhpPossiblePolymorphicInvocationInspection */
        $contact = Contact::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return $contact != null;
    }

}
