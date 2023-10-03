// Get the inventory table
const inventoryTable = document.getElementById("inventoryTable");

// Get the add item form
const addItemForm = document.getElementById("addItemForm");

// Add item to the inventory
addItemForm.addEventListener("submit", function(event) {
    event.preventDefault();

    // Get the input values
    const itemNameInput = document.getElementById("itemName");
    const itemQuantityInput = document.getElementById("itemQuantity");

    const itemName = itemNameInput.value;
    const itemQuantity = itemQuantityInput.value;

    // Create a new row
    const newRow = inventoryTable.insertRow(-1);

    // Insert cells
    const itemCell = newRow.insertCell(0);
    const quantityCell = newRow.insertCell(1);

    // Set cell values
    itemCell.innerHTML = itemName;
    quantityCell.innerHTML = itemQuantity;

    // Clear the input fields
    itemNameInput.value = "";
    itemQuantityInput.value = "";
});
