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
                   <form action="" method="post">
                   <div id="okno" >
                       <p>Введите имя: <br><input type="text" name="Имя"/></p>
                   <p>Введите Номер телефона: <br><input type="text" name="nomer"/></p>
                   <p>Введите email: <br><input type="text" name="email"/></p>
                   <p>Введите Название товара: <br><input type="text" name="tovar"/></p>

                   <input type="submit" name="start1" /><br>
                   <a href="#" class="shopUnitMore3">Закрыть</a>

                   </div>
                   </form>

                   <a href="#okno" class="shopUnitMore1">Купить</a>
                  
                
                    <a href="index.php?page=product&id=<?php /*echo $objs['id']; */?>" class="shopUnitMore">
                        Подробнее
                    </a>
</div>

<?php endforeach; ?>
</div>