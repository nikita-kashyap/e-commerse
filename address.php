<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
             
             
            </ul>
          
          </div>
        </div>
      </nav>
      
    
      <div class="wrapper">
       
        <div class="text-center mt-4 name">
            <div >
          Address
        </div>
     
        <br />
       

<form action="" method="post" enctype='multipart/form-data'>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="address" placeholder="Adress" required>
           
        </div>
     <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="submit" name="submit" value="Submit"style="background-color:#04AA6D;" required>
    </div>

  </form>
       
        </div>
    
      </div>
       

    </div>
    
    <?php
include 'admin/dbcon.php';
 
 
 if(isset($_POST['submit']))
{
    
    $address=$_POST['address'];
     
    
    $sql= "INSERT INTO `address`(`address`) VALUES ('$address')";
    
       $query=mysqli_query($con,$sql);


     if($query==true)
    {
    
      
      ?>
         
         
         <script> 
                  alert(' sucessfully Add Your Address');
                  window.open('biling.php','_self');
                 
         </script>

      <?php
    }

    else{
      echo "data not insert";
    }
  
}

?>


</body>
</html>