<!DOCTYPE html>
<?php 

include("db.php");
$uname = $_POST["from"];
$tname = $_POST["to"];
$ubal = $_POST["money"];
$sql = "SELECT * from customer where  name='$uname'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
   $new_bal = $row["current_balance"] - $ubal;
   $sql2 = "UPDATE customer set current_balance=$new_bal where name='$uname'";

   $r2 = $conn->query($sql2);
   if($r2==true){

      $sql3 = "UPDATE customer set current_balance=current_balance+$ubal where name='$tname'";
      $r3=$conn->query($sql3);
      if($r3==true){
          $sql4 = "INSERT into transection values('$uname','$tname','$ubal')";
          $result4=$conn->query($sql4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="header">
    

    <div class="container">
        <div class="navbar ">
           
            <div class="logo">
                <img src="image/image1.png" width="180px">
                
            </div>
            <nav>
                <p><b> Digital Banking<b></p>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="list_customers.php">Customers</a></li>
                    
                    <!-- <li><p>&#10148;</p></li> -->
                </ul>
            </nav>
            
        </div>
     
        
</div>
</div>   
<hr>
<div class="container2">
            <?php
            $dbhost='localhost';
            $dbname='banking';
            $dbusername='root';
            $dbpass='';

            // create a connection
            $conn = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
            //die if connection will not connected
            if(!$conn){
                die("Sorry we failed to connect :" .mysqli_connect_error());
            }
            else{
        

                $sql = "SELECT * FROM transection";
                $result = mysqli_query($conn,$sql);

                // $num =  mysqli_num_rows($result);
                // // echo $num;
                echo '<table border="1"  align="center" height="80%" width="60%" >
                <tr>
                <th>From_Customer</th>
                <th>To_Customer</th>
                
                <th>Paid_Amount</th>
                
                </tr>
                ';
                

                if(mysqli_num_rows($result) >0)
                {
                    // $row = mysqli_fetch_assoc($result);
                    // echo var_dump($row);
                    // echo "<br>";
                    // $row = mysqli_fetch_assoc($result);
                    // echo var_dump($row);
                    // echo "<br>";

                    while($row = mysqli_fetch_assoc($result)){        

                    echo "<tr>";
                    echo "<td>".$row['u_name']. "</td>";
                    echo "<td>".$row['t_name']. "</td>";
                    echo "<td>".$row['paid_amount']. "</td>";
                    // echo "<td>".$row['current_balance']. "</td>";
                    
                    echo "</tr>";
                }
            
            }
        }
                // if($result)
                // {
                //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //     <strong>Success!</strong> Data has been inserted successfully!.
                //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //   </div>';
                // }
                // else{
                //     // echo "This record has not been inserted because of this error -----> " .mysqli_error($conn);
                //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                //     <strong>Error!</strong> We are facing some error that why your data has been inserted successfully! we are sorry for this inconvenience.
                //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //   </div>';
                // }
                // }

                


?>
</div>
       

      
<h1 style="color:red">Transaction Done</h1>            
</body>
</html>
<?php
      }
      else{
          echo "no 2 done";
      }


   }
   else{
       echo "no bal cut";
   }
    }
}


?>