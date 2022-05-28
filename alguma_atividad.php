<!DOCTYPE html>
<html>
    <body>
        <form action="index.php" method="POST" >
            <h1 style="font-weight: lighter;
    color: rgb(145, 67, 67);">Sorrisos</h1><br>
            <select name="sorrisos">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <option name="sorriso" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
            <input type="submit"> 
        </form>
        <?php for ($i = 1; $i <= $_POST['sorrisos']; $i++) : ?>
                <h1 style="width: auto; float: left; display: flex">😁</h1>
        <?php endfor;
        ?>
    </body>
</html>