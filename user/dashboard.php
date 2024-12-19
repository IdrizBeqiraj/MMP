<?php 
// include the files that we need to create this dashboard

include '../header/php';
include '../db.php';

if(!isset($_SESSION['user id']) || $_SESSION['role'] != 'user'){
    header('Location: ../login.php'); //Redirect to login if the user is not authorized
    exit;
}

// Fetch user-specificts from bookings

$user_id = $_SESSION['user_id'];
$sql = "SELECT b.id, m.title, b.show_time, b.status
        FROM bookings b
        INNER JOIN movies m ON b.movie_id = m.id
        WHERE b.user_id = $user_id";
$result = $conn->query($sql);
?>

<div class=" container mt-5">
    <h1 class="text-center">user Dashboard</h1>

    <h2 class="table tables-borded mt-3">My Bookings</h2>
</div>

<table class="table">

<thead>
<tr>
    <th>#</th>
    <th>Movie</th>
    <th>Data</th>
    <th>Time</th>
    <th>Status</th>
</tr>


</thead>

</tr>

</tbody>

</table>