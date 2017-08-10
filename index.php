<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DSLA Image</title>
  </head>
  <body>
	<h1>ระบบพิมพ์ใบลา</h1>
	<form action="dsla.php">
		<p>
			<label for="stuid">รหัสนักเรียน</label>
			<input type="text" id="stuid" name="stuid" value="">
		</p>
		<p>
			<label for="name">ชื่อ</label>
			<input type="text" id="name" name="name" value="">
		</p>
		<p>
			<label for="class_a">ระดับชั้น</label>
			<input type="text" id="class_a" name="class_a" value="6">
		</p>
		<p>
			<label for="class_b">ห้อง</label>
			<input type="text" id="class_b" name="class_b" value="2">
		</p>
		<p>
			<label for="tel">เบอร์โทร</label>
			<input type="text" id="tel" name="tel" value="">
		</p>
		<p>
			<label for="writedate">วันที่เขียน</label>
			<input type="date" id="writedate" name="writedate" value="<?php echo date("Y-m-d");?>">
		</p>
		<p>
			<label for="">ประเภทลา</label>
			<input type="radio" id="latype_pouy" name="latype" value="ป่วย" checked><label>ป่วย</label>
			<input type="radio" id="latype_kij" name="latype" value="กิจ"><label>กิจ</label>
		</p>
		<p>
			<label for="">สิ่งที่แนบมาด้วย</label>
			<input type="radio" id="attachment_none" name="attachment" value="-" checked><label>ไม่มี</label>
			<input type="radio" id="attachment_doctor" name="attachment" value="ใบรับรองแพทย์"><label>ใบรับรองแพทย์</label>
			<input type="radio" id="attachment_document" name="attachment" value="เอกสารประกอบ"><label>เอกสารประกอบ</label>
		</p>
		<p>
			<label for="reason">สาเหตุของการลา</label>
			<input type="text" id="reason" name="reason" value="ตัวร้อน ไข้ขึ้น">
		</p>
		<p>
			<label for="lastart">ลาตั้งแต่วันที่</label>
			<input type="date" id="lastart" name="lastart" value="<?php echo date("Y-m-d",strtotime("-2 days"));?>">
		</p>
		<p>
			<label for="laend">ถึงวันที่</label>
			<input type="date" id="laend" name="laend" value="<?php echo date("Y-m-d",strtotime("-1 days"));?>">
		</p>
		<p>
			<label for="parent_comment">ความเห็นผู้ปกครอง</label>
			<input type="text" id="parent_comment" name="parent_comment" value="เห็นสมควรให้ลา">
		</p>
		<p>
			<label for="parent">ผู้ปกครองชื่อ</label>
			<input type="text" id="parent" name="parent" value="">
		</p>
		<p>
			<label for="adv">ที่ปรึกษาชื่อ</label>
			<input type="text" id="adv" name="adv" value="">
		</p>
		<button type="submit">สร้างภาพ</button>
		<br><br>
		<img id="img" src="dsla.php" style="width:40%" alt="" />
	</form>
  </body>
</html>