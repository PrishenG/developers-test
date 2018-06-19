<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Company;

class CompanyController extends Controller
{
    
    //Access control
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
        $companies = Company::orderBy('name')->paginate(5);
        return view('companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'logo' => 'image|nullable|max:1999',
            'website' => 'required|url'
        ]);
        
        //Handle File Upload
        if($request->hasFile('logo'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('logo')->storeAs('public/logos', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        //create company
        $company = new Company;
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->logo = $fileNameToStore;
        $company->website = $request->input('website');
        $company->save();

        return redirect('/companies')->with('success', 'Company Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit')->with('company', $company);
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'logo' => 'image|nullable|max:1999',
            'website' => 'required'
        ]);

        //Handle File Upload
        if($request->hasFile('logo'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('logo')->storeAs('public/logos', $fileNameToStore);
        }
        

        //update company
        $company = Company::find($id);
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        if($request->hasFile('logo'))
        {
            $company->logo = $fileNameToStore;
        }
        $company->website = $request->input('website');
        $company->save();

        return redirect('/companies')->with('success', 'Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if($company->logo != 'noimage.jpg')
        {
            //Delete the image
            Storage::delete('public/logos/'.$company->logo);
        }
        $company->assets()->where('company_id', $id)->delete();
        $company->delete();
        return redirect('/companies')->with('success','Company Deleted');
    }

    public function compasset($id)
    {
        $companies = Company::find($id);
        return view('companies.company_assets')->with('companies', $companies);
    }

    public function createasset($id)
    {
        $companies = Company::find($id);
        return view('companies/create_asset')->with('companies', $companies->id);
    }
}
