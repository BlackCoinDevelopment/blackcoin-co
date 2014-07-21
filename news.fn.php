<?php function GetNewsItem($url, $author, $title, $date, $preview, $img = null) { ?>
<li>
	<div class="event-text">
	<div class="event-details user-content">
		<h4 class="event-title"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h4>
		<div class="event-date">
			<?php echo $date;?>						
		</div>
		<div class="event-location">
			<?php echo $author; ?>							
		</div>
	</div>
	<div class="event-description user-content"><?php echo $preview; ?></div>
	</div>
	<!-- <div class="event-image">
	<a href="http://www.blackcoin.co/general/paving-the-way-forward/"><img src="./img/michael-morris.jpg" alt="" /></a>				
	</div>-->
</li>
<?php } ?>

<?php function GetNewsArchive($url, $author, $title, $date) { ?>
<li>
	<div class="event-text">
	<div class="event-details user-content">
		<h4 class="event-title"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h4>
		<div class="event-date">
			<?php echo $date;?>						
		</div>
		<div class="event-location">
			<?php echo $author; ?>							
		</div>
	</div>
	</div>
</li>
<?php } ?>