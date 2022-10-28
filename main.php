<html>
    <link href="./src/css/main.css" rel="stylesheet">
    <div>
        <div id="Info">
            <div id="HomeBar" class="homebar">
                <div class="connexion">
                    <a href="/chat/login/user.php">Connexion</a>
                </div>
                <div class="wiki">
                    <a href="wiki.php">Wiki</a>
                </div>
                <div class="admin">
                    <a href="./mysql/">Admin</a>
                </div>
                <div class="title white">
                    <p><center><br>Bienvenue<br><a class="f35">sur</a><br><a class="f45">Learn2Code</a></center><p>
                </div>
                <!--<img src="./src/img/jvp.png" class="homelogo">-->
            </div>
            <div id="CrossBar" class="crossbar">
                <svg xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg) translateY(-3px);" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path fill="#2D323B" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                    <path fill="#2D323B" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                    <path fill="#2D323B" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                </svg>
            </div>
            <div id="LowerBar" class="lowerbar white">
                <p class="txt">Bienvenue sur Learn2Code,<br>ici vous pourrez apprendre à coder dans les langages de programation proposé<br> pour améliorer ses compétences en programmation.<br>De plus un chat en ligne avec les autres utilisateurs est disponible.</p>
                <p class="txt2">Dans Quel But ?<br>&nbsp;⭐ Améliorer ses compétences en résolution de problème<br>&nbsp;⭐ Apprendre du code</p>
                <div class="inscription">
                    <a>
                        Utilisateurs inscrits :
                        <?php
                            session_start();
                            require "chat/conn.php";
                            $sql="SELECT COUNT(*) AS total from `users`;";
                            $result = $conn->query($sql);
                            $data =  $result->fetch_assoc();
                            echo '<center>'. $data['total'].'</center>';
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</html>