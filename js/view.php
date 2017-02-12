<html>
  <head>
  <link rel="stylesheet" href="styles.css">
  </head>
  <body>
   <center>
    <table style="border: 2px solid red">
     <tr>
    	<th>NAME</th>
    	<td>EMAIl</td>
    	<td>PHONE</td>
    	<td>COMPANY</td>
      <td>SUBJECT</td>
      <td>MESSAGE</td>
    	</tr>
    	
    	<?php 
    		include_once('db.php');
    		$temparray  = $con->query('select * from info');
    		while($temp = $temparray->fetch_array()){
    			echo "<tr style="border:1">";
    			echo "<td>".$temp[0]."</td>";
    			echo "<td>".$temp[1]."</td>";
    			echo "<td>".$temp[2]."</td>";
    			echo "<td>".$temp[3]."</td>";
          echo "<td>".$temp[4]."</td>";
          echo "<td>".$temp[5]."</td>";
    			echo "</tr>";
    		}	
    	?>
    	   
    	</tr>
    </table>
    </center>
  </body>
</html>