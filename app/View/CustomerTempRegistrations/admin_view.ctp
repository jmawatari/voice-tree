<div class="customerTempRegistrations view">
<h2><?php  echo __('Customer Temp Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Customer Temp Registration Id'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Registration Type'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_registration_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tmp Key'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['tmp_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expire Datetime'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['expire_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerTempRegistration['CustomerTempRegistration']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Temp Registration'), array('action' => 'edit', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Temp Registration'), array('action' => 'delete', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id']), null, __('Are you sure you want to delete # %s?', $customerTempRegistration['CustomerTempRegistration']['customer_temp_registration_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Temp Registrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Temp Registration'), array('action' => 'add')); ?> </li>
	</ul>
</div>
