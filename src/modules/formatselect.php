<select class="format-select">
	<option value="1500" cup="all" meta-group="great">Great League</option>
	<option value="2500" cup="all" meta-group="ultra">Ultra League</option>
	<option value="10000" cup="all" meta-group="master">Master League</option>
	<option value="10000" cup="classic" meta-group="master">Master League (Classic)</option>
	<option value="1500" cup="kanto" meta-group="kanto">Kanto Cup</option>
	<option value="1500" cup="flying" meta-group="flying">Flying Cup</option>
	<option value="1500" cup="nemesis" meta-group="nemesis">Silph Nemesis Cup</option>
	<option value="1500" cup="firefly" meta-group="firefly">Silph Firefly Cup</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">Custom</option>
</select>
