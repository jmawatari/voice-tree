<div class="subComments form">
<?php echo $this->Form->create('SubComment'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Sub Comment'); ?></legend>
	<?php
		echo $this->Form->input('sub_comment_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('comment_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('subcomment_anonymous_flg');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubComment.sub_comment_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubComment.sub_comment_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Comments'), array('action' => 'index')); ?></li>
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
