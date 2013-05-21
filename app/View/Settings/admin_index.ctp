<div class="settings index">
	<h2><?php echo __('Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('setting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_name'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code1'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code2'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code3'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code_value1'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code_value2'); ?></th>
			<th><?php echo $this->Paginator->sort('setting_code_value3'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['setting_id']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_name']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code1']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code2']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code3']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code_value1']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code_value2']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['setting_code_value3']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['note']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['created']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setting['Setting']['setting_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['setting_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setting['Setting']['setting_id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['setting_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?></li>
	</ul>
</div>
