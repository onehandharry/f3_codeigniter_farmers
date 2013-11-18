<?php $this->load->helper('form'); ?>

<h1> my cows </h1>

<?php echo form_open('stock'); ?>

<?php
//////PHP FOREACH LOOP TEMPLATING EACH COW AND INPUT FOR THE DAY

 if(is_array($result)&&!empty($result)) //make sure 
	foreach ($result as $row){
 ?>

<div class="row p_table">

	<div class="col-xs-4">
       <?php echo $row['cow_name']; ?>
	</div>
	
    <div class="col-xs-4">
		<div class="input-group">
			<input type="text" class="form-control" value="" name="<?php echo $row['id']; ?>">	
			
				<span class="input-group-addon">Litres</span>
		</div>
	</div>
	
		<div class="col-xs-2">
       <?php echo date('d-m-y'); ?>
	</div>
	
</div>

<?php } //close foreach loop ?>

<hr />

	<div class="submit_container">


    <div class="col-xs-12 pull-right">
		<input type="submit" value="Submit" class="btn btn-success">
	</div>	
	
	</div>
	




</form>

<?php echo $pagination; ?>
