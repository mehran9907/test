<?php

$username = htmlentities($_POST['username'], ENT_QUOTES);

echo "Hi $username! Welcome.";