<?php
include_once("header.php");
include_once("functions/sidebars.php");
include_once("functions/contests.php");
?>
        <div class="row-fluid">
        <div class="main-left">
        <div class="hero">
          <h2><b>Welcome to Chongqing University OJ 1.1</b></h2>
          <p>
      Be Developed and Maintained By CQU ACM-ICPC Team!<br/>
      Enjoy and have fun!
      </p>
        </div>
        <div class="contest" style="padding-top: 10px;">
         
<?php
/** Running standard contests **/
$running_contest=contest_get_standard_running_list();
if (sizeof($running_contest)>0) {
?>
            <h3>Running Contests</h3>
            <table class='table table-hover table-striped table-condensed'>
              <thead>
                    <tr style="font-size:20px;">
                        <th width='60%'>Exercises</th>
                        <th width='40%'>End time</th>
                    </tr>
              </thead>
              <tbody>
<?php
  foreach ($running_contest as $contest) {
?>
                <tr class='vjttip'>
                        <td><a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a></td>
                        <td><?=$contest["end_time"]?></td>
                </tr>
<?php
  }
?>
              </tbody>
            </table>
          
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
            <table class='table table-hover table-striped table-condensed'>
              <thead>
                    <tr style="font-size:20px;">
                        <th width='60%'>Exercises</th>
                        <th width='40%'>Start time</th>
                    </tr>
              </thead>
              <tbody>
<?php
  foreach ($scheduled_contest as $contest) {
?>
                <tr class='vjttip'>
                        <td><a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a></td>
                        <td><?=$contest["start_time"]?></td>
                </tr>
<?php
  }
?>
              </tbody>
            </table>
<?php
}
?>


<?php
/** Scheduled virtual contests **/
$scheduled_vcontest=contest_get_virtual_scheduled_list();
if (sizeof($scheduled_vcontest)>0) {
?>
            <h3>Upcoming Virtual Contests</h3>
            <table class='table table-hover table-striped table-condensed'>
              <thead>
                    <tr style="font-size:20px;">
                        <th width='60%'>Exercises</th>
                        <th width='40%'>Start time</th>
                    </tr>
              </thead>
              <tbody>
<?php
  foreach ($scheduled_vcontest as $contest) {
?>
                <tr class='vjttip'>
                        <td><a href='contest_show.php?cid=<?=$contest["cid"]?>'><?=$contest["title"]?></a></td>
                        <td><?=$contest["start_time"]?></td>
                </tr>
<?php
  }
?>
              </tbody>
            </table>
<?php
}
?>
          </div>
   </div>
    <div class="main-right">
           <div class="news">
<?=sidebar_item_content_news(false)?>
          </div>
          <div class="vjudge">
<?=sidebar_item_content_vjstatus_index()?>
          </div>
    </div>

<?php
include_once("footer.php");
?>
