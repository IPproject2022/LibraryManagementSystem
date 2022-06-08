<?php
require_once('db.php');
require_once ('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-12">
    		
		        
	<form class="needs-validation" novalidate method="post" action="issuedb.php"> 
		
	
			<h2>Issue Book</h2>
		
		<label>User Id</label>
		<div class="input-field">
		<input type="text"   name="userid" required></div>
		<label>ISBN</label>
		<div class="input-field">
		<input type="text"   name="userid" required></div>
			
		<label>Issue Date</label>
		<div class="input-field">
		<input type="date"   name="dateOfIssue" required></div>	
		

		
	
		<div class="input-field">
			<input type="submit" value="Issue" class="btn btn-primary"></input>
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>