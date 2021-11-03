<?php
    namespace App\Dao\Sales;
    use App\Models\Sales;
    use App\Contracts\Dao\Sales\SalesInterface;

    class SalesDao implements SalesInterface
    {
        public function store($request){
            $sales = new Sales;
            $sales->order_number = $request['order_number'];
            $sales->order_date = $request['order_date'];
            $sales->shoes_code = $request['shoes_code'];
            $sales->price = $request['price'];
            $sales->quantity = $request['quantity'];
            $sales->total = $request['total'];
            $sales->save();
            return $sales;
        }
        public function selectSales($id){
            $data = Sales::findOrFail($id);
            return $data;
        }

        public function update($request, $id){
            $form_data = array(
                'order_number'=> $request->order_number,
                'order_date' => $request->order_date,
                'shoes_code' => $request->shoes_code,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'total' => $request->total
            );
            $sales = Sales::whereId($id)->update($form_data);
            return $sales;
        }

        public function deleteSales($id)
        {
            $del = Sales::find($id)->delete();
            return $del;
        }
    }