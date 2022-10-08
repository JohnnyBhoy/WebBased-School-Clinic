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
      <form action = "" method="post">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div style="background:lightgreen" class="card-header"><b style="margin-left:28%">Consultation Information From for <?php echo $_GET['id'];?> Patient</b></div>
              <div class="card-body">
                  <div class="row">
                  <div class="col-sm-4">
                          <div class="form-group">
                            <label for="exampleInputText">Patient</label>
                            <a href='../Patient/addPatient.php?id="Student"'><i class="fas fa-plus"></i></a>
                            <select class="form-control" type="text" name="patient"  id="patient">
                            <option value=''>Select  Patient Name</option>
                            <?php
                            $sql = "SELECT * FROM patient ORDER BY lname ASC";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)> 0 )
                            {
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo ' 
                                 <option value="'.$row['p_id'].'">'.$row['lname'].' '.$row['fname'].' '.$row['mname'].' '.$row['qual'].'</option>  
                                '  ;
                            }}
                            ?>
                            </select>
                           </div>
                           </div>
                           <div class="col-sm-4">
                          <div class="form-group">
                            <label for="exampleInputText">Consultation Type</label>
                            <i data-toggle="modal" data-target="#addConsultation" class="fas fa-plus"></i>
                            <select class="form-control" type="text" name="consult"  id="consult">
                            <option value="">Select  consultation type</option>
                            <?php
                            $sql = "SELECT * FROM consultation_type ORDER BY c_id ASC";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)> 0 )
                            {
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo ' 
                                 <option value="'.$row['c_id'].'">'.$row['consultation_type'].'</option>  
                                '  ;
                            }}
                            ?>
                            </select>
                           </div>
                           </div>
                           <?php inputTextDataCol4('Blood Pressure','text','','blood','blood');?>
                          <div class="col-sm-4">
                          <div class="form-group">
                            <label for="exampleInputText">Findings</label>
                            <i data-toggle="modal" data-target="#addFinding" class="fas fa-plus"></i>
                            <select class="form-control" type="text" name="findings"  id="findings">
                            <option value="">Select  findings</option>
                            <?php
                            $sql = "SELECT * FROM findings ORDER BY f_id DESC";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)> 0 )
                            {
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo ' 
                                 <option value="'.$row['f_id'].'">'.$row['findings'].'</option>  
                                '  ;
                            }}
                            ?>
                            </select>
                           </div>
                           </div>
                         <div class="col-sm-4">
                          <div class="form-group">
                            <label for="exampleInputText">Medication</label>
                            <i data-toggle="modal" data-target="#addMedication" class="fas fa-plus"></i>
                            <select class="form-control" type="text" name="medication"  id="medication">
                            <option value="">Select  medicine</option>
                            <?php
                            $sql = "SELECT * FROM medicine ORDER BY m_id DESC";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)> 0 )
                            {
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo ' 
                                 <option value="'.$row['m_id'].'">'.$row['medicine'].'</option>  
                                '  ;
                            }}
                            ?>
                            </select>
                           </div>
                           </div>
                           <div class="col-sm-4">
                          <div class="form-group">
                            <label for="exampleInputText">Consultation Date</label>
                              <input type="date" name="dated" value="<?php echo date('Y-m-d');?>" class="form-control">
                           </div>
                           </div>
                           <div class="col-sm-8">
                           <div class="form-group">
                             <label for="exampleInputText">Remarks</label>
                               <input type="text" name="remarks"  class="form-control">
                            </div>
                            </div>
                            <div class="col-sm-4">
                             <div class="form-group">
                               <label for="exampleInputText">Physician Attended</label>
                               <i data-toggle="modal" data-target="#addPhysician" class="fas fa-plus"></i>
                               <select class="form-control" type="text" name="physician"  id="physician">
                               <option value="">Select  Attending Physician</option>
                               <?php
                               $sql = "SELECT * FROM physician ORDER BY p_id DESC";
                               $result = mysqli_query($con, $sql);
                               if (mysqli_num_rows($result)> 0 )
                               {
                                  while($row = mysqli_fetch_assoc($result)) {
                                    echo ' 
                                    <option value="'.$row['p_id'].'">'.$row['physician'].'</option>  
                                   '  ;
                               }}
                               ?>
                               </select>
                              </div>
                              </div>
                              <input type="hidden" name="user" value="<?php echo $username;?>">
                              <input type="hidden" name="con_type" value='<?php echo $_GET['id'];?>'>
                              </div>
                             <div class="modal-footer justify-content-between">
                             <button type="button" class="btn btn-xs  btn-danger" onclick="returnIndex()" >Close</button>
                             <button type="submit" name="addConsultation" class="btn btn-xs btn-primary">Save Consultation</button>
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





