<?php
    include'../conecta.php';

    $titulo = strtoupper($_POST['titulo']);
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $genero = strtoupper($_POST['select']);

    $consulta = $conexao -> prepare("INSERT INTO livros (titulo,genero,editora,autor,paginas) VALUES ('$titulo','$genero','$editora','$autor','$paginas')");

    $consulta -> execute();

    header('Location: index.php');
?>