<div class="customers view">
<h2><?php  echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nickname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['nickname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Type'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['customer_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['customer_id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['customer_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('controller' => 'voted_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('controller' => 'voted_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($customer['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Comment Disclose Flg'); ?></th>
		<th><?php echo __('Comment Approval Flg'); ?></th>
		<th><?php echo __('Comment Anonymous Flg'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Handling Status'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['comment_id']; ?></td>
			<td><?php echo $comment['customer_id']; ?></td>
			<td><?php echo $comment['comment_type']; ?></td>
			<td><?php echo $comment['client_id']; ?></td>
			<td><?php echo $comment['category_id']; ?></td>
			<td><?php echo $comment['comment_disclose_flg']; ?></td>
			<td><?php echo $comment['comment_approval_flg']; ?></td>
			<td><?php echo $comment['comment_anonymous_flg']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['handling_status']; ?></td>
			<td><?php echo $comment['status']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['comment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['comment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['comment_id']), null, __('Are you sure you want to delete # %s?', $comment['comment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sub Comments'); ?></h3>
	<?php if (!empty($customer['SubComment'])): ?>
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
		foreach ($customer['SubComment'] as $subComment): ?>
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
	<?php if (!empty($customer['VotedPoint'])): ?>
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
		foreach ($customer['VotedPoint'] as $votedPoint): ?>
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
