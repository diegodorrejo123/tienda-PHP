<?php
include_once 'include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administración</title>

  <!-- Bootstrap core CSS -->
  <link href="extra/bootstraplux.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
<?php require_once 'admin/admin_f.php';
    sidebar(); ?>
    
</body>

</html>