<div class="adminRoles form">
<?php echo $this->Form->create('AdminRole'); ?>
	<fieldset>
		<legend><?php echo __('Add Admin Role'); ?></legend>
	<?php
		echo $this->Form->input('admin_role_code');
		echo $this->Form->input('admin_role_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Admin Roles'), array('action' => 'index')); ?></li>
	</ul>
</div>
