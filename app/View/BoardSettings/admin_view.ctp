<div class="boardSettings view">
<h2><?php  echo __('Board Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Board Setting Id'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['board_setting_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($boardSetting['Client']['client_id'], array('controller' => 'clients', 'action' => 'view', $boardSetting['Client']['client_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Disclose Setting Flg'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['board_disclose_setting_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approval Setting Flg'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['comment_approval_setting_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hedder Html Source'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['hedder_html_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($boardSetting['BoardSetting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Board Setting'), array('action' => 'edit', $boardSetting['BoardSetting']['board_setting_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Board Setting'), array('action' => 'delete', $boardSetting['BoardSetting']['board_setting_id']), null, __('Are you sure you want to delete # %s?', $boardSetting['BoardSetting']['board_setting_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Board Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Board Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
