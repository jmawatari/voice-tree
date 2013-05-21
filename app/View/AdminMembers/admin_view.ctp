<div class="adminMembers view">
<h2><?php  echo __('Admin Member'); ?></h2>
	<dl>
		<dt><?php echo __('Admin Member Id'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['admin_member_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adminMember['AdminRole']['admin_role_id'], array('controller' => 'admin_roles', 'action' => 'view', $adminMember['AdminRole']['admin_role_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($adminMember['AdminMember']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin Member'), array('action' => 'edit', $adminMember['AdminMember']['admin_member_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admin Member'), array('action' => 'delete', $adminMember['AdminMember']['admin_member_id']), null, __('Are you sure you want to delete # %s?', $adminMember['AdminMember']['admin_member_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Roles'), array('controller' => 'admin_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Role'), array('controller' => 'admin_roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
