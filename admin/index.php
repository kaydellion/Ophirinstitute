<?php include "superheader.php"; ?>


<style>

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #200E34; 
    border-color: #200E34;
}

</style>
<!-- Begin Page Content -->
<div class="container-fluid" style="padding:60px;">

<div class="table-responsive overflow-auto" style="margin-bottom:20% !important;">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black; font-size:13px; font-weight:500;">
    <thead><tr bgcolor="#200E34" style="color:white;">
	   <th data-column-id='employee_name'  width='200px'>Name</th>
				    <th data-column-id='employee_name'  width='200px'>Email</th>
					<th data-column-id='employee_salary'  width='200px'>Discord</th>
					<th data-column-id='employee_salary'  width='200px'>Twitter</th>
					<th data-column-id='employee_salary'  width='200px'>Date</th>
					
				</tr>
			</thead>
            <?php
$sql = "SELECT * from ophir ORDER BY date DESC";
$sql2 = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($sql2)) {

    echo
    '<tr><td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>@'.$row['discord'].'</td>
    <td>@'.$row['twitter'].'</td>
    <td>'.$row['date'].'</td></tr>

';
}
?>
	  </table>
	  </div>  
               
               
               
               
               
               
               
               
               
                </div>
</div>
            <!-- End of Main Content -->
           <?php include "footer.php"; ?>

  