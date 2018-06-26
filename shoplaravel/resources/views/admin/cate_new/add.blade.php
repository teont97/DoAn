@extends('admin.master')
@section('content') 

<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div> 
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
<form action="{!!  route('admin.cate_new.postadd') !!}" method="POST">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="form-group">
 <label>Category Name</label>
<input class="form-control" name="txtCateName1" placeholder="Please Enter Category Name" />
</div>
<button type="submit" class="btn btn-default">Category Add</button>
 <button type="reset" class="btn btn-default">Reset</button>
 <form>
</div>
@endsection()