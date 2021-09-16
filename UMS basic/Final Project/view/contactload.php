<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
      </head>  
      <body>  
                    
                     <table>  
                          <tr>  
                               <th>Name</th> 
                               <th>Email</th> 
                               <th>Contact Number</th> 
  
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["number"].'</td>

                               </tr>';  
                          }  
                          ?>  
                     </table>  

      </body>  
 </html>  