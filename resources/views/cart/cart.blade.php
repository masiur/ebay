@extends('layouts.default')
    @section('content')
        

        <div class="container">
        @include('includes.alert')
            
            <div class="row">
            @if(count($items))
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
                            {!! Form::open(['route' => 'cart.update', 'method' => 'POST']) !!}
                            <input type="hidden" name="items" value="{{ $items }}">
                            @foreach($items as $item)
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="{{ asset($item->img_url) }}" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                </td>
                                <td><a href="#">{{ $item->item->name }}</a>
                                </td>
                                <td class="cart-item-quantity"><!-- <i class="fa fa-minus cart-item-minus"></i> -->
                                    <input type="number" name="item-quantityOfItemId{{ $item->item_id }}" class="cart-quantity" min="1" max="{{ $item->item->amount_in_stock }}" value="{{ $item->amount or 1 }}" /><!-- <i class="fa fa-plus cart-item-plus"></i> -->
                                    <input type="hidden" name="itemid{{ $item->item_id }}" value="{{ $item->item_id }}">
                                </td>
                                <td>{{ $item->item->price }}</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times deleteBtn" href="#" data-toggle="modal" data-target="#myModal" deleteId="{{ $item->id }}"></a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="couponia/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                </td>
                                <td><a href="#">Canon Camera</a>
                                </td>
                                <td class="cart-item-quantity">
                                    <input type="number" name="cart-quantity" class="cart-quantity" value="1" min="1" max="10"/>
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
                                <td class="cart-item-quantity">
                                    <input type="number" name="cart-quantity" class="cart-quantity" value="1" min="1" max="10"/>
                                </td>
                                <td>$150</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>    <button type="submit" class="btn btn-primary">Update the cart</button>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-3">
                    <ul class="cart-total-list">
                        <li><span>Sub Total</span><span>{{ $total }}</span>
                        </li>
                        <li><span>Shipping</span><span>$0.00</span>
                        </li>
                        <li><span>Taxes</span><span>$0.00</span>
                        </li>
                        <li><span>Total</span><span>{{ $total }}</span>
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary btn-lg">Checkout</a>
                </div>
            @else
                <h3>You have not added any item to cart.</h3>
                <br>
                <div class="gap"></div>
                <div class="gap"></div>
            @endif
            </div>
            <div class="gap"></div>
        </div>
        
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>

        <!-- Modals Start -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
              </div>
              <div class="modal-body">
                <h3>Are you sure to remove this item from cart?</h3>
              </div>
              <div class="modal-footer">
                    {!! Form::open(array('route' => array('cart.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Remove', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
              </div>
            </div>

          </div>
        </div>
        <!-- Modal End -->
        
@stop

@section('script')
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "{{URL::route('cart.delete',false)}}";
                $(".deleteForm").attr("action", url+'/'+deleteId);
                // alert();
            });
        });
    </script>
@stop