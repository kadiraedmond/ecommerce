<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Promo;
use App\Models\Blog;
use App\Models\Client;
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
        $telephone = DB::table('produits')->where('categorie')->take(8)->get();
        $categorie = Produit::latest()->get();
        $blog = Blog::latest()->take(3)->get();
        $telephone = DB::table('produits')->where('categorie', 'telephone')->take(8)->get();
        $ordinateur = DB::table('produits')->where('categorie', 'ordinateur')->take(8)->get();
        $accessoires = DB::table('produits')->where('categorie', 'accessoire')->take(8)->get();
        $homme = DB::table('produits')->where('categorie', 'Homme')->take(8)->get();
        $femme = DB::table('produits')->where('categorie', 'Femme')->take(8)->get();
        $enfant = DB::table('produits')->where('categorie', 'Bebe')->take(8)->get();
        $parfun = DB::table('produits')->where('categorie', 'Parfun')->take(8)->get();
        $jeux = DB::table('produits')->where('categorie', 'Jeux')->take(8)->get();
        $jouet = DB::table('produits')->where('categorie', 'Jouet')->take(8)->get();
        $bricolages = DB::table('produits')->where('categorie', 'Bricolages')->take(8)->get();
        $cadeaux = DB::table('produits')->where('categorie', 'Cadeaux')->take(8)->get();
        $artisanat = DB::table('produits')->where('categorie', 'Artisanat')->take(8)->get();
        $animalerie = DB::table('produits')->where('categorie', 'Animalerie')->take(8)->get();
        $luminaire = DB::table('produits')->where('categorie', 'Luminaire')->take(8)->get();
        $agriculture = DB::table('produits')->where('categorie', 'Agriculture')->take(8)->get();
        $bureaux = DB::table('produits')->where('categorie', 'Bureaux')->take(8)->get();
        $beauté = DB::table('produits')->where('categorie', 'Beauté')->take(8)->get();
        $meuble = DB::table('produits')->where('categorie', 'Meuble')->take(8)->get();
        $decoration = DB::table('produits')->where('categorie', 'Décoration')->take(8)->get();
        $logiciel = DB::table('produits')->where('categorie', 'Logiciel')->take(8)->get();
        $hygiene = DB::table('produits')->where('categorie', 'hygiene')->take(8)->get();

        $imprimante = DB::table('produits')->where('categorie', 'imprimante')->take(8)->get();
        $best = DB::table('produits')->where('prix', 100000)->take(8)->get();
        $view = Produit::latest()->take(3)->get();
        $ancien = Produit::latest()->take(3)->get();
        $slider = DB::table('promos')->where('type', 'section1')->take(1)->get();


         return view('welcome',compact('produit','telephone','ordinateur','imprimante',
          'blog', 'slider','categorie','homme','femme','enfant','parfun','jeux','jouet',
          'bricolages','cadeaux','artisanat', 'animalerie','luminaire','agriculture',
          'bureaux','beauté','accessoires','logiciel','meuble','decoration','hygiene','best','view','ancien'));
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

    public function blog_detail($id)
    {
        if(Blog::where('id', '$id'))
        {
           $similaire = Blog::latest()->get();
           $blog = Blog::where('id', $id)->first();
           return view('blog.detail',compact('blog','similaire'));
        }
    }

    public function type($categorie)
    {
        if(Produit::where('categorie', '$categorie'))
        {
           $similaire = Produit::latest()->get();
           $produit = Produit::where('categorie', $categorie)->get();
           return view('produit.type',compact('produit','similaire'));
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

    public function boutique()
    {
        $produit = Produit::latest()->get();
         return view('boutique', compact('produit'));
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

    public function info()
    {
        $telephone = DB::table('produits')->where('categorie', 'telephone')->get();
        $imprimantes = DB::table('produits')->where('categorie', 'imprimante')->get();
        $ordinateur = DB::table('produits')->where('categorie', 'ordinateur')->get();
        $accessoires = DB::table('produits')->where('categorie', 'accessoire')->get();
        $logiciel = DB::table('produits')->where('categorie', 'Logiciel')->get();

        return view('produit.info',compact('telephone','imprimantes','ordinateur','accessoires','logiciel'));
    }
    public function autres()
    {
        $prods = Produit::latest()->get();
        $autres = DB::table('produits')->where('categorie', 'Artisanat')->take(8)->get();
        $animalerie = DB::table('produits')->where('categorie', 'Animalerie')->take(8)->get();
        $luminaire = DB::table('produits')->where('categorie', 'Luminaire')->take(8)->get();
        $agriculture = DB::table('produits')->where('categorie', 'Agriculture')->take(8)->get();
        $bureaux = DB::table('produits')->where('categorie', 'Bureaux')->take(8)->get();
        $meubles = DB::table('produits')->where('categorie', 'Meubles')->take(8)->get();
        $decoration = DB::table('produits')->where('categorie', 'Decoration')->take(8)->get();
        

        return view('produit.autres',compact('prods','autres','animalerie','luminaire', 'agriculture' ,'bureaux','meubles','decoration'));
    }
    public function hygiene()
    {
        $hygiene = DB::table('produits')->where('categorie', 'hygiene')->get();

        return view('produit.hygiene',compact('hygiene'));
    }
    public function sport_div()
    {
        $jeux = DB::table('produits')->where('categorie', 'Jeux')->get();
        $jouet = DB::table('produits')->where('categorie', 'Jouet')->get();
        $bricolages = DB::table('produits')->where('categorie', 'Bricolages')->get();

        return view('produit.sport',compact('jeux','jouet','bricolages'));
    }
    public function prod_cosmetique()
    {
        $homme = DB::table('produits')->where('categorie', 'Homme')->get();
        $femme = DB::table('produits')->where('categorie', 'Femme')->get();
        $enfant = DB::table('produits')->where('categorie', 'enfant')->get();
        $parfun = DB::table('produits')->where('categorie', 'Parfun')->get();
        $beauté = DB::table('produits')->where('categorie', 'Beauté')->get();

        return view('produit.cosmetique',compact('homme','femme' ,'enfant', 'parfun','beauté'));
    }

     

    public function  inscription()
    {
        return view('client.inscription');
    }





     
}
