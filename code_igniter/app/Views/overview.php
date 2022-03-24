
<p><a href="/articulo/create">Create article</a></p>

<?php if(! empty($articulos) && is_array($articulos)) : ?>

    <?php  foreach($articulos as $articulos): ?>
        <h3><?php esc($articulos_item['item']); ?></h3>

        <div class="main">
            <?php
                esc($articulos_item['cuerpo']);
            ?>
        </div>

        <p><a href="/articulo/<?php esc($articulos_item['id'],'url'); ?>">View article</a></p>

    <?php endforeach; ?>
    
<?php else: ?>

    <h3>No articulo</h3>
    <p>No hay articulos</p>
<?php endif ?>