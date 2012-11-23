<input type="hidden" name="answered-<?= $uid ?>" value="0">
<input type="hidden" name="text-<?= $uid ?>" value="">

<fieldset>
	<legend><?= $question ?></legend>
<?php
	foreach($answers as $row): ?>
	<input type="radio" name="value-<?= $uid ?>" id="value-<?= $row['value'] ?>" value="<?= $row['value'] ?>">
	<label for="value-<?= $row['value'] ?>" id="label-<?= $row['value'] ?>"><?= $row['text'] ?></label>
	<br />
	<?php endforeach; ?>
</fieldset>

<script type="text/javascript">

	$('input[name=value-<?= $uid ?>]').change( function() {
		var selectedValue = $('input[name=value-<?= $uid ?>]:checked').val();
		$('input[name=text-<?= $uid ?>]').val($('#label-' + selectedValue).text());
		$('input[name=answered-<?= $uid ?>]').val(1);
	});

</script>

