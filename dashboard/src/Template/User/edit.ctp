<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="user form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
            echo $this->Form->input('enable');
            echo $this->Form->input('created_at');
            echo $this->Form->input('modified_at');
            echo $this->Form->input('excluded_at');
            echo $this->Form->input('phone');
            echo $this->Form->input('cell_phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
