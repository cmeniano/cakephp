<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userinfo[]|\Cake\Collection\CollectionInterface $userinfo
 */
?>

<div class="index-container">
    <div class="row">
     
            <h1><?= __('User Manager') ?></h1>
            <div class="row">
                <div class="col-9">
                    <nav class="navbar navbar-light bg-light">
                        <?= $this->Form->create("",['type'=>'get','class'=>'form-inline'])?>
                            <?= $this->Form->control('keyword', ['label'=>'','class'=>'btn btn-outline-success']); ?>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                         <?= $this->Form->end() ?>
                    </nav>
                </div>
                <div class="col-3">
                    <ul class="side-nav">
                        <button type="button" class="btn btn-primary"><?= $this->Html->link(__('Create New User'), ['action' => 'add']) ?></button>
                    </ul>
                </div>
           
           
            
                <div class="container" id="user-table">
                <table class="table">
                <thead>
                    <tr class="tr-header">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userinfos as $userinfo): ?>
                        <tr>
                            <td><?= $this->Number->format($userinfo->id) ?></td>
                            <td><?= h($userinfo->email) ?></td>
                            <td><?= h($userinfo->username) ?></td>
                            <td><?= h($userinfo->password) ?></td>
                            <td class="actions">
                            <button type="button" class="btn btn-success"><?= $this->Html->link(__('View'), ['action' => 'view', $userinfo->id]) ?></button>  
                            <button type="button" class="btn btn-warning"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $userinfo->id]) ?></button>
                            <button type="button" class="btn btn-danger"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfo->id)]) ?></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
    <button type="button" class="btn btn-primary"> <?= $this->Paginator->prev('< ' . __('previous')) ?></button>
        <?= $this->Paginator->numbers() ?>
        <button type="button" class="btn btn-primary"><?= $this->Paginator->next(__('next') . ' >') ?></button
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>






