 
<?php
include ("./includes/class.Triangulo.php");

$triangulo = new Triangulo(NULL);
        
echo $triangulo->get_form_transporte_area();

if(isset($_POST['guardar'])){
    echo "EL AREA DE UN TRIANGULO ES:" . $triangulo->area($_POST['base'], $_POST['altura']);
}

echo $triangulo->get_form_transporte_perimetro();
if(isset($_POST['guardarP'])){
    echo "EL PERIMETRO DE UN TRIANGULO ES:" . $triangulo->perimetro($_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
}

?>

       
        
       

