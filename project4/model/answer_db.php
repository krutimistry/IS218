<?php
function getAnswer($email) {
    global $db;

    $query = "SELECT answer FROM questions WHERE owneremail = :email";
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $questions = $statement->fetchAll();
    $statement->closeCursor();

    return $questions;
}

function createAnswer($email) {
    global $db;

    // Insert new question
    $query = "INSERT INTO questions (answer) VALUES (:answer)";
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $statement->closeCursor();
}

function getAnswer($questionId) {
    global $db;

    $query = "SELECT answer FROM questions WHERE id = :questionId";
    $statement = $db->prepare($query);
    $statement->bindValue(":questionId", $questionId);
    $statement->execute();
    $question = $statement->fetch();
    $statement->closeCursor();

    return $question;
}
?>