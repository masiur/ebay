@extends('admin.layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('includes.alert')
        <!-- <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <!-- Masiur Rahman Siddiki -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('package.index')!!}"><button class="btn btn-success">Sub Category List</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                                <div class=" form"> 

                                    {!! Form::model($item, ['route' => ['item.update',$item->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                                    <div class="form-group">
                                        {!! Form::label('name', "Item Name*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Item Name', 'required' => 'required', 'aria-required' =>'true')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', "Description", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('description', null, array('class' => 'form-control','placeholder' => 'Amount of Monthly Fee')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('category_id', "Category*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::select('category_id', $categories, null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('subcategory_id', "Sub Category", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::select('subcategory_id', $subcategories, null, array('class' => 'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('seller_id', "Seller*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::select('seller_id', $seller, null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('price', "Price*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('price', null, array('class' => 'form-control', 'placeholder' => 'Price of the Item', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('amount_in_stock', "Stock Amount*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('amount_in_stock', null, array('class' => 'form-control', 'placeholder' => 'Amount in Stock', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('type', "Type of the Item*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::select('type', $type, null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('image', "Image of the Item*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::file('image', null, array('class' => 'form-control', 'placeholder' => 'Image of the Item', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                        {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                                        </div>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                             
                    </div>
                </div>

            </div>

        </div>

@stop


@section('style')

    {!! Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') !!}
    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')

    {!! Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
    {!! Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
    {!! Html::script('assets/summernote/summernote.min.js') !!}


    {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
    {!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



    <!-- for editor-->
   <!-- <script type="text/javascript">

        // jQuery(document).ready(function(){
                
        //         $('.wysihtml5').wysihtml5();

        //         $('.summernote').summernote({
        //             height: 200,                 // set editor height

        //             minHeight: null,             // set minimum height of editor
        //             maxHeight: null,             // set maximum height of editor

        //             focus: true                 // set focus to editable area after initializing summernote
        //         });

        // });
    </script> -->


@stop