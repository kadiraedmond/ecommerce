<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PanierInterfaceRepository;

use App\Produit;

class PanierController extends Controller
{

	protected $panierRepository; // L'instance BasketSessionRepository

    public function __construct (PanierInterfaceRepository $panierRepository) {
    	$this->panierRepository = $panierRepository;
    }

    # Affichage du panier
    public function show () {
    	return view("panier.show"); // resources\views\basket\show.blade.php
    }

    # Ajout d'un produit au panier
    public function add (Produit $product, Request $request) {
    	
    	// Validation de la requête
    	$this->validate($request, [
    		"quantity" => "numeric|min:1"
    	]);

    	// Ajout/Mise à jour du produit au panier avec sa quantité
    	$this->panierRepository->add($product, $request->quantity);

    	// Redirection vers le panier avec un message
    	return redirect()->route("panier.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove (Produit $product) {

    	// Suppression du produit du panier par son identifiant
    	$this->panierRepository->remove($product);

    	// Redirection vers le panier
    	return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty () {

    	// Suppression des informations du panier en session
    	$this->panierRepository->empty();

    	// Redirection vers le panier
    	return back()->withMessage("Panier vidé");

    }

}
