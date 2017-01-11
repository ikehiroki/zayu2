<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('email');
        echo $this->Form->input('password', array('autocomplete' => 'off'));
        echo $this->Form->input('Principle.article');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Principles'), array('controller' => 'principles', 'action' => 'index')); ?> </li>
    </ul>
</div>
