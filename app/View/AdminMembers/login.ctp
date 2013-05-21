<div class="adminMembers form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('AdminMember'); ?>
    <fieldset>
        <legend><?php echo __('ログインユーザ名、パスワードを入力してください'); ?></legend>
        <?php echo $this->Form->input('mail_address');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>