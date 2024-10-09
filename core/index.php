<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
<?php 

// Selecting all students from the table
// $stmt = $pdo ->prepare("SELECT* FROM Students");

// if ($stmt -> execute()){
    // echo "<pre>";
   // print_r($stmt -> fetchAll());
    // echo "</pre>";
// }

// Selecting only the info of user with an id of 2
// $stmt = $pdo ->prepare("SELECT* FROM students WHERE StudentID = 2");

// if ($stmt -> execute()){
   // echo "<pre>";
   // print_r($stmt -> fetch());
   // echo "</pre>";
//}

// Inserting a new  user to the table
// $query = "INSERT INTO Students (StudentID , FirstName , LastName) values(?,?,?)";

// $stmt = $pdo -> prepare($query);

// $executeQuery = $stmt -> execute(
       // ["2","Owjey","Ramos"]
//);

// if ($executeQuery) {
   // echo "Query successful!";
//}
// else {
   // echo "Query failed";
// }

// Deleting a user from the database

// $squery = "DELETE FROM Students WHERE id = 1";

// $stmt = $pdo -> prepare($query);

// $executeQuery = $stmt -> execute();

// if ($executeQuery) {
   // echo "Deletion successful!";
//}
// else {
   // echo "Deletion failed";
//}

// Updating a user from the database

// $query = "UPDATE Students SET FirstName = ?, LastName = ? WHERE StudentID = 4";

// $stmt = $pdo -> prepare($query);

// $executeQuery = $stmt-> execute(
  //  ["Oliver", "James"]
// );

//if ($executeQuery) {
  //  echo "Update successful!";
// }
// else {
   // echo "Update failed";
//}

?>

    <table>
    <tr>
            <th>StudentID</th>
            <th>FirstName</th>
            <th>LastName</th>
    </tr>

    <?php foreach ($Students as $row) { ?>
    <tr>
        <td><?php echo $row['StudentID']; ?></td>
        <td><?php echo $row['FirstName']; ?></td>
        <td><?php echo $row['LastName']; ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
