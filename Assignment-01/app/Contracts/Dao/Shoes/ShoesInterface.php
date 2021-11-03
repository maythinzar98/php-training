<?php
    namespace App\Contracts\Dao\Shoes;

    interface ShoesInterface{

        public function selectShoes($id);

        public function deleteShoes($id);
    }
