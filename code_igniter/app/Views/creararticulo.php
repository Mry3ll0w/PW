<h2><?php esc($title); ?></h2>

<?php \Config\Services::validation()->listErrors(); ?>

<form action="/articulo/create">

    <?php csrf_field() ?>
    <label for="title">Titulo</label>
    <input type="input" name="title">
    <br><br><br>

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" ></textarea>
    <br><br><br>

    <label for="cuerpo">Cuerpo</label>
    <textarea name="cuerpo"></textarea>
    <br><br><br>

    <input type="submit" name="submit" value="Create articulo item">

</form>