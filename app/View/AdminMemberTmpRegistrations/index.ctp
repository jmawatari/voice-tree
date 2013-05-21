<div class="adminMemberTmpRegistrations index">
	<h2><?php echo __('Admin Member Tmp Registrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('admin_member_tmp_registration_id'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_member_registration_type'); ?></th>
			<th><?php echo $this->Paginator->sort('tmp_key'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
			<th><?php echo $this->Paginator->sort('expire_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_member_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($adminMemberTmpRegistrations as $adminMemberTmpRegistration): ?>
	<tr>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_registration_type']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['tmp_key']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['mail_address']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['expire_datetime']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['status']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['created']); ?>&nbsp;</td>
		<td><?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adminMemberTmpRegistration['AdminMember']['admin_member_id'], array('controller' => 'admin_members', 'action' => 'view', $adminMemberTmpRegistration['AdminMember']['admin_member_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id']), null, __('Are you sure you want to delete # %s?', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Admin Member Tmp Registration'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Members'), array('controller' => 'admin_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Member'), array('controller' => 'admin_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
