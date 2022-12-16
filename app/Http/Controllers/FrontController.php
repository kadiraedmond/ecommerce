<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Blog;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function detail($id)
    {
        if(Produit::where('id', '$id'))
        {
           $similaire = Produit::latest()->get();
           $produit = Produit::where('id', $id)->first();
           return view('produit.detail',compact('produit','similaire'));
        }
    }

    public function cart($id)
    {
        $produit = Produit::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $id );
        Session::put('cart', $cart);
        dd(Session::get('cart'));
        return redirect('/');
    }

    public function panier()
    {
        if(!Session::has('cart')){
            return view('panier');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('panier', ['produit'=> $cart->items] );
        return view('panier'); 
         
       
    }


    public function contact()
    {

         return view('contact');
    }

    public function blog()
    {

         return view('blog');
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $produit = Produit::where('categorie', 'like', "%{$key}%")
            ->orWhere('nom', 'like', "%{$key}%")
            ->orWhere('prix', 'like', "%{$key}%")
            // ->orderBy('created_at', 'desc')
            ->get();

        return view('produit.search', [
            'key' => $key,
            'produits' => $produit,
             
        ]);
    }





    public function telephone()
    {
        $telephone = DB::table('produits')->where('categorie', 'telephone')->get();
         return view('produit.telephone',compact('telephone'));
    }
    public function ordinateur()
    {
        $ordinateur = DB::table('produits')->where('categorie', 'ordinateur')->get();
        return view('produit.ordinateur',compact('ordinateur'));
    }
    public function imprimante()
    {
        $imprimante = DB::table('produits')->where('categorie', 'imprimante')->get();
        return view('produit.imprimante',compact('imprimante'));
    }
    public function accessoire()
    {

        $accessoire = DB::table('produits')->where('categorie', 'accessoire')->get();
        return view('produit.accessoire',compact('accessoire'));
    }
}
