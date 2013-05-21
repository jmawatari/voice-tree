<div class="adminMemberTmpRegistrations view">
<h2><?php  echo __('Admin Member Tmp Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Admin Member Tmp Registration Id'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Member Registration Type'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_registration_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tmp Key'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['tmp_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expire Datetime'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['expire_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($adminMemberTmpRegistration['AdminMemberTmpRegistration']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adminMemberTmpRegistration['AdminMember']['admin_member_id'], array('controller' => 'admin_members', 'action' => 'view', $adminMemberTmpRegistration['AdminMember']['admin_member_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin Member Tmp Registration'), array('action' => 'edit', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admin Member Tmp Registration'), array('action' => 'delete', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id']), null, __('Are you sure you want to delete # %s?', $adminMemberTmpRegistration['AdminMemberTmpRegistration']['admin_member_tmp_registration_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Member Tmp Registrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Member Tmp Registration'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Members'), array('controller' => 'admin_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Member'), array('controller' => 'admin_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
