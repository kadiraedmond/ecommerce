<?php

namespace App\Http\Controllers;
use App\Models\Letter;
use App\Models\Produit;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit = Produit::latest()->get();
        $blog = Blog::latest()->take(3)->get();
        $telephone = DB::table('produits')->where('categorie', 'telephone')->take(8)->get();
        $ordinateur = DB::table('produits')->where('categorie', 'ordinateur')->take(8)->get();
        $accessoire = DB::table('produits')->where('categorie', 'accessoire')->take(8)->get();

        $imprimante = DB::table('produits')->where('categorie', 'imprimante')->take(8)->get();

         return view('welcome',compact('produit','telephone','ordinateur','imprimante','accessoire', 'blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['email' => 'required|unique:email']);
        $letter = new Letter;
        $letter->email = $request->input('email');
        $letter->save();
        return redirect('welcome')->with('status','letter Added Successfully');
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
