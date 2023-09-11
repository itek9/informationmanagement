<?php   
 include 'display.php';  
 $query = "select * from event";  
 $run = mysqli_query($conn,$query);  
 ?>  

<html>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #D6EEEE;
    }
    </style>

<table>
    <tr>
      <th>Event</th>
      <th>Category</th>
      <th>Team 1</th>
      <th>Team 2</th>
      <th>Location</th>
    </tr>

    <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr>  
                          <td>".$i++."</td>  
                               <td>".$result['id']."</td>  
                               <td>".$result['Event']."</td>  
                               <td>".$result['Team1']."</td>  
                               <td>".$result['Team2']."</td>  
                               <td>".$result['Location']."</td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  


</html>