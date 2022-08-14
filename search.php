<?php include_once "dbfour.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> search form webpage </title>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<h1> Search box form & table </h1>

    <div class="container">
    <form action='' method="post">
        <div class="row mt-5">
            <div class="col-md-6">
               <input type="text" name="inputname" placeholder="search..." class="form-control">
            </div>
            <div class="col-md-4">
               <!-- <input type="submit"> -->
               <button class="btn btn-success btn-md" type="submit" name="searchname">Search</button>
             </div>
        </div>
        </form>

        <div class="row mt-5"> 
            <table class="table table-bordered table-hover">
                <tr>
                   <th>id</th>
                   <th>name</th>
                   <th>age</th>
                   <th>salary</th>
                   <th>jobrole</th>

            </tr>

            <?php

if (isset($_POST["searchname"])){
    $search = $_POST["inputname"];

//$sql= "SELECT * FROM fourinput WHERE name like '$search'";
// "%search%" is used to search so that whenever you type a word, it will print all names with the alphabeth
$sql= "SELECT * FROM fourinput WHERE name like '%$search%' || age like '%$search%' ";
$query = mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($query)){
    $id = $row ['id'];
    $name = $row ['name'];
    $age = $row ['age'];
    $salary = $row ['salary'];
    $jobrole = $row ['jobrole'];

    echo "<tr>
                <td> $id</td>
                <td> $name</td>
                <td> $age</td>
                <td> $salary</td> 
                <td> $jobrole</td>
               
               
                
         </tr>";

}
}
?>

        </table>
        </div>
    </div>

</body>
</html>