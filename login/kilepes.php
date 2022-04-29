<?php   // kiüríti az adatok, azaz kiléptet
$data = $_SESSION;
unset($_SESSION["csn"]);
unset($_SESSION["un"]);
unset($_SESSION["login"]);
?>