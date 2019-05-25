<!DOCTYPE html>

<?php
	
?>

    <script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="view/javascripts/scriptConfigurationDomisep.js"></script>

<style type="text/css">
        #z {display : table;}
        textarea {border: none;}
        #zonetexte2:hover {transition:0.5s;margin-top: 1%;}
        #zonetexte1:hover {padding: 1%;transition:0.5s;margin-top: 2%;}
        #ligne {padding-left:6%;width: 100%; font-size: 110%;}
        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}
        #form2_bas {padding-top: 6%;font-style: normal;}
        #form2_bas a {color:white;font-style: italic; }
        #bouton-submit {}
        #form2_demi [type="submit"] {font-size: 130%; border-radius: 4px;border: 2px solid white; background-color: unset; color:white;}
        #form2_demi [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        #form2_demi [type="submit"]:active {background-color: green; color:white;}
        #zonetexte1 [type="email"] {width: 200px;}
        #form2_bas  label {margin-left: 4%;}
        #form2_demi label {font-family:"Century Gothic";font-style: normal;  }
        #bas {position: absolute;margin-left: 60%;display: table-row;margin-top: 26%;}
        #form2_demi, #form2_bas,  {float: left;width:20%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-cell;padding-top: 1%;}input, button {opacity: 0.8;font-family: normal;}
        input, button {opacity: 0.8;font-family: normal;}
        @media only screen and (min-width: 48em) { #form2_demi {width: 100%;}}
        #zonetexte1 {
            width:55%;
            height:30%;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            border-color:#82A898;
            color:grey;
            border-radius : 10px;
            opacity: 0.9;
            width:35%;margin:0 auto;display:table;margin-top: 3%;padding: 9px; border-radius: 8px;background-color:rgb(255, 255, 255,0.7);transition:0.5s;
        }
        #article {font-weight: bold;text-decoration: underline;}
        #zonetexte2 {
        box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            height:36%;
            width : 55%;
            text-align: center;
            background-color: white;
            margin-left: 23.5%;
            margin-top: 2%;
            align-content: center;
            border-width:5px;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }
        #article {font-weight: bold;text-decoration: underline;}
        .error_form {font-size: 15px; font-family: Arial; color: #FF0052;}

</style>
<html>
    <div id=zonetexte1>    
        <form method="post" action="index.php?cible=domisep&action=modifier_Email_Contact" id='registrationEmail'>
            <div id="ligne">
            <div id="form2_demi">
                    <label>Adresse de contact actuelle :
                    <?php
                        echo $emailcontact;
                    ?>
                </label>
            </div>
            <br>
            <div id="form2_demi">
                    <label for="form_email">Nouvelle adresse de contact :</label> 
                    <input type="email" id="form_email" placeholder="Adresse@email.com" name="form_email" maxlength="30">
                    <span class="error_form" id="email_error_message"></span>
            </div>
            <div id="form2_demi">
                    <input type='submit' id='btn-modifier' value="Modifier">
            </div>
            </div>
        </form>
    </div>

    <div id ="z">
           
        <form method="post" action="index.php?cible=domisep&action=modifier_Cgu">
            <div id=zonetexte2> <h1> &#x21E9 Conditions générales d'utilisations</h1>
            <textarea name="cgu" rows="26" cols="170">

            <?php
                echo $cgu;
            ?>
            </textarea>
            </div>
       
            <div id="bas">
                <div id="form2_demi"> 
                <input type='submit' id='btn-submit' value="Modifier les CGU">
                </div>
            </div>
        </form>
        
    </div>
</html>