<?php
if($_POST["message"]) {
    mail("alvin.cheung@live.com", "Website email message", $_POST["message"], "From: an@email.address");
}
?>