<!DOCTYPE html>

<?php
	
?>

<style type="text/css">

        #zonetexte {
        box-shadow: 1px 1px green, -0.6em 0 .9em grey;
        position: absolute;
        overflow:scroll;
        width:70%;
        height:50%;
        background-color: white;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 20px;
        margin-top : 5%;
        margin-left: 20%;
        border-width:5px;
        border-style:double;
        border-color:#82A898;
        color:black;
        border-radius : 10px;
        opacity: 0.9;
        }
        #article {font-weight: bold;text-decoration: underline;}
</style>
<html>
    <div id=zonetexte>    
        <form method="post" action="index.php?cible=ct_domisep&action=modifier_Cgu">
            <textarea name="cgu" rows="26" cols="170">
            <?php
                echo $cgu;
            ?>
            </textarea>
            <input type='submit' id='btn-submit'>Modifier les CGU</input>
        </form>
    </div>
</html>