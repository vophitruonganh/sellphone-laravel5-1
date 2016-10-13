<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use App\Models\Trademark;
use App\Models\LiveSearch;
use App\Models\View\TrademarkByCategories;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function Products()
    {

    }
    /**
     * [ProductsTrademark description]
     * @param [integer] $categories_id [description]
     * @param [integer] $trademark_id  [description]
     */
    public function ProductsTrademark($categories_id,$trademark_id)
    {
        $categories = Category::all();
        $trademarks = TrademarkByCategories::all();
        $products = Product::where('trademark_id','=',$trademark_id)->where('group_id','=',$categories_id)->take(12)->get();
        return view('site.products')
            ->with('products',$products)
            ->with('categories',$categories)
            ->with('trademarks',$trademarks)
            ->with('cateories_name',$categories[0]->name)
            ->with('trademark_name',$trademarks[$trademark_id]->trademark_name);
    }
    /**
     * [ProductsDetail description]
     * @param [integer] $product_id [description]
     */
    public function ProductsDetail($product_id)
    {
        $categories = Category::all();
        $trademarks = TrademarkByCategories::all();
        $product = Product::where('id','=',$product_id)->get();
        $products = Product::where('group_id','=',$product[0]->group_id)->where('trademark_id','=',$product[0]->trademark_id)->get();
        $details = ProductDetail::where('product_id','=',$product_id)->get();
        dd($details);
        return view('site.detail')
            ->with('details',$details)
            ->with('categories',$categories)
            ->with('trademarks',$trademarks)
            ->with('products',$product)
            ->with('feature_products',$products);

    }
    /**
     * [LiveSearch description]
     * @param [string] $keywork [description]
     */
    public function LiveSearch($keywork = null){
        $array = explode(' ',$keywork);
        if ($array != null) {
            switch (sizeof($array)) {
                case 1:
                    $listProducts = LiveSearch::where('categories_name','like','%'.$keywork.'%')->take(24)->get();
                    if (empty($listProducts)){
                        $listProducts = LiveSearch::where('trademark_name','like','%'.$keywork.'%')->take(24)->get();
                    }else{
                        $listProducts = LiveSearch::where('name','like','%'.$keywork.'%')->take(24)->get();
                    }
                    break;
                    dd($listProducts);
                case 2:
                    $listProducts = LiveSearch::where('categories_name','like','%'.$array[0].'%')
                                                ->where('trademark_name','like','%'.$array[1].'%') ->take(24)->get();
                    if (empty($listProducts)){
                        $listProducts = LiveSearch::where('trademark_name','like','%'.$array[0].'%')
                                                ->where('categories_name','like','%'.$array[1].'%') ->take(24)->get();
                    }

                    break;
                default:

                    break;
            }
        }
        if(sizeof($listProducts) > 0){
            for($i=0; $i < sizeof($listProducts) ; $i++){
            echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="subitem">
                <a href="">
                    <img class="img-responsive img-resize" src="'.url('images/product/').'/'.$listProducts[$i]->image.'"/>
                </a>
                <h3 class="text-center text-uppercase title">
                    <a class=" text-info" href="">'
                        . substr(strtoupper($listProducts[$i]->name),0,25) .
                    '</a>
                </h3>
                <h4 class="subitem-price text-uppercase text-center">'.number_format( $listProducts[$i]->price) . ' VNĐ</h4>


              </div>
            </div>';
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
