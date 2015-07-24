<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Has Occupation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Occupation'), ['controller' => 'Occupation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Occupation'), ['controller' => 'Occupation', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userHasOccupation index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('occupation_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userHasOccupation as $userHasOccupation): ?>
        <tr>
            <td>
                <?= $userHasOccupation->has('user') ? $this->Html->link($userHasOccupation->user->name, ['controller' => 'User', 'action' => 'view', $userHasOccupation->user->id]) : '' ?>
            </td>
            <td>
                <?= $userHasOccupation->has('occupation') ? $this->Html->link($userHasOccupation->occupation->name, ['controller' => 'Occupation', 'action' => 'view', $userHasOccupation->occupation->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userHasOccupation->user_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userHasOccupation->user_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userHasOccupation->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHasOccupation->user_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
