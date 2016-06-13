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
                                     <a class="pull-right" href="{!! route('item.create') !!}"><button class="btn btn-success">Add Item</button></a>
                                </div>
                            </div>
                        </div>
                                                   
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($items))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Price</th>
                                            <th>Item in Stock</th>
                                            <th>Type</th>
                                            <th>Image</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{!! ++$itemCounter !!}</td>
                                                <td>{!! $item->name !!}</td>
                                                <td>{!! $item->description !!}</td>
                                                <td>{!! $item->category_id !!}</td>
                                                <td>{!! $item->subcategory_id or '' !!}</td>
                                                <td>{!! $item->price !!}</td>
                                                <td>{!! $item->amount_in_stock !!}</td>
                                                <td>{!! $item->type !!}</td>
                                                <td>{!! Html::image($item->img_url) !!}</td>
                                                <!-- <td><a class="btn btn-info btn-xs btn-archive Showbtn" href="{!!route('item.show',$item->id)!!}"  style="margin-right: 3px;">Show Details</a></td> -->
                                                <td><a class="btn btn-success btn-xs btn-archive Editbtn" href="{!! route('item.edit',$item->id)!!}"  style="margin-right: 3px;">Edit</a></td>
                                                <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $item->id !!}">Delete</a></td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No item added yet. Be first to add a item
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {!! Form::open(array('route' => array('item.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
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

            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('item.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

        });
    </script>


@stop







