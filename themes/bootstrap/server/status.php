<?php if (!defined('FLUX_ROOT')) {
    exit;
} ?>
<?php include FLUX_ROOT."/modules/server/status.php"; ?>

<!--include server-side module data -->

<?php foreach ($serverStatus as $privServerName => $gameServers): ?>
<?php foreach ($gameServers as $serverName => $gameServer): ?>


<div class="row justify-content-md-center mb-3">
  <div class="col-13 col-md-7">
    <div class="card">
      <h3 class="card-header teal lighten-2 white-text text-center">Server Time</h3>
      <div class="card-body text-center" style="border:3px">
        <i class="fas fa-clock fa-3x"></i>
        <iframe class="mt-1 embed-responsive" src="http://free.timeanddate.com/clock/i6b0a53w/n236/fs20/tct/pct/ftb/th2"
        frameborder="0" width="136" height="27" allowTransparency="true"></iframe>
      </div>
    </div>
  </div>
</div> <!--row mt-3-->


<div class="text-center">
  <h3 class="blue-grey-text" style="font-size: 16px;"><b><?php echo htmlspecialchars(Flux::message('ServerStatusOnlineLabel')) ?></b>:
  <?php echo $gameServer['playersOnline'] ?></h3>
</div>

<div class="row mx-auto img-thumbnail">
  <div class="col ml-5">
    Login Server:
  </div>
  <div class="col">
    <?php echo $this->serverUpDown($gameServer['loginServerUp']) ?>
  </div>

  <div class="w-100"></div>
  <div class="col ml-5">
    Char Server:
  </div>
  <div class="col">
    <?php echo $this->serverUpDown($gameServer['charServerUp']) ?>
  </div>

  <div class="w-100"></div>
  <div class="col ml-5">
    Map Server:
  </div>
  <div class="col">
    <?php echo $this->serverUpDown($gameServer['mapServerUp']) ?>
  </div>
</div>
<!-- row img-thumbnail -->

<?php endforeach ?>
<?php endforeach ?>



<!--

<?php foreach ($serverStatus as $privServerName => $gameServers): ?>
<table id="server_status">
	<tr>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusServerLabel')) ?>
		</td>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusLoginLabel')) ?>
		</td>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusCharLabel')) ?>
		</td>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusMapLabel')) ?>
		</td>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusOnlineLabel')) ?>
		</td>
		<?php if (Flux::config('EnablePeakDisplay')): ?>
		<td class="status">
			<?php echo htmlspecialchars(Flux::message('ServerStatusPeakLabel')) ?>
		</td>
		<?php endif ?>
	</tr>


	<?php foreach ($gameServers as $serverName => $gameServer): ?>
	<tr>
		<th class="server">
			<?php echo htmlspecialchars($serverName) ?>
		</th>
		<td class="status">
			<?php echo $this->serverUpDown($gameServer['loginServerUp']) ?>
		</td>
		<td class="status">
			<?php echo $this->serverUpDown($gameServer['charServerUp']) ?>
		</td>
		<td class="status">
			<?php echo $this->serverUpDown($gameServer['mapServerUp']) ?>
		</td>
		<td class="status">
			<?php echo $gameServer['playersOnline'] ?>
		</td>
		<?php if (Flux::config('EnablePeakDisplay')): ?>
		<td class="status">
			<?php echo $gameServer['playersPeak'] ?>
		</td>
		<?php endif ?>
	</tr>
	<?php endforeach ?>
</table>
<?php endforeach ?>
-->
