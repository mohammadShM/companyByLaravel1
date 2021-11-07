<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

// use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(CreateProductRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "Product_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/product', $image);
        }
        Product::create([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "body" => $request->body,
            "title_web" => $request->title_web,
            "keywords" => $request->keywords,
            "description" => $request->description,
        ]);
        session()->flash('create', 'thanks , successful create data .');
        return redirect()->route('product.create');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $file = $request->file('image');
        // $image = "";
        if (!empty($file)) {
            $imageProduct = $product->image;
            if (file_exists("images/product/" . $imageProduct)) {
                unlink("images/product/" . $imageProduct);
            }
            $image = "Product_" . time() . "_" . rand(10_000, 99_999) . "." . $file->getClientOriginalExtension();
            $file->move('images/product', $image);
        } else {
            $image = $product->image;
        }
        $product->update([
            "title" => $request->title,
            "image" => $image,
            "alt" => $request->alt,
            "body" => $request->body,
            "title_web" => $request->title_web,
            "keywords" => $request->keywords,
            "description" => $request->description,
        ]);
        session()->flash('update', 'successful update data .');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $imageProduct = $product->image;
        if (file_exists("images/product/" . $imageProduct)) {
            unlink("images/product/" . $imageProduct);
        }
        Product::destroy($id);
        session()->flash('delete', 'successful delete data .');
        return redirect()->route('product.index');
    }

}
