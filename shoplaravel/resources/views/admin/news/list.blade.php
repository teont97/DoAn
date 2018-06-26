@extends('admin.master')
@section('content') 
        <!-- Page Content -->
 
                    <div class="col-lg-12">
                        <h1 class="page-header">Customer
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
                                <th style="width: 188px;">Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Keywords</th>
                                <th>View</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=0 ?>
                            @foreach($datanew as $iteam)
                            <?php  $stt++ ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!!$stt!!}</td>
                                <td>{!!$iteam->title!!}</td>
                                <td>
                                 <?php 
                                    $id_type= DB::table('users')->where('id',$iteam->id_user)->first();
                                    echo $id_type->name;
                                    ?>
                                </td>
                                <td><?php 
                                    $id_type= DB::table('loaitin')->where('id',$iteam->id_cate)->first();
                                    echo $id_type->name;
                                    ?></td>
                                <td>{!!$iteam->Keywords!!}</td>
                                <td>{!!$iteam->view!!}</td>
                                <td>{!!$iteam->created_at!!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.news.getdelete',$iteam->id) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.news.getupdate',$iteam->id) !!}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
           
@endsection
