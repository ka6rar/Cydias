<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $tools =  tool::get();
       return view('welcome', compact('tools'));

       //response()->json($tools);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tools.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tool  =  new Tool();
        if ( $request->hasFile('deb')  ) {
            $filenameWithExtention = $request->file('deb')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('deb')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('deb')->move(base_path() . '/public/debfiles/', $fileNameStore);
            $tool->deb = $fileNameStore;
            $tool->save();
        }
        return redirect()->back();
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
