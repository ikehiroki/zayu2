<div class="principles index">
    <h2><?php echo h($user['User']['email']); ?> さんは「<?php echo h($user['Principle']['article']); ?>」</h2>
    <h3><?php echo __('article'); ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('article', __('article')); ?></th>
                <th><?php echo $this->Paginator->sort('User.email', __('email')); ?></th>
                <th><?php echo $this->Paginator->sort('modified', __('modified')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($principles as $principle): ?>
                <tr>
                    <td><?php echo $principle['Principle']['article']; ?>&nbsp;</td>
                    <td><?php echo $principle['User']['email']; ?>&nbsp;</td>
                    <td><?php echo $principle['Principle']['modified']; ?>&nbsp;</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User'), array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
    </ul>
</div>
