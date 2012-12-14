<?php

require 'User.php';

$user = new User();
echo $user->talk();

echo '<br><br>';
echo date('d.m.Y H:i', filemtime(__FILE__)).'<br>';
echo date('d.m.Y H:i');