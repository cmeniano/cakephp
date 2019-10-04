<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Userinfo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($userinfo) ?>
    <fieldset>
        <legend><?= __('Add Userinfo') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('admin_privilages');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>