<?php
$mod = $_REQUEST['mod'];
switch ($mod) {
case "tambah":
require("tambah.php");
break;
case "ubah":
require("ubah.php");
break;
case "hapus":
require("hapus.php");
break;
require("tambah.php");
}
?>