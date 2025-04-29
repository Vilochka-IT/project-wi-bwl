<?php

header("Location: /pages/startseite.php");
exit;

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello %s!', $name);

