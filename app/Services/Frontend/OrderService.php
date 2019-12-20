<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductImage;
use App\Models\ProductType;
use Illuminate\Http\Request;
use DB,Cart,Auth;

class OrderService
{
   /**
     * create for the order
     *
     * @param \Illuminate\Http\Request  $request
     * @return bool
     */
    public function handleCreateOrder($request)
    {
        DB::beginTransaction();
        try {
            $orderId = $this->insertInfo($request);
            $this->insertData($orderId);
            $this->updateQuantity($orderId);
            DB::commit();
            return true;
        } 
        catch (\Exception $ex){
            DB::rollBack();
            return false;
        }
    }

    /**
     * insert data for the order
     *
     * @param \Illuminate\Http\Request  $request
     * @return $id
     */
    public function insertInfo($request)
    {
        $order = new Order;
        if (Auth::user()){
            $order->user_id = Auth::user()->id;
        }else{
            $order->user_id = null;
        }
        $order->customer_name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->note = $request->note;
        $order->save();
        return $order->id;
    }

    /**
     * insert data for the order_detail
     *
     * @param \Illuminate\Http\Request  $request
     * @return $id
     */
    public function insertData($orderId)
    {
        $content = Cart::getContent();
        foreach ($content as $value) {
            $order_details = new OrderDetail;
            $order_details->order_id = $orderId;
            $order_details->product_id = $value->id;
            $order_details->quantity = $value->quantity;
            $order_details->product_name = $value->name;
            $order_details->code =  Product::find($value->id)->first()->code;
            $order_details->size = Product::find($value->id)->size->first()->size;
            $order_details->price = $value->price;
            $order_details->save();
        }
    }

    /**
     * update data for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @return $id
     */
    public function updateQuantity($orderId)
    {
        $content = Cart::getContent();
        foreach ($content as $value){
            $product = Product::find($value->id);
            $product->quantity = ($product->quantity) - ($value->quantity);
            $product->save();
        }      
    }
}