<div class="votedPoints view">
<h2><?php  echo __('Voted Point'); ?></h2>
	<dl>
		<dt><?php echo __('Voted Point Id'); ?></dt>
		<dd>
			<?php echo h($votedPoint['VotedPoint']['voted_point_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voted Point Type'); ?></dt>
		<dd>
			<?php echo h($votedPoint['VotedPoint']['voted_point_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($votedPoint['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $votedPoint['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($votedPoint['Comment']['comment_id'], array('controller' => 'comments', 'action' => 'view', $votedPoint['Comment']['comment_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($votedPoint['SubComment']['sub_comment_id'], array('controller' => 'sub_comments', 'action' => 'view', $votedPoint['SubComment']['sub_comment_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voted Point'); ?></dt>
		<dd>
			<?php echo h($votedPoint['VotedPoint']['voted_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($votedPoint['VotedPoint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($votedPoint['VotedPoint']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Voted Point'), array('action' => 'edit', $votedPoint['VotedPoint']['voted_point_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Voted Point'), array('action' => 'delete', $votedPoint['VotedPoint']['voted_point_id']), null, __('Are you sure you want to delete # %s?', $votedPoint['VotedPoint']['voted_point_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Voted Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voted Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('controller' => 'sub_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Comment'), array('controller' => 'sub_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
