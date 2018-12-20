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
          <li><a href=".././index.php?action=show_questions">Your Questions</a></li>
          <li><a class="active" href="allQuestions.php">All Questions</a></li>
          <li style="float:right"><a href="../index.php">Log Off</a></li>
        </ul>
        <!-------nav bar end------------->
<hr>
<h1>All User Questions and Answers:</h1>

<body>
<?php

$servername = "sql2.njit.edu";
$username = "km487";
$password = "humidify0";
$dbname = "km487";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
/*------------show questions table------------------*/
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Email</th>
    <th>Title</th>
    <th>Body</th>
    <th>Skills</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["owneremail"]. "</td>
        <td>" . $row["title"]. "</td>
        <td>" . $row["body"]. "</td>
        <td>" . $row["skills"]. "</td>

        </tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}

/************testing here****************/
?>
<!--/*---------------add------------------*/-->
<div class="answer-box">

<?php
$sql = "SELECT * FROM answers";
$result = $conn->query($sql);
 
if(isset($_POST['add_vote'])) {
$add_vote = $_POST['answer_id'];

foreach ($add_vote as $value) {
$voting_add = "UPDATE answers SET score=score+1 WHERE ANSWER_ID=".$value."";
$run_add = mysqli_query($conn, $voting_add);
    }
}

/*---------------subtract------------*/
$sql = "SELECT * FROM answers";
$result = $conn->query($sql);

if(isset($_POST['sub_vote'])) {
$sub_vote = $_POST['answer_id'];

foreach ($sub_vote as $value) {
$voting_sub = "UPDATE answers SET score=score-1 WHERE ANSWER_ID=".$value."";

$run_sub = mysqli_query($conn, $voting_sub);
    }
}
?>
<h1>hello answers</h1>

<?php

$sql = "SELECT * FROM answers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border='1' width='100%'>
<tr>
<th>ID</th>
<th>Answer</th>
<th>Score</th>
<th>UpVote</th>
<th>DownVote</th>
</tr>";

while($row = $result->fetch_assoc()) {

echo "<tr>
<td>" . $row["answer_id"]. " </td>
<td>" . $row["answer_body"]. " </td>
<td>" . $row["answer_score"]. " </td>
<label>
  <td><input type='radio' name='answer_id[]' value='".$row['answer_id']."'>
  <img src='../images/thumbs-up.png' width='7%'></td>
<label>
  <td><input type='radio' name='answer_id[]' value='".$row['answer_id']."'>
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
</div><!--end main QuestionsBox-->
</div>

</body>
</html>

<center>
<?php include 'footer.php'; ?>
</center>