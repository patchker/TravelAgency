<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
    <a href="index.php?action=trips"><input class='back' type="button" value = "Wróć" width="100px"></a>
    <a href="index.php?action=tripdelete"><input class = 'back' type="button" value = "Usuń wycieczkę"></a>
    <br><br><h2>Edycja wycieczki "<?php echo $row[0]['Nazwa']?>"</h2>
<br>

        <div id="tripedit">
    <form action="index.php?action=tripupdate" method="post">
        <?php
        $temp = $_SESSION['edited_trippole'];
        if($temp == 1)
        {
            ?>


            <span class="tekst">Nazwa </span><span class="pole"><input name="Nazwa" class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><button  type="submit"  ><i class="fa-solid fa-check" ></i></button></a></span><br>
            <span class="tekst">Typ </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Cena </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Kraj </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><a href="index.php?id4=4"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Opis </span><span class="pole"><textarea disabled name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=6"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>


            <?php
        }else if($temp==2)
        {
            ?>

            <span class="tekst">Nazwa </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><i class="fa-solid fa-gear" ></i></a></span><br>
            <span class="tekst">Typ </span><span class="pole"><input name="Typ"  class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><button  type="submit"><i class="fa-solid fa-check"></i></button></a></span><br>
            <span class="tekst">Cena </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Kraj </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><a href="index.php?id4=4"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Opis </span><span class="pole"><textarea disabled name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=6"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>



            <?php
        }else if($temp==3)
        {
            ?>


            <span class="tekst">Nazwa </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><i class="fa-solid fa-gear" ></i></a></span><br>
            <span class="tekst">Typ </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Cena </span><span class="pole"><input name="Cena"  class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><button  type="submit"><i class="fa-solid fa-check"></i></button></a></span><br>
            <span class="tekst">Kraj </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><a href="index.php?id4=4"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>

            <span class="tekst">Opis </span><span class="pole"><textarea disabled name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=6"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>




            <?php

        }else if($temp==4)
        {
            ?>



            <span class="tekst">Nazwa </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><i class="fa-solid fa-gear" ></i></a></span><br>
            <span class="tekst">Typ </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Cena </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Kraj </span><span class="pole"><input name="Kraj"  class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><a href="index.php?id4=4"><span class="editicon"><button  type="submit"><i class="fa-solid fa-check"></i></button></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Opis </span><span class="pole"><textarea disabled name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=6"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>



            <?php
        }else if($temp==5)
        {


            ?>

            <span class="tekst">Nazwa </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><i class="fa-solid fa-gear" ></i></a><br>
            <span class="tekst">Typ </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>

            <span class="tekst">Cena </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>

            <span class="tekst">Kraj </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><span class="editicon"><a href="index.php?id4=4"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input name="dni"  class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><button  type="submit"><i class="fa-solid fa-check"></i></button></a></span><br>

            <span class="tekst">Opis </span><span class="pole"><textarea disabled name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>



            <?php
        }else if($temp==6)
        {


            ?>

            <span class="tekst">Nazwa </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwa'] ?>"></span><a href="index.php?id4=1"><span class="editicon"><i class="fa-solid fa-gear" ></i></a><br>
            <span class="tekst">Typ </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Typ'] ?>"></span><a href="index.php?id4=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>

            <span class="tekst">Cena </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['Cena'] ?>"></span><a href="index.php?id4=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a><br>

            <span class="tekst">Kraj </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Kraj'] ?>"></span><span class="editicon"><a href="index.php?id4=4"><i class="fa-solid fa-gear"></i></a></span><br>
            <span class="tekst">Liczba dni </span><span class="pole"><input disabled class="editeduserinput"  type="number" value="<?php echo $row[0]['dni'] ?>"></span><a href="index.php?id4=5"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>

            <span class="tekst">Opis </span><span class="pole"><textarea name="Opis"  ><?php echo $row[0]['Opis'] ?></textarea></span><a href="index.php?id4=6"><span class="editicon"><button  type="submit"><i class="fa-solid fa-check"></i></button></a><br>



            <?php
        }
        ?>



    </form>
        </div>
        <div class="tripimage">

            <img src="<?php echo $row[0]['path'] ?>">
        </div>
    </div>




    <?php

} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>