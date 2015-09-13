<?php
echo '<h1> Hello again '.htmlspecialchars($_POST['name']).'! </h1>
<h2>You are ' . (int)$_POST['age']. ' years old. </h2>';
?>
