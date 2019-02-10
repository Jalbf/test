<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Shop\Entities\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($query_name)
    {
        $shop = Shop::where('mkp.terminal.name', $query_name)->get();
        // dd($shop);
        return response()->json(['shop_id' => $shop[0]->id,
                                    'shop_name'=> $shop[0]->name,
                                    'terminal_name' => $query_name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('shop::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
