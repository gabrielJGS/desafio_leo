<?php

require_once '../../../config.php';
require_once '../../controllers/course.php';
require_once '../partials/header.php';

if($_POST){
  print_r($_POST);
}

if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["image"]) && isset($_POST["link"]))
  createCourseAction($conn, $_POST["title"], $_POST["description"], $_POST["image"], isset($_POST["link"]));
?>
<div class="container">
  <div class="row">
    <h1>Criação de curso:</h1>
  </div>
  <form action="./create.php" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" name="title" placeholder="Digite o título do curso">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrição</label>
      <input type="text" class="form-control" name="description" placeholder="Digite a descrição do curso">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Imagem</label>
      <input type="text" class="form-control" name="image" placeholder="Escolha a imagem que irá representear o curso">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Link</label>
      <input type="text" class="form-control" name="link" placeholder="Digite o link do curso">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<?php require_once '../partials/footer.php'; ?>