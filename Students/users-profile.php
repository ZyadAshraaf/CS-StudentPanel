<?php include '../Layout/header.php' ?>
<?php include '../Layout/nav.php' ?>
<?php include '../Layout/conn.php' ?>

<?php 
$_SESSION['id']=1;
$id=$_SESSION['id'];
$selectStudentData="SELECT * FROM student WHERE id=$id";
$selectStudentDataQuery=mysqli_query($conn,$selectStudentData);
$row = mysqli_fetch_assoc($selectStudentDataQuery);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$grade=$row['grade'];
$e_grade=$row['E-grade'];
$finalTotal=$row['final-total'];
$ssn=$row['SSN'];
$status=$row['status'];
$password =$row['password'];



if(isset($_POST['EditStudent'])){
  $name=$_POST['fullName'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $old_password=$_POST['old_password'];
  $new_password=$_POST['new_password'];
  if($old_password == $password){
  $updateStudentData="UPDATE student SET name='$name', email='$email', phone='$phone', password='$new_password' WHERE id=$id AND password='$old_password'";
  $updateStudentDataQuery=mysqli_query($conn,$updateStudentData);}
else{
  
  echo "<div class='alert alert-danger mt-5 pt-5'>
  Data didnt updated
        </div>";
}

}
?>



















<main id="main" class="ProfileMain ">
  <section class="section profile">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-4 col-md-5 col-sm-10 mb-2">

        <div class="card UserCard">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="/CS-StudentPanel/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2><?php echo $name; ?></h2>
            <h3><?php echo $status; ?></h3>
          </div>
        </div>

      </div>


      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10 ">
        <!--------Profile Information-------------------------------------->
        <div class="card ProfileInformation ">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab"
                  data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-progress">Progress</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8"><?php echo $name; ?></div>
                </div>



                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8"><?php echo $email; ?></div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8"><?php echo $phone; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Grade</div>
                  <div class="col-lg-9 col-md-8"><?php echo $grade; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">E-grade</div>
                  <div class="col-lg-9 col-md-8"><?php echo $e_grade; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">final-total</div>
                  <div class="col-lg-9 col-md-8"><?php echo $finalTotal; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">SSN</div>
                  <div class="col-lg-9 col-md-8"><?php echo $ssn; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Status</div>
                  <div class="col-lg-9 col-md-8"><?php echo $status; ?></div>
                </div>


              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form method="POST">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="/CS-StudentPanel/assets/img/profile-img.jpg" alt="Profile">
                      <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                            class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                            class="bi bi-trash"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName"
                        placeholder="<?php echo $name; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email"
                        placeholder="<?php echo $email; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="Phone"
                        placeholder="<?php echo $phone; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Old password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="old_password" type="password" class="form-control" id="old_password" placeholder="">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="new_password" type="password" class="form-control" id="new_password" placeholder="">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="EditStudent">Save Changes</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-progress">
                <?php  if($status == 'Not applied'){ ?>
                <div class="checkListCont">
                  <ul>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Register on our website.</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i class="bi bi-dash-circle"></i>Fill out
                      the form to stand a chance to join our study program.</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i class="bi bi-dash-circle"></i>The
                      admission process is underway</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i
                        class="bi bi-dash-circle"></i>Congratulations, you have been chosen to join us, Welcome in our
                      universty</li>
                  </ul>
                </div>
                <div class="progress mt-2">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>









                <?php  }elseif($status == 'Applied'){ ?>
                <div class="checkListCont">
                  <ul>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Register on our website.</li>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Fill out the form to stand a chance to
                      join our study program.</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i class="bi bi-dash-circle"></i>The
                      admission process is underway</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i
                        class="bi bi-dash-circle"></i>Congratulations, you have been chosen to join us, Welcome in our
                      universty</li>
                  </ul>
                </div>
                <div class="progress mt-2 ">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>












                <?php  }elseif($status == 'Semi-accepted'){ ?>
                <div class="checkListCont">
                  <ul>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Register on our website.</li>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Fill out the form to stand a chance to
                      join our study program.</li>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>The admission process is underway</li>
                    <li class="list-group-item disabled" aria-disabled="true"><i
                        class="bi bi-dash-circle"></i>Congratulations, you have been chosen to join us, Welcome in our
                      universty</li>
                  </ul>
                </div>
                <div class="progress mt-2">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>










                <?php  }elseif($status == 'Accepted'){ ?>
                <div class="checkListCont">
                  <ul>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Register on our website.</li>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>Fill out the form to stand a chance to
                      join our study program. </li>
                    <li class="list-group-item "><i class="bi bi-check-circle"></i>The admission process is underway</li>
                    <li class="list-group-item"><i class="bi bi-check-circle"></i>Congratulations, you have been chosen
                      to join us, Welcome in our
                      universty</li>
                  </ul>
                </div>
                <div class="progress mt-2">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>










                <?php  }elseif($status == 'Rejected'){ ?>
                <div class="checkListCont">
                  <ul>
                    <li class="list-group-item"><i class="bi bi-x-circle text-danger"></i>We are sorry, but your
                      application to join our university has been rejected</li>
                  </ul>
                </div>
                <div class="progress mt-2">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <?php  }else{} ?>

            </div>
          </div>
        </div>


      </div>
  </section>

</main><!-- End #main -->


<?php


include '../Layout/script.php' ?>