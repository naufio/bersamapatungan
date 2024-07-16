<!DOCTYPE html>
<html>
<head>
	<title>Split Bill</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
if (isset($_GET["hitung"])) {
	$bill = $_GET["bill"];

	$nama01 = $_GET["nama01"];
	$nama02 = $_GET["nama02"];
	$nama03 = $_GET["nama03"];
	$nama04 = $_GET["nama04"];
	$nama05 = $_GET["nama05"];
	$nama06 = $_GET["nama06"];
	$nama07 = $_GET["nama07"];
	$nama08 = $_GET["nama08"];
	$nama09 = $_GET["nama09"];
	$nama10 = $_GET["nama10"];
		
	$sub_hrg_01_01 = $_GET["sub_hrg_01_01"];
	$sub_hrg_01_02 = $_GET["sub_hrg_01_02"];
	$sub_hrg_01_03 = $_GET["sub_hrg_01_03"];
	$sub_hrg_01_04 = $_GET["sub_hrg_01_04"];
	$sub_hrg_01_05 = $_GET["sub_hrg_01_05"];
	$sub_hrg_01_06 = $_GET["sub_hrg_01_06"];
    $sub_hrg_01_07 = $_GET["sub_hrg_01_07"];
    $sub_hrg_01_08 = $_GET["sub_hrg_01_08"];
    $sub_hrg_01_09 = $_GET["sub_hrg_01_09"];
    $sub_hrg_01_10 = $_GET["sub_hrg_01_10"];
	
	$sub_hrg_02_01 = $_GET["sub_hrg_02_01"];
	$sub_hrg_02_02 = $_GET["sub_hrg_02_02"];
	$sub_hrg_02_03 = $_GET["sub_hrg_02_03"];
	$sub_hrg_02_04 = $_GET["sub_hrg_02_04"];
	$sub_hrg_02_05 = $_GET["sub_hrg_02_05"];
	$sub_hrg_02_06 = $_GET["sub_hrg_02_06"];
    $sub_hrg_02_07 = $_GET["sub_hrg_02_07"];
    $sub_hrg_02_08 = $_GET["sub_hrg_02_08"];
    $sub_hrg_02_09 = $_GET["sub_hrg_02_09"];
    $sub_hrg_02_10 = $_GET["sub_hrg_02_10"];
	
	$sub_hrg_03_01 = $_GET["sub_hrg_03_01"];
	$sub_hrg_03_02 = $_GET["sub_hrg_03_02"];
	$sub_hrg_03_03 = $_GET["sub_hrg_03_03"];
	$sub_hrg_03_04 = $_GET["sub_hrg_03_04"];
	$sub_hrg_03_05 = $_GET["sub_hrg_03_05"];
	$sub_hrg_03_06 = $_GET["sub_hrg_03_06"];
    $sub_hrg_03_07 = $_GET["sub_hrg_03_07"];
    $sub_hrg_03_08 = $_GET["sub_hrg_03_08"];
    $sub_hrg_03_09 = $_GET["sub_hrg_03_09"];
    $sub_hrg_03_10 = $_GET["sub_hrg_03_10"];
	
	$harga_orang01=$sub_hrg_01_01 + $sub_hrg_02_01 + $sub_hrg_03_01;
	$harga_orang02=$sub_hrg_01_02 + $sub_hrg_02_02 + $sub_hrg_03_02;
	$harga_orang03=$sub_hrg_01_03 + $sub_hrg_02_03 + $sub_hrg_03_03;
	$harga_orang04=$sub_hrg_01_04 + $sub_hrg_02_04 + $sub_hrg_03_04;
	$harga_orang05=$sub_hrg_01_05 + $sub_hrg_02_05 + $sub_hrg_03_05;
	$harga_orang06=$sub_hrg_01_06 + $sub_hrg_02_06 + $sub_hrg_03_06;
	$harga_orang07=$sub_hrg_01_07 + $sub_hrg_02_06 + $sub_hrg_03_07;
	$harga_orang08=$sub_hrg_01_08 + $sub_hrg_02_08 + $sub_hrg_03_08;
	$harga_orang09=$sub_hrg_01_09 + $sub_hrg_02_09 + $sub_hrg_03_09;
	$harga_orang10=$sub_hrg_01_10 + $sub_hrg_02_10 + $sub_hrg_03_10;
			
	$total_harga_orang=$harga_orang01+$harga_orang02+$harga_orang03+$harga_orang04+$harga_orang05+$harga_orang06+$harga_orang07+$harga_orang08+$harga_orang09+$harga_orang10;
	
	$total_orang01=($bill * $harga_orang01)/($total_harga_orang);
	$total_orang02=($bill * $harga_orang02)/($total_harga_orang);
	$total_orang03=($bill * $harga_orang03)/($total_harga_orang);
	$total_orang04=($bill * $harga_orang04)/($total_harga_orang);
	$total_orang05=($bill * $harga_orang05)/($total_harga_orang);
	$total_orang06=($bill * $harga_orang06)/($total_harga_orang);
	$total_orang07=($bill * $harga_orang07)/($total_harga_orang);
	$total_orang08=($bill * $harga_orang08)/($total_harga_orang);
	$total_orang09=($bill * $harga_orang09)/($total_harga_orang);
	$total_orang10=($bill * $harga_orang10)/($total_harga_orang);
}
?>
<div class="kalkulator">
<h1 class="judul">Harga Barang</h2>
<table >
  <tr>
    <td class="tabel">Total Bill</td>
    <td class="tabelkecil">:</td>
    <td class="tabel"><?php echo number_format($bill, 0, ".", "."); ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php echo $nama01; ?></td>
    <td class="tabelkecil">:</td>
    <td class="tabel"><?php echo number_format(
        $harga_orang01,
        0,
        ".",
        "."
    ); ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php echo $nama02; ?></td>
    <td class="tabelkecil">:</td>
    <td class="tabel"><?php echo number_format(
        $harga_orang02,
        0,
        ".",
        "."
    ); ?></td>
  </tr>
  <tr>
    <td class="tabel">
	<?php if (!(($nama03 = $_GET["nama03"]) == null)) {
     echo $nama03;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama03 = $_GET["nama03"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama03 = $_GET["nama03"]) == null)) {
     echo number_format($harga_orang03, 0, ".", ".");
 } ?></td>
  </tr>
  <tr>
    <td class="tabel">
	<?php if (!(($nama04 = $_GET["nama04"]) == null)) {
     echo $nama04;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama04 = $_GET["nama04"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama04 = $_GET["nama04"]) == null)) {
     echo number_format($harga_orang04, 0, ".", ".");
 } ?></td>
  </tr>
  <tr>
    <td class="tabel">
	<?php if (!(($nama05 = $_GET["nama05"]) == null)) {
     echo $nama05;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama05 = $_GET["nama05"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama05 = $_GET["nama05"]) == null)) {
     echo number_format($harga_orang05, 0, ".", ".");
 } ?></td>
  </tr>
  
  <tr>
    <td class="tabel">
	<?php if (!(($nama06 = $_GET["nama06"]) == null)) {
     echo $nama06;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama06 = $_GET["nama06"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama06 = $_GET["nama06"]) == null)) {
     echo number_format($harga_orang06, 0, ".", ".");
 } ?></td>
  </tr>
  
   <tr>
    <td class="tabel">
	<?php if (!(($nama07 = $_GET["nama07"]) == null)) {
     echo $nama07;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama07 = $_GET["nama07"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama07 = $_GET["nama07"]) == null)) {
     echo number_format($harga_orang07, 0, ".", ".");
 } ?></td>
  </tr>
  
  <tr>
    <td class="tabel">
	<?php if (!(($nama08 = $_GET["nama08"]) == null)) {
     echo $nama08;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama08 = $_GET["nama08"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama08 = $_GET["nama08"]) == null)) {
     echo number_format($harga_orang08, 0, ".", ".");
 } ?></td>
  </tr>
  
  <tr>
    <td class="tabel">
	<?php if (!(($nama09 = $_GET["nama09"]) == null)) {
     echo $nama09;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama09 = $_GET["nama09"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama09 = $_GET["nama09"]) == null)) {
     echo number_format($harga_orang09, 0, ".", ".");
 } ?></td>
  </tr>
  
  <tr>
    <td class="tabel">
	<?php if (!(($nama10 = $_GET["nama10"]) == null)) {
     echo $nama10;
 } ?></td>
    <td class="tabelkecil">
		<?php if (!(($nama10 = $_GET["nama10"]) == null)) {
      echo ":";
  } ?></td>
    <td class="tabel">
	<?php if (!(($nama10 = $_GET["nama10"]) == null)) {
     echo number_format($harga_orang10, 0, ".", ".");
 } ?></td>
  </tr>
  

</table> 

<h2 class="judul">=========================</h2>
<h2 class="judul">Berikut Patungannya :</h2>

<table >
  <tr>
    <td class="tabel"><?php echo $nama01; ?></td>
    <td class="tabelkecil">:</td>
    <td class="tabelkanan"><?php echo "Rp. " . number_format($total_orang01,0,".","."); ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php echo $nama02; ?></td>
    <td class="tabelkecil">:</td>
    <td class="tabelkanan"><?php echo "Rp. " . number_format($total_orang02,0,".","."); ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama03 = $_GET["nama03"])==null)) {echo $nama03;}?></td>
    <td class="tabelkecil"><?php if (!(($nama03 = $_GET["nama03"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama03 = $_GET["nama03"])==null)) {echo "Rp. " . number_format($total_orang03, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama04 = $_GET["nama04"])==null)) {echo $nama04;}?></td>
    <td class="tabelkecil"><?php if (!(($nama04 = $_GET["nama04"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama04 = $_GET["nama04"])==null)) {echo "Rp. " . number_format($total_orang04, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama05 = $_GET["nama05"])==null)) {echo $nama05;}?></td>
    <td class="tabelkecil"><?php if (!(($nama05 = $_GET["nama05"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama05 = $_GET["nama05"])==null)) {echo "Rp. " . number_format($total_orang05, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama06 = $_GET["nama06"])==null)) {echo $nama06;}?></td>
    <td class="tabelkecil"><?php if (!(($nama06 = $_GET["nama06"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama06 = $_GET["nama06"])==null)) {echo "Rp. " . number_format($total_orang06, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama07 = $_GET["nama07"])==null)) {echo $nama07;}?></td>
    <td class="tabelkecil"><?php if (!(($nama07 = $_GET["nama07"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama07 = $_GET["nama07"])==null)) {echo "Rp. " . number_format($total_orang07, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama08 = $_GET["nama08"])==null)) {echo $nama08;}?></td>
    <td class="tabelkecil"><?php if (!(($nama08 = $_GET["nama08"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama08 = $_GET["nama08"])==null)) {echo "Rp. " . number_format($total_orang08, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama09 = $_GET["nama09"])==null)) {echo $nama09;}?></td>
    <td class="tabelkecil"><?php if (!(($nama09 = $_GET["nama09"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama09 = $_GET["nama09"])==null)) {echo "Rp. " . number_format($total_orang09, 0, ".",".");} ?></td>
  </tr>
  <tr>
    <td class="tabel"><?php if (!(($nama10 = $_GET["nama10"])==null)) {echo $nama10;}?></td>
    <td class="tabelkecil"><?php if (!(($nama10 = $_GET["nama10"])==null)) {echo ":";} ?></td>
    <td class="tabel"><?php if (!(($nama10 = $_GET["nama10"])==null)) {echo "Rp. " . number_format($total_orang10, 0, ".",".");} ?></td>
  </tr>
</table> 
		<form action="index.php">
		<input class="tombol" type="submit" value="Hitung lagi">
		</form>
	</div>
</body>
</html>