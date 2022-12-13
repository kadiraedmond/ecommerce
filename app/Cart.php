<?php
    namespace App;

    class Cart{
        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;
        

        public function _construct($oldCart){
            if($oldCart){
                $this->items=$oldCart->$items;
                $this->totalQty=$oldCart->$totalQty;
                $this->totalPrice=$oldCart->$totalPrice;
            }
        }

        public function add($item, $prod_id){

            $storedItem = [
                'qty' => 0, 
                'prod_id' => 0, 
                'nom' => $item->nom,
                'categorie' => $item->categorie,
                'info' => $item->info,
                'prix' => $item->prix,
                'description' => $item->description,
                'picture' => $item->picture,
                'images' => $item->images,
                'item' => $item
            ];
            if($this->items){
                if(array_key_exists($prod_id, $this->items)){
                    $storedItem = $this->items[$prod_id];
                }
            }
            
            $storedItem['qty']++;
            $storedItem['prod_id'] = $prod_id;
            $storedItem['categorie'] = $item->categorie;
            $storedItem['info'] = $item->info;
            $storedItem['prix'] = $item->prix;
            $storedItem['description'] = $item->description;
            $storedItem['picture'] = $item->picture;
            $storedItem['images'] = $item->images;
            $this->totalQty++;
            $this->totalPrice+= $item->prix;
            $this->items[$prod_id]= $storedItem;



        }
    }

?>