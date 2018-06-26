@extends('admin.master')
@section('content') 
  
<style type="text/css">
    .page-header{
        margin: 10px 0 20px;
    }
</style>            
                <div class="row" >
                    <div class="col-lg-12" >
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!  route('admin.products.getlist') !!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                            <div class="huge">{!! $customer !!}</div>
                                        <div>New Customer!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!  route('admin.customer.getlist') !!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{!! $bill !!}</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!  route('admin.bill.getlist') !!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{!! $products !!}</div>
                                        <div>Total Products!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!  route('admin.products.getlist') !!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                               <canvas id="line-chart" width="600" height="395"></canvas>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->  
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Notifications Panel
                            </div>
                            
        
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">
                              
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-comment fa-fw"></i> New Comments
                                <span class="pull-right text-muted small"><em>
                                    {!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_customer->created_at))->diffForHumans() !!}
                                </em>
                                </span>
                                    </a>
                                
                                    <a href="{!!  route('admin.customer.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-twitter fa-fw"></i> New Customers
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_customer->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>
                                    <a href="{!!  route('admin.bill.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-shopping-cart fa-fw"></i> New Orders
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($notity1->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>
                                    <a href="{!!  route('admin.news.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-tasks fa-fw"></i> New Blog
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_blog->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>
                                    <a href="{!!  route('admin.products.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-upload fa-fw"></i> New Products
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_products->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>
                                    <a href="{!!  route('admin.user.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i> New Users
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_user->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a> 
                                     <a href="{!!  route('admin.user.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i> New Users
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_user->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>    
                                     <a href="{!!  route('admin.user.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i> New Users
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_user->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>    
                                     <a href="{!!  route('admin.user.getlist') !!}" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i> New Users
                                            <span class="pull-right text-muted small"><em>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($note_user->created_at))->diffForHumans() !!}</em>
                                            </span>
                                    </a>                             
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                            </div>
                        
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                      
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
    <!-- input value data Users -->
<input type="hidden" name="demo" id="input1" value="<?php echo($data1); ?>">
<input type="hidden" name="demo" id="input2" value="<?php echo($data2); ?>">
<input type="hidden" name="demo" id="input3" value="<?php echo($data3); ?>">
<input type="hidden" name="demo" id="input4" value="<?php echo($data4); ?>">
<input type="hidden" name="demo" id="input5" value="<?php echo($data5); ?>">
<input type="hidden" name="demo" id="input6" value="<?php echo($data6); ?>">
<input type="hidden" name="demo" id="input7" value="<?php echo($data7); ?>">
<input type="hidden" name="demo" id="input8" value="<?php echo($data8); ?>">
<input type="hidden" name="demo" id="input9" value="<?php echo($data9); ?>">
<input type="hidden" name="demo" id="input10" value="<?php echo($data10); ?>">
<input type="hidden" name="demo" id="input11" value="<?php echo($data11); ?>">
<input type="hidden" name="demo" id="input12" value="<?php echo($data12); ?>">
 <!-- input value data Users -->
<input type="hidden" name="demo" id="input_user1" value="<?php echo($data_users1); ?>">
<input type="hidden" name="demo" id="input_user2" value="<?php echo($data_users2); ?>">
<input type="hidden" name="demo" id="input_user3" value="<?php echo($data_users3); ?>">
<input type="hidden" name="demo" id="input_user4" value="<?php echo($data_users4); ?>">
<input type="hidden" name="demo" id="input_user5" value="<?php echo($data_users5); ?>">
<input type="hidden" name="demo" id="input_user6" value="<?php echo($data_users6); ?>">
<input type="hidden" name="demo" id="input_user7" value="<?php echo($data_users7); ?>">
<input type="hidden" name="demo" id="input_user8" value="<?php echo($data_users8); ?>">
<input type="hidden" name="demo" id="input_user9" value="<?php echo($data_users9); ?>">
<input type="hidden" name="demo" id="input_user10" value="<?php echo($data_users10); ?>">
<input type="hidden" name="demo" id="input_user11" value="<?php echo($data_users11); ?>">
<input type="hidden" name="demo" id="input_user12" value="<?php echo($data_users12); ?>">
@endsection
<script type="text/javascript">
    window.onload = function () {
        // data order //
        var data1= $('#input1').val();
        var data2= $('#input2').val();
        var data3= $('#input3').val();
        var data4= $('#input4').val();
        var data5= $('#input5').val();
        var data6= $('#input6').val();
        var data7= $('#input7').val();
        var data8= $('#input8').val();
        var data9= $('#input9').val();
        var data10= $('#input10').val();
        var data11= $('#input11').val();
        var data12= $('#input12').val();
        // data user //
        var data_user1= $('#input_user1').val();
        var data_user2= $('#input_user2').val();
        var data_user3= $('#input_user3').val();
        var data_user4= $('#input_user4').val();
        var data_user5= $('#input_user5').val();
        var data_user6= $('#input_user6').val();
        var data_user7= $('#input_user7').val();
        var data_user8= $('#input_user8').val();
        var data_user9= $('#input_user9').val();
        var data_user10= $('#input_user10').val();
        var data_user11= $('#input_user11').val();
        var data_user12= $('#input_user12').val();
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChart = document.getElementById('line-chart');
        var myChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "June","July","Aug","Sep","Oct","Nov","Dec"],
                datasets: [
                    {
                        label: 'Sales',
                        data: [data1,data2,data3,data4,data5,data6,data7,data8,data9,data10,data11,data12],
                        backgroundColor: 'rgba(0, 128, 128, 0.3)',
                        borderColor: 'rgba(0, 128, 128, 0.7)',
                        borderWidth: 1
                    },
                    {
                        label: 'Users',
                        data: [data_user1,data_user2,data_user3,data_user4, data_user5, data_user6,data_user7,data_user8,data_user9,data_user10,data_user11,data_user12],
                        backgroundColor: 'rgba(0, 128, 128, 0.7)',
                        borderColor: 'rgba(0, 128, 128, 1)',
                        borderWidth: 1
                    }


                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
            }
        });
    };
</script>