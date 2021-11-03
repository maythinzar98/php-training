<?php
    namespace App\Dao\Shoes;
    use App\Models\Shoes;
    use App\Contracts\Dao\Shoes\ShoesInterface;

    class ShoesDao implements ShoesInterface
    {
        public function selectShoes($id){
            $data = Shoes::findOrFail($id);
            return $data;
        }

        public function deleteShoes($id)
        {
            $del = Shoes::find($id)->delete();
            return $del;
        }
    }