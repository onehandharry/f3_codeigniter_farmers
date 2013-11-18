<?php $this->load->helper('form'); ?>

<h1> Cow Performance </h1>

<table class="table table-striped">
	<thead>
	  <tr>
		<th>Cow Name</th>
		<th>Owner Name </th>
		<th>Total Output (litres) for the past 7 days</th>
	
	  </tr>
	</thead>
    <tbody>		
		<?php foreach ($result as $row){ ?>

					<tr>
						<td><?php echo $row['cow_name']; ?></td>
						<td><?php echo $row['firstname'].' '.$row['surname']; ?></td>
						<td><?php echo $row['output']; ?></td>		
					</tr>
		<?php } ?>
	</tbody>
</table>
