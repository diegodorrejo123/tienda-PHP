<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iniciar sesión</title>
  <link href="extra/bootstraplux.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            
            <div class="card-header">Iniciar sesión</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Usuario</label>
                                <input type="text" name="user" class="form-control" placeholder="Usuario" required="required" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Contraseña</label>
                                <input type="password" name="pass" class="form-control" placeholder="Contraseña" required="required">
                            </div>
                        </div>
                        <?php if(isset($errorLogin)){echo $errorLogin;}?>
                        <input type="submit" class="btn btn-primary btn-block" value="Iniciar">
                    </form>
            </div>
        </div>
    </div>
</body>
</html>