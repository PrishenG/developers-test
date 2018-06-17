<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class AssetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::orderBy('id')->paginate(10);
        return view('asset.index')->with('assets', $assets);
    }

    public function company_assets($id)
    {
        $assets = Asset::find('id');//->where($id->company_id);
        return view('assets.company_assets')->with('assets', $assets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'asset_model' => 'required',
            'rand_value' => 'required'
        ]);

        //create asset
        $asset = new Asset;
        $asset->description = $request->input('description');
        $asset->asset_model = $request->input('asset_model');
        $asset->rand_value = $request->input('rand_value');
        $asset->company_id = $request->input('company_id');
        $asset->save();

        return redirect('/assets')->with('success', 'Asset Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Asset::find($id);
        return view('assets.show')->with('asset', $asset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::find($id);
        return view('assets.edit')->with('asset', $asset);
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
        $this->validate($request, [
            'description' => 'required',
            'asset_model' => 'required',
            'rand_value' => 'required'
        ]);

        //update asset
        $asset = Asset::find($id);
        $asset->description = $request->input('description');
        $asset->asset_model = $request->input('asset_model');
        $asset->rand_value = $request->input('rand_value');
        $asset->company_id = $request->input('company_id');
        $asset->save();

        return redirect('/assets')->with('success', 'Asset Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        return redirect('/assets')->with('success','Asset Deleted');
    }
}
