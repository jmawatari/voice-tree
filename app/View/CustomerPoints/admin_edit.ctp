<div class="customerPoints form">
<?php echo $this->Form->create('CustomerPoint'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Customer Point'); ?></legend>
	<?php
		echo $this->Form->input('customer_point_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('customer_point_type');
		echo $this->Form->input('customer_point');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerPoint.customer_point_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerPoint.customer_point_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
