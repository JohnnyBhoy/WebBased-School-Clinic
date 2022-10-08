<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br><section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-header" style="background:lightgreen"><b style="margin-left:30%"> Patient Medical Information History</b></div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" <?php if($username!="Clinic Admin"){echo "hidden";}?>>
                  <thead>
                  <tr>
                    <th >Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Physician</th>
                    <th>Date Consulted</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                      <?php
                        $Consultation = "SELECT b.p_id,a.c_id,b.fname,b.mname,b.lname,b.qual,b.gender,b.addres,b.bdate,c.consultation_type,d.findings,e.medication,a.consultation_date,f.physician FROM consultation a
                        JOIN patient b ON a.patient_id = b.p_id 
                        LEFT JOIN consultation_type c on a.consultation_type = c.c_id 
                        LEFT JOIN findings d on a.findings = d.f_id
                        LEFT JOIN medication e on a.medication = e.m_id
                        LEFT JOIN physician f on a.physician = f.p_id
                        ORDER BY b.lname ASC";
                        $result = mysqli_query($con, $Consultation);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['lname'],' ',$row['fname'],' ,', $row['mname'],$row['qual'].'</td>  
                             <td>'.$row['gender'].'</td>  
                             <td>'.date_diff(date_create($row['bdate']),date_create('now'))->y.' Years old</td>   
                             <td>'.$row['physician'].'</td>  
                             <td>'.$row['consultation_date'].'</td>  
                             <td><a href="ViewHistory?id='.$row['p_id'].'">
                             <button class="btn btn-xs btn-info" style="margin-left:5%"  ><i class="fas fa-eye"></i></button></a>
                             <button  onClick="#" style="margin-left:5%" class="btn btn-xs btn-info"><i class="fas fa-trash"></i></button>
                             </td>
                             </tr>
                            '  ;
                        }}
                        ?>
                  </tfoot>
                </table>
                <table id="example1" class="table table-bordered table-striped" <?php if($username=="Clinic Admin"){echo "hidden";}?>>
                  <thead>
                  <tr>
                    <th >Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Physician</th>
                    <th>Date Consulted</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                      <?php
                        $Consultation = "SELECT b.p_id,a.c_id,b.fname,b.mname,b.lname,b.qual,b.gender,b.addres,b.bdate,c.consultation_type,d.findings,e.medication,a.consultation_date,f.physician FROM consultation a
                        JOIN patient b ON a.patient_id = b.p_id 
                        LEFT JOIN consultation_type c on a.consultation_type = c.c_id 
                        LEFT JOIN findings d on a.findings = d.f_id
                        LEFT JOIN medication e on a.medication = e.m_id
                        LEFT JOIN physician f on a.physician = f.p_id
                        WHERE b.patient = 'Student' 
                        ORDER BY b.lname ASC";
                        $result = mysqli_query($con, $Consultation);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <tr><td>'.$row['lname'],' ',$row['fname'],' ,', $row['mname'],$row['qual'].'</td>  
                             <td>'.$row['gender'].'</td>  
                             <td>'.date_diff(date_create($row['bdate']),date_create('now'))->y.' Years old</td>   
                             <td>'.$row['physician'].'</td>  
                             <td>'.$row['consultation_date'].'</td>  
                             <td><a href="ViewHistory?id='.$row['p_id'].'">
                             <button class="btn btn-xs btn-secondary" style="margin-left:15%"  >View History</button></a>
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




