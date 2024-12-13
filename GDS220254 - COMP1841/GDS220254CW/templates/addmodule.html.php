<form action="" method="post" onsubmit="return validateForm()">
    <label for="text">Type your module here:</label>
    <div style="display: flex; align-items: center;">
        <textarea id="text" name="text" rows="3" cols="40"></textarea>
        <p id="error-message" style="color: red; margin-left: 10px; display: none;">
            Field is empty.
        </p>
    </div>
    <input type="submit" name="submit" value="Add Module">
</form>

<script>
    function validateForm() {
        const textArea = document.getElementById("text");
        const errorMessage = document.getElementById("error-message");

        if (textArea.value.trim() === "") {
            errorMessage.style.display = "block";
            return false; // Prevent form submission
        }

        errorMessage.style.display = "none"; // Hide error if not empty
        return true; // Allow form submission
    }
</script>
