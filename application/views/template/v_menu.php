<!-- sidebar menu: : style can be found in sidebar.less -->
  <?php 
  	$numOfURL = substr('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'],-2);;
  ?>
  <ul class="sidebar-menu">
	<li class="header" style="font-size: 15px; color: red;">Menu</li>
	<li <?php if($numOfURL==01)echo "class=\"active\"";?>>
		<a href="<?php echo site_url("home/v_01"); ?>">
			<i class="fa fa-folder"></i> <span>รายงานการลาทั้งหมด</span> <i class="fa fa-caret-right pull-right"></i>
		</a>
	</li>
	<li <?php if($numOfURL==02)echo "class=\"active\"";?>>
		<a href="<?php echo site_url("home/v_02"); ?>">
			<i class="fa fa-edit"></i> <span>การอนุมัติ</span> <i class="fa fa-caret-right pull-right"></i>
		</a>
	</li>
	<li <?php if($numOfURL==03)echo "class=\"active\"";?>>
		<a href="<?php echo site_url("home/v_03"); ?>">
			<i class="fa fa-pie-chart"></i> <span>กราฟสถิติ</span> <i class="fa fa-caret-right pull-right"></i>
		</a>
	</li>
	<li <?php if($numOfURL==04)echo "class=\"active\"";?>>
		<a href="<?php echo site_url("home/v_04"); ?>">
			<i class="fa fa-user"></i> <span>ข้อมูลการลารายบุคคล</span> <i class="fa fa-caret-right pull-right"></i>
		</a>
	</li>
	<li <?php if($numOfURL==05)echo "class=\"active\"";?>>
		<a href="<?php echo site_url("home/v_05"); ?>">
			<i class="fa fa-book"></i> <span>รายงานการลาแยกประเภท</span> <i class="fa fa-caret-right pull-right"></i>
		</a>
	</li>
  </ul>
  