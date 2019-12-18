@extends('products.master')
@section('content')

<div class="cart">
<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('./images/banner/banner-img.png')}}" alt="">
                </div>
            </div>
        </div>
</section>
<section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($content as $product)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset(config('define.product_images_path') .$product->attributes->img) }}" alt="">
                                            </div> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p>{{$product->name}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?php echo number_format($product->price)?> VNĐ</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                        <input class="qty" type="number" value="{{$product->quantity}}" name="quantity" min="1">
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{number_format($product->quantity*$product->price)}} VNĐ</h5>
                                    </td>
                                    <td>
                                        <a href="{{route('cart.destroy', $product->id)}}">
                                            <img width="20px" src="{{asset('images/cart/delete.png')}}">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="update-cart" href="{{route('cart.update', $product->id)}}">
                                            <img width="25px" src="{{asset('images/cart/update.png')}}">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>{{number_format($total)}} VNĐ</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>