<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br><section class="content">
      <div class="container-fluid">  
      <div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-header" style="background:lightgreen">
              <a href='addConsultation.php?id=<?php echo $_GET['id'];?>'>
                <button class="btn btn-sm btn-secondary"><i class="fas fa-plus"></i> Add Consultation</button>
              </a>
               <b style="margin-left:20%"> <?php echo Str_replace('"','',$_GET['id']);?> Consultation's Information</b></div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Patient</th>
                    <th>Consultation Type</th>
                    <th>Findings</th>
                    <th>Medication</th>
                    <th>Date</th>
                    <th>Physician</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                       <?php
                        $id = $_GET['id'];
                        $Consultation = "SELECT a.c_id,b.fname,b.mname,b.lname,b.qual,c.consultation_type,d.findings,e.medication,a.consultation_date,f.physician FROM consultation a
                        JOIN patient b ON a.patient_id = b.p_id 
                        LEFT JOIN consultation_type c on a.consultation_type = c.c_id 
                        LEFT JOIN findings d on a.findings = d.f_id
                        LEFT JOIN medication e on a.medication = e.m_id
                        LEFT JOIN physician f on a.physician = f.p_id
                        WHERE a.con_type = '".$id."' ORDER BY b.lname ASC";
                        $result = mysqli_query($con, $Consultation);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['lname'],' ',$row['fname'],' ,', $row['mname'],$row['qual'].'</td>  
                             <td>'.$row['consultation_type'].'</td>  
                             <td>'.$row['findings'].'</td>  
                             <td>'.$row['medication'].'</td>  
                             <td>'.$row['consultation_date'].'</td>  
                             <td>'.$row['physician'].'</td>  
                             <td><a href="ViewConsult?id='.$row['c_id'].'">
                             <button class="btn btn-xs btn-info" style="margin-left:5%"  ><i class="fas fa-edit"></i></button></a>
                             <button  onClick="delConsult('.$row['c_id'].')" style="margin-left:5%" class="btn btn-xs btn-info"><i class="fas fa-trash"></i></button>
                             </td>
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




