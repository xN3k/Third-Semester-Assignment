<?php
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_catalog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
$search_type = $_POST['search_type'];
$search_keyword = $_POST['search_keyword'];

// Query the database based on the selected search type
$sql = "SELECT * FROM books WHERE ";

if ($search_type === "title") {
    $sql .= "title LIKE '%$search_keyword%'";
} elseif ($search_type === "author") {
    $sql .= "author LIKE '%$search_keyword%'";
} elseif ($search_type === "year") {
    $sql .= "publication_year = $search_keyword";
}

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publication Year</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['publication_year'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No results found.</td></tr>";
        }
        ?>
    </table>
    <a href="index.html">Back to Search</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
