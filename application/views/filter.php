<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
	  $connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");  
	  mysqli_set_charset($connect,'utf8');
      $output = '';  
      $query = "  
           SELECT * FROM ASSET  
           WHERE RECEIVEDATE BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ASSETID</th>  
                     <th width="20%">REFERID</th>  
                     <th width="43%">ASSETNAME</th>  
                     <th width="10%">RECEIVEDATE</th>  
					 <th width="12%">SPEC</th>  
					 <th width="10%">UNITNAME</th> 
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["ASSETID"] .'</td>  
                          <td>'. $row["REFERID"] .'</td>  
                          <td>'. $row["ASSETNAME"] .'</td>  
                          <td> '. $row["RECEIVEDATE"] .'</td>  
						  <td>'. $row["SPEC"] .'</td> 
						  <td>'. $row["UNITNAME"] .'</td>   
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="6">No Data Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
