<div class="records index">
	<h2><?php echo __('Records'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('test_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reports'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_doc'); ?></th>
			<th><?php echo $this->Paginator->sort('date_report'); ?></th>
			<th><?php echo $this->Paginator->sort('date_appointment'); ?></th>
			<th><?php echo $this->Paginator->sort('pesakit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($records as $record): ?>
	<tr>
		<td><?php echo h($record['Record']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['Test']['name'], array('controller' => 'tests', 'action' => 'view', $record['Test']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['reports']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['ref_doc']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['date_report']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['date_appointment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['Pesakit']['name'], array('controller' => 'pesakits', 'action' => 'view', $record['Pesakit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['User']['id'], array('controller' => 'users', 'action' => 'view', $record['User']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['created']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $record['Record']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $record['Record']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $record['Record']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $record['Record']['id']))); ?>
		</td>
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
		<li><?php echo $this->Html->link(__('New Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pesakits'), array('controller' => 'pesakits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pesakit'), array('controller' => 'pesakits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
