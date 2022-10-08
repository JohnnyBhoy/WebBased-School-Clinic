<!--**Count the pond available-->
<?php  
  $Consult= "SELECT count(c_id) FROM consultation";
  $qry= $con->prepare($Consult);
  $qry->execute();
  $qry->bind_result($Consult);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<?php  
  $med = '"Medical"';
  $ConsultMed= "SELECT count(c_id) FROM consultation where con_type='$med'";
  $qry= $con->prepare($ConsultMed);
  $qry->execute();
  $qry->bind_result($ConsultMed);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<?php  
  $den = '"Dental"';
  $ConsultDen= "SELECT count(c_id) FROM consultation where con_type='$den'";
  $qry= $con->prepare($ConsultDen);
  $qry->execute();
  $qry->bind_result($ConsultDen);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<?php  
  $Physician= "SELECT count(p_id) FROM physician";
  $qry= $con->prepare($Physician);
  $qry->execute();
  $qry->bind_result($Physician);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<?php  
  $PTyped= "SELECT count(t_id) FROM patient_type";
  $qry= $con->prepare($PTyped);
  $qry->execute();
  $qry->bind_result($PTyped);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>
<?php  
  $Medi= "SELECT count(m_id) FROM medicine";
  $qry= $con->prepare($Medi);
  $qry->execute();
  $qry->bind_result($Medi);
  while($qry->fetch()){
  $datelog = date("m/d/Y h:i:sa");}
?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <br><div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3><?php echo $Consult;?> <sup style="font-size: 10px"> Patient Consultation History</sup></h3>
                <p><b><?php echo $ConsultMed,'</b> Medical / <b>',$ConsultDen,'</b> Dental';?></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../Employee/index"  style="background-color:green" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3><?php echo $Physician;?><sup style="font-size: 10px"> Consultation Statistics</sup></h3>

                <p>Faculty ,  Staff ,  Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../Employee/index"   style="background-color:green"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3><?php echo $PTyped;?><sup style="font-size: 10px"> Common ailments</sup></h3>

                <p>Cough, Fever, Headache etc.</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../Loan/index"   style="background-color:green"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3><?php echo $Medi;?><sup style="font-size: 10px"> Inventory of Drugs</sup></h3>

                <p>Types of Medical drugs</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="../Employee/index"   style="background-color:green"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Consultation Statistics</h3>
                  <a href='../Consultation/index.php?id="Medical"'>View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg"><?php echo 0;?></span>
                    <span>Summary of Consultation Statistics</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 0%
                    </span>
                    <span class="text-muted">Since last Year</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Faculty
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Student
                  </span>

                  <span>
                    <i class="fas fa-square text-teal"></i> Staff
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
        <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Top 10 Common Ailments</h3>
                  <a href='../Consultation/index.php?id="Medical"'>View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="270"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
