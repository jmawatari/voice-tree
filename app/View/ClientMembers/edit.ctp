<div class="clientMembers form">
<?php echo $this->Form->create('ClientMember'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client Member'); ?></legend>
	<?php
		echo $this->Form->input('client_member_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('mail_address');
		echo $this->Form->input('password');
		echo $this->Form->input('family_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('status');
		echo $this->Form->input('leader_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientMember.client_member_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClientMember.client_member_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
