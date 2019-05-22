<!DOCTYPE html>

<?php
  //session_start();
  require ("view/hefonaUser.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="Combo.css">
<style type="text/css">
    #piece1 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece2 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 55%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece3 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 18%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece4 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 18%;
            margin-left: 55%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
</style>
</head>
<html>
<div id=piece1>    
    <?php if(true){//Faire 3 switch : pas créé, créé, modifier
        include ("view/piece.php");
    }?>
        <form method="post" action="index.php?cible=domisep&action=modifier_Email_Contact">
        
        </form>
</div>
<div id=piece2>    
    <form method="post" action="index.php?cible=domisep&action=modifier_Email_Contact">
        
    </form>
</div>
<div id=piece3>    
    <form method="post" action="index.php?cible=domisep&action=modifier_Email_Contact">
        
    </form>
</div>
<div id=piece4>    
    <form method="post" action="index.php?cible=domisep&action=modifier_Email_Contact">
        
    </form>
</div>
</html>