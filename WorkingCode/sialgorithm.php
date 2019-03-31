<?php
      shell_exec("/var/www/my_script.sh ". $_POST['submit'] ." 2>/dev/null >/dev/null &");
?>
