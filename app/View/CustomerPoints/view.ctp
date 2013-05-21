<div class="customerPoints view">
<h2><?php  echo __('Customer Point'); ?></h2>
	<dl>
		<dt><?php echo __('Customer Point Id'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['customer_point_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerPoint['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $customerPoint['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Point Type'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['customer_point_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Point'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['customer_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerPoint['CustomerPoint']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Point'), array('action' => 'edit', $customerPoint['CustomerPoint']['customer_point_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Point'), array('action' => 'delete', $customerPoint['CustomerPoint']['customer_point_id']), null, __('Are you sure you want to delete # %s?', $customerPoint['CustomerPoint']['customer_point_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
