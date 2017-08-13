<!DOCTYPE html>
<html>

<head>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/c259a54250.js"></script>
	<meta charset="utf-8">
	<title>DSLA Image</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>ระบบพิมพ์ใบลาโรงเรียนสาธิตฯ</h1>
				</div>

				<form action="dsla.php" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="stuid">รหัสนักเรียน</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="stuid" name="stuid" value=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="name">ชื่อ</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="name" name="name" value=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="class_a">ระดับชั้น</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="class_a" name="class_a" value="6"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="class_b">ห้อง</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="class_b" name="class_b" value="2"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="tel">เบอร์โทร</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="tel" name="tel" value=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="writedate">วันที่เขียน</label>
						<div class="col-sm-10"><input class="form-control" type="date" id="writedate" name="writedate" value="<?php echo date(" Y-m-d ");?>"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="">ประเภทลา</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" id="latype_pouy" name="latype" value="ป่วย" checked> ป่วย</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="latype_kij" name="latype" value="กิจ"> กิจ</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="">สิ่งที่แนบมาด้วย</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" id="attachment_none" name="attachment" value="-" checked> ไม่มี</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="attachment_doctor" name="attachment" value="ใบรับรองแพทย์"> ใบรับรองแพทย์</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="attachment_document" name="attachment" value="เอกสารประกอบ"> เอกสารประกอบ</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="reason">สาเหตุของการลา</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="reason" name="reason" value="ตัวร้อน ไข้ขึ้น"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="lastart">ลาตั้งแต่วันที่</label>
						<div class="col-sm-10"><input class="form-control" type="date" id="lastart" name="lastart" value="<?php echo date(" Y-m-d ", strtotime("-2 days "));?>"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="laend">ถึงวันที่</label>
						<div class="col-sm-10"><input class="form-control" type="date" id="laend" name="laend" value="<?php echo date(" Y-m-d ", strtotime("-1 days "));?>"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="parent_comment">ความเห็นผู้ปกครอง</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="parent_comment" name="parent_comment" value="เห็นสมควรให้ลา"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="parent">ผู้ปกครองชื่อ</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="parent" name="parent" value=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="adv">ที่ปรึกษาชื่อ</label>
						<div class="col-sm-10"><input class="form-control" type="text" id="adv" name="adv" value=""></div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<div class="col-sm-10"><button type="submit" class="btn btn-success">Generate ใบลา</button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>ตัวอย่างใบลาจากระบบ</h1>
				</div>
				<img id="img" src="dsla.php" class="img-responsive" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="text-center">Just a easy system. <a href="https://fb.me/Phitchawat.L">Shayennn</a></p>
				<p class="text-center"><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/Shayennn/DSLA">Shayennn/DSLA</a></p>
			</div>
		</div>
	</div>
</body>

</html>
