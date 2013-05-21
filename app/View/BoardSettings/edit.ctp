<div class="boardSettings form">
<?php echo $this->Form->create('BoardSetting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Board Setting'); ?></legend>
	<?php
		echo $this->Form->input('board_setting_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('board_disclose_setting_flg');
		echo $this->Form->input('comment_approval_setting_flg');
		echo $this->Form->input('hedder_html_source');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BoardSetting.board_setting_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BoardSetting.board_setting_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Board Settings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
