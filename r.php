<?php
require_once 'db.php';
if (isset($_GET['short'])) {
    $string = trim(strip_tags($_GET['short']));
    $rs = mysql_query('select destination from links where string = "' . mysql_real_escape_string($string) . '"') or die(mysql_error());
    if (@mysql_num_rows($rs)) {
        $row = @mysql_fetch_object($rs);
        header("Location: http://www." . $row->destination);
        exit;
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>