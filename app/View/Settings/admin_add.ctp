<div class="settings form">
<?php echo $this->Form->create('Setting'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Setting'); ?></legend>
	<?php
		echo $this->Form->input('setting_code');
		echo $this->Form->input('setting_name');
		echo $this->Form->input('setting_code1');
		echo $this->Form->input('setting_code2');
		echo $this->Form->input('setting_code3');
		echo $this->Form->input('setting_code_value1');
		echo $this->Form->input('setting_code_value2');
		echo $this->Form->input('setting_code_value3');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?></li>
	</ul>
</div>
