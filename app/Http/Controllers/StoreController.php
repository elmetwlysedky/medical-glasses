<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Requests\StoreRequest;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Store.index',[
            'store'=> Store::latest()->Paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Store::create($data);
       //  dd($data);
       return redirect()->route('store.index')->withSuccess('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return view('Dashboard.Store.show',[
            'store'=>Store::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('Dashboard.Store.edit',[
            'store' => Store::findOrFail($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $store = Store::findOrFail($id);
        $data = $request->validated();
        $store ->update($data);
        return redirect()->route('store.index')->withUpdate('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Store::destroy($id);
        return redirect()->back()->withDelete('delete');
    }


    public function action(Request $request, $id){

    //     $store = Store::findOrFail($id);

    //     if($request->count == "count"){
    //         $store->count ++ ;
    //         $store->save();


    //     }elseif($request->count == "minus"){
    //         $store->count --;
    //         $store->save();

    //     }
    //     dd($request);
    //     return redirect()->back();




        if(request()->has('date')){
            if(request('count') == 'count'){
                $this->count++;
                dd($this->count); // This value is not incrementing
            }
        }

    }

}
