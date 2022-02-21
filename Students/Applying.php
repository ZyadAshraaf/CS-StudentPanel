<?php include '../Layout/header.php' ?>
<?php include '../Layout/nav.php' ?>
<?php include '../Layout/conn.php' ?>
    <!-- Apply -->
    <section class="ApplySection">
        <!-- container -->
        <div class="container ApplyContainer">
            <!-- row -->
            <div class="row">

                <div class="col-6 ApplyingForm">

                    <h2 class="ApplyingHeading ">
                        <img src="/CS-StudentPanel/assets/img/logo2.png" alt="error404">
                        Admission form
                    </h2>
                    <!--Applying form  -->
                    <form class="Admission-form">
                        <label for="">
                            Name :
                        </label>
                        <input class="form-control" type="text" name="name" placeholder="Name" maxlength="100" required>
                        <label for="">
                            Grade :
                        </label>
                        <input class="form-control" type="text" name="grade" placeholder="grade" maxlength="10"
                            required>
                        <label for="">
                            English-Grade :
                        </label>
                        <input class="form-control" type="text" name="E-grade" placeholder="E-grade" required>
                        <label for="">
                            Final Total :
                        </label>
                        <input class="form-control" type="text" name="final total"
                            placeholder="total grade + english grade" maxlength="10" required>
                        <label for="">
                            SSN :
                        </label>
                        <input class="form-control" type="text" name="SSN" placeholder="Social Security Number"
                            required>
                        <label for="">
                            Phone Number :
                        </label>
                        <input class="form-control" type="text" name="Phone" placeholder="01*********" maxlength="15"
                            required>
                        <label for="">
                            Personal Image : <br> <i class="fa fa-camera-retro fa-3x"></i>
                        </label>
                        <input class="form-control" type="file" name="personal image" required>

                        <label class="my-2" for="">
                            Specialization :
                        </label> <br>
                        <label for="">
                            1st Specialization :
                        </label>
                        <select class="form-control" name="Specialization1" id="">
                            <option value="0">Choose your Specialization</option>
                            <option value="1">BIS</option>
                            <option value="2">FMI</option>
                            <option value="3">FOC</option>
                        </select> <br>
                        <label for="">
                            2nd Specialization :
                        </label>
                        <select class="form-control" name="Specialization2" id="">
                            <option value="0">Choose your Specialization</option>
                            <option value="1">BIS</option>
                            <option value="2">FMI</option>
                            <option value="3">FOC</option>
                        </select> <br>
                        <label for="">
                            3rd Specialization :
                        </label>
                        <select class="form-control" name="Specialization3" id="ddlFruits">
                            <option value="0">Choose your Specialization</option>
                            <option value="1">BIS</option>
                            <option value="2">FMI</option>
                            <option value="3">FOC</option>
                        </select> <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">Apply</button>
                        </div>
                    </form>
                    <!-- Applying form -->

                </div>
                <div class="col-6 ">
                    <div class="ApplyingImage">
                        <img class="img-fluid rounded applyImg " src="/CS-StudentPanel/assets/img/APPform.jpg" alt="">

                    </div>
                </div>


            </div>
            <!-- row -->
        </div>


        <!-- /container -->

    </section>
    <!-- jQuery Plugins -->

    <?php include '../Layout/script.php' ?>