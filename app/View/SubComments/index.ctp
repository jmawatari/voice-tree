<div class="subComments index">
	<h2><?php echo __('Sub Comments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('sub_comment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('subcomment_anonymous_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subComments as $subComment): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($subComment['SubComment']['sub_comment_id'], array('controller' => 'sub_comments', 'action' => 'view', $subComment['SubComment']['sub_comment_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subComment['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $subComment['Customer']['customer_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subComment['Comment']['comment_id'], array('controller' => 'comments', 'action' => 'view', $subComment['Comment']['comment_id'])); ?>
		</td>
		<td><?php echo h($subComment['SubComment']['comment']); ?>&nbsp;</td>
		<td><?php echo h($subComment['SubComment']['subcomment_anonymous_flg']); ?>&nbsp;</td>
		<td><?php echo h($subComment['SubComment']['status']); ?>&nbsp;</td>
		<td><?php echo h($subComment['SubComment']['created']); ?>&nbsp;</td>
		<td><?php echo h($subComment['SubComment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subComment['SubComment']['sub_comment_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subComment['SubComment']['sub_comment_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subComment['SubComment']['sub_comment_id']), null, __('Are you sure you want to delete # %s?', $subComment['SubComment']['sub_comment_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('controller' => 'voted_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
