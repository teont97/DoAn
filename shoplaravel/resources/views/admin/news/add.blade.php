@extends('admin.master')
@section('content') 
<style type="text/css">
    .form-group{
        width: 1000px;
    }
</style>
        <!-- Page Content -->
                    <div class="col-lg-12">
                        <h1 class="page-header">News
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if (count($errors) > 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!!$error!!}</li>
            @endforeach
        </ul>
        
    </div>
@endif
<style type="text/css">
    #cke_1_contents{
        height: 350px;
    }
    .cke_contents cke_reset{
        height: 350px;
    }
</style>
   <form action="{!!  route('admin.news.postadd') !!}" method="POST" enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="txtTitle" placeholder="Please Enter Username" />
                            </div>

                            <div class="form-group">
                                <label>Categories</label>
                                <select class="form-control" name="SCate">
                                    @foreach($news as $iteam)
                                    <option value="{!! $iteam->id!!}">{!!$iteam->name!!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Abbreviate</label>
                                <textarea class="form-control" rows="3" name="txtAbbreviate"></textarea>
                               
                            </div>
                            <div class="form-group">
                                <label> Content</label>
                 <textarea id="editor2" class="form-control" rows="4" name="txtContent" ></textarea>
                            </div>
                             <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="txtKeyWords" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>By</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">User
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">News Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                
@endsection