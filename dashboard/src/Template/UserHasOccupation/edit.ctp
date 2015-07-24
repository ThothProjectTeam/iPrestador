<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userHasOccupation->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userHasOccupation->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Has Occupation'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Occupation'), ['controller' => 'Occupation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Occupation'), ['controller' => 'Occupation', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userHasOccupation form large-10 medium-9 columns">
    <?= $this->Form->create($userHasOccupation) ?>
    <fieldset>
        <legend><?= __('Edit User Has Occupation') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>