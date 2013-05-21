<div class="adminMembers form">
<?php echo $this->Form->create('AdminMember'); ?>
	<fieldset>
		<legend><?php echo __('Edit Admin Member'); ?></legend>
	<?php
		echo $this->Form->input('admin_member_id');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('password');
		echo $this->Form->input('family_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('admin_role_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdminMember.admin_member_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AdminMember.admin_member_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Roles'), array('controller' => 'admin_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Role'), array('controller' => 'admin_roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
