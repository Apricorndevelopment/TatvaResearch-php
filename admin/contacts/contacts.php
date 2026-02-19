<?php include "includes/auth.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>
<?php include "includes/db.php"; ?>

<h1 class="text-xl font-bold mb-4">Contacts</h1>

<table class="w-full bg-white">
<tr class="bg-gray-200">
<th>Name</th><th>Email</th><th>Message</th>
</tr>

<?php
$result=$conn->query("SELECT * FROM contacts");

while($row=$result->fetch_assoc()){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['email']}</td>
<td>{$row['message']}</td>
</tr>";
}
?>
</table>

</div></div></body></html>
