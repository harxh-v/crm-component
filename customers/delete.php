<?php
require_once '../includes/db.php';

// Check if ID is provided
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

// Delete customer
try {
    $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
    $stmt->execute([$id]);
    
    header("Location: index.php?deleted=1");
    exit();
} catch (PDOException $e) {
    die("Error deleting customer: " . $e->getMessage());
}
?>
