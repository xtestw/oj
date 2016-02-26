<?php
include_once("header.php");
include_once("functions/sidebars.php");
?>
        <div class="span12">
          <!-- insert the page content here -->
          <p>上次更新日期：<?= date ("Y-m-d H:i:s.", filemtime(__FILE__))?></p>
          <div class="">
            <ul class="nav nav-tabs" id="myTabs">
              <li><a href="#teaminfo">队伍简介</a></li>
               <!-- <li><a href="#memberinfo">队员现况</a></li>
            <li><a href="#honorinfo">ICPC成绩</a></li>
              <li><a id="tplan" href="#trainingplan">暑期训练计划</a></li>-->
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="memberinfo">
                <table id="membertable" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th class="span2">姓名</th>
                      <th class="span2">年级</th>
                      <th class="span2">学院</th>
                      <th class="span6">经历与现况</th>
                    </tr>
                  </thead>
                  <tbody>
  
                  </tbody>
                </table>
                <p style="align:right;text-align:right;padding:0;">
                  注：上表包括所有代表重庆大学参加过现场赛的队员。
                </p>
              </div>
              <div class="tab-pane" id="teaminfo">
  <h3>ACM-ICPC 简介</h3>
  <p>
  ACM-ICPC 是由 ACM （美国计算机协会）主办的面向大学生的国际程序设计竞赛（International Collegiate Programming Contest），至今已举办了 36 届，被称为大学生的计算机奥林匹克竞赛。比赛由 3 名选手组成一队，在 5 小时内共用 1 台计算机编程比赛，特别强调团队配合和动手解决实际问题的能力，因此不仅被广泛认为是教学成果的体现，而且深受广大大学生的喜爱。目前，全国各知名高校都越来越重视本项赛事，大学生的参赛热情空前高涨。中国大陆地区的竞赛竞争最为激烈，水平居各大洲之首。
  </p>
  <h3>ACM-ICPC in CQU</h3>
  <p>
  重庆大学ACM校队队员是来自计算机学院、软件学院、数理学院、机械学院等不同学科的学生，在比赛中充分发挥学科知识互补的优势，每年通过ACM新生赛、重庆大学程序设计大赛等比赛选拔队员。
  </p>
              </div>
              <div class="tab-pane" id="honorinfo">
                <table id="honortable" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th class="span1">年度</th>
                      <th class="span3">赛区（举办学校）</th>
                      <th class="span2">队名</th>
                      <th class="span3">队员</th>
                      <th class="span3">奖项（排名）</th>
                    </tr>
                  </thead>
                  <tbody>
 
                  </tbody>
                </table>
                <p style="align:right;text-align:right;padding:0;">
                  注：“*”号表示友情参赛，不计入ICPC排名。
                </p>
              </div>
            </div>
          </div>
        </div>

<script src='js/fullcalendar.min.js'></script>
<script src='js/gcal.js'></script>
<script>
$("#more").addClass("active");
$('#myTabs a:first').tab('show');
$('#myTabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
$("#tplan").click(function() {
    $('#calendar').html("").fullCalendar({
        events: 'http://www.google.com/calendar/feeds/73ipa6fqajrvdfqnnhnlo2jac0%40group.calendar.google.com/public/basic',
        className: 'gcal-event',
        aspectRatio: 2,
        firstDay: 1,
        year: 2013,
        month: 6
    });
});

if (self.document.location.hash.substring(1)=="trainingplan") $("#tplan").click();

$('#membertable').dataTable( {
    "bProcessing": true,
    "sDom": '<"row-fluid"pf>rt<"row-fluid"<"span8"i><"span4"l>>',
    "sPaginationType": "full_numbers" ,
    "aaSorting": [ [1, 'asc'] ],
    "iDisplayLength": 100,
    "iDisplayStart": 0
});
$('#honortable').dataTable( {
    "bProcessing": true,
    "sDom": '<"row-fluid"pf>rt<"row-fluid"<"span8"i><"span4"l>>',
    "sPaginationType": "full_numbers" ,
    "aaSorting": [ [0,'desc'] ],
    "iDisplayLength": 100,
    "iDisplayStart": 0
});
</script>

<?php
include_once("footer.php");
?>
