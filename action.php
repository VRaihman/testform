<?php
session_start();
$post = new stdClass;
if(isset($_SESSION['p1'])) $post->p1 = $_SESSION['p1'];
if(isset($_SESSION['p2'])) $post->p2 = $_SESSION['p2'];
$errors = array(); // error array
$success = ''; //ok text
if(isset($_POST['action']) and $_POST['action'] == 'form__index' ){
	$post->p1 = intval($_POST['p1']);
	$post->p2 = intval($_POST['p2']);
	if(strlen($post->p1)>0 and strlen($post->p2)>0 ){
		$_SESSION['p1'] = $post->p1;
		$_SESSION['p2'] = $post->p2;	
		header('Location: result.php');
		exit;
	}else{
		$errors = array('' => 'Error Input Parametrs');
	}
}
?>