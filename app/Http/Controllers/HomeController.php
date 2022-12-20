<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prods = Produit::all()->count();
        $prix = DB::table('produits')->where('prix')->count();
        $categorie = Categorie::all()->count();
        // $appartement = DB::table('produits')->where('type', 'appartement')->get();
        // $terrain = DB::table('produits')->where('type', 'terrain')->get();
        // $immeuble = DB::table('produits')->where('type', 'immeuble')->get();
        
        return view('dashboard',compact('prods','prix','categorie'));
    }
}
