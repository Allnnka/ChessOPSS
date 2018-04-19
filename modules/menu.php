<ul class="menu">
    <li>
        <a href="index.php">Strona główna</a>
    </li>
    <li>
        <a href="ranking.php">Ranking</a>
    </li>
    <li>
        <a href="game.php">Rozgrywka</a>
    </li>
    <?php
    session_start();
    if(isset($_SESSION['logIn']))
    {
        echo '<li>';
            echo'<a href="logout.php">Wyloguj się</a>';
        echo '</li>';
    }
    else
    {
        echo '<li>';
            echo '<a href="login.php">Logowanie</a>';
        echo '</li>';
    }
    ?>
    <li>
        <a href="register.php">Rejestracja</a>
    </li>
</ul>