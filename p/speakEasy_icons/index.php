<?php
ini_set('session.cookie_httponly', true);
ob_start();
session_start(); 
header('Location: http://www.google.com/');
?>