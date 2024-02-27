<?php

class productosView{
    public function showProductos($productos){
        require_once 'templates/header.phtml';
        ?>
        
        <section>
            <?php foreach ($productos as $producto){ ?>
                <div>
                    <h3><?=$producto->nombre?></h3>
                    <ul>
                        <li><?=$producto->cant?></li>
                        <li><?=$producto->precio?></li>
                    </ul>
                </div>
            <?php } ?>
        </section>
        
        <?php
    }
}
