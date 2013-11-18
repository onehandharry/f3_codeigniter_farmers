<div class="pull-right">
<?php 
$this->load->helper('form');

echo form_open('performance');

$options = array(
                  'combined_output'    => 'Total Weekly',
				  'avg_output'  => 'Avg Output',
                  'top_cows' => 'Top Cows'
                );

echo form_dropdown('data', $options, $view_type);
echo form_submit('performance', 'View Data');
echo form_close();

?>

</div>