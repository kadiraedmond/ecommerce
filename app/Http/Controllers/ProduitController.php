<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
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
        $produit = Produit::all();
        return view('produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Produit;
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->categorie = $request->input('categorie');
        $produit->info = $request->input('info');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/produit/', $filename);
            $produit->picture = $filename;
        }
        if($request->hasfile('images'))
        {
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/produit/', $filename);
            $produit->images = $filename;
        }
        $produit->save();
        return redirect()->back()->with('status','Produit Added Successfully');
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
        $produit = Produit::find($id);
        return view('produit.edit', compact('produit'));
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
        $produit = Produit::find($id);
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->categorie = $request->input('categorie');
        $produit->info = $request->input('info');

        if($request->hasfile('picture'))
        {
            $destination = 'uploads/produit/'.$produit->picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/produit/', $filename);
            $produit->picture = $filename;
        }
        if($request->hasfile('images'))
        {
            $destin = 'uploads/produit/'.$produit->images;
            if(File::exists($destin))
            {
                File::delete($destin);
            }
            $file = $request->file('images');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/produit/', $filename);
            $produit->images = $filename;
        }

        $produit->update();
        return redirect()->back()->with('status','Produit Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $destination = 'uploads/produit/'.$produit->picture;
        $destin = 'uploads/produit/'.$produit->images;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        if(File::exists($destin))
        {
            File::delete($destin);
        }
        $produit->delete();
        return redirect()->back()->with('status','Produit Deleted Successfully');
    }
}
