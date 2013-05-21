<div class="adminRoles index">
	<h2><?php echo __('Admin Roles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('admin_role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_role_code'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_role_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($adminRoles as $adminRole): ?>
	<tr>
		<td><?php echo h($adminRole['AdminRole']['admin_role_id']); ?>&nbsp;</td>
		<td><?php echo h($adminRole['AdminRole']['admin_role_code']); ?>&nbsp;</td>
		<td><?php echo h($adminRole['AdminRole']['admin_role_name']); ?>&nbsp;</td>
		<td><?php echo h($adminRole['AdminRole']['created']); ?>&nbsp;</td>
		<td><?php echo h($adminRole['AdminRole']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adminRole['AdminRole']['admin_role_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adminRole['AdminRole']['admin_role_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adminRole['AdminRole']['admin_role_id']), null, __('Are you sure you want to delete # %s?', $adminRole['AdminRole']['admin_role_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Admin Role'), array('action' => 'add')); ?></li>
	</ul>
</div>
