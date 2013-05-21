<div class="adminRoles view">
<h2><?php  echo __('Admin Role'); ?></h2>
	<dl>
		<dt><?php echo __('Admin Role Id'); ?></dt>
		<dd>
			<?php echo h($adminRole['AdminRole']['admin_role_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Role Code'); ?></dt>
		<dd>
			<?php echo h($adminRole['AdminRole']['admin_role_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Role Name'); ?></dt>
		<dd>
			<?php echo h($adminRole['AdminRole']['admin_role_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adminRole['AdminRole']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($adminRole['AdminRole']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin Role'), array('action' => 'edit', $adminRole['AdminRole']['admin_role_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admin Role'), array('action' => 'delete', $adminRole['AdminRole']['admin_role_id']), null, __('Are you sure you want to delete # %s?', $adminRole['AdminRole']['admin_role_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Role'), array('action' => 'add')); ?> </li>
	</ul>
</div>
