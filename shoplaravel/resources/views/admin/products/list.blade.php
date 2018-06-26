@extends('admin.master')
@section('content');
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>  
                                <th>Unit Price</th>
                                <th>Promotion Price</th>
                                <th>images</th>
                                <th>Unit</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=0; ?>

                        @foreach($data as $iteam)
                            <?php $stt++ ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $iteam->name !!}</td>
                                <td>
                                    @if($iteam->id_type == 0)
                                        {!! none !!}
                                         
                                    
                                    @else
                                    <?php 
                                    $id_type= DB::table('type_products')->where('id',$iteam->id_type)->first();
                                    echo $id_type->name;
                                    ?>
                                
                                    
                                    @endif
                                    
                                        
                                    </td>
                                
                                <td>{!! $iteam->unit_price !!}</td>
                                <td>{!! $iteam->promotion_price!!}</td>
                                <td><img  style=" width: 50px;height: 50px;border:1px solid #ccc;" src="{!! asset('resources/views/admin/UploadImages/'.$iteam->images) !!} " alt="IMG-PRODUCT"></td>
                                <td>{!! $iteam->unit !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.products.getdelete',$iteam->id) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.products.getdelete',$iteam->id) !!}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection
