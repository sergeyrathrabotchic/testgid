<h1>
                Каталог товаров
</h1>
<div>
<?php foreach ($goods as $good): ?>
<div class="shopUnit">
                    <img src="<?php echo $good['image'];?>" />

                    <div class="shopUnitName">
                        <?php echo $good['name'];?>
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: <?php echo $good['price'];?>
                    </div>
                    <a href="index.php?page=product&id=<?php echo $good['id']; ?>" class="shopUnitMore">
                        Подробнее
                    </a>
</div>

<?php endforeach; ?>
</div>