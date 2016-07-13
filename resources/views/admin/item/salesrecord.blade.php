@extends('admin.layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert')
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="col-md-6">                            
                                     <!-- <a class="pull-right" href=""><button class="btn btn-success">Add salesrecord</button></a> -->
                                </div>
                            </div>
                        </div>
                                                   
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($salesrecords))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Seller</th>
                                            <th>Buyer</th>
                                            <th>QTY</th>
                                            <th>Price per QTY</th>
                                            <th>Time of Transactions</th>
                                            <!-- <th>Type</th> -->
                                            
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($salesrecords as $salesrecord)
                                            <tr>
                                                <td>{!! ++$salesrecordCounter !!}</td>
                                                <td>{!! $salesrecord->item_name !!}</td>
                                                <td>{!! $salesrecord->seller->name !!}</td>
                                                <td>{!! $salesrecord->buyer->name!!}</td>
                                                <td>{!! $salesrecord->amount !!}</td>
                                                <td>{!! $salesrecord->price !!}</td>
                                                <td>{!! $salesrecord->created_at->toDayDateTimeString() !!}</td>
                                                <!-- <td>{!! $salesrecord->type !!}</td> -->
                                               
                                            
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No salesrecord added yet. Be first to add a salesrecord
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop

@section('style')

{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

@endsection

@section('script')

    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}




    <!-- for Datatable -->
    <script type="text/javascript">

        $(document).ready(function() {
            
            $('#dataTable').dataTable();

         

        });
    </script>


@stop







