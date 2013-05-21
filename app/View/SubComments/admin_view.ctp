<div class="subComments view">
<h2><?php  echo __('Sub Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Sub Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subComment['SubComment']['sub_comment_id'], array('controller' => 'sub_comments', 'action' => 'view', $subComment['SubComment']['sub_comment_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subComment['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $subComment['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subComment['Comment']['comment_id'], array('controller' => 'comments', 'action' => 'view', $subComment['Comment']['comment_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($subComment['SubComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcomment Anonymous Flg'); ?></dt>
		<dd>
			<?php echo h($subComment['SubComment']['subcomment_anonymous_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($subComment['SubComment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subComment['SubComment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subComment['SubComment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Comment'), array('action' => 'edit', $subComment['SubComment']['sub_comment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Comment'), array('action' => 'delete', $subComment['SubComment']['sub_comment_id']), null, __('Are you sure you want to delete # %s?', $subComment['SubComment']['sub_comment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Sub Comments'); ?></h3>
	<?php if (!empty($subComment['SubComment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Sub Comment Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Subcomment Anonymous Flg'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subComment['SubComment'] as $subComment): ?>
		<tr>
			<td><?php echo $subComment['sub_comment_id']; ?></td>
			<td><?php echo $subComment['customer_id']; ?></td>
			<td><?php echo $subComment['comment_id']; ?></td>
			<td><?php echo $subComment['comment']; ?></td>
			<td><?php echo $subComment['subcomment_anonymous_flg']; ?></td>
			<td><?php echo $subComment['status']; ?></td>
			<td><?php echo $subComment['created']; ?></td>
			<td><?php echo $subComment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sub_comments', 'action' => 'view', $subComment['sub_comment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sub_comments', 'action' => 'edit', $subComment['sub_comment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sub_comments', 'action' => 'delete', $subComment['sub_comment_id']), null, __('Are you sure you want to delete # %s?', $subComment['sub_comment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Voted Points'); ?></h3>
	<?php if (!empty($subComment['VotedPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Voted Point Id'); ?></th>
		<th><?php echo __('Voted Point Type'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Sub Comment Id'); ?></th>
		<th><?php echo __('Voted Point'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subComment['VotedPoint'] as $votedPoint): ?>
		<tr>
			<td><?php echo $votedPoint['voted_point_id']; ?></td>
			<td><?php echo $votedPoint['voted_point_type']; ?></td>
			<td><?php echo $votedPoint['customer_id']; ?></td>
			<td><?php echo $votedPoint['comment_id']; ?></td>
			<td><?php echo $votedPoint['sub_comment_id']; ?></td>
			<td><?php echo $votedPoint['voted_point']; ?></td>
			<td><?php echo $votedPoint['created']; ?></td>
			<td><?php echo $votedPoint['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'voted_points', 'action' => 'view', $votedPoint['voted_point_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'voted_points', 'action' => 'edit', $votedPoint['voted_point_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'voted_points', 'action' => 'delete', $votedPoint['voted_point_id']), null, __('Are you sure you want to delete # %s?', $votedPoint['voted_point_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
