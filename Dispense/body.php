<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
      <br><div class="row">
          <div class="col-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-header" style="background:lightgreen">
              <b style="margin-left:35%"> Clinic Medicine Dispensing Informations</b></div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Transaction ID</th>
                    <th>Patient</th>
                    <th>Medicine</th>
                    <th>Date</th>
                    <th>Quantity</th>
                  </tr>
                  </thead>
                  <tbody>
                      <!-- Show employee-->
                       <?php
                        $Medicine = "SELECT * FROM consultation a   JOIN patient b on a.patient_id = b.p_id
                        LEFT JOIN medicine c on a.medication = c.m_id ORDER BY a.c_id ASC";
                        $result = mysqli_query($con, $Medicine);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             $unused =$row['quantity'] - $row['used'];
                             echo ' 
                             <tr><td>'.$row['c_id'].'</td>  
                             <td>'.$row['lname'] ,', ', $row['fname'] ,' ', $row['mname'],' ', $row['qual'].'</td>  
                             <td>'.substr($row['medicine'],0,40).'...</td>  
                             <td>'.$row['consultation_date'].'</td>  
                             <td>1 pc</td>  
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

            <div class="modal fade" id="addMedicine">
           <div class="modal-dialog modal-sm">
             <div class="modal-content" style="margin-top:50%">
               <div class="modal-header">
                 <h4 class="modal-title">Medicine Input Form</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="" method="post">
               <div class="modal-body">
               <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInputText">Medicine name</label>
                       <input autocomplete=off  type="text" name="named" class="form-control" id="name" required>
                       <label for="exampleInputText">Quantity</label>
                       <input autocomplete=off  type="number" name="quantity" class="form-control" id="quantity" required>
                     </div>
                   </div>
               </div>
               <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" name="AddMedicine" class="btn btn-secondary">Save Record</button>
               </div>
             </div>
           </form>         
           </div>
         </div>
         </div>




