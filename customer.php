


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Customers</title>
    <style>
    h1{
        font-size:16px;
    }
    .col-lg-4{
        margin-top:100px;
    }
    </style>
</head>
<body>
<?php

$servername='localhost:7882';
$username='root';
$password='';
$dbname='banking';

$id="";
$name="";
$email="";
$current_balance="";

//connect to mysql database
$conn=mysqli_connect($servername,$username,$password,$dbname);

//get data from the form

function getData()
{
$data=array();

$data[1]=$_POST['name'];
$data[2]=$_POST['email'];
$data[3]=$_POST['current_balance'];
return $data;

}

//insert data

if(isset($_POST['insert'])){
    $info = getData();
    $insert_query="INSERT INTO 'customer'('name','email','current_balance')
    VALUES('$info[1]','$info[2]','$info[3]')";
   
        $insert_result=mysqli_query($conn, $insert_query);
        if($insert_result)
        {
            if(mysqli_affected_rows($conn)>0){
                echo("data inserted successfully");
            }else{
                echo("data are not inserted");
            }
        }
    
}
?>


    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4">
    
        <form action="" method="POST">
        
        <h1> ID no </h1>
        <input type="text" name="id" class="form-control"   value="<?php echo($id); ?>"disabled />
        
        <h1> Name </h1>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name"  value="<?php echo($name); ?>" />

        <h1> Email </h1>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo($email); ?>" />

        <h1> Current_Balance </h1>
        <input type="number" name="current_balance" class="form-control" placeholder="Enter Avalible Balance" value="<?php echo($current_balance); ?>" />
        
        <input type="submit" class="btn btn-block btn-success" name="insert" value="Add" />
        </form>
    </div>
    </div>
    </div>
 
    
  



</body>
</html>