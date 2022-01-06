<html>
    <head>
        <title> anime form </title>
    </head>
    <body style="background-color: black; color: yellow;">
        <h4>Your feedback will enable us give more accurate ratings</h4>
        <form action="add_anime.php" method="POST">
            <input type="text" placeholder="anime name: " name="anime_name" style="background-color: black; color: yellow;"><br>
            <input type="text" placeholder="main character: " name="main_character" style="background-color: black; color: yellow;"><br>
            <input type="text" placeholder="main protagonist: " name="main_protagonist" style="background-color: black; color: yellow;"><br>
            <input type="text" placeholder="favorite character: " name="favorite_character" style="background-color: black; color: yellow;"><br>
            <input type="number" min="0" max="10" placeholder="your rating: " name="anime_rating" style="background-color: black; color: yellow;"><br>
            <input type="submit" value="submit">
        </form>

        <?php
           // include("index.php");
            $anime_name= $_POST["anime_name"];
            $main_character= $_POST["main_character"];
            $protagonist= $_POST["main_protagonist"];
            $favorite_character= $_POST["favorite_character"];
            $rating= $_POST["anime_rating"];

        ?>

        <?php
            $conn= mysqli_connect('localhost', 'root', '', 'anime') or die("connection failed:" .mysqli_connect_error());
            $sql= "INSERT INTO `anime` (`anime_name`, `main_character`, `protagonist`, `favorite_character`, `ranking`) VALUES('$anime_name', '$main_character', '$protagonist', '$favorite_character', $rating)"; 
            $query= mysqli_query($conn, $sql);

        ?>
    </body>
</html> 