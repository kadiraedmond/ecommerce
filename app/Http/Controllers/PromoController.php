<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PromoController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $promo = Promo::all();
        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo;
        $promo->titre = $request->input('titre');
        $promo->prix = $request->input('prix');
        $promo->prixpromo = $request->input('prixpromo');
        $promo->type = $request->input('type');
        $promo->info = $request->input('info');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/promo/', $filename);
            $promo->picture = $filename;
        }

        $promo->save();
        return redirect()->back()->with('status','promo Added Successfully');
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
        $promo = Promo::find($id);
        return view('promo.edit', compact('promo'));
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
        $promo = Promo::find($id);
        $promo->titre = $request->input('titre');
        $promo->prix = $request->input('prix');
        $promo->prixpromo = $request->input('prixpromo');
        $promo->type = $request->input('type');
        $promo->info = $request->input('info');

        if($request->hasfile('picture'))
        {
            $destination = 'uploads/promo/'.$promo->picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/promo/', $filename);
            $promo->picture = $filename;
        }

        $promo->update();
        return redirect()->back()->with('status','promo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::find($id);
        $destination = 'uploads/promo/'.$promo->picture;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $promo->delete();
        return redirect()->back()->with('status','promo Deleted Successfully');
    }
}
