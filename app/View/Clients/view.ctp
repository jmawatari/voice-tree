<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Client Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Type'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['website_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website Url'); ?></dt>
		<dd>
			<?php echo h($client['Client']['website_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subdomain'); ?></dt>
		<dd>
			<?php echo h($client['Client']['subdomain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($client['Client']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['client_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['client_id']), null, __('Are you sure you want to delete # %s?', $client['Client']['client_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Board Settings'), array('controller' => 'board_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Board Setting'), array('controller' => 'board_settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Board Settings'); ?></h3>
	<?php if (!empty($client['BoardSetting'])): ?>
		<dl>
			<dt><?php echo __('Board Setting Id'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['board_setting_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Client Id'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['client_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Board Disclose Setting Flg'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['board_disclose_setting_flg']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comment Approval Setting Flg'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['comment_approval_setting_flg']; ?>
&nbsp;</dd>
		<dt><?php echo __('Hedder Html Source'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['hedder_html_source']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $client['BoardSetting']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Board Setting'), array('controller' => 'board_settings', 'action' => 'edit', $client['BoardSetting']['board_setting_id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Categories'); ?></h3>
	<?php if (!empty($client['Category'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Category Name'); ?></th>
		<th><?php echo __('Sort'); ?></th>
		<th><?php echo __('Default Set Flg'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Category'] as $category): ?>
		<tr>
			<td><?php echo $category['category_id']; ?></td>
			<td><?php echo $category['client_id']; ?></td>
			<td><?php echo $category['category_name']; ?></td>
			<td><?php echo $category['sort']; ?></td>
			<td><?php echo $category['default_set_flg']; ?></td>
			<td><?php echo $category['status']; ?></td>
			<td><?php echo $category['created']; ?></td>
			<td><?php echo $category['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $category['category_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $category['category_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['category_id']), null, __('Are you sure you want to delete # %s?', $category['category_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($client['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Comment Disclose Flg'); ?></th>
		<th><?php echo __('Comment Approval Flg'); ?></th>
		<th><?php echo __('Comment Anonymous Flg'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Handling Status'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['comment_id']; ?></td>
			<td><?php echo $comment['customer_id']; ?></td>
			<td><?php echo $comment['comment_type']; ?></td>
			<td><?php echo $comment['client_id']; ?></td>
			<td><?php echo $comment['category_id']; ?></td>
			<td><?php echo $comment['comment_disclose_flg']; ?></td>
			<td><?php echo $comment['comment_approval_flg']; ?></td>
			<td><?php echo $comment['comment_anonymous_flg']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['handling_status']; ?></td>
			<td><?php echo $comment['status']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['comment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['comment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['comment_id']), null, __('Are you sure you want to delete # %s?', $comment['comment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
