<?php require_once "dbfour.php" ?>
<?php
if (isset($_POST["submitname"])){
    $name = $_POST ["namename"];
    $age = $_POST ["agename"];
    $salary = $_POST["salaryname"];
    $job = $_POST["jobname"];
    //echo "my name is $name, age is $age, salary is $salary, and job is $job ";

    $sql = "INSERT INTO fourinput (name, age, salary, jobrole) VALUES ('$name','$age','$salary','$job')";
    mysqli_query($connect,$sql);
    header("location:fourinput.php");
    
}
?>