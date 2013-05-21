<div class="customerTempRegistrations index">
	<h2><?php echo __('Customer Temp Registrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('customer_temp_registration_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_registration_type'); ?></th>
			<th><?php echo $this->Paginator->sort('tmp_key'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expire_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customerTempRegistrations as $customerTempRegistration): ?>
	<tr>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_registration_type']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['tmp_key']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['mail_address']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['expire_datetime']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['status']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerTempRegistration['CustomerTempRegistration']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id']), null, __('Are you sure you want to delete # %s?', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Temp Registration'), array('action' => 'add')); ?></li>
	</ul>
</div>
