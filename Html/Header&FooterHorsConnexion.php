<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
    * {-moz-box-sizing: border-box; box-sizing: border-box;}
        body {background-color: #000000; color: white; height:100%;width:100%;background: url(../Images/H.jpg);background-size:cover;display : table; background-position: fixed; }
        header { text-align: center;background-color: white; opacity: 0.7; display :table-header-group; left:0; top:0;}
        #Head1{float : left;margin-left: 0.5%; margin-top: 0.85%; color: black;}
        #Head1 p{font-family: "Jazz LET", fantasy; padding:0;}
        #Head1 img{border-radius: 35%;}
        #Head2{ width:40%;margin: 0 auto;color: black;}
        #Head2 p{font-family: "Jazz LET", fantasy; font-size: 1.9em;}
        #Head3 {margin-right:1.3%;float:right;color: black;margin-top:4%;}
        #Head3 img {border-radius: 35%;}
        #Head3 button:hover{opacity: 0.5;padding: 2;border-radius: 15%;}
        footer {text-align: center;opacity: 0.7; width: 100%; background-color: white; bottom: 0; left: 0; right: 0; position:absolute; color:black;display : table-row;}
        #Footer2 {margin:0 auto;height: 100%;}
        #Footer2 img{display : flex; align-items:center; float: left; padding-left: 20px;}
        #Footer3 {display : flex; align-items:center;}
        #Footer3 p {margin-left: 1%;float: left; padding-right: 20%;}
        #Footer3 a {padding-right:1%;padding-left:1%;}
        #FooterReseaux {display : flex; align-items:center;justify-content : center; padding-left: 15%;}
        #FooterReseaux img{border-radius : 50%;padding-left: 20px;padding-right: 20px;}

        .contenu {text-align: center; margin:0 auto;}

    </style>
</head>

<body>

    <header>
        <div id ="Head1">
            <img src = "../Images/logobase.png" alt="Logo" width="70"> 
            <p>Check They're Ok !<p>     
        </div>
        <div id="Head3">
                    <form method="post" action="Resident.php">
                            <label for="id">ID</label>
                            <input type="text" <id="nom" name="nom">
                            <label for="mdp">MDP</label>
                            <input type="text" <id="e-mail" name="e-mail">
                            <input type="submit" value="Se connecter">
                    </form>
        </div>
        <div id="Head2"> <br />
            <p>Récupérer son mot de passe</p>      
        </div>
    </header>

    <footer>
            <br />
            <div id="Footer2">
            <img src = "../Images/Isep.png" alt="Isep" width="90"> 
            <img src = "../Images/LogoDomisep.png" alt="Domisep" width="100" > 

            <i>Équipe de techniciens : DA COSTA Sarah - MILLOT Pauline - GORGE BERNAT Arthur - POLO Romain - BELAMICH Leny - BENSOUDA Amine<i>
            </div>
            <br />
            <HR align=center>
            <div id = "Footer3">
                <p><i>CheckThey'OK© 2018-2019</i></p>   -
                <a href = "FAQ.html"><u> FAQ </u></a> -
                <a href = "Email.html"><u>Nous contacter</u></a> -
                <a href = "CGU.html"><u> Conditions générales d'utilisations </u></a> -
                <div id = "FooterReseaux">
                    <div> 
                            <a href = "http://www.twitter.com" target="_blank"><img src = "../Images/twitter.png" width=70"></a> <br />
                            Twitter
                    </div>
                    <div>
                            <a href = "http://www.instagram.com" target="_blank"><img src = "../Images/instagram.png" width="70"> </a> <br />
                            Instagram
                    </div>
                    <div>
                            <a href = "http://www.facebook.com" target="_blank"><img src = "../Images/facebook.png" width="70"></a> <br />
                            Facebook
                    </div>
                    <br />
                </div>
            </div>
    </footer>
</body>
</html>