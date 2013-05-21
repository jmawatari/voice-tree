<div class="adminRoles form">
<?php echo $this->Form->create('AdminRole'); ?>
	<fieldset>
		<legend><?php echo __('Edit Admin Role'); ?></legend>
	<?php
		echo $this->Form->input('admin_role_id');
		echo $this->Form->input('admin_role_code');
		echo $this->Form->input('admin_role_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdminRole.admin_role_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AdminRole.admin_role_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Roles'), array('action' => 'index')); ?></li>
	</ul>
</div>
