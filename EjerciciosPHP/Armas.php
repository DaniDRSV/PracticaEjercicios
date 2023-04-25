<?php
class Armas
{
    public $Municion;

    public function __construct($Municion = 0)
    {
        $this->Municion = $Municion;
    }

    public function recar()
    {
        if($this->Municion == 0 )
        {
            $this->Municion = 8;
        }
    }
    public function dispa()
    {
        if($this->Municion > 0 && $this->Municion <= 8)
        {
            $this->Municion--;
        }
    }
    public function balasRes()
    {
        return $this->Municion;
    }
}

class franco extends Armas
{

}

class Ak  extends Armas
{

}
class pistola extends Armas
{

}
class Escopeta extends Armas
{

}
$franco = new Franco($_POST["franco"] ?? 0);
$ak = new Ak($_POST["ak"] ?? 0);
$pistola = new Pistola($_POST["pistola"] ?? 0);
$escopeta = new Escopeta($_POST["escopeta"] ?? 0);


if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(isset($_POST["recargarf"]))
    {
        $franco->recar();
    }
    else if(isset($_POST["dispararf"]))
    {
        $franco->dispa();
    }
    else if(isset($_POST["recargarA"]))
    {
        $ak->recar();
    }
    else if(isset($_POST["dispararA"]))
    {
        $ak->dispa();
    }
    else if(isset($_POST["recargarP"]))
    {
        $pistola->recar();
    }
    else if(isset($_POST["dispararP"]))
    {
        $pistola->dispa();
    }
    else if(isset($_POST["recargarE"]))
    {
        $escopeta->recar();
    }
    else if(isset($_POST["dispararE"]))
    {
        $escopeta->dispa();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body background="img/fondo.png">
    <h1 style="color:#ff7f50">ARMAS</h1>
    <div class="form-container">
        <form action="Armas.php" method="POST">
            <img src="img/franco.png">
            <label style="color:#ff7f50" for="franco">Franco</label>
            <input type="number" name="franco" id="franco" value="<?php echo $franco->balasRes(); ?>" readonly>
            <button onmousedown="sound8.play()"  type="submit" name="recargarf">Recargar</button>
            <button onmousedown="sound1.play()" type="submit" name="dispararf">Disparar</button>
            <script>
            var sound1 = new Audio();
            sound1.src = "audios/sniper.mp3";
            var sound8 = new Audio();
            sound8.src = "audios/p.mp3";
        </script>
        </form>

        <form action="Armas.php" method="POST">
            <img src="img/Ak 47.png">
            <label  style="color:#ff7f50" for="ak">Ak-47</label>
            <input type="number" name="ak" id="ak" value="<?php echo $ak->balasRes(); ?>" readonly>
            <button onmousedown="sound7.play()" type="submit" name="recargarA">Recargar</button>
            <button  onmousedown="sound2.play()" type="submit" name="dispararA">Disparar</button>
            <script>
            var sound2 = new Audio();
            sound2.src = "audios/ak.mp3";
            var sound7 = new Audio();
            sound7.src = "audios/p.mp3";
        </script>
        </form>
        <form action="Armas.php" method="POST">
            <img src="img/pistola.png">
            <label style="color:#ff7f50" for="pistola">Pistola</label>
            <input type="number" name="pistola" id="pistola" value="<?php echo $pistola->balasRes(); ?>" readonly>
            <button  onmousedown="sound6.play()" type="submit" name="recargarP">Recargar</button>
            <button  onmousedown="sound3.play()" type="submit" name="dispararP">Disparar</button>
            <script>
            var sound3 = new Audio();
            sound3.src = "audios/pistola.mp3";
            var sound6 = new Audio();
            sound6.src = "audios/p.mp3";
            
            
            
        </script>
        </form>
        <form action="Armas.php" method="POST">
            <img src="img/Escopeta.png">
            <label style="color:#ff7f50" for="escopeta">Escopeta</label>
            <input type="number" name="escopeta" id="escopeta" value="<?php echo $escopeta->balasRes(); ?>" readonly>
            <button  onmousedown="sound5.play()" type="submit" name="recargarE">Recargar</button>
            <button onmousedown="sound4.play()" type="submit" name="dispararE">Disparar</button>
            <script>
            var sound4  = new Audio();
            sound4.src = "audios/esco.mp3"
            var sound5  = new Audio();
            sound5.src = "audios/e.mp3"

            
        </script>
        </form>
    </div>
</body>
</html>