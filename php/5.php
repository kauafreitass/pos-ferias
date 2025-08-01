<h1>Foreach que percorre um array com 5 nomes e imprime</h1>
<!-- Título da página -->

<?php
// Cria um array chamado $nomes contendo 5 elementos (nomes)
$nomes = ['Manuela', "Ana", "Maria", "Diego", "Joao"];

// Laço foreach que percorre cada elemento do array $nomes
foreach ($nomes as $nome) {
    // Imprime o nome atual
    echo $nome;

    // Quebra de linha em HTML para mostrar os nomes em linhas separadas
    echo "<br>";
}
?>
