<!DOCTYPE html>
<html>
<head>
  <title>Questions</title>
  <body background="../images/geometric-blue-background.jpg">
  <link rel="stylesheet" href="../main.css">
</head>

<div class="question-box">
        <!---nav bar here----->
        <ul>
          <li><a href=".././index.php?action=show_questions">My Questions</a></li>
          <li><a class="active" href="allQuestions.php">All Questions</a></li>
          <li style="float:right"><a href="../index.php">Log Off</a></li>
        </ul>
        <!---nav bar end----->
<hr>
<h1>All User Questions:</h1><p>Refresh if votes do not update automatically</p>
<form action='index.php' method='post'>
  <input type="hidden" name="action" value="create_new_answer">
  <input type='submit' class='submit' value='New answer'><br>
</form>
<body>
<?php

$servername = "sql2.njit.edu";
$username = "km487";
$password = "password";
$dbname = "km487";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
/*---------------add------------------*/
$sql = "SELECT * FROM questions ORDER BY score ASC";
$result = $conn->query($sql);
 
if(isset($_POST['add_vote'])) {
$add_vote = $_POST['id'];

foreach ($add_vote as $value) {
$voting_add = "UPDATE questions SET score=score+1 WHERE ID=".$value."";
$run_add = mysqli_query($conn, $voting_add);
    }
}

/*---------------subtract------------*/
$sql = "SELECT * FROM questions ORDER BY score ASC";
$result = $conn->query($sql);

if(isset($_POST['sub_vote'])) {
$sub_vote = $_POST['id'];

foreach ($sub_vote as $value) {
$voting_sub = "UPDATE questions SET score=score-1 WHERE ID=".$value."";

$run_sub = mysqli_query($conn, $voting_sub);
    }
}

?>

 
<div class="allQuestionBox">
<form method="post" id="form1" action="">
<font size="2" face = "century gothic">
<?php

if ($result->num_rows > 0) {
echo "<table border='1' width='100%'>
<tr>
<th>ID</th>
<th>Email</th>
<th>Title</th>
<th>Body</th>
<th>Skills</th>
<th>Answers</th>
<th>Score</th>
<th>UpVote</th>
<th>DownVote</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>

<td>" . $row["id"]. "</td>
<td>" . $row["owneremail"]. "</td>
<td>" . $row["title"]. " 
<td>" . $row["body"]. "</td>
<td>" . $row["skills"]. " </td>
<td>" . $row["answers"]. " </td>
<td>" . $row["score"]. " </td>
<label>
  <td><input type='radio' name='id[]' value='".$row['id']."'>
  <img src='../images/thumbs-up.png' width='7%'></td>
<label>
  <td><input type='radio' name='id[]' value='".$row['id']."'>
  <img src='../images/thumbs-down.png' width='7%'></td>
</label>
</tr>";

}
    echo "<tr>
    <td><input type='submit' name='add_vote' value='UPVOTE' onClick='window.location.reload()'</td>
    <td><input type='submit' name='sub_vote' value='DOWNVOTE' onClick='window.location.reload()'</td>
    </tr>";
echo "</table>";

} else {

echo "0 results";

}

$conn->close();

?>

</form>
</div>
</div>
</div>
</body>
</html>

<center>
<?php include 'footer.php'; ?>
</center>
