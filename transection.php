<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" >
    <title>Document</title>
    <style>
        body{
            background-color:#b2c4e2;
        }
        .row{
            margin-top:100px;
            margin-left:250px;

        }

        
.container{
    margin-top: 50px;
}


.navbar{
    display: flex;
    align-items: center;
    /* padding: 10px; */

    

}
.navbar p{
    float: left; 
    margin-top: 2px; 
    margin-left: 30px; 
    color: #0b6ab8; 
    font-size: 50px; 
    font-family: Brush Script MT; 
    text-shadow: 1px 1px 1px #000; 
}
.logo img{
    width: 100px;
    margin-left: -30px;
    margin-top: -30px;
}

nav{
    flex: 1;
    text-align: right;
    margin-right: -30px;
    padding-right: 30px;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
    cursor: pointer;
}

 nav ul li a{
    text-decoration: none;
    color: #555;
    text-shadow: 1px 1px 1px rgb(0, 0, 0) ; 
    font-weight: bolder; 
    font-family: Open Sans;/*Lucida Handwriting;*/  
    font-weight: 800;
    text-decoration: none; 
    color: #0a58f5;   
    font-size: 19px; 
    line-height: 45px; 
    border-radius: 2px;
    /* background-size: 100px; */
}
nav ul li a:hover{
    transition: all 0.8s;  
    background-color: rgb(184, 175, 175); 
    color:#000;
}
    </style>

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
                    <!-- <li><a href="transection_list.php">Transections</a></li> -->
                    
                    <!-- <li><p>&#10148;</p></li> -->
                </ul>
            </nav>
            
        </div>
     
        
</div>
</div>
<form class="row g-3 pt-3" action="transection_list.php" method="POST" >
  

  <div class="col-md-4">
    <label for="inputState" class="form-label" >From_Customer</label>
  
    <select id="inputState" class="form-select" name="from">
    <option>Select....</option>
      <option value="Garima Chauhan">Garima Chauhan</option>
      <option value="Vikas Kumar">Vikas Kumar</option>
      <option value="preeti">preeti</option>
      <option value="Supriya">Supriya</option>
      <option value="Ram">Ram</option>
      <option value="Shyam">Shyam</option>
      <option value="Sweety Goel">Sweety Goel</option>
      <option value="Pooja">Pooja</option>
      <option value="sonia">sonia</option>
      <option value="Rahul">Rahul</option>
    </select> 
    
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" >To_Customer</label>
    <select id="inputState" class="form-select" name="to">
        <option>Select....</option>
      <option value="Garima Chauhan">Garima Chauhan</option>
      <option value="Vikas Kumar">Vikas Kumar</option>
      <option value="preeti">preeti</option>
      <option value="Supriya">Supriya</option>
      <option value="Ram">Ram</option>
      <option value="Shyam">Shyam</option>
      <option value="Sweety Goel" >Sweety Goel</option>
      <option value="Pooja">Pooja</option>
      <option value="sonia">sonia</option>
      <option value="Rahul">Rahul</option>
    </select>
  </div>
  <div class="col-6">
    <label for="number" class="form-label" >Amount</label>
    <input type="number" class="form-control" id="amount" name="money">
  </div>
  

  
  <div class="col-12">
<input type="submit" value="Transfer">
</div>
</form>
    
</body>
</html>






