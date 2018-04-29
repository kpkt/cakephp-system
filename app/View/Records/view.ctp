<div class="records view">
<h2><?php echo __('Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($record['Record']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Test']['name'], array('controller' => 'tests', 'action' => 'view', $record['Test']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reports'); ?></dt>
		<dd>
			<?php echo h($record['Record']['reports']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref Doc'); ?></dt>
		<dd>
			<?php echo h($record['Record']['ref_doc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Report'); ?></dt>
		<dd>
			<?php echo h($record['Record']['date_report']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Appointment'); ?></dt>
		<dd>
			<?php echo h($record['Record']['date_appointment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pesakit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Pesakit']['name'], array('controller' => 'pesakits', 'action' => 'view', $record['Pesakit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['User']['id'], array('controller' => 'users', 'action' => 'view', $record['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($record['Record']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($record['Record']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Record'), array('action' => 'edit', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Record'), array('action' => 'delete', $record['Record']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $record['Record']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('controller' => 'pesakits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pesakit'), array('controller' => 'pesakits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
