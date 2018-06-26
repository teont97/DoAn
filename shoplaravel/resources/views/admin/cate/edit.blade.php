@extends('admin.master')
@section('content') 
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                           
                            <div class="form-group">
                                <label>Category Name</label>
<input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}" />
</div>

                           
<div class="form-group">
<label>Category Description</label>
<textarea class="form-control" rows="3" name="txtdescription" value="{!! old('txtdescription',isset($data) ? $data['description'] : null)!!}"></textarea>
</div>
                 
<button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection()      
              