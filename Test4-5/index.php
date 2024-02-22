<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test4-5</title>
</head>
<body class="px-20 py-12 bg-slate-900">
    <?php
        $con = new mysqli("localhost", "root", "", "appintouch");

        $sql1 = "SELECT * FROM `customer` WHERE Used > 500000";
        $result1 = mysqli_query($con, $sql1);

        $sql2 = "SELECT o.id AS OrderID, Date, CustomerID, Name, Email, CountryCode, Budget, Used FROM `order` AS o INNER JOIN customer AS c ON o.CustomerID = c.ID";
        $result2 = mysqli_query($con, $sql2);
    ?>

    
    <p class="text-center text-8xl font-semibold text-white">4</p>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CountryCode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Budget
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Used
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result1 as $row) { ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            <?php echo $row['ID']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Name']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Email']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['CountryCode']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Budget']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Used']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>

    <p class="text-center text-8xl font-semibold text-white">5</p>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        OrderID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CustomerID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CountryCode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Budget
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Used
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result2 as $row) { ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            <?php echo $row['OrderID']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Date']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['CustomerID']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Name']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Email']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['CountryCode']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Budget']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Used']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>