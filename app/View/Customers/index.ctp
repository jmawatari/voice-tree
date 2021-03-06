<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('nickname'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_type'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['mail_address']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['password']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['nickname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['family_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['customer_type']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['status']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['created']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['customer_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['customer_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['customer_id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['customer_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('controller' => 'voted_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
