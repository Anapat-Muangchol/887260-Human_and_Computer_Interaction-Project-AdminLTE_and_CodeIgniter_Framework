<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Admin User - รายงานการลาทั้งหมด</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <br>
    <select id="quarter" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <option value="0">ทุกไตรมาส</option>
        <option value="1">ไตรมาสที่ 1</option>
        <option value="2">ไตรมาสที่ 2</option>
        <option value="3">ไตรมาสที่ 3</option>
        <option value="4">ไตรมาสที่ 4</option>
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

    <a href="<?php echo site_url("home/v03_01"); ?>">
        <button type="button" class="btn btn-default pull-right" style="margin-right: 35px;">ปีงบประมาณ</button>
    </a>
    <a href="<?php echo site_url("home/v02_01"); ?>">
        <button type="button" class="btn btn-default pull-right active">ไตรมาส</button>
    </a>
    <a href="<?php echo site_url("home/v01_01"); ?>">
        <button type="button" class="btn btn-default pull-right">เดือน</button>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="width: 97%;">

            <div class="box">
                <div class="box-header" style="text-align: center; margin-bottom: -30px;">
                    <h3 id="header">ทุกไตรมาส ของ ทุกปี</h3><br>
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
                                        <span><a href="#">วัน/เดือน/ปี</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">รหัสประจำตัว</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ชื่อ-สกุล</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">อีเมล์</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">สาขา</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">คณะ</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ตำแหน่ง</a></span>
                                    </th>
                                    <th style="text-align: center;">
                                        <span><a href="#">ประเภทการลา</a></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="showTable"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <script type="text/javascript">


            $(function () {
                //report by time data
                var time_report = [
                    {
                        "date": "03/01/2554",
                        "id": "57160183",
                        "name": "นางสาวนุชนาฎ  วงศ์วีระขันธ์",
                        "email": "57160183@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "10/01/2554",
                        "id": " 57160614",
                        "name": "นางสาวอิงอร งามน้อย",
                        "email": " 57160614@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "12/02/2554",
                        "id": "57160438",
                        "name": "นายศตวรรษ  ศรีสาร",
                        "email": "57160438@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลากิจ"
                    }, {
                        "date": "25/02/2554",
                        "id": "57160520",
                        "name": "นายจักรพันธ์  กวดขัน",
                        "email": "57160520@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "06/04/2554",
                        "id": " 57160608",
                        "name": "นายเสกสรร เนียมปาน",
                        "email": " 57160608@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "11/05/2554",
                        "id": "57160559",
                        "name": "นายกฤตเมธ สุขแสวง",
                        "email": "57160559@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "14/06/2554",
                        "id": "57160548",
                        "name": "นางสาวสโรชา จิตรคง",
                        "email": "57160548@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "24/06/2554",
                        "id": "57160528",
                        "name": "นางสาวปรารถนา สุภรัตน์",
                        "email": "57160528@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "04/07/2554",
                        "id": "57160535",
                        "name": "นายพีระพงษ์ เจริญสุข",
                        "email": "57160535@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "11/07/2554",
                        "id": "57160539",
                        "name": "นายภาณุวิชญ์ ศุภกีรติโรจน์",
                        "email": "57160539@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "18/08/2554",
                        "id": "57160548",
                        "name": "นางสาวสโรชา จิตรคง",
                        "email": "57160548@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "27/08/2554",
                        "id": "57160552",
                        "name": "นายอภิวัฒน์ คงนิล",
                        "email": "57160552@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "28/08/2554",
                        "id": " 57160566 ",
                        "name": "นางสาวชลิดา พงศ์จ ริยา",
                        "email": " 57160566 @go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "02/09/2554",
                        "id": " 57160571",
                        "name": "นายธนดล จันทร์สุข",
                        "email": " 57160571@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "14/09/2554",
                        "id": " 57160579",
                        "name": "นางสาวนิรชา โสหา",
                        "email": " 57160579@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "10/10/2554",
                        "id": " 57160584",
                        "name": "นางสาวประภาพร ศรีสัมฤทธิ์",
                        "email": " 57160584@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "25/10/2554",
                        "id": " 57160586",
                        "name": "นายผูกพัน อึ้งกาญจนากุล",
                        "email": " 57160586@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "19/11/2554",
                        "id": " 57160591",
                        "name": "นางสาวภัทรภรณ์  รัตนบุตร",
                        "email": " 57160591@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "23/11/2554",
                        "id": " 57160605",
                        "name": "นางสาวสิริรุ่ง สุวรรณเขตนิคม",
                        "email": " 57160605@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "26/12/2554",
                        "id": " 57160029",
                        "name": "นายชํานาญ แซ่ตั้ง",
                        "email": " 57160029@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "12/01/2556",
                        "id": " 57160033",
                        "name": "นายอนพัทย์  เมืองชล",
                        "email": " 57160033@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "23/01/2556",
                        "id": " 57160034",
                        "name": "นายกวินภพ พราหมณ์มณี",
                        "email": " 57160034@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "27/01/2556",
                        "id": " 57160167",
                        "name": "นายจิครินทร์  สําลี",
                        "email": " 57160167@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "02/02/2556",
                        "id": " 57160169",
                        "name": "นางสาวชลิสา สุขศิลา",
                        "email": " 57160169@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "15/02/2556",
                        "id": " 57160170",
                        "name": "นางสาวช่อผกา ผ่องแผ่ว",
                        "email": " 57160170@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลาคลอดบุตร"
                    }, {
                        "date": "05/03/2556",
                        "id": " 57160198",
                        "name": "นางสาวภัทรพร  เเสงสัมพันธ์ ",
                        "email": " 57160198@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "28/03/2556",
                        "id": " 57160201",
                        "name": "นายยศสรัล สุ่มมาตย์",
                        "email": " 57160201@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "14/04/2556",
                        "id": " 57160203",
                        "name": "นางสาววรรณวรางษ์  จิตต์ศลี",
                        "email": " 57160203@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลาป่วย"
                    }, {
                        "date": "25/04/2556",
                        "id": " 57160205",
                        "name": "นางสาววริศรา โคตะเป",
                        "email": " 57160205@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "08/05/2556",
                        "id": " 57160291",
                        "name": "นายนิติพงษ์  สุโขยชัย",
                        "email": " 57160291@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "11/05/2556",
                        "id": " 57160294",
                        "name": "นายพัฒน์ชัย ชูเนียม",
                        "email": " 57160294@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "25/05/2556",
                        "id": " 57160296",
                        "name": "นายภัคพล วิชาธิคุณ",
                        "email": " 57160296@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลาป่วย"
                    }, {
                        "date": "19/06/2556",
                        "id": " 57160439",
                        "name": "นายศุภชัย พัชนี",
                        "email": " 57160439@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "22/06/2556",
                        "id": " 57160445",
                        "name": "นายสุวรรณศร ศรีสุข",
                        "email": " 57160445@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "01/07/2556",
                        "id": " 57160446",
                        "name": "นายอดิศร ก้อนเอี่ยม",
                        "email": " 57160446@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "17/07/2556",
                        "id": " 57160526",
                        "name": "นางสาวเบญจวรรณ ดําสอาด",
                        "email": " 57160526@go.buu.ac.th",
                        "branch": "CS",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจส่วนตัว"
                    }, {
                        "date": "19/08/2556",
                        "id": " 57160556",
                        "name": "นางสาวกมลวรรณ สรงนวล",
                        "email": " 57160556@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "26/09/2556",
                        "id": " 57160561",
                        "name": "นางสาวจิตสุภา สุภาพ",
                        "email": " 57160561@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "10/11/2556",
                        "id": " 57160595",
                        "name": "นายมิตรภาพ สวัสดี",
                        "email": " 57160595@go.buu.ac.th",
                        "branch": "SE",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลาป่วย"
                    }, {
                        "date": "24/11/2556",
                        "id": " 57160600",
                        "name": "นายวีรพล เกิดโตนด",
                        "email": " 57160600@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "อาจารย์",
                        "type": "ลาป่วย"
                    }, {
                        "date": "03/01/2557",
                        "id": "57160183",
                        "name": "นางสาวนุชนาฎ วงศ์วีระขันธ์",
                        "email": "57160183@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "15/01/2557",
                        "id": "57160406",
                        "name": "นางสาวชาลินี ศิลารัตน์",
                        "email": "57160406@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "10/02/2557",
                        "id": "57160410",
                        "name": "นางสาวณิชานันทน์ แดงมา",
                        "email": "57160410@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "11/03/2557",
                        "id": "57160416",
                        "name": "นายธิติ แพรวพราย",
                        "email": "57160416@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาอุปสมบท"
                    }, {
                        "date": "29/03/2557",
                        "id": "57160434",
                        "name": "นายนายวิชัย วงค์ฟู",
                        "email": "57160434@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "05/04/2557",
                        "id": "57160584",
                        "name": "นางสาวประภาพร ศรีสัมฤทธิ์",
                        "email": "57160584@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาพักร้อน"
                    }, {
                        "date": "19/04/2557",
                        "id": "57160566",
                        "name": "นางสาวชลิดา พงศ์จริยา",
                        "email": "57160566@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาพักร้อน"
                    }, {
                        "date": "03/05/2557",
                        "id": "57160586",
                        "name": "นายผูกพัน อึ้งกาญจนากุล",
                        "email": "57160586@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "07/05/2557",
                        "id": "57160029",
                        "name": "นายชํานาญ แซ่ตั้ง",
                        "email": "57160029@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "21/06/2557",
                        "id": "57160198",
                        "name": "นางสาวภัทรพร เเสงสัมพันธ์",
                        "email": "57160198@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "15/07/2557",
                        "id": "57160583",
                        "name": "นางสาวปภัสวรรณ คำทูม",
                        "email": "57160583@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "20/08/2557",
                        "id": "57160413",
                        "name": "นายเทพพิทักษ์ พงศ์ประเสริฐ",
                        "email": "57160413@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "12/08/2557",
                        "id": "57160431",
                        "name": "นางสาวรัชวดี เวียนติง",
                        "email": "57160431@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "23/09/2557",
                        "id": "57160612",
                        "name": "นายอนุรักษ์ บุตศรี",
                        "email": "57160612@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "15/10/2557",
                        "id": "57160580",
                        "name": "นางสาวเบญจมาศ แควภูเขียว",
                        "email": "57160580@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "31/10/2557",
                        "id": "57160031",
                        "name": "นายพชร มั่นคง",
                        "email": "57160031@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "30/11/2557",
                        "id": "57160556",
                        "name": "นางสาวกมลวรรณ สรงนวล",
                        "email": "57160556@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "10/12/2557",
                        "id": "57160178",
                        "name": "นายธนภาค ประจุมาศ",
                        "email": "57160178@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "18/12/2557",
                        "id": "57160211",
                        "name": "นางสาวอภิษฎา เพียกขุนทด",
                        "email": "57160211@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "05/01/2558",
                        "id": "57160411",
                        "name": "นายถิรวัฒน์ อาสา",
                        "email": "57160411@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "20/01/2558",
                        "id": "57160420",
                        "name": "นายปิยะพงษ์ สุขฉิม",
                        "email": "57160420@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "16/03/2558",
                        "id": "57160520",
                        "name": "นายจักรพันธ์ กวดขัน",
                        "email": "57160520@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาพักร้อน"
                    }, {
                        "date": "24/04/2558",
                        "id": "57160552",
                        "name": "นายอภิวัฒน์ คงนิล",
                        "email": "57160552@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาอุปสมบท"
                    }, {
                        "date": "11/05/2558",
                        "id": "57160577",
                        "name": "นางสาวนัจนันท์ เนียมสูงเนิน",
                        "email": "57160577@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "19/06/2558",
                        "id": "57160579",
                        "name": "นางสาวนิรชา โสหา",
                        "email": "57160579@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "01/07/2558",
                        "id": "57160533",
                        "name": "นายอนพัทย์ เมืองชล",
                        "email": "57160533@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "23/07/2558",
                        "id": "57160170",
                        "name": "นางสาวช่อผกา ผ่องแผ้ว",
                        "email": "57160170@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "13/08/2558",
                        "id": "57160205",
                        "name": "นางสาววริศรา โคตะเป",
                        "email": "57160205@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "04/09/2558",
                        "id": "57160519",
                        "name": "นายกันต์ เหลืองสถิตย์กุล",
                        "email": "57160519@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "16/09/2558",
                        "id": "57160543",
                        "name": "นายวสุ เย็นพันธ์",
                        "email": "57160543@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "08/10/2558",
                        "id": "57160446",
                        "name": "นายอดิศร ก้อนเอี่ยม",
                        "email": "57160446@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "25/11/2558",
                        "id": "57160561",
                        "name": "นางสาวจิตสุภา สุภาพ",
                        "email": "57160561@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "14/12/2558",
                        "id": "57160595",
                        "name": "นายมิตรภาพ สวัสดี",
                        "email": "57160595@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "27/12/2558",
                        "id": "57160528",
                        "name": "นางสาวปรารถนา สุภรัตน์",
                        "email": "57160528@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "09/01/2559",
                        "id": "57160169",
                        "name": "นางสาวชลิสา สุขศิลา",
                        "email": "57160169@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "11/02/2559",
                        "id": "57160172",
                        "name": "นางสาวชุตินันท์ นามใหญ่",
                        "email": "57160169@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }, {
                        "date": "18/03/2559",
                        "id": "57160419",
                        "name": "นายปิยวัฒน์ น้อยภู่",
                        "email": "57160419@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "02/04/2559",
                        "id": "57160446",
                        "name": "นายอดิศร ก้อนเอี่ยม",
                        "email": "57160446@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาไปต่างประเทศ"
                    }, {
                        "date": "30/04/2559",
                        "id": "57160166",
                        "name": "นายกิจจา ชลันธร",
                        "email": "57160166@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลากิจ"
                    }, {
                        "date": "14/05/2559",
                        "id": "57160602",
                        "name": "นายศิลา แก่งหลวง",
                        "email": "57160602@go.buu.ac.th",
                        "branch": "IT",
                        "faculty": "วิทยาการสารสนเทศ",
                        "position": "นิสิต",
                        "type": "ลาป่วย"
                    }
                ];

                //results print to table
                var out = "";
                var cnt = 0;
                for (var item = 0; item < time_report.length; item++) {
                    cnt++;
                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                }
                $('#showTable').html(out);

                //Event dropdown change results print to table
                $("#quarter,#year").change(function () {
                    var out = "";
                    var cnt = 0;
                    var header = "";
                    if ($('#quarter :selected').val() == 0 && $('#year :selected').val() == 0) {
                        for (var item = 0; item < time_report.length; item++) {
                            cnt++;
                            out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                        }
                        header = $('#quarter :selected').text() + " ของ " + $('#year :selected').text();
                    } else if ($('#quarter :selected').val() == 0 && $('#year :selected').val() != 0) {
                        for (var item = 0; item < time_report.length; item++) {
                            var lastIndexOf = time_report[item].date.lastIndexOf("/");
                            var year = time_report[item].date.substr(lastIndexOf + 1);
                            if ($('#year :selected').val() == year) {
                                cnt++;
                                out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                            }
                        }
                        header = $('#quarter :selected').text() + " ของ ปี " + $('#year :selected').text();
                    } else if ($('#quarter :selected').val() != 0 && $('#year :selected').val() == 0) {
                        for (var item = 0; item < time_report.length; item++) {
                            var indexOf = time_report[item].date.indexOf("/");
                            var month = time_report[item].date.substr(indexOf + 1, 2);
                            if ($('#quarter :selected').val() == "1") {
                                if (month == "01" || month == "02" || month == "03") {
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                }
                            } else if ($('#quarter :selected').val() == "2") {
                                if (month == "04" || month == "05" || month == "06") {
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                }
                            } else if ($('#quarter :selected').val() == "3") {
                                if (month == "07" || month == "08" || month == "09") {
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                }
                            } else {
                                if (month == "10" || month == "11" || month == "12") {
                                    cnt++;
                                    out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                }
                            }
                        }
                        header = $('#quarter :selected').text() + " ของ " + $('#year :selected').text();
                    } else {
                        for (var item = 0; item < time_report.length; item++) {
                            var indexOf = time_report[item].date.indexOf("/"), lastIndexOf = time_report[item].date.lastIndexOf("/");
                            var month = time_report[item].date.substr(indexOf + 1, 2), year = time_report[item].date.substr(lastIndexOf + 1);
                            if ($('#quarter :selected').val() == "1") {
                                if (month == "01" || month == "02" || month == "03") {
                                    if ($('#year :selected').val() == year) {
                                        cnt++;
                                        out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                    }
                                }
                            } else if ($('#quarter :selected').val() == "2") {
                                if (month == "04" || month == "05" || month == "06") {
                                    if ($('#year :selected').val() == year) {
                                        cnt++;
                                        out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                    }
                                }
                            } else if ($('#quarter :selected').val() == "3") {
                                if (month == "07" || month == "08" || month == "09") {
                                    if ($('#year :selected').val() == year) {
                                        cnt++;
                                        out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                    }
                                }
                            } else {
                                if (month == "10" || month == "11" || month == "12") {
                                    if ($('#year :selected').val() == year) {
                                        cnt++;
                                        out += "<tr><td class=\"lalign\">" + cnt + "</td><td>" + time_report[item].date + "</td><td>" + time_report[item].id + "</td><td>" + time_report[item].name + "</td><td>" + time_report[item].email + "</td><td>" + time_report[item].branch + "</td><td>" + time_report[item].faculty + "</td> <td>" + time_report[item].position + "</td> <td>" + time_report[item].type + "</td></tr>";
                                    }
                                }
                            }
                        }
                        header = $('#quarter :selected').text() + " ของ ปี " + $('#year :selected').text();
                    }

                    if (out == "")out = "<tr><td></td><td></td><td></td><td></td><td><div style=\"text-align: center; width: 100%;\"><h4>ไม่พบข้อมูล</h4></div></td><td></td><td></td><td></td><td></td>";
                    $('#showTable').html(out);
                    $('#header').text(header);
                });
            });

            //table sorter
            $(function () {
                $('#keywords').tablesorter();
            });
        </script>
</body>
</html>