<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Submit new article - Article Searcher</title>
</head>
<body>
	<h1>Article Searcher</h1>
    <h2>Submit new article</h2>
	<p><?php
        echo "<p>Hello1.</p>";
        $bib_ref = ($_POST["bib_ref"]);
        $title = ($_POST["title"]);
        $author = ($_POST["author"]);
        $venue = ($_POST["venue"]);
        $year = ($_POST["year"]);
        $question = ($_POST["question"]);
        $method = ($_POST["method"]);
        $practice = ($_POST["practice"]);
        $participants = ($_POST["participants"]);
        echo "<p>Hello2.</p>";
        //$code_check = substr(bib_ref, 0);
        //if ((strlen($status_code) != 5) || ($code_check == "S")) {
        //    echo "<p>Status must have 5 characters including an \"S\" at the beginning.</p>
        //        <p><a href=\"javascript:history.back(1);\">Try again</a>";
        //}
        if (!empty($_POST["creditability"])) {
            $creditability = ($_POST["creditability"]);
        }
        else if (empty($_POST["creditability"])) {
            echo "<p>All fields must be entered.</p>
                <p><a href=\"javascript:history.back(1);\">Try again</a>";
        }
        if (($bib_ref == null) || ($title == null) || ($author == null) || ($venue == null) ||
                ($year == null) || ($question == null) || ($method == null) ||
            ($practice == null) || ($participants == null)) {
            echo "<p>All fields must be entered.</p>
                <p><a href=\"javascript:history.back(1);\">Try again</a>";
        }
        //else if (!preg_match("/^[a-zA-Z0-9 ,.!?]*$/", $status)) {
        //    echo "<p>The status input only accepts the following characters:<br>a-zA-Z0-9 ,.!?</p>
        //        <p><a href=\"javascript:history.back(1);\">Try again</a>";
        //}
        else if (strlen($year) < 4) {
            echo "<p>Year must be entered properly as a four-numbered year.</p>
                <p><a href=\"javascript:history.back(1);\">Try again</a>";
        }
        else {
            $dbConnect = @mysqli_connect("localhost", "root", "", "zbv9522")
                or die("<p>Unable to connect to the database server.</p>".
                       "<p>Error code ". mysqli_connect_errno(). ": ".
                       mysqli_connect_error(). "</p>".
                       "<p><a href=\"javascript:history.back(1);\">Try Again</a><br>
                            <a href=\"index.php\">Return to Home Page</a></p>
                        <hr>
                        <div class = footer>
                            Site created by Karl Smith (1390533).<br>
                            <b>Email:</b> <a href=\"mailto:zbv9522@aut.ac.nz\">zbv9522@aut.ac.nz</a>
                        </div>");
            $create_query = "CREATE TABLE IF NOT EXISTS article_database (
                bib_ref VARCHAR(150) NOT NULL PRIMARY KEY,
                title VARCHAR(100) NOT NULL,
                author VARCHAR(100) NOT NULL,
                venue VARCHAR(20) NOT NULL,
                year VARCHAR(4) NOT NULL,
                question VARCHAR(100) NOT NULL,
                method VARCHAR(40) NOT NULL,
                practice VARCHAR(40) NOT NULL,
                participants VARCHAR(100) NOT NULL,
                creditability VARCHAR(6) NOT NULL);";
            $insert_query = "INSERT INTO article_database (bib_ref, title, author, venue, year,
                question, method, practice, participants, creditability)
                VALUES('$bib_ref', '$title', '$author', '$venue', '$year', '$question', '$method',
                '$practice', '$participants', '$creditability');";
            //$check_query = "SELECT * FROM article_database;";
            //WHERE status_code = '$status_code';";
            if (!mysqli_query($dbConnect, $create_query)) {
                echo "<p>Error creating table: ", mysql_error($dbConnect), "</p>";
            }
            //$check_results = mysqli_query($dbConnect, $check_query) or die(mysql_error());
            //if (mysqli_num_rows($check_results) > 0) {
            //    echo "<p>Status code already exists.</p>
            //        <p><a href=\"javascript:history.back(1);\">Try Again</a><br>
            //        <a href=\"index.php\">Return to Home Page</a></p>
            //        <hr>
            //        <div class = footer>
            //            Site created by Karl Smith (1390533).<br>
            //            <b>Email:</b> <a href=\"mailto:zbv9522@aut.ac.nz\">zbv9522@aut.ac.nz</a>
            //        </div>";
            //    die();
            //}
            if (mysqli_query($dbConnect, $insert_query)) {
                echo "<p>Status posted.<br>";
            }
            else {
                echo "<p>Error posting status: ", mysql_error($dbConnect), "<p>";
            }
            mysqli_close($dbConnect);
        }
	?>
    <br><a href="index.php">Return to Home Page</a></p>
</body>
</html>
