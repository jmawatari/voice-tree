<div class="clientMemberTmpRegistrations view">
<h2><?php  echo __('Client Member Tmp Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Client Member Tmp Registration Id'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Member Registration Type'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_registration_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tmp Key'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['tmp_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expire Datetime'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['expire_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Member Id'); ?></dt>
		<dd>
			<?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Member Tmp Registration'), array('action' => 'edit', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Member Tmp Registration'), array('action' => 'delete', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id']), null, __('Are you sure you want to delete # %s?', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Member Tmp Registrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Member Tmp Registration'), array('action' => 'add')); ?> </li>
	</ul>
</div>
