<div class="container-fluid">
<div class="row">
	<div class="col-md-12 col-md-offset-0">
	<div class="panel panel-default">
	<div class="panel-heading">Employee</div>
	<div class="panel-body">
	<form method="get" action="show.php?page=1&search=">
		<div class="row">
			<div class="col-md-6">
				<div class="input-group">
					<input type="hidden" class="form-control" placeholder="Search" aria-describedby="basic-addon2" name="page" value="1">
					<input type="hidden" class="form-control" placeholder="Search" aria-describedby="basic-addon2" name="view" value="<?php echo $id;?>">
					<input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2" name="search">
					<span class="input-group-btn"><button type="submit" name="submit" class="btn btn-default">Search</button></span>
				</div>
			</div>
		</div>
	</form><br/>
<table id="table-emp" class="table table-bordered table-hover table-striped table-condensed">
	<tr>
		<th>Employee Code</th>
		<th>Employee Name</th>
		<th>Begin Date</th>
		<th>Project</th>
		<th>Job Name</th>
		<th>Account Number</th>
		<th>BPJS TK</th>
		<th>BPJS KES</th>
		<th>Option</th>
	</tr>
</table>
        </div>
        </div>
    </div>
    </div>
</div>