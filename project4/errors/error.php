<?php include 'view/header.php'; ?>

<div class="box">
<h1>Errors</h1>
<p><?php echo $error; ?></p>

<!----Email Error---->
<p>
<?php 
if (count($goodEmail) > 1) {
  foreach($goodEmail as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
} 
?>
</p>

<!----Password Error----->
<p>
<?php 
if (count($goodPassword) > 1) {
  foreach($goodPassword as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
} 
?>
</p>
<!----Check FirstName/Lastname Error----->
<p>
<?php if (count($goodFirst) > 1) {
  foreach($goodFirst as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
} 
?>
</p>                         
<p>
<?php 
if (count($goodLast) > 1) {
  foreach($goodLast as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
}
?>
</p>           
<!----Check Birthday Error----->
<p>
<?php 
if (count($goodBirthday) > 1) {
  foreach($goodBirthday as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
}
?>

</p>              
<!----Check Question Name Error----->                
<p>
<?php 
if (count($goodName) > 1) {
  foreach($goodName as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
}
?>
</p>
<!----Check Question Body Error----->                
<p>
<?php 
if (count($goodBody) > 1) {
  foreach($goodBody as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
}
?>
</p>               
<!----Check Questions Skills Error----->                
<p>
<?php 
if (count($goodSkills) > 1) {
  foreach($goodSkills as $message) {
    if ($message !== 'TRUE' && $message !== 'FALSE') 
    {
    echo $message;
    }
  }
}
?>
</p>
                           
<p class='errorMessage'>Please Try Again.</p>
<form action="index.php" method="post">
  <input type="submit" class="register-submit" value="Back to Login Page">
</form>
</div>
            
</div>
<center>
<?php include 'view/footer.php'; ?>
</center>
