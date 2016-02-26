<?php
include_once("header.php");
include_once("functions/sidebars.php");
include_once("functions/contests.php");
?>
        <div class="hero-unit">
          <h1>Welcome to CQUOJ 1.0!</h1>
          <p>
            IE 7+, Opera 11+, Safari 5+, Firefox 5+ and Chrome 14+ are <span class="badge badge-important"><b>REQUIRED</b></span> according to <a href="https://github.com/twitter/bootstrap/wiki/Browser-Compatibility" target='_blank'>Bootstrap compatibility page</a>.<br />
			Be Developed and Maintained By CQU ACM-ICPC Team!<br/>
			Enjoy and have fun!
          </p>
        </div>
        <div class="row-fluid">
          <div class="span4">
<?=sidebar_item_content_vjstatus_index()?>
          </div>
          <div class="span3">
<?=sidebar_item_content_news(false)?>
          </div>
	<div class="span5">
         
<?php
/** Running standard contests **/
$running_contest=contest_get_standard_running_list();
if (sizeof($running_contest)>0) {
?>
            <h3>Running Contests</h3>
            <p>
<?php
  foreach ($running_contest as $contest) {
?>
              <a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a> ends at <?=$contest["end_time"]?><br />
<?php
  }
?>
            </p>
<?php
}
?>


<?php
/** Running virtual contests **/
$running_vcontest=contest_get_virtual_running_list();
if (sizeof($running_vcontest)>0) {
?>
            <h3>Running Virtual Contests</h3>
            <p>
<?php
  foreach ($running_vcontest as $contest) {
?>
              <a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a> ends at <?=$contest["end_time"]?><br />
<?php
  }
?>
            </p>
<?php
}
?>


<?php
/** Scheduled standard contests **/
$scheduled_contest=contest_get_standard_scheduled_list();
if (sizeof($scheduled_contest)>0) {
?>
            <h3>Upcoming Contests</h3>
            <p>
<?php
  foreach ($scheduled_contest as $contest) {
?>
              <a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a> at <?=$contest["start_time"]?><br />
<?php
  }
?>
            </p>
<?php
}
?>


<?php
/** Scheduled virtual contests **/
$scheduled_vcontest=contest_get_virtual_scheduled_list();
if (sizeof($scheduled_vcontest)>0) {
?>
            <h3>Upcoming Virtual Contests</h3>
            <p>
<?php
  foreach ($scheduled_vcontest as $contest) {
?>
              <a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a> at <?=$contest["start_time"]?><br />
<?php
  }
?>
            </p>
<?php
}
?>
          </div>
        </div>

<?php
include_once("footer.php");
?>
