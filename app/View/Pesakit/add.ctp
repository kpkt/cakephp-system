<div class="pesakits form">
<?php echo $this->Form->create('Pesakit'); ?>
	<fieldset>
		<legend><?php echo __('Add Pesakit'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ic');
		echo $this->Form->input('age',['readonly']);
		echo $this->Form->input('dob',['type'=>'text','readonly']);
		echo $this->Form->input('address');
		echo $this->Form->input('gender_id',['empty'=>'--pilihan--']);
		echo $this->Form->input('race_id',['empty'=>'--pilihan--']);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pesakits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>
$(document).ready(function () {
	$('#PesakitIc').on('change', function () {
			var nokp = this.value;

			var hari = nokp.substr(4, 2);
			var bulan = nokp.substr(2, 2);
			var tahun = nokp.substr(0, 2);
			var jantina = nokp.substr(nokp.length - 1);

			var real_tahun = kira_tahun_lahir(tahun);
			var umur = kira_umur(hari, bulan, real_tahun);
			var gen = gender(jantina);

			$('#PesakitAge').val(umur);
			$('#PesakitDob').val(hari  +'-'+ bulan +'-'+ real_tahun);
			$('#PesakitGenderId').val(gen);

		});

		function gender(num) {
			return num % 2 == 1 ? 1:2;
		}

		function kira_tahun_lahir(tahun) {
			if (tahun >= 00 && tahun <= 30) {
				return 2000 + parseInt(tahun);
			}
			if (tahun >= 31 && tahun <= 99) {
				return 1900 + parseInt(tahun);
			}
		}

		function kira_umur(hari, bulan, real_tahun) {
			var date = real_tahun + '-' + bulan + '-' + hari;

			var dob = new Date(date);
			var today = new Date();
			var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
			return age ? age : 0;

		}
});

</script>