<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="user view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($user->phone) ?></p>
            <h6 class="subheader"><?= __('Cell Phone') ?></h6>
            <p><?= h($user->cell_phone) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created At') ?></h6>
            <p><?= h($user->created_at) ?></p>
            <h6 class="subheader"><?= __('Modified At') ?></h6>
            <p><?= h($user->modified_at) ?></p>
            <h6 class="subheader"><?= __('Excluded At') ?></h6>
            <p><?= h($user->excluded_at) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Enable') ?></h6>
            <p><?= $user->enable ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
