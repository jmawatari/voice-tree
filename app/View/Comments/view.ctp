<div class="comments view">
<h2><?php  echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $comment['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Type'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Client']['client_id'], array('controller' => 'clients', 'action' => 'view', $comment['Client']['client_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Disclose Flg'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_disclose_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approval Flg'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_approval_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Anonymous Flg'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_anonymous_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handling Status'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['handling_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['comment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['comment_id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['comment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('controller' => 'voted_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Voted Points'); ?></h3>
	<?php if (!empty($comment['VotedPoint'])): ?>
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
		foreach ($comment['VotedPoint'] as $votedPoint): ?>
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
