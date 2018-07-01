<?php
if (!defined('FLUX_ROOT')) {
    exit;
} ?>


<h3 class="card-header primary-color white-text">Announcment</h3>


<?php if ($newstype == '1'):?>
<div class="newsDiv row h-100 justify-content-between pl-5 pr-5">
  <?php foreach ($news as $nrow):?>

  <div class="card col-6 col-md-4 p-0 m-3">
    <h3 class="card-header primary-color-dark white-text"><?php echo $nrow->title ?>
  </h3>
    <div class="newsCont">
      <div class="card-body">
        <?php echo $nrow->body ?>
      </div>
      <div class="card-footer">
        <span class="newsDate"><small>by <?php echo $nrow->author ?> on <?php echo date(Flux::config('DateFormat'), strtotime($nrow->created))?></small></span>
      </div>
      <?php if ($nrow->created != $nrow->modified && Flux::config('CMSDisplayModifiedBy')):?>
      <small><?php echo htmlspecialchars(Flux::message('CMSModifiedLabel')) ?> : <?php echo date('m-d-y', strtotime($nrow->modified))?></small>
      <?php endif; ?>


      <?php if ($nrow->link): ?>
      <a class="news_link" href="<?php echo $nrow->link ?>"><small><?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?></small></a>
      <div class="clear"></div>
      <?php endif; ?>


    </div>
  </div>
  <!--card-->

  <?php endforeach; ?>
</div>

<?php elseif ($newstype == '2'):?>
	<?php if (isset($xml) && isset($xml->channel)): ?>
	<div class="newsDiv">
		<?php foreach ($xml->channel->item as $rssItem): ?>
			<?php $i++; if ($i <= $newslimit): ?>
				<h2><?php echo $rssItem->title ?></h2>
				<div class="newsCont">
					<span class="newsDate"><small>Posted on <?php echo date(Flux::config('DateFormat'), strtotime($rssItem->pubDate))?></small></span>
					<p><?php echo $rssItem->description ?></p>
					<a class="news_link" href="<?php echo $rssItem->link ?>"><small><?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?></small></a>
					<div class="clear"></div>
				</div>
			<?php endif ?>
		<?php endforeach; ?>
	</div>
	<?php else: ?>
		<p>
			<?php echo htmlspecialchars(Flux::message('CMSNewsRSSNotFound')) ?><br/><br/>
		</p>
	<?php endif ?>

<?php else: ?>
		<p>Setting not properly configured.</p>

<?php endif ?>
