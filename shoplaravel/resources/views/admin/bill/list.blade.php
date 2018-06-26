@extends('admin.master')
@section('content')

<script type="text/javascript">
 function detail_order(id){
         $.get("../bill/detail_order/"+id,function(data){
                //console.log(data);
                 $("#list").html(data);
         });
     }; 
</script>
<style type="text/css">
    .Modal{
    background: none;
    border: none;
    margin: 0;
    padding: 0;
    font-size:18px;
    padding: 0px 2px 0px 2px;
    }
   .ModalDelete{
        
    }
</style>

                    <div class="col-lg-12">
                        <h1 class="page-header">Order
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12" id="notyfition">
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
                                <th style="text-align: center;">STT</th>
                                <th style="text-align: center;">Customer</th>
                                <th style="text-align: center;">Date Order</th>
                                <th style="text-align: center;">Total</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=0; ?>
                            @foreach($bill as $iteam)
                            <?php 
                                $stt++;
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                 <td><?php 
                    $customer=DB::table('customer')->where('id',$iteam->id_customer)->first();
                    echo $customer->name;
                ?></td>
                                <td>{!! $iteam->date_order!!}</td>
                                <td>{!! $iteam->total!!}</td>
        <?php $status=$iteam->status ?>
            @if($status==0)
<td class="center confirm"><label class="demo">Not Delivery
</label> </td>
            @elseif($status==1)
<td class="center confirm" ><label class="demo" style="color: green;">Successfully
</label> </td>
@endif
<td class="center"><!-- Button trigger modal -->
<button type="button" class="Modal ModalUpdate " data-toggle="modal" data-target="#ModalUpdate" data-catalog="{!!$iteam->id!!}" >
    <i class="fa fa-edit" style="color: #f78d26;"></i>
    </button>

<button type="button" class="Modal ModalView" data-toggle="modal" data-target="#ModalView" data-catalog="{!!$iteam->id!!}" onclick="detail_order({!!$iteam->id!!})" >
    <span><i class="fa fa-eye" style="color: #859669;"></i></span>
</button>
<button type="button" class="Modal ModalDelete" data-toggle="modal" data-target="#ModalDelete" data-catalog="{!!$iteam->id!!}" >
    <span><i class="fa fa-trash-o  fa-fw" style="color: #eb532a;"  ></i></span>
</button>
</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            <style type="text/css">
                .center a{
                    color: #434141;
                }
                #confirm{
                    color: #fff;
                    background-color:#337ab7; 
                    display: inline-block;
                    padding: 6px 12px;
                    margin-bottom: 0;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.42857143;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    border-radius: 4px;
                    border: 1px solid #ccc;
                }
                .confirm{
                    color: #fc0107;
                }
                .confirm a{
                    font-weight: bold;
                    color: #fff;
                    text-align: center; 
                }
                .modal-header .close{
                    margin-top: -20px;
                }
            </style>

<!--  Modal Confirm -->
<!-- Modal -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Confirmation of successful delivery
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            Are You Sure With Confirmation?
    </div >
<form id="myform" role="modal">
    <input type="hidden" name="input_hidden" id="input_hidden1" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confirm">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
    </div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Confirm -->



<!-- Modal View Detail -->
<div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f6f7f9;" >
        <h4 class="modal-title" id="exampleModalLongTitle" style="color: #1d2129; font-weight:bold; font-family: inherit; ">Order Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="list">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--    Modal Delete -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f6f7f9;">
        <h4 class="modal-title" id="exampleModalLongTitle" style="color: #1d2129; font-weight:bold; font-family: inherit; ">Delete Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="list">
           <label> </label>
      </div>
    <form id="formDelete" role="modal">
    <input type="hidden" name="id_Order" id="id_Order" value="" >
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" id="Delete">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    // delete iteam 
    jQuery('#dataTables-example tbody').on( 'click','button.ModalDelete', function(){
        var id_data = $(this).attr('data-catalog');
        var input = $('#id_Order').val(id_data); 
    });

    $("#ModalDelete").on("show.bs.modal", function(evt) {
        var id_data = $('#id_Order').val();
        var string = "Are you sure you want to delete the order with id"+" "+id_data+" "+ "from the list?" ;
        $('.modal-body label').html(string);
    });
    $('#Delete').click(function(){ 
        var id = $('#id_Order').val();
        //console.log(id);;
        var string= "Bạn Đã Xóa Thành Công"
      $.ajax({
            url: "/shoplaravel/admin/bill/delete",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success:function(data){
                $('#ModalDelete').modal('hide');
                location.reload();
               //  $('#notyfition').html(string);
                //$("#dataTables-example").ajax.reload();
          
        }   
         });
          });

        //delete iteam
</script>

<!-- /Modal Confirm -->

<script type="text/javascript">
    //update status
    jQuery('#dataTables-example tbody').on( 'click','button.ModalUpdate', function(){
        var id_data = $(this).attr('data-catalog');
        var input = $('#input_hidden1').val(id_data);     
    });
</script>
<script type="text/javascript">
    $('#confirm').click(function(){ 
        var id = $('#input_hidden1').val();

      $.ajax({
            url: "/shoplaravel/admin/bill/update",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success:function(data){
                $('#exampleModal').modal('hide');
                location.reload();

                //$("#dataTables-example").ajax.reload();
        }   
    });
    });
</script>
@endsection    