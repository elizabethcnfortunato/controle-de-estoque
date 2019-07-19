//Conexão com o Banco
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco="music";

    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

if(mysqli_connect_errno()){
    die("Conexão falhou: ".mysqli_connect_errno());
    
}else{
    echo "Conectou com Sucesso";
}
    
?>
//Consulta SQL
<?php
    $consulta_artists = "Select * from artists";
    $artists = mysqli_query($conecta,$consulta_artists);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <form action="form.php" method="post">
            Campo 1: <input type=text name=campo1>
            Campo 2: <input type=text name=campo2>
            <input type=hidden name=escondido value="valor do escondido">
            <input type=hidden name=id value="111">
            <input type=submit value="OK">
        </form>
        <?php        
            while($registro = mysqli_fetch_assoc($artists)){
                print_r($registro);
                
            }
        ?>
    </body>
</html>