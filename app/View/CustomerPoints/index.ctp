<div class="customerPoints index">
	<h2><?php echo __('Customer Points'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('customer_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_point_type'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_point'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customerPoints as $customerPoint): ?>
	<tr>
		<td><?php echo h($customerPoint['CustomerPoint']['customer_point_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerPoint['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $customerPoint['Customer']['customer_id'])); ?>
		</td>
		<td><?php echo h($customerPoint['CustomerPoint']['customer_point_type']); ?>&nbsp;</td>
		<td><?php echo h($customerPoint['CustomerPoint']['customer_point']); ?>&nbsp;</td>
		<td><?php echo h($customerPoint['CustomerPoint']['status']); ?>&nbsp;</td>
		<td><?php echo h($customerPoint['CustomerPoint']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerPoint['CustomerPoint']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerPoint['CustomerPoint']['customer_point_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerPoint['CustomerPoint']['customer_point_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerPoint['CustomerPoint']['customer_point_id']), null, __('Are you sure you want to delete # %s?', $customerPoint['CustomerPoint']['customer_point_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Point'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
