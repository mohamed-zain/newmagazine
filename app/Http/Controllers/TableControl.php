<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;

class TableControl extends Controller
{       
	
		public function ContentFromOtherTable(Request $Request)
		{
			$arrayData = $Request->all();
			$PkParentTable           = $arrayData['PkParentTable'];
			$ValuePkParentTable      = $arrayData['ValuePkParentTable'];
            $ChildTable              = $arrayData['ChildTable'];
            $PkValueOption           = $arrayData['PkValueOption'];
			$NamefeildOption         = $arrayData['NamefeildOption'];
			$IDChild                 = $arrayData['IDChild'];
			
			
			$ContentTable = DB::table($ChildTable)->where($PkParentTable,'=',$ValuePkParentTable)->get();
			$string = '<option value="0">إختر الـ...</option>';
			
			foreach($ContentTable as $Content){
                $string .= '<option id="'.$IDChild.$Content->$PkValueOption.'" value="'.$Content->$PkValueOption.'">'.$Content->$NamefeildOption.'</option>';
			}

			return json_encode(array('error' =>0,'message' =>"ok",'string'=>$string));
		}

		public  function uploadFile(Request $Request){
		
		    $arrayData = $Request->all();
            $table = $arrayData['table'];
           
           //if request containing file.
            if(array_key_exists("file".$arrayData['id'],$arrayData)){
             
              $file = $Request->file("file".$arrayData['id']);
			  $fileName = $file->getClientOriginalName();
			  $filePath = '';
			  /*$file->move("upload",$fileName);*/
			  if($Request->hasFile('file'.$arrayData['id'])){
                $file = "file".$arrayData['id'];
				$filePath = $Request->$file->store('attach','public');
			  }
			  
			  $arrayData['file'.$arrayData['id']] = $filePath;
              $arrayData['fileName'] = $fileName;

               $uploadFile = DB::table($table)->where($arrayData['primary'],'=',$arrayData['id'])->update(array('file' => $filePath,"fileName"=>$fileName));
             
				return '<a href="'.url('/storage/app/public/'.$filePath).'" target="_blank">'.$fileName.'</a>';
            }

            
      

		}//end of uploadFile fun.

		  public  function insertTab(Request $Request){
		
		    $arrayData = $Request->all();
            $table = $arrayData['table'];
            unset($arrayData['table']);
            unset($arrayData['_token']);
          
           //if request containing file.
            if(array_key_exists("file",$arrayData)){
              
              $file = $Request->file("file");
			  $fileName = $file->getClientOriginalName();
			  $filePath = '';
              /*$file->move("upload",$fileName);*/
			  if($Request->hasFile('file')){
				$file = "file";
				$filePath = $Request->$file->store('attach','public');
				
			  } 
			  $arrayData['file'] = $filePath;
			  $arrayData['fileName'] = $fileName;
             
            }


            if(array_key_exists("password",$arrayData) or $table == "users")
               $arrayData['password'] =  bcrypt('123456');

                
   
             DB::table($table)->insertGetId($arrayData);
            
             return redirect($table);
            


		}//end of insertTab fun.
		  
		public  function Deleting(Request $request){
			 
	            $table   = $request->table;
	            $pk      = $request->pk;
	            $record  = $request->record;
            
				 $Query = "DELETE FROM ".$table." WHERE ".$pk." = ".$record;
				 
				 $result = DB::delete($Query);
				 
				 if($result)
					 return json_encode(array('error' =>0,'message' =>"تم عملية الحذف بنجاح "));
				 else 
					 return json_encode(array('error' =>1,'message' =>"فشل لا يمكن اتمام العملية "));
			 
		}//end of deleting fun.
		  
		  
		public  function Updating(Request $request){

			$table   = $request->table;
			$pk      = $request->pk;
			$record  = $request->record;
            $str     = $request->fields;

			$string = ' ';
		    $c = 1;
			$colum = [];
			
			$fields = explode("+",$str);
            
            $file = 0;

		    foreach($fields as $key => $val){
				$col = explode("=>",$val);
				$colum[$col[0]] = $col[1];
                //var_dump($col);
                if($col[0] == "file")
			       $file++;
                
//$fieldValue = $col[1];or $table == "users"

                if($col[0] == "password" )
					$col[1] = bcrypt('123456');
					//var_dump($col);
				if($c < count($fields)){
				   $string.= $col[0]." = "."'".$col[1]."', ";
				}
		        else
					$string.= $col[0]." = "."'".$col[1]."'";		
		        
		     $c++;
			
			}//end of foreach loop.
			   
			    $mainFileName = '';

                if($file > 0){

				 $Query = "SELECT file FROM ".$table." WHERE ".$pk." = ".$record;
				 
				 $OBJ = DB::select($Query);
                 
                 $mainFileName =  $OBJ[0]->file;
                
                }

			$Query = "UPDATE ".$table." SET ".$string." WHERE ".$pk." = ".$record;
			 
			$result = DB::update($Query);
			  
			    if($file > 0){

				 $Query = "UPDATE ".$table." SET file = '".$mainFileName."' WHERE ".$pk." = ".$record;
				 
				 $res = DB::update($Query);
              
                }

			 if($result)
				 return json_encode(array('error' =>0,'fields'=>$colum,'message' =>"تم عملية التعديل نجاح "));
			 else 
				 return json_encode(array('error' =>1,'message' =>"فشل لا يمكن اتمام العملية "));
			 
		  }//end of fun updating.
		  
		/****************************************************************************************
		 ****************************************************************************************
		 How to use function SelectViewDataTable this function content multipale option you can use 
		 them if we need that let me show you how:
           
            1- First creat object of class TableControl
                $Object = new TableControl();

            2- Sucound call fun SelectViewDataTable like this
		        
		        $Object->SelectViewDataTable(
                                       
                                        //Frist attribuate is very required.
	                                   "Table Name",
                                        **************************************************************
	                                    //sucound attribuate is array content attribuate of your table and its very required and can content all or less of your attribuate its optional.
	                                   
	                                    $data = array(
	                                    	   "feild1" =>'lable can view meaning of filed',
	                                    	   "feild2" =>'lable can view meaning of filed',
	                                    	    ...
	                                    	   "feildN" =>'lable can view meaning of filed'
							             ),
                                        ***************************************************************
	                                    //Third attribuate this use for get all recuord on table and it optional.
	                                    $all = "*",
                                        ***************************************************************
                                        //Fourd attribuate and this a primary key name of table and use whene you wont control of data in table.

	                                    $primarykey = array('pkID'),
	                                    **************************************************************
	                                    //Fife attribuate content optional condition use when you wont get specific recourd of table.
	                                    $where = array('WHERE somethig = ' => 'value of something'),
                                        
                                        **************************************************************
	                                    //six attribuate and tis use when table content relation with other table and using like this:

	                                    $forenkeyTable = array('feild2'=>array('TableName of forenkey','Name of filed wont replace with forenkey')),
                                        
                                        **************************************************************
	                                    //last option and this is optional and use for create form insert of table and content name of fiels of table and data type of fileds and use like this:
                                 
	                                    $formfeilds = array("feild1" =>'text',"feild2" =>'date',...)
	                                
	                                );//end of fun.
		 ****************************************************************************************
		 ***************************************************************************************/  

		public function SelectViewDataTable($table,$data,$all = "*",$PK = array(),$where = array(),$forenkeyTable = array(),$formfeilds = array(),$CanNotUpdate = array(),$CanNotShow = array(),$childForenkeyTable = array()){
			
		 $query = 'SELECT ';
		 
		 $col    = [];
		 
		 $lables = [];
		 
		 foreach($data as $key => $val){
		    $col[]    = $key;
		    $lables[] = $val; 	
			
			}
		 
		 	
		 $forenTable = [];
		 
		 foreach($forenkeyTable as $forenkey => $forenVal){
		    $i = 0;
			foreach($forenVal as $ky => $Val){
		       $forenTable[$forenkey][$i] = $Val; 
		           $i++;
			}
			
		}//end of get relation table.
		 //print_r($forenTable);
		 
		 if($all == '*')
		    $query .= ' * FROM '.$table;
		 else{
		  	   $c = 0;
		    while($c < count($col)){
				
				if($c+1 < count($col))
				    $query .= $col[$c].',';
				else
					$query .= $col[$c];
				
				$c++;
			}
			
			$query .= ' FROM '.$table;
		 }
		 
		 if(count($where) > 0){
			
			foreach($where as $key => $val)
			    $query .= ' '.$key.' '.$val;
		 }
		 		
        $string ='';

        if(count($formfeilds)){

		$string ='<div class="dt-buttons text-right" style="margin-bottom: 20px;">
						<a href="#"  title="إضافة سجل" class="insert btn btn-round btn-primary buttons-copy buttons-html5" 
													data-toggle="modal" data-target="#Create'.$table.'">
													<i class="material-icons">إضافة</i>
							
						</a>
					
		           </div>
			    <!-- Modal Create -->

		              <div class="modal hide fade text-right" id="Create'.$table.'"  data-backdrop="static" data-backdrop="false" tabindex="-1" role="dialog" >
		                <div class="modal-dialog" role="document">
		                  
		                  <div class="modal-content">
		                  <form class="create_'.$table.'_form"  enctype="multipart/form-data" method="post" action="'.url('/Controller/insertTab').'" onsubmit="return insertTab(this);">
		                   '.csrf_field().'
		                    <div class="modal-header text-left" >
		                      <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
		                      <span aria-hidden="true">&times;</span></button>
		                      <h4 class="modal-title" id="myModalLabe">
                                   إضافة سجل جديد
		                      </h4>

		                    </div>
							
		                    <div class="modal-body">
		                      <div align="center" id="create_'.$table.'"></div>
							  <input type="hidden" name="table" value="'.$table.'">
		                     ';
		     $j = 0;
			 
			 $fields ='';

		while($j < count($col)){
				 
			if(array_key_exists($col[$j],$forenTable)){

				if(array_key_exists($col[$j],$formfeilds)){			
						$string .= ' <div class="form-group form-float">
										<label for="'.$col[$j].$PK[0].'">'.$lables[$j].'</label>';

								if(array_key_exists($col[$j],$childForenkeyTable))
										$string .= '<select label="select" onchange="getSubContentFromOtherTable(this,`'.$col[$j].'`,`'.$childForenkeyTable[$col[$j]][0].'`,`'.$childForenkeyTable[$col[$j]][1].'`,`'.$childForenkeyTable[$col[$j]][2].'`,`'.$childForenkeyTable[$col[$j]][1].$PK[0].'`)" class="form-control span4"  name="'.$col[$j].'" id="'.$col[$j].$PK[0].'">';
								else
										$string .= '<select  label="select" class="form-control span4"  name="'.$col[$j].'" id="'.$col[$j].$PK[0].'">';
										
										$string .= '<option value="0">إختر الــ... </option>';
											
							$OBJ = DB::select('SELECT * FROM '.$forenTable[$col[$j]][0].' ORDER BY '.$forenTable[$col[$j]][1].' ASC');
							
							foreach($OBJ as $Row){

								$Row = (array) $Row;

								$string .= ' <option value="'.$Row[$col[$j]].'">'.$Row[$forenTable[$col[$j]][1]].'</option>';
							}//end loop.
                
						$string .= '</select></div>';	

						if(array_key_exists($col[$j],$childForenkeyTable))
						$string .= '<div class="form-group form-float">
										<select  name="'.$childForenkeyTable[$col[$j]][1].'" class="form-control span4" id="'.$childForenkeyTable[$col[$j]][1].$PK[0].'">
										<option value="0">إختر الــ... </option>
										</select>
									</div><!-- end child div select -->';
				
				}//end if feild in form to insert.
                    
					
			}elseif(array_key_exists($col[$j],$formfeilds)){
				  
				if(is_array($formfeilds[$col[$j]])){
				
					$string .= '<input class="form-control span4" type="'.$formfeilds[$col[$j]][0].'" value="'.$formfeilds[$col[$j]][1].'" name="'.$col[$j].'" id="'.$col[$j].$PK[0].'">';
				
				
				}elseif($formfeilds[$col[$j]] == 'textarea')
                    $string .= ' <div class="form-group form-float">
									<label for="'.$col[$j].$PK[0].'">'.$lables[$j].'</label>
										<textarea class="form-control span4" rows="4" name="'.$col[$j].'" id="'.$col[$j].$PK[0].'"></textarea>
								</div>';
                else
					$string .= ' <div class="form-group form-float">
									<label for="'.$col[$j].$PK[0].'">'.$lables[$j].'</label>
										<input class="form-control span4" type="'.$formfeilds[$col[$j]].'" name="'.$col[$j].'" id="'.$col[$j].$PK[0].'">
								</div>';

			}//end if feild in form to insert.

				if($j+1 < count($col)){
					
					if(array_key_exists($col[$j],$formfeilds))
						if(array_key_exists($col[$j],$childForenkeyTable))
							$fields.= $col[$j].'+'.$childForenkeyTable[$col[$j]][1].'+';
						else				
						$fields.= $col[$j].'+';
				}else{

					if(array_key_exists($col[$j],$formfeilds))
						if(array_key_exists($col[$j],$childForenkeyTable))
							$fields.= $col[$j].'+'.$childForenkeyTable[$col[$j]][1];
						else				
							$fields.= $col[$j];
				}	

			 $j++;//counter of while loop.
			 
			}//end of while loop. 
		                    $string .= '
							</div><!-- end Body Modal -->

		                    <div class="modal-footer">
		                      <input label="'.$table.'+'.$PK[0].'+'.$fields.'" id="submit" type="submit" class="btn btn-float btn-outline-cyan" value="حفظ">
		                      <button type="button" class="btn btn-float btn-float btn-outline-pink" data-dismiss="modal">الغاء</button>
		                      
							</div>
		                    </form>
		                  </div><!-- end modal-content-->
		               </div><!-- modal-dialog-->
		              </div><!-- end of modle -->
										
				';

		}//end of  

		 $string .='<div align="center" id="delete_'.$table.'"></div>
                  <div class="table-responsive">
		           <table class="table table-bordered table-striped table-hover dataTable" id="myRecord">
		           <thead>
				           <tr>
					           <th>رقم</th>';
		    
			$x = 0;

			while($x < count($lables)){

				if(count($CanNotShow) > 0){

					if(!in_array($col[$x],$CanNotShow))
						$string .= '<th >'.$lables[$x].'</th>';
				}else
					$string .= '<th >'.$lables[$x].'</th>';
	
					$x++;
			}
			
		 if(count($PK) > 0){
			 
			 	 $string .= '<th style="text-align:center">التعديل</th><th style="text-align:center" >الحذف</th>';
		 
		 }
			
		 
		 $string .= '</tr></thead><tbody>';
		  
		 
		 $Obj = DB::select($query);
		
		    $check = false;

			$row = array();

		 $i = 1;
		   
		 foreach($Obj as $key => $row){
		 	 
              $row = (array) $row;
              //dd($row);
			  $check = true;
			  
			  $string .= '<tr class = "row'.$table.$row[$PK[0]].'"><td style="text-align:right">'.$i.'</td>'; 
		    
			   $c = 0;
			
			while($c < count($col)){
			 
			    if(array_key_exists($col[$c],$forenTable)){

			        $OBJ = DB::select("SELECT * FROM ".$forenTable[$col[$c]][0]." WHERE ".$col[$c]." = '".$row[$col[$c]]."'");

					foreach($OBJ as $Row2){

					$Row2 = (array) $Row2;
					
			            $string .= '<td class = "'.$col[$c].$row[$PK[0]].'" style="text-align:right">'.$Row2[$forenTable[$col[$c]][1]].'</td>';
			        }//end of loop.	
					
			    }else{

			   	    if($col[$c] == "file")
                      $string .= '<td class = "'.$col[$c].$row[$PK[0]].'" style="text-align:right"><a href="'.url('/storage/app/public/'.$row[$col[$c]]).'" target="_blank">'.$row["fileName"].'</a></td>';
			  
			   	    elseif(count($CanNotShow) > 0){

					  	if(!in_array($col[$c],$CanNotShow))
							$string .= '<td class = "'.$col[$c].$row[$PK[0]].'" style="text-align:right">'.$row[$col[$c]].'</td>';

					}else
						$string .= '<td class = "'.$col[$c].$row[$PK[0]].'" style="text-align:right">'.$row[$col[$c]].'</td>';

			    }//end else.

			   $c++;

			   }


		       if(count($PK) > 0){ 

			     //data-backdrop="static" 
				$string .='

		            <td align="center" class="upd_field_'.$table.$row[$PK[0]].'">
						<a href="#" id="'.$row[$PK[0]].'" title="تعديل السجل" class="update btn btn-simple btn-info btn-icon btn-icon-mini btn-round" 
									                data-toggle="modal" data-target="#my'.$table.$row[$PK[0]].'">
							<i class="zmdi zmdi-edit"></i>
						</a>
					</td>   
					<td  class="del_field_'.$table.$row[$PK[0]].'">
						<a align="center" href="#" label="'.$table.'+'.$PK[0].'" onclick="return deleteTab(this);" id="'.$row[$PK[0]].'" title="حذف السجل" class="delete btn btn-simple btn-danger btn-icon btn-icon-mini btn-round">
						   <i class="zmdi zmdi-delete"></i>
						   
						</a>
					      <!-- Modal -->
		              <div  class="modal text-right fade " id="my'.$table.$row[$PK[0]].'"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel'.$row[$PK[0]].'">
		                <div class="modal-dialog" role="document">
		                  
		                  <div class="modal-content">
		                  <form id="update_'.$table.$row[$PK[0]].'_form"  enctype="multipart/form-data" method="post" onsubmit="return false;" action="">
		                   '.csrf_field().'

		                    <input type="hidden" name="primary" value="'.$PK[0].'">
		                    <input type="hidden" name="id" value="'.$row[$PK[0]].'">
		                    <input type="hidden" name="table" value="'.$table.'">

		                    <div class="modal-header">
		                      <button type="button" class="close pull-right" data-dismiss="modal"  aria-label="Close">
		                      <span aria-hidden="true">&times;</span></button>
		                      <h4 class="modal-title" id="myModalLabe'.$row[$PK[0]].'">تعديل سجل </h4>

		                    </div>
							
		                    <div class="modal-body">
		                      <div align="center" id="update_'.$table.$row[$PK[0]].'"></div>
							    
		                     ';
		     $j = 0;
			 
			 $fields ='';

			 while($j < count($col)){
				 
				if(array_key_exists($col[$j],$forenTable)){
					
					$OBJ = DB::select("SELECT * FROM ".$forenTable[$col[$j]][0]." WHERE ".$col[$j]." = '".$row[$col[$j]]."'");
//var_dump($OBJ);
					foreach($OBJ as $Row)
							$Row = (array) $Row;
							
					$string .= ' <div class="form-group">
									<label for="'.$col[$j].$row[$PK[0]].'">'.$lables[$j].'</label>';

								if(array_key_exists($col[$j],$childForenkeyTable))
										 $string .= '<select label="select" onchange="getSubContentFromOtherTable(this,`'.$col[$j].'`,`'.$childForenkeyTable[$col[$j]][0].'`,`'.$childForenkeyTable[$col[$j]][1].'`,`'.$childForenkeyTable[$col[$j]][2].'`,`'.$childForenkeyTable[$col[$j]][1].$row[$PK[0]].'`)" class="form-control span4"  name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">';
								else
										 $string .= '<select  label="select" class="form-control span4"  name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">';
										 
								$string .= '<option id="'.$col[$j].$row[$PK[0]].$row[$col[$j]].'" value="'.$row[$col[$j]].'">'.$Row[$forenTable[$col[$j]][1]].'</option>';
											  
						$OBJ = DB::select('SELECT * FROM '.$forenTable[$col[$j]][0].' ORDER BY '.$forenTable[$col[$j]][1].' ASC');
						
					    foreach($OBJ as $Row){

					    	$Row = (array) $Row;

				            $string .= ' <option id="'.$col[$j].$row[$PK[0]].$Row[$col[$j]].'" value="'.$Row[$col[$j]].'">'.$Row[$forenTable[$col[$j]][1]].'</option>';

					    }//end loop.
										         			
					$string .= '</select></div>';	
				
				}else{

			   	    if($col[$j] == "file"){
                       
                       $string .= ' <div class="form-group">
		                       <label for="'.$col[$j].$row[$PK[0]].'">'.$lables[$j].'</label>
		                         <input onchange="return uploadFile($(this));" label="'.$table.$row[$PK[0]].'" class="form-control span4 " type="file" value="'.$row[$col[$j]].'" name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">
						 </div>';
			 
					}elseif(count($formfeilds) > 0 && array_key_exists($col[$j],$formfeilds)){

						if(is_array($formfeilds[$col[$j]])){
				
							$string .= '<input class="form-control span4" type="'.$formfeilds[$col[$j]][0].'"  value="'.$row[$col[$j]].'" name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">';
						
						
						}elseif($formfeilds[$col[$j]] == 'textarea')
                            $string .= ' <div class="form-group">
					                       <label for="'.$col[$j].$row[$PK[0]].'">'.$lables[$j].'</label>
					                         <textarea class="form-control span4" rows="4" value="" name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">'.$row[$col[$j]].'</textarea>
									 </div>';
						else
						 $string .= ' <div class="form-group">
					                       <label for="'.$col[$j].$row[$PK[0]].'">'.$lables[$j].'</label>
					                         <input class="form-control span4" type="'.$formfeilds[$col[$j]].'" value="'.$row[$col[$j]].'" name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">
									 </div>';

					}elseif(!in_array($col[$j],$CanNotUpdate)){				 
						 $string .= ' <div class="form-group">
					                       <label for="'.$col[$j].$row[$PK[0]].'">'.$lables[$j].'</label>
					                         <input class="form-control span4" type="text" value="'.$row[$col[$j]].'" name="'.$col[$j].$row[$PK[0]].'" id="'.$col[$j].$row[$PK[0]].'">
									 </div>';
					}

			}//end else.


				if($j+1 < count($col)){
					
					if(array_key_exists($col[$j],$childForenkeyTable))
							$fields.= $col[$j].'+'.$childForenkeyTable[$col[$j]][1].'+';
						else				
							$fields.= $col[$j].'+';
				}else{

					if(array_key_exists($col[$j],$childForenkeyTable))
						$fields.= $col[$j].'+'.$childForenkeyTable[$col[$j]][1];
					else				
						$fields.= $col[$j];
				}		
		     $j++;
			
			} 
		                    $string .= '
							</div>

		                    <div class="modal-footer">
		                      <input label="'.$table.'+'.$PK[0].'+'.$fields.'" type="button" id ="'.$row[$PK[0]].'" onclick="updateTab(this);" class="sub_'.$table.$row[$PK[0]].' btn btn-float btn-outline-cyan" value="حفظ" style="driection:rtl">
		                      <button type="button" class="btn btn-float btn-float btn-outline-pink" data-dismiss="modal">الغاء</button>
		                      
							</div>
		                    </form>
		                  </div><!-- end modal-content-->
		               </div><!-- modal-dialog-->
		              </div><!-- end of modle -->
										
						
				</td>';
				
				}
				
				$string .= '</tr>';
				
		     $i++;
		   }

		$string .= '</tbody></table></div>';
		    
			if($check || count($formfeilds) > 0){
				 
				return $string;
				
			}else{

				return false;
			}
			
		  }//end of function view control table;
 
		public function ReportTable($table,$data,$all = "*",$PK = array(),$where = array(),$forenkeyTable = array()){
			
		 $query = 'SELECT ';
		 
		 $col    = [];
		 
		 $lables = [];
		 
		 
		 foreach($data as $key => $val){
		    $col[]    = $key;
		    $lables[] = $val; 	
			
			}
			
		 $forenTable = [];
		 
		 foreach($forenkeyTable as $forenkey => $forenVal){
		    $i = 0;
			foreach($forenVal as $ky => $Val){
		       $forenTable[$forenkey][$i] = $Val; 
		           $i++;
			}
			
		}//end of get relation table.
		 //print_r($forenTable);
		 
		 if($all == '*')
		    $query .= ' * FROM '.$table;
		 else{
		  	   $c = 0;
		    while($c < count($col)){
				
				if($c+1 < count($col))
				    $query .= $col[$c].',';
				else
					$query .= $col[$c];
				
				$c++;
			}
			
			$query .= ' FROM '.$table;
		 }
		 
		 if(count($where) > 0){
			
			foreach($where as $key => $val)
			    $query .= ' '.$key.' '.$val;
		 }
		 
		 $string ='<div align="center" id="delete_'.$table.'"></div>
		           <table class="table table-responsive">
				       <thead>
					        <tr>
							   <th nowrap>رقم</th>';
		    
			$x = 0;
			while($x < count($lables)){
				$string .= '<th >'.$lables[$x].'</th>';
				$x++;
			}
			
		 if(count($PK) > 0)
			 $string .= '';
		 
			
		 
		 $string .= '</tr></thead><tbody>';
		  
		 
		 $Obj = DB::select($query);
		 
		 $check = false;

		 
		 $i = 1;
		   
		foreach($Obj as $row){

				$row = (array) $row;
			  
			  $check = true;
			  
			  $string .= '<tr class = "row'.$table.'"><td>'.$i.'</td>'; 
		    
			   $c = 0;
			
			while($c < count($col)){
			
			    if(array_key_exists($col[$c],$forenTable)){
			        
			        $OBJ = DB::select("SELECT * FROM ".$forenTable[$col[$c]][0]." WHERE ".$col[$c]." = '".$row[$col[$c]]."'");
					
					foreach($OBJ as $Row)
					$Row = (array) $Row;

						$string .= '<td  class = "'.$col[$c].'" style="text-align:right">'.$Row[$forenTable[$col[$c]][1]].'</td>';			
					
			   }else
				   $string .= '<td  class = "'.$col[$c].'" style="text-align:right">'.$row[$col[$c]].'</td>';
			      	   
			   $c++;
			}
		       
		       if(count($PK) > 0){ 
			 	}
				
				$string .= '</tr>';
				
		     $i++;
		   }
		   
		$string .= '</tbody></table>';
		    
			if($check){
				
				echo $string;
				return true;
				
			}else{
				
				return false;
				
			}//end of else.
			
		  }//end of function view control table;
     
}//end of class.
