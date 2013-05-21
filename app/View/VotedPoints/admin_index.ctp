<div class="votedPoints index">
	<h2><?php echo __('Voted Points'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('voted_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('voted_point_type'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_comment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('voted_point'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($votedPoints as $votedPoint): ?>
	<tr>
		<td><?php echo h($votedPoint['VotedPoint']['voted_point_id']); ?>&nbsp;</td>
		<td><?php echo h($votedPoint['VotedPoint']['voted_point_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($votedPoint['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $votedPoint['Customer']['customer_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($votedPoint['Comment']['comment_id'], array('controller' => 'comments', 'action' => 'view', $votedPoint['Comment']['comment_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($votedPoint['SubComment']['sub_comment_id'], array('controller' => 'sub_comments', 'action' => 'view', $votedPoint['SubComment']['sub_comment_id'])); ?>
		</td>
		<td><?php echo h($votedPoint['VotedPoint']['voted_point']); ?>&nbsp;</td>
		<td><?php echo h($votedPoint['VotedPoint']['created']); ?>&nbsp;</td>
		<td><?php echo h($votedPoint['VotedPoint']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $votedPoint['VotedPoint']['voted_point_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $votedPoint['VotedPoint']['voted_point_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $votedPoint['VotedPoint']['voted_point_id']), null, __('Are you sure you want to delete # %s?', $votedPoint['VotedPoint']['voted_point_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Voted Point'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
