<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/inventory.css">
    <link rel="shortcut icon" href="/images/Harina.jpg" type="image/x-icon">
    <title>Inventory</title>
</head>
<body>
    <h1>Inventory System</h1>

    <div id="inventory">
        <h2>Inventory List</h2>
        <table id="inventoryTable">
            <tr>
                <th>Item</th>
                <th>Quantity</th>
            </tr>
        </table>
    </div>

    <div id="addForm">
        <h2>Add Item</h2>
        <form id="addItemForm">
            <input type="text" id="itemName" placeholder="Item name" required>
            <input type="number" id="itemQuantity" placeholder="Quantity" required>
            <button type="submit">Add</button>
        </form>
    </div>

    <script src="/js/inventory.js"></script>
</body>
</html>