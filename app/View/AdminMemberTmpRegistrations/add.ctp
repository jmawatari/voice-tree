<div class="adminMemberTmpRegistrations form">
<?php echo $this->Form->create('AdminMemberTmpRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Add Admin Member Tmp Registration'); ?></legend>
	<?php
		echo $this->Form->input('admin_member_registration_type');
		echo $this->Form->input('tmp_key');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('expire_datetime');
		echo $this->Form->input('status');
		echo $this->Form->input('admin_member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Admin Member Tmp Registrations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Members'), array('controller' => 'admin_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Member'), array('controller' => 'admin_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
