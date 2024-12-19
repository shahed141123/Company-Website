<script>
    // Your existing code to handle image click events
    imgElement.addEventListener("click", function() {
        // Existing toggle logic...

        // Open the offcanvas when the "Edit" icon is clicked
        editIcon.onclick = function(event) {
            event.stopPropagation(); // Prevent triggering the image's click event

            const removeIconsHeader = document.querySelector(".remove_icons");
            const mainColumn = document.getElementById("mainColumn");

            // Toggle visibility of the remove icons header
            if (removeIconsHeader) {
                if (removeIconsHeader.style.display === "none") {
                    // Show the remove icons header
                    removeIconsHeader.style.display = "block";
                    // Change main column class to col-lg-6
                    mainColumn.classList.remove("col-lg-9"); // Remove the col-lg-9 class
                    mainColumn.classList.add("col-lg-6"); // Add the col-lg-6 class
                } else {
                    // Hide the remove icons header
                    removeIconsHeader.style.display = "none";
                    // Revert main column class back to col-lg-9
                    mainColumn.classList.remove("col-lg-6"); // Remove the col-lg-6 class
                    mainColumn.classList.add("col-lg-9"); // Add the col-lg-9 class
                }
            }

            // Show the offcanvas
            const editOffcanvas = new bootstrap.Offcanvas(
                document.getElementById("editOffcanvas")
            );
            editOffcanvas.show();

            // Optionally set existing data in the form fields
            const descriptionField = document.getElementById("imageDescription");
            descriptionField.value =
            "Your logic to get the existing description"; // Replace with actual data
        };
    });
</script>
