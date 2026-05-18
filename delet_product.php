
<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['role'] != 'farmer') {
    header('Location: login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM products WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Product deleted successfully';
        header('Location: view_products.php');
    } else {
        echo 'Failed to delete product';
    }
} else {
    echo 'Invalid product ID';
}
?>
