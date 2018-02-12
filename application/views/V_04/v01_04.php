<!DOCTYPE html>

<html lang="en">

<head>

  <title>ข้ออมูลการลารายบุคคล</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style type="text/css">

body {
  background-color: #ACF3FF
}

.jumbotron{
			margin-top: 50px;
			height: 500px;
}
.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
A:link  {
text-decoration:none;
 color:#000;
}
A:visited {
text-decoration:none;
 color:#000;
}


</style>

<script>
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});
</script>
</head>

<body >



<div class="container" style="overflow-y: scroll;overflow-x: hidden; padding-bottom: 24px;">

  

  <div class="jumbotron">

  

  <form class="navbar-form navbar-right" role="search">

    <div class="form-group input-group">

      <input type="text" class="search form-control" placeholder="กรอกรายชื่อที่ต้องการ...">

        <span class="input-group-btn">

        <button class="btn btn-default" type="button">

          <span class="glyphicon glyphicon-search"></span>

        </button>

      </span>        


    </div>

  </form>



  <table class="table table-striped table-bordered results" border=1>
    
    <thead>

      <tr>

        <th>#</th>

        <th>รหัสประจำตัว</th>

        <th>ชื่อ - นามสกุล</th>

        <th>ตำแหน่ง</th>

        <th>สาขา</th>

        <th>คณะ</th>

        <th>วันที่ลาครั้งล่าสุด</th>

      </tr>
      <tr class="warning no-result">
      <td colspan="7"><i class="fa fa-warning"></i><center>ไม่พบข้อมูล</center> </td>
    </tr>

    </thead>

    <tbody>

      <tr>

        <th scope="row">1</th>

        <td><a href='<?php echo site_url("home/v02_04?id=54660007"); ?>'>54660007</td>

        <td><a href='<?php echo site_url("home/v02_04?id=54660007"); ?>'>พันธยศ สมศรี</td>

        <td>student</td>

        <td>information Technology</td>

        <td>informatics</td>

        <td>12/08/2558</td>

      </tr>

      <tr>

        <th scope="row">2</th>

        <td><a href='<?php echo site_url("home/v02_04?id=56123456"); ?>'>56123456</td>

        <td><a href='<?php echo site_url("home/v02_04?id=56123456"); ?>'>สมพงษ์ คงสีเดิม</td>

        <td>teacher</td>

        <td>navigation</td>

        <td>Logistics</td>

        <td>19/05/2558</td>

      </tr>

      <tr>

        <th scope="row">3</th>

        <td><a href='<?php echo site_url("home/v02_04?id=56789012"); ?>'>56789012</td>

        <td><a href='<?php echo site_url("home/v02_04?id=56789012"); ?>'>ทองดี มากมาย</td>

        <td>student</td>

        <td>electrical engineering</td>

        <td>engineering</td>

        <td>15/05/2558</td>

      </tr>
	  
	   <tr>

        <th scope="row">4</th>

        <td><a href='<?php echo site_url("home/v02_04?id=57880213"); ?>'>57880213</td>

        <td><a href='<?php echo site_url("home/v02_04?id=57880213"); ?>'>สมศรี คงเดิม</td>

        <td>teacher</td>

        <td>Chemical Engineer</td>

        <td>engineering</td>

        <td>12/06/2558</td>

      </tr>
	  
	   <tr>

        <th scope="row">5</th>

        <td><a href='<?php echo site_url("home/v02_04?id=58245698"); ?>'>58245698</td>

        <td><a href='<?php echo site_url("home/v02_04?id=58245698"); ?>'>นฤพล สำลี</td>

        <td>Call center</td>

        <td>Sports Science</td>

        <td>Sports Science</td>

        <td>11/07/2558</td>

      </tr>

      <tr>

        <th scope="row">6</th>

        <td><a href='view04_1.php?id=58245698'>58245418</td>

        <td><a href='view04_1.php?id=58245698'>อนุชิต คำหอมกุล</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>13/07/2558</td>

      </tr>

      <tr>

        <th scope="row">7</th>

        <td><a href='view04_1.php?id=58245698'>58245608</td>

        <td><a href='view04_1.php?id=58245698'>อัตฉา เหมือนทอง</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>18/07/2558</td>

      </tr>

      <tr>

        <th scope="row">8</th>

        <td><a href='view04_1.php?id=58245698'>58245600</td>

        <td><a href='view04_1.php?id=58245698'>นฤชาติ กุลลี</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>11/07/2558</td>

      </tr>

      <tr>

        <th scope="row">9</th>

        <td><a href='view04_1.php?id=58245698'>5824558</td>

        <td><a href='view04_1.php?id=58245698'>อนุภาค ราศรีแรง</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>11/08/2558</td>

      </tr>

      <tr>

        <th scope="row">10</th>

        <td><a href='view04_1.php?id=58245698'>5824198</td>

        <td><a href='view04_1.php?id=58245698'>ทองดี มีมาก</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>11/08/2558</td>

      </tr>

      <tr>

        <th scope="row">11</th>

        <td><a href='view04_1.php?id=58245698'>58245628</td>

        <td><a href='view04_1.php?id=58245698'>ธิติ สำราน</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>12/08/2558</td>

      </tr>

      <tr>

        <th scope="row">12</th>

        <td><a href='view04_1.php?id=58245698'>58245621</td>

        <td><a href='view04_1.php?id=58245698'>มานิต ใจดี</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>13/08/2558</td>

      </tr>

      <tr>

        <th scope="row">13</th>

        <td><a href='view04_1.php?id=58245698'>58245452</td>

        <td><a href='view04_1.php?id=58245698'>อรรถวุฒิ สมศรี</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>15/08/2558</td>

      </tr>

      <tr>

        <th scope="row">14</th>

        <td><a href='view04_1.php?id=58245698'>58245608</td>

        <td><a href='view04_1.php?id=58245698'>รักสิทธ์  เสมอมา</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>17/08/2558</td>

      </tr>

      <tr>

        <th scope="row">15</th>

        <td><a href='view04_1.php?id=58245698'>58245248</td>

        <td><a href='view04_1.php?id=58245698'>สิบทิศ คล้ายจะศัล</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>19/08/2558</td>

      </tr>

      <tr>

        <th scope="row">16</th>

        <td><a href='view04_1.php?id=58245698'>58245698</td>

        <td><a href='view04_1.php?id=58245698'>พันธคาง ยาวได้ใจ</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>20/08/2558</td>

      </tr>

      <tr>

        <th scope="row">17</th>

        <td><a href='view04_1.php?id=58245698'>58245548</td>

        <td><a href='view04_1.php?id=58245698'>ชูใจ ไกลกังวาน</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>21/08/2558</td>

      </tr>

      <tr>

        <th scope="row">18</th>

        <td><a href='view04_1.php?id=58245698'>58245098</td>

        <td><a href='view04_1.php?id=58245698'>ธิติรัตน์ สำรานโรจ</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>22/08/2558</td>

      </tr>

      <tr>

        <th scope="row">19</th>

        <td><a href='view04_1.php?id=58245698'>58245620</td>

        <td><a href='view04_1.php?id=58245698'>มิติ รู้ราน</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>23/08/2558</td>

      </tr>

      <tr>

        <th scope="row">20</th>

        <td><a href='view04_1.php?id=58245698'>58245766</td>

        <td><a href='view04_1.php?id=58245698'>มาริศ กามราม</td>

        <td>Call center</td>

        <td>Student</td>

        <td>information Technology</td>

        <td>24/08/2558</td>

      </tr>

    </tbody>

  </table>
  </div>
</div>



</body>

</html>

