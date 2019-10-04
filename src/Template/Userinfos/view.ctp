<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo $userinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Userinfo'), ['action' => 'edit', $userinfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userinfo'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userinfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userinfo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userinfo view large-9 medium-8 columns content">
    <h3><?= h($userinfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($userinfo->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($userinfo->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($userinfo->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userinfo->id) ?></td>
        </tr>
    </table>
</div>
