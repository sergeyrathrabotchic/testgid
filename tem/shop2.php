<h1>
                Каталог товаров
</h1>
<div>
<?php foreach ($objs as $obj/*$goods as $good*/): ?>
<div class="shopUnit">
                    <img src="<?php echo $obj['img'];?>" />

                    <div class="shopUnitName">
                        <?php echo $obj['name'];?>
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: <?php echo $obj['price'];?>
                    </div>
                    
                       <div id="okno" >
                           Всплывающее окошко!<br>
                           <p>Введите имя: <input type="text" name="name"/></p>
                           <p>Введите имя: <input type="text" name="name"/></p>
                           <p>Введите имя: <input type="text" name="name"/></p>
                           <p>Введите имя: <input type="text" name="name"/></p>
                           <a href="#"><input type="submit" name="start" /></a>
                       </div>
                   
                       <a href="#okno" class="shopUnitMore1">Вызвать всплывающее окно</a>
                  
                
                    <a href="index.php?page=product&id=<?php /*echo $objs['id']; */?>" class="shopUnitMore">
                        Подробнее
                    </a>
</div>

<?php endforeach; ?>
</div>