      <div class="alert alert-success">
        <strong>Farmer added!</strong> You've successfully added the farmer <b> <?php echo $Firstname ?> </b>
      </div>
	  
	   <table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>County</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> <?php echo $Firstname ?></td>
            <td> <?php echo $Surname ?></td>
            <td> <?php echo $County ?></td>
          </tr>
      
        </tbody>
      </table>
	  

	<div class="row">

		<a href="/data" class="btn btn-success"> Add More </a>	  

		<a href="/listings" class="btn btn-success"> View Farmers </a>	  

		<a href="/performance" class="btn btn-success"> View Data </a>	  

	</div>