<div class="pesakits index">
	<h2><?php echo __('Pesakits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ic'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('dob'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
			<th><?php echo $this->Paginator->sort('race_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pesakits as $pesakit): ?>
	<tr>
		<td><?php echo h($pesakit['Pesakit']['id']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['name']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['ic']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['age']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['dob']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pesakit['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $pesakit['Gender']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pesakit['Race']['name'], array('controller' => 'races', 'action' => 'view', $pesakit['Race']['id'])); ?>
		</td>
		<td><?php echo h($pesakit['Pesakit']['created']); ?>&nbsp;</td>
		<td><?php echo h($pesakit['Pesakit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pesakit['Pesakit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pesakit['Pesakit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pesakit['Pesakit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pesakit['Pesakit']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pesakit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
