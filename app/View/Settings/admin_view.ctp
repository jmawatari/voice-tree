<div class="settings view">
<h2><?php  echo __('Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Setting Id'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Name'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code1'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code2'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code3'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code Value1'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code_value1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code Value2'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code_value2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setting Code Value3'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['setting_code_value3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setting'), array('action' => 'edit', $setting['Setting']['setting_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setting'), array('action' => 'delete', $setting['Setting']['setting_id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['setting_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
