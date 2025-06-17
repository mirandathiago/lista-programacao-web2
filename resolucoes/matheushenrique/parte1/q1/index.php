<?php  
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $preco = $_POST['preco'] ?? 0;  
  
    if ($preco > 0) {  
        $final = $preco - ($preco * 0.10);  
        $resultado = "Preço com desconto: R$ " . $final;  
    } else {  
        $resultado = "Preço inválido.";  
    }  
}  
?>  
  
<form method="post" action="index.php">  
    <label>Informe o preço do produto:
         <input type="number" name="preco" step="0.01">  
    </label>  
    <button>Calcular desconto</button>  
</form>  
  
<?=$resultado?>

<?php 
  echo $resultado;
?>