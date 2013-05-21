<div class="clientMemberTmpRegistrations form">
<?php echo $this->Form->create('ClientMemberTmpRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Client Member Tmp Registration'); ?></legend>
	<?php
		echo $this->Form->input('client_member_tmp_registration_id');
		echo $this->Form->input('client_member_registration_type');
		echo $this->Form->input('tmp_key');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('expire_datetime');
		echo $this->Form->input('status');
		echo $this->Form->input('client_member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientMemberTmpRegistration.client_member_tmp_registration_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClientMemberTmpRegistration.client_member_tmp_registration_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Member Tmp Registrations'), array('action' => 'index')); ?></li>
	</ul>
</div>
