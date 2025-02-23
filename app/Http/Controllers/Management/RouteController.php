<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RouteModel;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $routes=RouteModel::all();
        return view('Management.CreateRoute')->with('routes', $routes);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Management.CreateNewRoute');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'route' => 'required',
        ]);


        $mod_rou=new RouteModel;
        $mod_rou->name=$request->route;
        $mod_rou->save();
        $request->session()->flash('status',$request->route.'Route Created Successfully');
        $routes = RouteModel::all();
        return view('Management.CreateRoute')->with('routes', $routes);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
