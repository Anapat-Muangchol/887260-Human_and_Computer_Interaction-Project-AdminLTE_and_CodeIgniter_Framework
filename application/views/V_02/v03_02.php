<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>อนุมัติการลา</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://d15dxvojnvxp1x.cloudfront.net/assets/favicon.ico">
  <link rel="icon" href="http://d15dxvojnvxp1x.cloudfront.net/assets/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <br>
    <select id="month" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <option value="0">ทุกเดือน</option>
        <option value="01">มกราคม</option>
        <option value="02">กุมภาพันธ์</option>
        <option value="03">มีนาคม</option>
        <option value="04">เมษายน</option>
        <option value="05">พฤษภาคม</option>
        <option value="06">มิถุนายน</option>
        <option value="07">กรกฎาคม</option>
        <option value="08">สิงหาคม</option>
        <option value="09">กันยายน</option>
        <option value="10">ตุลาคม</option>
        <option value="11">พฤศจิกายน</option>
        <option value="12">ธันวาคม</option>
    </select>
    &nbsp;&nbsp;
    <select id="year" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <option value="0">ทุกปี</option>
        <option value="2559">2559</option>
        <option value="2558">2558</option>
        <option value="2557">2557</option>
        <option value="2556">2556</option>
        <option value="2555">2555</option>
        <option value="2554">2554</option>
        <option value="2553">2553</option>
        <option value="2552">2552</option>
        <option value="2551">2551</option>
        <option value="2550">2550</option>
    </select>

    <a href="<?php echo site_url("home/v03_02"); ?>"><button type="button" class="btn btn-default pull-right active" style="margin-right: 35px;">ไม่อนุมัติ</button></a>
    <a href="<?php echo site_url("home/v02_02"); ?>"><button type="button" class="btn btn-default pull-right">อนุมัติ</button></a>
    <a href="<?php echo site_url("home/v01_02"); ?>"><button type="button" class="btn btn-default pull-right">รอการอนุมัติ</button></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="width: 97%;">

            <div class="box">
                <div class="box-header" style="text-align: center; margin-bottom: -30px;">
                    <h3 id="header">ทุกเดือน ของ ทุกปี</h3><br>
                </div>
                <div class="box-body">
                    <div id="report_result" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div id="wrapper">
                            <table id="keywords" cellspacing="0" cellpadding="0" border="1"
                                   class="table table-striped table-bordered table-hover" role="grid"
                                   style="margin: auto">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">
                                        <span><a href="#">No.</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">วันที่เริ่มต้น</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">วันที่สิ้นสุด</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">รหัสประจำตัว</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ชื่อ-สกุล</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ตำแหน่ง</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ประเภทการลา</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">สาเหตุการลา</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">การดำเนินการ</a></span>
                                    </th>
                            
                                </tr>
                                </thead>
                                <tbody id="showTable"></tbody>
                            </table>
                        </div>
                    </div>
                    <div id="submit" style="text-align: center; display: none;"><br><form><button type="submit" class="btn btn-warning">แก้ไข</button></form></div>
                </div>
            </div>

        </div>
        <br>
        <script type="text/javascript">


            $(function () {
                //report by time data
                var time_report = [
                    {
                        "firstdate": "20/04/2559",
                        "lastdate": "27/04/2559",
                        "id": "57160203",
                        "name": "วรรณวรางษ์ จิตต์ศีล",
                        "position": "อาจารย์",
                        "type": "ลากิจ",
                        "becauses": "ลาพักร้อน",
                        "approve": false},

                    {
                        
                        "firstdate": "12/09/2557",
                        "lastdate": "19/09/2557",
                        "id": "57160443",
                        "name": "สุธาภรณ์ คีรีเขตต์",
                        "position": "บุคลากร",
                        "type": "ลากิจ",
                        "becauses": "ลาพักร้อน",
                        "approve": false},
                    {

                        "firstdate": "20/06/2556",
                        "lastdate": "21/06/2556",
                        "id": "57160613",
                        "name": "อาณัฐชัย ปิ่นแก้ว ",
                        "position": "นิสิต",
                        "type": "ลาป่วย",
                        "becauses": "ถอนฟัน",
                        "approve": false},
        
                    {
                        "firstdate": "11/07/2558",
                        "lastdate": "13/07/2558",
                        "id": "57660033",
                        "name": "เสฎฐวุฒิ ศักดิ์ประศาสน์",
                        "position": "อาจารย์",
                        "type": "ลาป่วย",
                        "becauses": "ถอนฟัน",
                        "approve": false
                    }
                    
                ];

                //results print to table
                var out = "";
                var cnt = 0;
                for (var item = 0; item < time_report.length; item++) {
                    cnt++;
                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].firstdate + "</td><td>" + time_report[item].lastdate + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].position + "</td><td>" + time_report[item].type + "</td> <td>" + time_report[item].becauses + "</td>";
                    if(time_report[item].approve)out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\">อนมัติ&nbsp;<input type=\"radio\" name=\"approve\">ไม่อนมัติ</form></td></tr>";
                    else out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\" >อนมัติ&nbsp;<input type=\"radio\" name=\"approve\" checked>ไม่อนมัติ</form></td></tr>";
                }
                $('#showTable').html(out);

                //Event dropdown change results print to table
                $("#month,#year").change(function(){
                    var out = "";
                    var cnt = 0;
                    for (var item = 0; item < time_report.length; item++) {
                        var indexOf = time_report[item].firstdate.indexOf("/"), lastIndexOf = time_report[item].firstdate.lastIndexOf("/");
                        var month = time_report[item].firstdate.substr(indexOf+1,2), year = time_report[item].firstdate.substr(lastIndexOf+1);
                        if($('#month :selected').val() == 0){
                            if($('#year :selected').val() == 0){
                                cnt++;
                                out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].firstdate + "</td><td>" + time_report[item].lastdate + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].position + "</td><td>" + time_report[item].type + "</td> <td>" + time_report[item].becauses + "</td>";
                                if(time_report[item].approve)out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\">อนมัติ&nbsp;<input type=\"radio\" name=\"approve\">ไม่อนมัติ</form></td></tr>";
                                else out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\" >อนมัติ&nbsp;<input type=\"radio\" name=\"approve\" checked>ไม่อนมัติ</form></td></tr>";
                            }else{
                                if($('#year :selected').val() == year){
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].firstdate + "</td><td>" + time_report[item].lastdate + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].position + "</td><td>" + time_report[item].type + "</td> <td>" + time_report[item].becauses + "</td>";
                                    if(time_report[item].approve)out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\">อนมัติ&nbsp;<input type=\"radio\" name=\"approve\">ไม่อนมัติ</form></td></tr>";
                                    else out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\" >อนมัติ&nbsp;<input type=\"radio\" name=\"approve\" checked>ไม่อนมัติ</form></td></tr>";
                                }
                            }
                        }else{
                            if($('#year :selected').val() == 0){
                                if($('#month :selected').val() == month){
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].firstdate + "</td><td>" + time_report[item].lastdate + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].position + "</td><td>" + time_report[item].type + "</td> <td>" + time_report[item].becauses + "</td>";
                                    if(time_report[item].approve)out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\">อนมัติ&nbsp;<input type=\"radio\" name=\"approve\">ไม่อนมัติ</form></td></tr>";
                                    else out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\" >อนมัติ&nbsp;<input type=\"radio\" name=\"approve\" checked>ไม่อนมัติ</form></td></tr>";
                                }
                            }else{
                                if($('#month :selected').val() == month && $('#year :selected').val() == year){
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].firstdate + "</td><td>" + time_report[item].lastdate + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].position + "</td><td>" + time_report[item].type + "</td> <td>" + time_report[item].becauses + "</td>";
                                    if(time_report[item].approve)out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\">อนมัติ&nbsp;<input type=\"radio\" name=\"approve\">ไม่อนมัติ</form></td></tr>";
                                    else out+="<td><form><input id=\"radio\" type=\"radio\" name=\"approve\" >อนมัติ&nbsp;<input type=\"radio\" name=\"approve\" checked>ไม่อนมัติ</form></td></tr>";
                                }
                            }
                        }
                    }
                    if(out=="")out="<tr><td></td><td></td><td></td><td></td><td><div style=\"text-align: center; width: 100%;\"><h4>ไม่พบข้อมูล</h4></div></td><td></td><td></td><td></td><td></td>";
                    $('#showTable').html(out);

                    var header;
                    if($('#month :selected').val() == 0 && $('#year :selected').val() == 0) header = $('#month :selected').text()+" ของ "+$('#year :selected').text();
                    else if($('#month :selected').val() == 0 && $('#year :selected').val() != 0) header = $('#month :selected').text()+" ของ ปี "+$('#year :selected').text();
                    else if($('#year :selected').val() == 0 && $('#month :selected').val() != 0) header = "เดือน "+$('#month :selected').text()+" ของ "+$('#year :selected').text();
                    else header = "เดือน "+$('#month :selected').text()+" ของ ปี "+$('#year :selected').text();
                    $('#header').text(header);
                });
            });
            
            $("#showTable").on("click","#radio",function(){
                //alert("click");                
                $("#submit").fadeIn(500);
            });

            //table sorter
            $(function () {
                $('#keywords').tablesorter();
            });

        </script>
</body>
</html>