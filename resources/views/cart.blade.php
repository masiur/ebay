@extends('layouts.default')
    @section('content')
        @include('includes.alert')

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Name</th>
                                <th>QTY</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="couponia/img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                </td>
                                <td><a href="#">New Glass Collection</a>
                                </td>
                                <td class="cart-item-quantity"><!-- <i class="fa fa-minus cart-item-minus"></i> -->
                                    <input type="number" name="item-quantity" class="cart-quantity" min="1" max="5" value="1" /><!-- <i class="fa fa-plus cart-item-plus"></i> -->
                                </td>
                                <td>$150</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="couponia/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                </td>
                                <td><a href="#">Canon Camera</a>
                                </td>
                                <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                                    <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td>$200</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="/couponia/img/old_no7_70x70.jpg" alt="Image Alternative text" title="Old No7" />
                                    </a>
                                </td>
                                <td><a href="#">Jack Daniels Huge Pack</a>
                                </td>
                                <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                                    <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td>$150</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>	<a href="#" class="btn btn-primary">Update the cart</a>
                </div>
                <div class="col-md-3">
                    <ul class="cart-total-list">
                        <li><span>Sub Total</span><span>$500.00</span>
                        </li>
                        <li><span>Shipping</span><span>$0.00</span>
                        </li>
                        <li><span>Taxes</span><span>$0.00</span>
                        </li>
                        <li><span>Total</span><span>$500.00</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-lg">Checkout</a>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        
@stop