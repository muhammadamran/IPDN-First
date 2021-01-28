<?php
session_start();
include 'db/db.php';

function login($data) {
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['nama_user'] = $data['nama_user'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['image_url'] = $data['image_url'];
    return 2;
  }
  else return 1;
}

if(isset($_POST["nip"])){$nip_=$db->real_escape_string($_POST["nip"]);}else{$nip_="";}
if(isset($_POST["password"])){$password_=$db->real_escape_string($_POST["password"]);}else{$password_="";}

$user = $db->query("SELECT * FROM tbl_users 
                    WHERE nip='".$nip_."' AND password='".md5($password_)."'", 0);
$result = $user->fetch_assoc();

$nama_user = $result['nama_user'];
$password = $result['password'];
$image_url = $result['image_url'];
$role = $result['role'];

$data = [
  'password' => $password,
  'password_hash' => md5($password_),
  'nama_user' => $nama_user,
  'role' => $role,
  'image_url' => $image_url
];

$log_type = "login";
$date_log = date('Y-m-d H:i:m');
$data2 = $db->query("INSERT INTO tb_log VALUES(' ','$nama_user','$log_type','$date_log',' ')");

$loginArea = login($data);
if ($loginArea == 2) {
  echo '<script>alert("Hello, ' . $nama_user . '. kamu berhasil login");location.href = "index.php"</script>';
} else if ($loginArea == 1) {
  echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
  header("Location: ./notfound.php");
}
?>