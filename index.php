<!DOCTYPE html>
<html>
<head>
	<title>Split Bill</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head
<body>

	<div class="kalkulator">
		<h2 class="judul">Split Bill</h2>
		<form action="output.php" method='GET' name="myForm">		
			<input type="text" name="bill" class="bil" autocomplete="off" placeholder="Masukkan Total Bill" required title="Mohon diisi">
			<input type="text" name="nama01" class="bilkiri" autocomplete="off" placeholder="Nama 01" required title="Mohon diisi"><input type="text" name="sub_hrg_01_01" class="bilkiri" autocomplete="off" placeholder="Harga 01" value=0><input type="text" name="sub_hrg_02_01" class="bilkiri" autocomplete="off" placeholder="Harga 01" value=0> <input type="text" name="sub_hrg_03_01" class="bilkiri" autocomplete="off" placeholder="Harga 01" value=0>	
			<input type="text" name="nama02" class="bilkiri" autocomplete="off" placeholder="Nama 02" required title="Mohon diisi"><input type="text" name="sub_hrg_01_02" class="bilkiri" autocomplete="off" placeholder="Harga 02" value=0><input type="text" name="sub_hrg_02_02" class="bilkiri" autocomplete="off" placeholder="Harga 02" value=0> <input type="text" name="sub_hrg_03_02" class="bilkiri" autocomplete="off" placeholder="Harga 02" value=0>	
			<input type="text" name="nama03" class="bilkiri" autocomplete="off" placeholder="Nama 03" 							  ><input type="text" name="sub_hrg_01_03" class="bilkiri" autocomplete="off" placeholder="Harga 03" value=0><input type="text" name="sub_hrg_02_03" class="bilkiri" autocomplete="off" placeholder="Harga 03" value=0> <input type="text" name="sub_hrg_03_03" class="bilkiri" autocomplete="off" placeholder="Harga 03" value=0>	
			<input type="text" name="nama04" class="bilkiri" autocomplete="off" placeholder="Nama 04" 							  ><input type="text" name="sub_hrg_01_04" class="bilkiri" autocomplete="off" placeholder="Harga 04" value=0><input type="text" name="sub_hrg_02_04" class="bilkiri" autocomplete="off" placeholder="Harga 04" value=0> <input type="text" name="sub_hrg_03_04" class="bilkiri" autocomplete="off" placeholder="Harga 04" value=0>	
			<input type="text" name="nama05" class="bilkiri" autocomplete="off" placeholder="Nama 05" 							  ><input type="text" name="sub_hrg_01_05" class="bilkiri" autocomplete="off" placeholder="Harga 05" value=0><input type="text" name="sub_hrg_02_05" class="bilkiri" autocomplete="off" placeholder="Harga 05" value=0> <input type="text" name="sub_hrg_03_05" class="bilkiri" autocomplete="off" placeholder="Harga 05" value=0>	
			<input type="text" name="nama06" class="bilkiri" autocomplete="off" placeholder="Nama 06" 							  ><input type="text" name="sub_hrg_01_06" class="bilkiri" autocomplete="off" placeholder="Harga 06" value=0><input type="text" name="sub_hrg_02_06" class="bilkiri" autocomplete="off" placeholder="Harga 06" value=0> <input type="text" name="sub_hrg_03_06" class="bilkiri" autocomplete="off" placeholder="Harga 06" value=0>	
			<input type="text" name="nama07" class="bilkiri" autocomplete="off" placeholder="Nama 07" 							  ><input type="text" name="sub_hrg_01_07" class="bilkiri" autocomplete="off" placeholder="Harga 07" value=0><input type="text" name="sub_hrg_02_07" class="bilkiri" autocomplete="off" placeholder="Harga 07" value=0> <input type="text" name="sub_hrg_03_07" class="bilkiri" autocomplete="off" placeholder="Harga 07" value=0>	
			<input type="text" name="nama08" class="bilkiri" autocomplete="off" placeholder="Nama 08" 							  ><input type="text" name="sub_hrg_01_08" class="bilkiri" autocomplete="off" placeholder="Harga 08" value=0><input type="text" name="sub_hrg_02_08" class="bilkiri" autocomplete="off" placeholder="Harga 08" value=0> <input type="text" name="sub_hrg_03_08" class="bilkiri" autocomplete="off" placeholder="Harga 08" value=0>	
			<input type="text" name="nama09" class="bilkiri" autocomplete="off" placeholder="Nama 09" 							  ><input type="text" name="sub_hrg_01_09" class="bilkiri" autocomplete="off" placeholder="Harga 09" value=0><input type="text" name="sub_hrg_02_09" class="bilkiri" autocomplete="off" placeholder="Harga 09" value=0> <input type="text" name="sub_hrg_03_09" class="bilkiri" autocomplete="off" placeholder="Harga 09" value=0>	
			<input type="text" name="nama10" class="bilkiri" autocomplete="off" placeholder="Nama 10" 							  ><input type="text" name="sub_hrg_01_10" class="bilkiri" autocomplete="off" placeholder="Harga 10" value=0><input type="text" name="sub_hrg_02_10" class="bilkiri" autocomplete="off" placeholder="Harga 10" value=0> <input type="text" name="sub_hrg_03_10" class="bilkiri" autocomplete="off" placeholder="Harga 10" value=0>	

			<br>
			<br>
			<input type="submit" align=center  name="hitung" value="Hitung" class="tombol">											
		</form>
		<div class="brand"><p >* minimum input 2 orang</p></div>
	</div>

<?php 
////01
////02
////03
////04
////05
////06
////07
////08
////09
////10
//
//if (isset($_POST["hitung"])) {
//   $bill = $_POST["bill"];
// 
// //$sub_hrg_01_01 = $_POST["sub_hrg_01_01"];
// //$sub_hrg_01_02 = $_POST["sub_hrg_01_02"];
// //$sub_hrg_01_03 = $_POST["sub_hrg_01_03"];
// //$sub_hrg_01_04 = $_POST["sub_hrg_01_04"];
// //$sub_hrg_01_05 = $_POST["sub_hrg_01_05"];
// //$sub_hrg_01_06 = $_POST["sub_hrg_01_06"];
//   //$sub_hrg_01_07 = $_POST["sub_hrg_01_07"];
//   //$sub_hrg_01_08 = $_POST["sub_hrg_01_08"];
//   //$sub_hrg_01_09 = $_POST["sub_hrg_01_09"];
//   //$sub_hrg_01_10 = $_POST["sub_hrg_01_10"];
// //
// //$sub_hrg_02_01 = $_POST["sub_hrg_02_01"];
// //$sub_hrg_02_02 = $_POST["sub_hrg_02_02"];
// //$sub_hrg_02_03 = $_POST["sub_hrg_02_03"];
// //$sub_hrg_02_04 = $_POST["sub_hrg_02_04"];
// //$sub_hrg_02_05 = $_POST["sub_hrg_02_05"];
// //$sub_hrg_02_06 = $_POST["sub_hrg_02_06"];
//   //$sub_hrg_02_07 = $_POST["sub_hrg_02_07"];
//   //$sub_hrg_02_08 = $_POST["sub_hrg_02_08"];
//   //$sub_hrg_02_09 = $_POST["sub_hrg_02_09"];
//   //$sub_hrg_02_10 = $_POST["sub_hrg_02_10"];
// //
// //$sub_hrg_02_01 = $_POST["sub_hrg_02_01"];
// //$sub_hrg_02_02 = $_POST["sub_hrg_02_02"];
// //$sub_hrg_02_03 = $_POST["sub_hrg_02_03"];
// //$sub_hrg_02_04 = $_POST["sub_hrg_02_04"];
// //$sub_hrg_02_05 = $_POST["sub_hrg_02_05"];
// //$sub_hrg_02_06 = $_POST["sub_hrg_02_06"];
//   //$sub_hrg_02_07 = $_POST["sub_hrg_02_07"];
//   //$sub_hrg_02_08 = $_POST["sub_hrg_02_08"];
//   //$sub_hrg_02_09 = $_POST["sub_hrg_02_09"];
//   //$sub_hrg_02_10 = $_POST["sub_hrg_02_10"];
// 
// //$harga_orang01 = $sub_hrg_01_01 + $sub_hrg_02_01 + $sub_hrg_03_01;
// //$harga_orang02 = $sub_hrg_01_02 + $sub_hrg_02_02 + $sub_hrg_03_02;
// //$harga_orang03 = $sub_hrg_01_03 + $sub_hrg_02_03 + $sub_hrg_03_03;
// //$harga_orang04 = $sub_hrg_01_04 + $sub_hrg_02_04 + $sub_hrg_03_04;
// //$harga_orang05 = $sub_hrg_01_05 + $sub_hrg_02_05 + $sub_hrg_03_05;
// //$harga_orang06 = $sub_hrg_01_06 + $sub_hrg_02_06 + $sub_hrg_03_06;
// //$harga_orang07 = $sub_hrg_01_07 + $sub_hrg_02_07 + $sub_hrg_03_07;
// //$harga_orang08 = $sub_hrg_01_08 + $sub_hrg_02_08 + $sub_hrg_03_08;
// //$harga_orang09 = $sub_hrg_01_09 + $sub_hrg_02_09 + $sub_hrg_03_09;
// //$harga_orang10 = $sub_hrg_01_10 + $sub_hrg_02_10 + $sub_hrg_03_10;
//
//
//   // Menghitung 2 orang
//   if (
//       ($nama03 = $_POST["nama03"]) == null &&
//       ($nama04 = $_POST["nama04"]) == null &&
//       ($nama05 = $_POST["nama05"]) == null &&
//	 ($nama06 = $_POST["nama06"]) == null &&
//	 ($nama07 = $_POST["nama07"]) == null &&
//	 ($nama08 = $_POST["nama08"]) == null &&
//	 ($nama09 = $_POST["nama09"]) == null &&
//	 ($nama10 = $_POST["nama10"]) == null
//   ) {
//	 if (is_null($_POST["sub_hrg_01_01"])) {$sub_hrg_01_01=0;}else{$sub_hrg_01_01 = $_POST["sub_hrg_01_01"];}
//	 if (is_null($_POST["sub_hrg_02_01"])) {$sub_hrg_02_01=0;}else{$sub_hrg_02_01 = $_POST["sub_hrg_02_01"];}
//	 if (is_null($_POST["sub_hrg_03_01"])) {$sub_hrg_03_01=0;}else{$sub_hrg_03_01 = $_POST["sub_hrg_03_01"];}
//	 if (is_null($_POST["sub_hrg_01_02"])) {$sub_hrg_01_02=0;}else{$sub_hrg_01_02 = $_POST["sub_hrg_01_02"];}
//	 if (is_null($_POST["sub_hrg_02_02"])) {$sub_hrg_02_02=0;}else{$sub_hrg_02_02 = $_POST["sub_hrg_02_02"];}
//	 if (is_null($_POST["sub_hrg_03_02"])) {$sub_hrg_03_02=0;}else{$sub_hrg_03_02 = $_POST["sub_hrg_03_02"];}
//	 
//       $nama01 = $_POST["nama01"];
//       $nama02 = $_POST["nama02"];
//       if (
//           is_numeric($sub_hrg_01_01) || is_numeric($sub_hrg_02_01) || is_numeric($sub_hrg_03_01) ||
//		 is_numeric($sub_hrg_01_02) || is_numeric($sub_hrg_02_02) || is_numeric($sub_hrg_03_02) 
//       ) {
//
//		 $harga_orang01 = $sub_hrg_01_01 + $sub_hrg_02_01 + $sub_hrg_03_01;
//		 $harga_orang02 = $sub_hrg_01_02 + $sub_hrg_02_02 + $sub_hrg_03_02;
//		 
//           $total_orang01 =
//               ($bill * $harga_orang01) / ($harga_orang01 + $harga_orang02);
//           $total_orang02 =
//               ($bill * $harga_orang02) / ($harga_orang01 + $harga_orang02);
//       }
//   }
//
//}
//
//?>
	
	
</body>
</html>

