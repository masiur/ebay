@extends('layouts.default')
    @section('content')
    @include('includes.alert')


        <!-- LOGIN AREA -->

    <div class="gap"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-7">
                    @if(count($cart_details))
                    <aside class="sidebar-left">
                        <div class="box clearfix">
                            
                            <table class="table cart-table">
                                <thead>
                                    <tr>
                                        <th>Card</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart_details as $key)
                                    <tr>
                                        <td class="cart-item-image col-md-3">
                                            <a href="#">
                                                <img src="{{asset($key->card_info->img_link)}}" class="img-responsive" alt="Image Alternative text" title="{{$key->card_info->title}}"/>
                                            </a>
                                        </td>
                                        <td><a href="#">{{$key->card_info->title}}</a>
                                        </td>
                                        <td class="cart-item-quantity">
                                            {{$key->amount}}
                                        </td>
                                        <td>{{number_format($key->card_info->price, 2)}} BDT</td>
                                        <td>
                                            <a class="btn btn-xs btn-success btn-edit" href="{{route('cart.edit', ['id' => $key->id])}}">Edit</a>
                                        </td>
                                        <td class="cart-item-remove">
                                            <a class="fa fa-times deleteBtn" href="#" data-toggle="modal" data-target="#myModal" deleteId="{{$key->id}}"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                           
                            <ul class="cart-total-list text-center mb0">
                                <li><span>Your Balance</span><span>{{number_format($balance, 2)}} BDT</span>
                                </li>
                                <li><span>Total Cost</span><span>{{number_format($total, 2)}} BDT</span>
                                </li>
                                <li>
                                    {{ Form::open(array('route' => 'order.store.checkout', 'method' => 'put', 'class' => 'dialog-form' )) }}
                            
                                            {{ Form::submit('Order Proceed', array('class' => 'btn btn-primary')) }}
                                    {{ Form::close() }}
                                </li>
                            </ul>
                        </div>
                    </aside>
                    @else
                       <h3>You have not added any Card yet</h3>
                    @endif
                </div>
                <div class="col-md-5">
                    <h3>Recharge Via BKash !</h3>
                    <p>Important: If You have insufficient balance , you can recharge your account through BKash</p>
                    <a href="{{route('recharge.create')}}" class="btn btn-primary">GO</a>
                </div>
        </div>
    </div>

        <!-- END LOGIN AREA -->

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
            <h3>Are you sure to delete this item ?</h3>
          </div>
          <div class="modal-footer">
                {{ Form::open(array('route' => array('cart.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                {{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}
          </div>
        </div>

      </div>
    </div>
    <!-- Modal End -->

        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT/////////
    ////////////////////////////////////-->
@stop

@section('style')

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