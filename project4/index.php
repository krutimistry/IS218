<html>
<head>
<body background="images/geometric-blue-background.jpg">
</head>
<html>
<?php

session_start();

require('model/accounts_db.php');
require('model/database.php');
require('model/questions_db.php');

$action = $_GET['action'];
if ($action === NULL) {
    $action = $_POST['action'];
    if ($action === NULL) {
        $action = 'show_login';
    }
}

if ($action === 'show_login') {
    include('view/loginForm.php');
}
elseif ($action === 'login') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $goodEmail = checkEmail($email);
    $goodPassword = checkPassword($password);
	
    if ($goodEmail[0] && $goodPassword[0]) { 
        $userExists = getUser($email, $password);
        if ($userExists === TRUE) {
            $_SESSION['email'] = $email;
            header("Location: index.php?action=show_questions");
        }
        elseif ($userExists === FALSE){
            $error = "<p>Login error: Incorrect email or password.</p>";
            include 'errors/error.php';
        }
        
        elseif ($userExists == 'doesNotExist') {
            $error = "<p style='color: red; text-align: center'>
            Invalid username or password. Try Again or Register!</p>";
            header( "Location: index.php?action=show_login");
            include 'errors/error.php';
        }
            
    }
    else { 
        include 'errors/error.php';
    }
}
elseif ($action === 'show_registration') {
    include 'view/registrationForm.php';

}
elseif ($action === 'register') {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $goodFirst = checkFirstName($firstName);
    $goodLast = checkLastName($lastName);
    $goodBirthday = checkBirthday($birthday);
    $goodEmail = checkEmail($email);
    $goodPassword = checkPassword($password);

    if ($goodFirst[0] && $goodLast[0] && $goodBirthday[0] && $goodEmail[0] && $goodPassword[0]) {
        createUser($firstName, $lastName, $birthday, $email, $password);

        $_SESSION['email'] = $email;
        header("Location: index.php?action=show_questions");
    }
    else {
        include 'errors/error.php';
    }
}
elseif ($action === 'show_questions') {
    $email = $_SESSION['email'];

    $account = getName($email);
    $questions = getQuestions($email);

    include 'view/userPage.php';
}


elseif ($action === 'show_new_question') {
    include 'view/questionForm.php';

}

elseif ($action === 'show_questions') {
    $email = $_SESSION['email'];

    $account = getName($email);
    $questions = getQuestions($email);

    include 'view/allQuestions.php';
}

elseif ($action === 'create_new_question') {
    $email = $_SESSION['email'];

    $questionName = $_POST['questionName'];
    $questionBody = $_POST['questionBody'];
    $questionSkills = $_POST['questionSkills'];
    
    $goodName = checkQuestionName($questionName);
    $goodBody = checkQuestionBody($questionBody);
    $goodSkills = checkQuestionSkills($questionSkills);

    if ($goodName[0] && $goodBody[0] && $goodSkills[0]) {
        createQuestion($email, $questionName, $questionBody, $questionSkills);

        $_SESSION['email'] = $email;
        header("Location: index.php?action=show_questions");
    }
    else {
        include 'errors/error.php';
    }
}

elseif ($action === 'show_new_answer') {
    include 'view/answerForm.php';
}

elseif ($action === 'show_answer') {
    $email = $_SESSION['email'];

    $account = getName($email);
    $answer = getAnswer($email);

    include 'view/allQuestions.php';
}

elseif ($action === 'create_new_answer') {
    $email = $_SESSION['email'];

    $answerName = $_POST['answerName'];
    $answerBody = $_POST['answerBody'];
    $answerSkills = $_POST['answerSkills'];
    
    $goodName = checkQuestionName($questionName);
    $goodBody = checkQuestionBody($questionBody);
    $goodSkills = checkQuestionSkills($questionSkills);

    if ($goodName[0] && $goodBody[0] && $goodSkills[0]) {
        createAnswer($email, $answerName, $answerBody, $answerSkills);

        $_SESSION['email'] = $email;
        header("Location: index.php?action=show_questions");
    }
    else {
        include 'errors/error.php';
    }
}

elseif ($action === 'show_edit_question') {
    $questionId = $_POST['questionId'];

    $question = getQuestion($questionId);

    include 'view/editForm.php';
}
elseif ($action === 'edit_question') {
    $title = $_POST['questionName'];
    $body = $_POST['questionBody'];
    $skills = $_POST['questionSkills'];
    $questionId = $_POST['questionId'];

    $goodName = checkQuestionName($title);
    $goodBody = checkQuestionBody($body);
    $goodSkills = checkQuestionSkills($skills);


    if ($goodName[0] && $goodBody[0] && $goodSkills[0]) {
        editQuestion($questionId, $title, $body, $skills);

        header("Location: index.php?action=show_questions");
    }
    else {
        include 'errors/error.php';
    }
}
elseif ($action === 'delete_question') {
    $questionId = $_POST['questionId'];
    deleteQuestion($questionId);
    header("Location: index.php?action=show_questions");
}
/*--------checking functions--------------*/
function checkEmail($data) {
    $detectError = array();
    $validEmail = TRUE;
    array_push($detectError, $validEmail);
    if (empty($data)) {
        array_push($detectError, "<p>Email error: Email not entered.</p><br>");
        $detectError[0] = FALSE;
    }
    if (strpos($data, '@') === FALSE) {
        if (strlen($data) == 0) {
            array_push($detectError, "<p>Email error: Need to use '@' in your email address.</p><br>");
            $detectError[0] = FALSE;
        }
    }
    return $detectError;
}
function checkPassword ($data) {
    $detectError = array();
    $validPassword = TRUE;
    array_push($detectError, $validPassword);
    if (empty($data)) {
        array_push($detectError, "<p>Password error: Password not entered.</span></p><br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkFirstName($data) {
    $detectError = array();
    $validFirst = TRUE;
    array_push($detectError, $validFirst);

    if (empty($data)) {
        array_push($detectError, "<p>First name error: enter your first name.</p><br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkLastName($data) {
    $detectError = array();
    $validLast = TRUE;
    array_push($detectError, $validLast);

    if (empty($data)) {
        array_push($detectError, "<p>Last name error: enter your last name.</p><br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkBirthday($data) {
    $detectError = array();
    $validBirthday = TRUE;
    array_push($detectError, $validBirthday);

    if (empty($data)) {
        array_push($detectError, "<p>Birthday error: enter your birthday.</p><br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkQuestionName ($data) {
    $detectError = array();
    $validQuestionName = TRUE;
    array_push($detectError, $validQuestionName);

    if (empty($data)) {
        array_push($detectError, "<p>Question name error: enter a question subject name.</p><br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkQuestionBody ($data) {
    $detectError = array();
    $validQuestionBody = TRUE;
    array_push($detectError, $validQuestionBody);

    if (empty($data)) {
        array_push($detectError, "<p>Question body error: enter a question body.<br>");
        $detectError[0] = FALSE;
    }
    return $detectError;
}

function checkQuestionSkills($data) {
    $detectError = array();
    $validSkills = TRUE;
    array_push($detectError, $validSkills);
    
    return $detectError;
}

?>
