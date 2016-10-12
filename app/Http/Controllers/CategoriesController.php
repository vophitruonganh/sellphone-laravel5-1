<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Trademark;
use App\Models\Product;
use App\Models\View\TrademarkByCategories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $categories = Category::all();
        $trademarks = TrademarkByCategories::all();
        return View('home')
                ->with('categories',$categories)
                ->with('trademarks',$trademarks);
    }

    public function Categories($categories_id){
    	$categories = Category::all();
        $item = Category::findOrFail($categories_id);
        $products = Products::where('group_id','=',$categories_id)->firstOrFail();
        return view('site.products')
                ->with('categories',$categories)
                ->with('products',$products);
    }
    public function Trademarks($trademark_id){
    	$trademakes = DB::table('trademarks')->firstOrFail();
    	return view('site.categories_group')
                ->with('trademarks',$trademarks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
