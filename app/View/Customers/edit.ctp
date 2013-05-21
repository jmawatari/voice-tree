<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('password');
		echo $this->Form->input('nickname');
		echo $this->Form->input('family_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('customer_type');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.customer_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Customer.customer_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('controller' => 'voted_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
