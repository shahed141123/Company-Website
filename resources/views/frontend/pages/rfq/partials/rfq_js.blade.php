{{-- For Steper Form And Validation --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function nextStep() {
        // Select all inputs in step 1 that have the 'required' attribute
        const projectStepInputs = document.querySelectorAll(
            '#projectStep input[required], #projectStep textarea[required]');

        // Validate each required input
        let allValid = true;
        projectStepInputs.forEach(input => {
            if (!input.value.trim()) {
                allValid = false;
                input.reportValidity(); // Display error message
            }
        });

        // Only proceed to next step if all fields are valid
        if (allValid) {
            document.getElementById("projectStep").style.display = "none";
            document.getElementById("contactStep").style.display = "block";
        }
    }

    function prevStep() {
        document.getElementById("projectStep").style.display = "block";
        document.getElementById("contactStep").style.display = "none";
    }
</script>

{{-- Repeater Of Add And Delete Product Name & Quantity --}}
<script>
    // Function to add a new row
    function addRow() {
        const repeater = document.getElementById('inputRepeater');

        // Clone the first row as a template
        const newRow = document.querySelector('.input-row').cloneNode(true);

        // Clear the input values in the new row
        newRow.querySelectorAll('input').forEach(input => input.value = '');

        // Append the cloned row to the repeater container
        repeater.appendChild(newRow);
    }

    // Function to delete a row
    function deleteRow(button) {
        const row = button.closest('.input-row');

        // Ensure there's at least one row remaining
        const rows = document.querySelectorAll('.input-row');
        if (rows.length > 1) {
            row.remove();
        } else {
            alert("At least one row is required.");
        }
    }
</script>


{{-- On Check Show --}}
<script>
    function toggleDiv() {
        const checkbox = document.getElementById("delivery");
        const toggleContent = document.getElementById("toggle-content");
        toggleContent.style.display = checkbox.checked ? "block" : "none";
    }

    function toggleDivInfo() {
        const checkbox = document.getElementById("aditional_info");
        const toggleContent = document.getElementById("toggle-content-2");
        toggleContent.style.display = checkbox.checked ? "block" : "none";
    }
</script>


<script>
    $(document).ready(function() {
        $('.select-form-input').select2();
    });
</script>
