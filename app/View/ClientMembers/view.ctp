<div class="clientMembers view">
<h2><?php  echo __('Client Member'); ?></h2>
	<dl>
		<dt><?php echo __('Client Member Id'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['client_member_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientMember['Client']['client_id'], array('controller' => 'clients', 'action' => 'view', $clientMember['Client']['client_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leader Flg'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['leader_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientMember['ClientMember']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Member'), array('action' => 'edit', $clientMember['ClientMember']['client_member_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Member'), array('action' => 'delete', $clientMember['ClientMember']['client_member_id']), null, __('Are you sure you want to delete # %s?', $clientMember['ClientMember']['client_member_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
