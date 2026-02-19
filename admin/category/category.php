<?php include "../includes/db.php"; ?>
<?php include "../includes/header.php"; ?>

<div class="flex-1 p-8 min-h-screen bg-gray-100 w-full">

    <!-- Sidebar -->
    <?php include "../includes/sidebar.php"; ?>

    <!-- Main Content -->
    <div class="flex-1 p-10">

        <!-- Page Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">📚Category Management</h1>

            <a href="add.php"
                class="bg-gradient-to-r from-green-500 to-emerald-600 
                       hover:from-green-600 hover:to-emerald-700 
                       text-white px-6 py-3 rounded-xl shadow-lg 
                       transition duration-300">
                + Add New Category
            </a>
        </div>

             <!-- Category Table Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

            <div class="p-6 border-b">
                <h2 class="text-lg font-semibold text-gray-700">
                    All Categories
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">

                    <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
                        <tr>
                            <th class="px-6 py-4">name</th>
                            <th class="px-6 py-4">Parent Category</th>
                            <th class="px-6 py-4 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700">

                        <?php
                        $result = $conn->query("SELECT * FROM category ORDER BY id DESC");

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='border-t hover:bg-gray-50 transition'>";
                            
                            echo "<td class='px-6 py-4 font-medium'>
                                    {$row['name']}
                                  </td>";

                            echo "<td class='px-6 py-4 text-gray-500'>
                                    {$row['created_at']}
                                  </td>";

                            echo "<td class='px-6 py-4 text-center space-x-3'>
                                    <a href='edit_category.php?id={$row['id']}' 
                                       class='text-blue-600 hover:text-blue-800 font-medium'>
                                       Edit
                                    </a>
                                    <a href='delete_category.php?id={$row['id']}' 
                                       class='text-red-600 hover:text-red-800 font-medium'>
                                       Delete
                                    </a>
                                  </td>";

                            echo "</tr>";
                        }
                        ?>
                        <?php


?>


                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>