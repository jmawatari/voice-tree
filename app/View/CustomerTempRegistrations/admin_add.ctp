<div class="customerTempRegistrations form">
<?php echo $this->Form->create('CustomerTempRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Customer Temp Registration'); ?></legend>
	<?php
		echo $this->Form->input('customer_registration_type');
		echo $this->Form->input('tmp_key');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('expire_datetime');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Temp Registrations'), array('action' => 'index')); ?></li>
	</ul>
</div>
