<?php
include "../includes/db.php";


$result = $conn->query("SELECT * FROM contacts ORDER BY id DESC");
?>
<?php include '../includes/header.php'?>

<!DOCTYPE html>
<html>
<head>
<title>Contact List</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-100">

<div class="flex-1">

    <!-- Sidebar -->
    <?php include "../includes/sidebar.php"; ?>

    <!-- Main -->
    <div class="flex-1 p-8">

        <h1 class="text-3xl font-bold mb-6">Contact Messages</h1>

        <div class="bg-white shadow rounded-lg overflow-hidden ">

            <table class="w-full ">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Message</th>
                        <th class="p-3 text-left">Date</th>
                    </tr>
                </thead>

                <tbody>

                <?php while($row=$result->fetch_assoc()): ?>

                    <tr class="border-t">
                        <td class="p-3"><?php echo $row['name']; ?></td>
                        <td class="p-3"><?php echo $row['email']; ?></td>
                        <td class="p-3"><?php echo $row['message']; ?></td>
                        <td class="p-3"><?php echo $row['created_at']; ?></td>
                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
