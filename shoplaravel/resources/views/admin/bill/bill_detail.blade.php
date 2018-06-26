 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th style="text-align: center;">Id_Bill</th>
                                <th style="text-align: center;">Products</th>
                                <th style="text-align: center;">Quantity</th>
                                <th style="text-align: center;">Unit_Price</th>
                                <th style="text-align: center;">Create_at</th>
                            </tr>
                        </thead>
  						<tbody>
  						
  							@foreach($detail1 as $iteam)
  							<tr class="odd gradeX" align="center">
							<td>{!! $iteam->id_bill!!}</td>
							<td><?php 
             $products=DB::table('products')->where('id',$iteam->id_products)->first();
                    echo $products->name;
                ?></td>
							<td>{!! $iteam->quantity!!}</td>
							<td>{!! $iteam->unit_price!!}</td>
							<td>{!! $iteam->created_at!!}</td>
						</tr>
							@endforeach

                        </tbody>

 </table>