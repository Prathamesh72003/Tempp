
<?php
include "../../db.php"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../../vendors/ti-icons/css/themify-icons.css"
    />
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo"></div>
                <h4>Hello! let's get started</h4>
               
                <form class="pt-3" method="POST">
                  <div class="form-group">
                    <input
                      name="naming"
                      type="text"
                      class="form-control form-control-lg"
                      id="exampleInputEmail1"
                      placeholder="Username"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <input
                       name="passwordingg"
                      type="password"
                      class="form-control form-control-lg"
                      id="exampleInputPassword1"
                      placeholder="Password"
                      required
                    />
                  </div>
                  <div class="mt-3">
                    <button
                      class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="logining"
                      href="../../Admin/admin_dash.php" type="submit" 
                      >LOG IN</button
                    >
                  </div>
                  <div
                    class="my-2 d-flex justify-content-between align-items-center"
                  >
                    <div class="form-check">
                 
                    </div>
                   
                  <div class="mb-2"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>

<?php
if (isset($_POST["logining"])){
  $name = $_POST['naming'];
  $password = $_POST['passwordingg'];
  $query = mysqli_query($conn,"select * from admin where name='" . $name . "' and password= '" . $password . "'");
  $number_of_rows = mysqli_num_rows($query);


  if ($number_of_rows!=0){

    while($row=mysqli_fetch_array($query)){
      $dbname = $row['name'];
      $dbpassword = $row['password'];
      
    


    }

  if($name==$dbname && $password==$dbpassword){
    
    session_start();
    $_SESSION['admin_session']=$name;

    header("Location: ../../Admin/admin_dash.php");

  } 

  

  }
  else{
    echo "<script>alert('Invalid Username or Password')</script>";
    
  }
}


?>
