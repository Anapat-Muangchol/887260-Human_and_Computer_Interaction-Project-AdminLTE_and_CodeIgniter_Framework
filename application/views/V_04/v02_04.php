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

body {background-color: #ACF3FF}

.jumbotron{
			margin-top: 50px;
			height: 550px;

		}
h3 {
  margin-top: 50px;
}
table {
  margin-top: 30px;
      height: 50px;
}
.aaaa {
    border-collapse: collapse;
    width: 30%;
    text-align: center;
}

</style>



</head>

<body >
<div class="container">
  <div class="jumbotron">
  <form class="navbar-form navbar-right" role="search">
        <a href='<?php echo site_url("home/v01_04"); ?>'><button class="btn btn-default" type="button" >Back </button> </a>
  </form>
<?php if ($_GET["id"] == "54660007"){
  echo "
  <h3>พันธยศ สมศรี</h3>
  <table class=\"table table-striped\" border=1>

  <thead>

      <tr>

        <th>#</th>

        <th>วันเริ่มต้น</th>

        <th>วันสิ้นสุด</th>

        <th>ประเภทการลา</th>

        <th>รายละเอียดการลา</th>

       </tr>

    </thead>

    <tbody>

      <tr>

        <td>1</td>

        <td>13/05/2558</td>

        <td>14/05/2558</td>

        <td>ป่วย</td>

        <td>เป็นไข้หวัด</td>
      
      </tr>

      <tr>

        <td>2</td>

        <td>12/07/2558</td>

        <td>16/07/2558</td>

        <td>กิจ</td>

        <td>ไปต่างจังหวัดกับครอบครัว</td>

      </tr>

      <tr>

        <td>3</td>

        <td>12/08/2558</td>

        <td>13/08/2558</td>

        <td>ป่วย</td>

        <td>ตาอักเสพ</td>

      </tr>

    </tbody>
  </table> 
  <table class=\"table table-striped aaaa\" border=1>

  <thead>

      <tr>
        <th>จำนวนครั้งที่ลา</th>

        <th>จำนวนครั้งที่เหลือ</th>

       </tr>

    </thead>
    <tbody>

      <tr>

        <td>3</td>

        <td>4</td>
      
      </tr>

    </tbody>
    </table>";
   }else if ($_GET["id"] == "56123456"){
  echo "
  <h3>สมพงษ์ คงสีเดิม</h3>
  <table class=\"table table-striped\" border=1>

  <thead>

      <tr>

        <th>#</th>

        <th>วันเริ่มต้น</th>

        <th>วันสิ้นสุด</th>

        <th>ประเภทการลา</th>

        <th>รายละเอียดการลา</th>

       </tr>

    </thead>

    <tbody>

    <tr>

        <td>1</td>

        <td>12/05/2558</td>

        <td>13/08/2558</td>

        <td>ป่วย</td>

        <td>ไม่สยาย</td>
      
      </tr>
    <tr>

        <td>2</td>

        <td>19/05/2558</td>

        <td>20/08/2558</td>

        <td>ป่วย</td>

        <td>ท้องเสีย</td>
      
      </tr>
    </tbody>
    </table>
    <table class=\"table table-striped aaaa\" border=1>

  <thead>

      <tr>
        <th>จำนวนครั้งที่ลา</th>

        <th>จำนวนครั้งที่เหลือ</th>

       </tr>

    </thead>
    <tbody>

      <tr>

        <td>2</td>

        <td>5</td>
      
      </tr>

    </tbody>
    </table> ";
   } else if ($_GET["id"] == "56789012"){
  echo "
  <h3>ทองดี มากมาย</h3>
  <table class=\"table table-striped\" border=1>

  <thead>

      <tr>

        <th>#</th>

        <th>วันเริ่มต้น</th>

        <th>วันสิ้นสุด</th>

        <th>ประเภทการลา</th>

        <th>รายละเอียดการลา</th>

       </tr>

    </thead>

    <tbody>

    <tr>

        <td>1</td>

        <td>15/05/2558</td>

        <td>20/08/2558</td>

        <td>กิจ</td>

        <td>ไปต่างประเทศกับครอบครัว</td>

    </tr>
    
    </tbody>
    </table>
    <table class=\"table table-striped aaaa\" border=1>

  <thead>

      <tr>
        <th>จำนวนครั้งที่ลา</th>

        <th>จำนวนครั้งที่เหลือ</th>

       </tr>

    </thead>
    <tbody>

      <tr>

        <td>1</td>

        <td>6</td>
      
      </tr>

    </tbody>
    </table> ";
   }else if ($_GET["id"] == "57880213"){
  echo "
  <h3>สมศรี คงเดิม</h3>
  <table class=\"table table-striped\" border=1>

  <thead>

      <tr>

        <th>#</th>

        <th>วันเริ่มต้น</th>

        <th>วันสิ้นสุด</th>

        <th>ประเภทการลา</th>

        <th>รายละเอียดการลา</th>

       </tr>

    </thead>

    <tbody>

    <tr>

        <td>1</td>

        <td>12/06/2558</td>

        <td>13/08/2558</td>

        <td>กิจ</td>

        <td>ไปงานแต่งน้องชาย</td>
        
      </tr>
    <tr>

        <td>2</td>

        <td>22/05/2558</td>

        <td>24/08/2558</td>

        <td>กิจ</td>

        <td>งานศพญาติ</td>     

      </tr>
     <tr>

        <td>3</td>

        <td>30/05/2558</td>

        <td>2/06/2558</td>

        <td>ป่วย</td>

        <td>ผ่าตัดไส้ติ่ง</td>
  
      </tr>
  
    </tbody>
    </table>
    <table class=\"table table-striped aaaa\" border=1>

  <thead>

      <tr>
        <th>จำนวนครั้งที่ลา</th>

        <th>จำนวนครั้งที่เหลือ</th>

       </tr>

    </thead>
    <tbody>

      <tr>

        <td>3</td>

        <td>4</td>
      
      </tr>

    </tbody>
    </table> ";
   }else if ($_GET["id"] == "58245698"){
  echo "
  <h3>นฤพล สำลี</h3>
  <table class=\"table table-striped\" border=1>

  <thead>

      <tr>

        <th>#</th>

        <th>วันเริ่มต้น</th>

        <th>วันสิ้นสุด</th>

        <th>ประเภทการลา</th>

        <th>รายละเอียดการลา</th>

       </tr>

    </thead>

    <tbody>

   <tr>

        <td>1</td>

        <td>10/06/2558</td>

        <td>12/06/2558</td>

        <td>กิจ</td>

        <td>ไปรับน้องชายกลับประเทศ</td>
        
      </tr>
    <tr>

        <td>2</td>

        <td>11/07/2558</td>

        <td>12/07/2558</td>

        <td>ป่วย</td>

        <td>ไม่สบาย</td>

      </tr>

    </tbody>
    </table>
    <table class=\"table table-striped aaaa\" border=1>

  <thead>

      <tr>
        <th>จำนวนครั้งที่ลา</th>

        <th>จำนวนครั้งที่เหลือ</th>

       </tr>

    </thead>
    <tbody>

      <tr>

        <td>2</td>

        <td>5</td>
      
      </tr>

    </tbody>
    </table> ";
   }
   ?>
  
  </div>

</div>

</body>

</html>

