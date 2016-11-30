<?php
   $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "patient";
    $dbport = 3306;

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport);

    // Check connection
    if(mysqli_connect_errno($connect))
    {
		echo 'Failed to connect';
    }
    
    $sql = "SELECT ID, first_name, last_name, age, gender,mobile, aditional_details FROM patients";
    $result = mysqli_query($db, $sql);
 
    echo '
    
    <link href="dir.css" rel="stylesheet">
    
    
    <div class="table-title">
    <h3>Patients Table</h3>
    
    
    <form action="search.php?go" method="post">
     <input type="text" name = "name" placeholder="Enter Patient Name" id="patientAutocomplte" class="ui-autocomplete-input" autocomplete="off" />
     <input  type="submit" name="submit" value="Search">
    </form>
    
    
    <a href="index.html">
    <button>Add Patient</button>
</a>
    </div>
    
    <table class="table-fill">
      <thead>
      <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Mobile</th>
          <th>Message</th>
          
        </tr>
        </thead>';
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
              <td>'.$row["ID"].'</td>
              <td>'.$row["first_name"].'</td>
              <td>'.$row["last_name"].'</td>
              <td>'.$row["age"].'</td>
              <td>'.$row["gender"].'</td>
              <td>'.$row["mobile"].'</td>
              <td>'.$row["aditional_details"].'</td>
              </tr>';
    }
} else {
    echo "0 results";
}
    
    
    
    echo'</table>
    ';
    
    
    
    
    
    
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["firs_tname"]. " " . $row["last_name"]. " ". " - Age: " . $row["age"] ." - Gender: ". $row["gender"] ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($db);

?>