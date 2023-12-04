<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table>
                <thead>

                
                    <th>id</th>
                    <th>name</th>
                    <th>image</th>
                
</thead>
<tbody>
    
    <?php

    $con=mysqli_connect("localhost","root","","divya") or die('db not connected');
    $query="select * from emp";
    $sql=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($sql))
    {
    $id=$row[0];
    $name=$row[1];
    $image=$row[2];   
    

?>
<tr>
     <td><?php echo $id; ?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $image; ?></td>

<tr>
    <?php
    }
    ?>

</tbody>
</table>
</body>
</html>