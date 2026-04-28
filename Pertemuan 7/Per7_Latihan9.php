<HTML>
<HEAD>
<TITLE>Penggunaan In Array</TITLE>
</HEAD>
<BODY>
<?php
$program = array("HTML", "PHP", "CSS", "JavaScript");
$Cari = "HTML";
if (in_array($Cari, $program)) {
	echo "Program Basis Web $Cari ada di dalam array";
} else {
	echo "Program Basis Web $Cari tidak ada di dalam array";
}
?>
</BODY>
</HTML>