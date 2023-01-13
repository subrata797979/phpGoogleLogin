<?php
require_once 'config.php';
echo PHP_VERSION;

if (isset($_SESSION['user_token'])) {
  header("Location: dashboard.php");
} else {
  echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";
}
