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
    All fields required.
	<form action="submitarticleprocess.php" method="post">
        <p align="left"><label><b>Bibography reference: </b>
            <input type="text" name="bib_ref" maxlength="150" size="150"</label></p>
        <p align="left"><label><b>Title: </b>
            <input type="text" name="title" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Author(s): </b>
            <input type="text" name="author" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Venue: </b>
            <input type="text" name="venue" maxlength="20" size="20"</label></p>
        <p align="left"><label><b>Year: </b>
            <input type="text" name="year" maxlength="4" size="4"</label></p>
        <p align="left"><label><b>Question: </b>
            <input type="text" name="question" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Method(s): </b>
            <input type="text" name="method" maxlength="40" size="40"</label></p>
        <p align="left"><label><b>Practice: </b>
            <input type="text" name="practice" maxlength="40" size="40"</label></p>
        <p align="left"><label><b>Participant(s): </b>
            <input type="text" name="participants" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Creditability rating: </b>
            <br>&nbsp;&nbsp;
            <input type="radio" name="creditability" value="Low">Low
            <input type="radio" name="creditability" value="Medium">Medium
            <input type="radio" name="creditability" value="High">High</label></p>
        <p><input type="submit" value="Post">
            <input type="reset" value="Reset"></p>
	</form>
    <p><a href="index.php">Return to Home Page</a></p>
</body>
</html>
