
<table  border="1" style="
border-collapse: collapse;
text-align:  center;
width="90%";
height="90%";
">
    <caption>Форма 2</caption>
    <tr height="20%">
        <td width="20%" >


            <form action="" method="post">

                <select  name="hello" >
                    <option selected>Выберите регион</option>
                    <?php
                    echo "<pre>"; print_r( $rows11); echo "</pre>";
                    for($c=0;$c<count($rows11);$c++): ?>
                        echo "<pre>"; print_r( $rows11); echo "</pre>";
                        <option name="name" value =<?php echo $rows11[$c]['id'];?>><?php echo $rows11[$c]['region'];?></option>
                    <?php endfor;?>
                </select >
                <input type="submit" name="start" />
            </form>
            <?php
            if ($vr == 1 ): ?>
                <p>Регион: <?php echo $region[0]['region']; ?></p>
            <?php endif; ?>
            <?php
            if ($vdate == 1 ): ?>
                <p>Регион: <?php echo $region[0]['region']; ?></p>
            <?php endif; ?>
        </td>


        <td width="20%" id="1">
            <form action="" method="post">
                <input  style="display: none;" type="text" name="r" value=<?php echo $id; ?>   />
                <input name="date" type="date">
                <input type="submit" name="start2" />
            </form>
            <?php
            if ($vdate == 1): ?>
                <p>Дата отъезда: <?php echo $datеd; ?></p>
            <?php endif; ?>

        </td>
    </tr>
    <tr height="20%">
        <td width="20%" id="1">

            <form action="" method="post">

                <input  style="display: none;" type="text" name="r" value=<?php echo $date; ?> />
                <input  style="display: none;" type="text" name="r1" value=<?php echo $id; ?>   />
                <input  style="display: none;" type="text" name="r2" value=<?php echo $datеd; ?>   />



                <select  name="k"    width="30" <?php
                if ($vid == 1): ?> disabled<?php endif; ?>>
                    <option selected>Выберите курьера</option>
                    <?php
                    if ($vid == 0):for($c1=0;$c1<count($rows4);$c1++): ?>
                        <option name="name" value =<?php echo $rows4[$c1][0]['id'];?>><?php echo $rows4[$c1][0]['fio'];?></option>
                    <?php endfor; endif; ?>

                </select >
                <?php
                if ($vid == 0): ?>
                    <input type="submit" name="start3" />
                <?php endif; ?>

            </form>


        </td>
        <td width="20%" id="1">
            <input  style="display: none;" type="text" name="r1" value=<?php echo $date; ?> />
            <?php
            if ($vdate == 1): ?>
                <p>Дата приезда: <?php echo $date; ?></p>
            <?php endif; ?>

        </td>
    </tr>
</table>




<br>
<br>
<br>
<table  border="1" style="
border-collapse: collapse;
text-align:  center;
">
    <caption>Форма 1</caption>
    <form action="" method="post">
        <tr height="20%">
            <td width="30%" >
                <input name="d1" type="date">

            </td>
            <td width="30%" >

                <input name="d2" type="date">
                <input type="submit" name="start4" />
            </td>
        </tr>

    </form>
</table>

<br>

<?php
if ($pr == 0): ?>
    <table  border="1" style="
border-collapse: collapse;
text-align:  center;
">
        <caption>Вывод</caption>
        <tr height="20%">
            <td width="20%" >
                <p>id</p>

            </td>
            <td width="20%" >

                <p>id региона</p>
            </td>
            <td width="20%" >
                <p>id курьера</p>
            </td>
            <td width="20%" >

                <p>дата отъезда</p>
            </td>
            <td width="20%" >

                <p>дата приезда</p>
            </td>
        </tr>
        <?php for($i2=0;$i2<count($rows9);$i2++): ?>
            <tr height="20%">

                <td width="20%" >
                    <?php echo $rows9[$i2]['id']; ?></p>

                </td>
                <td width="20%" >

                    <?php echo $rows9[$i2]['rID']; ?></p>
                </td>
                <td width="20%" >
                    <?php echo $rows9[$i2]['kID']; ?></p>

                </td>
                <td width="20%" >
                    <?php echo $rows9[$i2]['datev']; ?></p>

                </td>
                <td width="20%" >
                    <?php echo $rows9[$i2]['datep']; ?></p>

                </td>
            </tr>
        <?php endfor;  ?>

    </table>
<?php  endif; ?>
