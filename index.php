<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include 'header.php'; ?>
<section>    
    <div class="container my-md-3 my-2">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
        <p class="d-none">Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p class="d-none">Role: <?php echo htmlspecialchars($_SESSION['role']); ?></p>
    </div>
<div class="container 100-vh">
<?php
include 'DbConnection.php';
//Fetch data from the table
?>
</div>
</section>
<?php include 'footer.php'; ?>
