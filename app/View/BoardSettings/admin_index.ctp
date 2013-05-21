<div class="boardSettings index">
	<h2><?php echo __('Board Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('board_setting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('board_disclose_setting_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approval_setting_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('hedder_html_source'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($boardSettings as $boardSetting): ?>
	<tr>
		<td><?php echo h($boardSetting['BoardSetting']['board_setting_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($boardSetting['Client']['client_id'], array('controller' => 'clients', 'action' => 'view', $boardSetting['Client']['client_id'])); ?>
		</td>
		<td><?php echo h($boardSetting['BoardSetting']['board_disclose_setting_flg']); ?>&nbsp;</td>
		<td><?php echo h($boardSetting['BoardSetting']['comment_approval_setting_flg']); ?>&nbsp;</td>
		<td><?php echo h($boardSetting['BoardSetting']['hedder_html_source']); ?>&nbsp;</td>
		<td><?php echo h($boardSetting['BoardSetting']['created']); ?>&nbsp;</td>
		<td><?php echo h($boardSetting['BoardSetting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $boardSetting['BoardSetting']['board_setting_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $boardSetting['BoardSetting']['board_setting_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $boardSetting['BoardSetting']['board_setting_id']), null, __('Are you sure you want to delete # %s?', $boardSetting['BoardSetting']['board_setting_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Board Setting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
