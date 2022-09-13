 <?php
session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
  //  $cat_id=$_POST['cat_id'];
  $cat_title=$_POST['cat_name'];
// $email=$_POST['email'];
// $user_password=$_POST['password'];
// $mobile=$_POST['phone'];
// $address1=$_POST['city'];
// $address2=$_POST['country'];

mysqli_query($con,"insert into categories values ('','$cat_title')") 
			or die ("Query 1 is inncorrect........");
header("location: manage_users.php"); 
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Categories</h4>
                  <!-- <p class="card-category">Complete User profile</p> -->
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Categorie Name</label>
                          <input type="text" name="cat_name" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>

                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>