<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Has Occupation'), ['action' => 'edit', $userHasOccupation->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Has Occupation'), ['action' => 'delete', $userHasOccupation->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHasOccupation->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Has Occupation'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Has Occupation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Occupation'), ['controller' => 'Occupation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Occupation'), ['controller' => 'Occupation', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userHasOccupation view large-10 medium-9 columns">
    <h2><?= h($userHasOccupation->user_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userHasOccupation->has('user') ? $this->Html->link($userHasOccupation->user->name, ['controller' => 'User', 'action' => 'view', $userHasOccupation->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Occupation') ?></h6>
            <p><?= $userHasOccupation->has('occupation') ? $this->Html->link($userHasOccupation->occupation->name, ['controller' => 'Occupation', 'action' => 'view', $userHasOccupation->occupation->id]) : '' ?></p>
        </div>
    </div>
</div>
