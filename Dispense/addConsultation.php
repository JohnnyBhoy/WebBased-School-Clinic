    <!-- For header -->
    <?php include '../includes/header.php';?>

    <!-- For tab active styling -->
    <style> #employee {color: #fff;background-color: #007bff;}</style>

    <!-- For sidebar -->
    <?php include '../includes/sideBar.php';?>

    <!-- For sidebar -->
    <?php include '../includes/functions.php';?>

<!-- Add patient body -->
<div class="content-wrapper">
  <!-- Main content -->
  <br><section class="content">
      <div class="container-fluid">
      <br><br><div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                        <?php 
                          inputTextData('First Name','text','','fname','fname');
                          inputTextData('Middle Name','text','','mname','mname');
                          inputTextData('Last Name','text','','lname','lname');
                        ?>
                        <div class="col-sm-3">
                        <div class="form-group">
                                <label>Extension(Jr/Sr)</label>
                                <select class="form-control" type="text" name="suffix"  id="suffix">
                                <option value=""></option>
                                <option value="Jr.">Jr.</option>
                                <option value="Sr.">Sr.</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                </select>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" type="text" name="sex"  id="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                        </div>
                        </div>
                        <?php inputTextData('Contact number','number','','cp','cp');?>
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputText">Address</label>
                              <input autocomplete=off  type="text" value="" name="add" class="form-control" id="add" required>
                            </div>
                        </div>
                        <?php inputTextData('Email Address','email','','mail','mail');?>
                        <?php inputTextData('Patient Type','text','','typed','typed');?>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputText">Course</label>
                            <select class="form-control" type="text" name="addres"  id="addres">
                            <?php
                            $sql = "SELECT * FROM course ORDER BY course ASC";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)> 0 )
                            {
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo ' 
                                 <option value="'.$row['c_id'].'">'.$row['course'].'</option>  
                                '  ;
                            }}
                            ?>
                            </select>
                           </div>
                           </div>
                           </div>
                          <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-xs  btn-danger" onclick="returnIndex()" >Close</button>
                          <button type="submit" name="addEmp" class="btn btn-xs btn-primary">Save Consultation</button>
                        </div>
                      </div>
                    </div>
                   </form>     
                  </div>
                 </div>
                  <!-- /.modal -->
             </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

    <!-- For home body -->
    <?php include '../includes/footer.php';?>

    <!-- For home body -->
    <?php include '../includes/footerScripts.php';?>





