<div class="clientMemberTmpRegistrations index">
	<h2><?php echo __('Client Member Tmp Registrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('client_member_tmp_registration_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_member_registration_type'); ?></th>
			<th><?php echo $this->Paginator->sort('tmp_key'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
			<th><?php echo $this->Paginator->sort('expire_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('client_member_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientMemberTmpRegistrations as $clientMemberTmpRegistration): ?>
	<tr>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_registration_type']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['tmp_key']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['mail_address']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['expire_datetime']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['status']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['modified']); ?>&nbsp;</td>
		<td><?php echo h($clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id']), null, __('Are you sure you want to delete # %s?', $clientMemberTmpRegistration['ClientMemberTmpRegistration']['client_member_tmp_registration_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client Member Tmp Registration'), array('action' => 'add')); ?></li>
	</ul>
</div>
