@extends('admin.master')
@section('content') 
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                            {!! Session::get('flash_messages') !!}
                        </div>
                        @endif
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=0; ?>
                            @foreach($data as $iteam)
                            <?php 
                                $stt++;
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $iteam["name"]!!}</td>
                                <td>{!! $iteam["description"] !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.cate.getDelete',$iteam['id']) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.cate.getUpdate',$iteam['id']) !!}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
@endsection()    