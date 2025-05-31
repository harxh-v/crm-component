<?php
require_once '../includes/header.php';
require_once '../includes/db.php';

// Fetch all customers
$stmt = $pdo->query("SELECT * FROM customers ORDER BY created_at DESC");
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Customer List</h2>
<a href="create.php" class="btn btn-primary mb-3">Add New Customer</a>

<?php if (empty($customers)): ?>
    <div class="alert alert-info">No customers found.</div>
<?php else: ?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?php echo htmlspecialchars($customer['id']); ?></td>
                    <td><?php echo htmlspecialchars($customer['name']); ?></td>
                    <td><?php echo htmlspecialchars($customer['email']); ?></td>
                    <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php require_once '../includes/footer.php'; ?>
