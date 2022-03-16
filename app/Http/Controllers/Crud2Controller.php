<?php

namespace App\Http\Controllers;

use App\Models\Crud2;
use Illuminate\Http\Request;

class Crud2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud2 = Crud2::latest()->paginate(10);
        return view('crud2.index',compact('crud2'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud2.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'address'     => 'required',

        ]);

        $crud2 = new Crud2();

        $crud2->name = $request->get('name');
        $crud2->email = $request->get('email');
        $crud2->address = $request->get('address');
        $crud2->massage = $request->get('massage');
        $crud2->save();

        session()->flash('massage','Data inserted successfully');
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud2  $crud2
     * @return \Illuminate\Http\Response
     */
    public function show(Crud2 $crud2, $id)
    {
        $crud2 = Crud2::find($id);
        return view('crud2.show',compact('crud2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud2  $crud2
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud2 $crud2, $id)
    {
        $crud2 = Crud2::find($id);
        return view('crud2.edit',compact('crud2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud2  $crud2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud2 $crud2, $id)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'address' =>'required'
        ]);

        $crud2 = Crud2::find($id);
        $crud2->name = $request->get('name');
        $crud2->email = $request->get('email');
        $crud2->address = $request->get('address');
        $crud2->save();

        session()->flash('massage',"Data updated successfully");
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud2  $crud2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud2 $crud2, $id)
    {
        $crud2 = Crud2::destroy($id);
        session()->flash('massage',"Data deleted successfully");
        return redirect('/');
    }
}
