<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Builder;

class ProductController extends MainController
{
    public function __construct()
    {
        parent::__construct();

        View::share('productFolder', config('settings.product.image.folder'));
        View::share('productDefaultImage', config('settings.product.image.default'));
        View::share('activeClass', 'class = active');
    }

    public function index(Request $request)
    {
        $products = Product::with('mainPicture');

//        $products->whereHas('gallery', function ($query) use ($request)
//        {
//            $query->orderBy('attachments.options', 'ASC');
//        });

        $products = $products->paginate(12);

        $view = 'front.products';

        return view($view, [
            'products' => $products,
        ]);
    }

    public function show($slug)
    {
        $product = Product::with('gallery', 'variations.specifications.attribute', 'variations.specifications.value')
            ->where('slug', $slug)
            ->firstOrFail();

        $view    = 'front.product';

        return view($view, [
            'product' => $product,
        ]);
    }
}
