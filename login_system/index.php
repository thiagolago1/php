<?php
session_start();
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="Stylesheet" type="text/css" href="css/style.css">
    
    <title>Sistema de Login Simples</title>
    
</head>

<body>
                    <h3>Sistema de Login</h3>
                   
                    <?php
                      if(isset($_SESSION['sem_autenticacao'])):
                    ?>

                    <div>
                      <p>Usuário ou senha inválidos.</p>
                    </div>
                    
                    <?php
                    
                    endif;
                    unset($_SESSION['sem_autenticacao']);
                    ?>
                   
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="password" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Logar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>