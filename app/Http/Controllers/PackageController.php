<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Package;
use Validator;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index')
                        ->with('title', 'List of all Package')
                        ->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create')
                        ->with('title', 'Add Package');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'monthly_fee' => 'required|numeric',
            'sales_limit' => 'required|numeric'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $package = new Package();
        $package->title = $data['title'];
        $package->monthly_fee = $data['monthly_fee'];
        $package->sales_limit = $data['sales_limit'];
        if($package->save()) {
            return redirect()->route('package.index')->with('success','package Successfully Added');
        } else {
            return redirect()->route('package.index')->with('error','Something went wrong');
        }
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
        $package = Package::findOrFail($id);
        return view('admin.package.edit')
                        ->with('title', 'Edit Package')
                        ->with('package', $package);
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
        $rules = [
            'title' => 'required',
            'monthly_fee' => 'required|numeric',
            'sales_limit' => 'required|numeric'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $package = Package::findOrFail($id);
        $package->title = $data['title'];
        $package->monthly_fee = $data['monthly_fee'];
        $package->sales_limit = $data['sales_limit'];
        if($package->save()) {
            return redirect()->route('package.index')->with('success','Package Successfully Updated');
        } else {
            return redirect()->route('package.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Package::destroy($id);

            return redirect()->route('package.index')->with('success','Package Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('package.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
