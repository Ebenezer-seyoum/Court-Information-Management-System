<?php
include('cdheader.php');
?>
<!-- Page Header -->
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">All Cases</h3>
    <ul class="breadcrumbs mb-3">
        <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Case Management</a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">All Cases</a></li>
    </ul>
 </div>
<!-- End Page Header -->
<div class="main-content">
<section class="section">
  <div class="row">
   <div class="col-12 col-sm-12 col-lg-12">
    <div class="card ">
      <div class="card-header">
       <div class="row w-100 align-items-center">
         <div class="col-12 col-md-6 mb-2 mb-md-0">
            <h4 class="mb-0">View Open cases</h4>
          </div>
<div class="col-12 col-md-6">
  <form method="GET">
    <div class="input-group">
       <input type="text" id="caseSearch" class="form-control" 
       style="font-weight: bold;" 
       placeholder="Search by Case ID, Plaintiff, Defendant, or Status..." />
    </div>
  </form>
</div>     
<?php
  if (isset($_SESSION["uid"])) {
      if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
          $searchTerm = $_GET['search'];
          $cases = searchCases($searchTerm);
      } else {
          $cases = getAllOpenCases();
      }
?>
<div class="card-body">
  <div class="table-responsive">
   <table class="table table-hover align-middle text-center" style="border: 2px solid black; border-collapse: collapse; width: 100%;">
  <thead class="table-secondary">
      <tr>
    <th style="border: 2px solid black;">#</th>
    <th style="border: 2px solid black;">case_id</th>
    <th style="border: 2px solid black;">Plaintiff</th>
    <th style="border: 2px solid black;">defendant</th>
    <th style="border: 2px solid black;">case_status</th>
    <th style="border: 2px solid black;">Actions</th>
     </tr>
    </thead>
   <tbody>  
   <?php
    $no = 1;
      if (!empty($cases)) {
        foreach ($cases as $case) {
            $status = case_status($case["case_status"]); 
      ?>                                                            
   <tr>

    <td style="border: 2px solid black;"><?php echo $no; ?></td>
    <td style="border: 2px solid black;"><?php echo $case["case_id"]; ?></td>
    <td style="border: 2px solid black;"><?php echo $case["plaintiff"]; ?></td>
    <td style="border: 2px solid black;"><?php echo $case["defendant"]; ?></td>
    <td style="border: 2px solid black;"><?php echo $status; ?></td>
    <td style="border: 2px solid black;">
    <a href="case_detail.php?case_id=<?= $case["case_id"]; ?>&cid=<?= $case["cid"]; ?>"
     class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Details
    </a>
    </td>
  </tr>
   <?php  
       $no++; }
   ?>       
   <?php } }  ?>
<?php if (empty($cases)) { ?>
  <tr><td colspan="13" class="text-center text-danger" style="border: 2px solid black;">No cases found.</td></tr>
<?php } ?>
</table>
</div>                         
      </div>
    </div>
  </div>
</div>
</section>
</div>
</div>
</div>

<?php
include('../admin/footer.php');
?>