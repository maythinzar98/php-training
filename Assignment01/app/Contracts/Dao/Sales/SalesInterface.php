<?php
    namespace App\Contracts\Dao\Sales;

    interface SalesInterface{

        public function store($request);

        public function selectSales($id);

        public function update($request, $id);

        public function deleteSales($id);
    }
