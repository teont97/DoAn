@extends('admin.master')
@section('content');
        <!-- Page Content -->
  
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                              @if (count($errors) > 0 )
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!!$error!!}</li>
                    @endforeach
                </ul>
                
            </div>
        @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group" >
                                <label> Type Product  </label>
                                <select class="form-control" name="txtcate" placeholder="Please Enter Password" >
     @foreach($data as $iteam)
     <option value="{!! $iteam["id"] !!}" > {!! $iteam["name"] !!} </option>
     @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Unit Price</label>
                                <input class="form-control" name="txtUnitPrice" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Promotion Price</label>
                                <input class="form-control" name="txtPromotionPrice" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <input class="form-control" name="txtUnit" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
            <div class="col-md-1">
                
            </div>

             <div class="col-md-4">
                @for($i=1;$i<=10;$i++)
                <div class="form-group">
                    <label>Hình Ảnh Chi Tiết <?php echo $i ?></label>
                    <input type="file" name="fproductimg[]">
                </div>
                @endfor
            </div>
              
@endsection()
  
