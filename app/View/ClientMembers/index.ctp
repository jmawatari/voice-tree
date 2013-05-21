<div class="clientMembers index">
	<h2><?php echo __('Client Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('client_member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('leader_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientMembers as $clientMember): ?>
	<tr>
		<td><?php echo h($clientMember['ClientMember']['client_member_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientMember['Client']['client_id'], array('controller' => 'clients', 'action' => 'view', $clientMember['Client']['client_id'])); ?>
		</td>
		<td><?php echo h($clientMember['ClientMember']['mail_address']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['password']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['family_name']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['status']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['leader_flg']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientMember['ClientMember']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientMember['ClientMember']['client_member_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientMember['ClientMember']['client_member_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientMember['ClientMember']['client_member_id']), null, __('Are you sure you want to delete # %s?', $clientMember['ClientMember']['client_member_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Client Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
