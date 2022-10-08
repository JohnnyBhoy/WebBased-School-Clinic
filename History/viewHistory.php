    <!-- For header -->
    <?php include '../includes/header.php';?>

    <!-- For tab active styling -->
    <style> #history {color: #fff;background-color: #007bff;}</style>

    <!-- For sidebar -->
    <?php include '../includes/sideBar.php';?>

    <!-- For home body -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br><section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-header" style="background:lightgreen"><b style="margin-left:30%"> Medical Records Information History </b></div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Name</th>
                    <th>Type</th>
                    <th>BP</th>
                    <th>Findings</th>
                    <th>Medication</th>
                    <th>Remarks</th>
                    <th>Dated</th>
                    <th>Physician</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                      <?php
                       $id = $_GET['id'];
                        $Consultation = "SELECT a.c_id,b.fname,b.mname,b.lname,b.qual,b.gender,b.addres,b.bdate,a.blood_pressure,a.remarks,c.consultation_type,d.findings,e.medication,a.consultation_date,f.physician FROM consultation a
                        JOIN patient b ON a.patient_id = b.p_id 
                        LEFT JOIN consultation_type c on a.consultation_type = c.c_id 
                        LEFT JOIN findings d on a.findings = d.f_id
                        LEFT JOIN medication e on a.medication = e.m_id
                        LEFT JOIN physician f on a.physician = f.p_id
                        WHERE b.p_id = $id ORDER BY a.consultation_date DESC";
                        $result = mysqli_query($con, $Consultation);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['lname'],' ',$row['fname'],' ,', $row['mname'],$row['qual'].'</td>  
                             <td>'.$row['consultation_type'].'</td>  
                             <td>'.$row['blood_pressure'].'</td>  
                             <td>'.$row['findings'].'</td>  
                             <td>'.$row['medication'].'</td>  
                             <td>'.$row['remarks'].'</td>  
                             <td>'.$row['consultation_date'].'</td>  
                             <td>'.$row['physician'].'</td>  
                             </tr>
                            '  ;
                        }}
                        ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->






    <!-- For home body -->
    <?php include '../includes/footer.php';?>

    <!-- For home body -->
    <?php include '../includes/footerScripts.php';?>
