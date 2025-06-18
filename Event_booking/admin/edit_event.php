<?php
include("connect.php");
include("nav.php"); // Sidebar

// Fetch all events
$query = "SELECT * FROM events ORDER BY id DESC";
$result = mysqli_query($con, $query);
?>

<div class="content">
    <h2>All Events</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>City</th>
                <th>Date</th>
                <th>Seats</th>
                <th>Price</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['city']; ?></td>
                <td><?= $row['event_date']; ?></td>
                <td><?= $row['available_seats'] . "/" . $row['total_seats']; ?></td>
                <td>₹<?= $row['price']; ?></td>
                <td><?= ucfirst($row['status']); ?></td>
                <td>
                    <?php if (!empty($row['image'])): ?>
                        <img src="<?= $row['image']; ?>" width="80" height="60">
                    <?php else: ?>
                        N/A
                    <?php endif; ?>
                </td>
                <td>
                    <a href="edit_event.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
