<div id="openedProduct-img">
                <img src="<?php echo $obj['img'];?>" >
            </div>
            <div id="openedProduct-content">
                <h1 id="openedProduct-name">
                   <?php echo $obj['name'];?>
                </h1>
                <div id="openedProduct-desc">
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                </div>
                <div id="openedProduct-price">
                    Цена:  <?php echo $obj['price'];?>
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


                <div id="openedProduct-otz">
                    Оставить отзыв о товаре: 
                </div>







                <div id="openedProduct-desc">
                <form action="" method="post">
                <textarea name="chat" cols="70" rows="10">
                <?php echo $_SESSION["chat"] = $obj['sql']?></textarea>
                <p>Введите имя: <input type="text" name="name"/></p>
                <p>Введите сообщее: </p>
                <textarea name="message" cols="40" rows="10">
                </textarea>
                <p><input type="submit" name="start" /></p>
                </form>
                </div>
            </div>