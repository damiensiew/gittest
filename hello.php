<?php 

echo 'Hello';

echo 'Hello Again';

echo 'Hello World';

echo 'Hello All';

echo 'Hello Everyone';

echo 'Hello There';

echo 'Hello Dev';

echo 'Hello Dev Day';

$bad_var = htmlspecialchars($_GET['msg']);

echo '<p>'. $bad_var .'</p>';

echo '<i>Use em instead</i>';

$bad_var2 = htmlspecialchars($_GET['server']);

echo $bad_var2;

exit;
?>
