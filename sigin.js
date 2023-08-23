window.onload = function() {
    const form = document.getElementById("form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        if (validateForm()) {
            form.submit();
        }
    });

    function validateForm() {
        let isValid = true;

        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        } else {
            hideError(emailInput);
        }

        // Validate password strength
        const password = passwordInput.value;
        const hasUppercase = /[A-Z]/.test(password);
        const hasLowercase = /[a-z]/.test(password);
        const hasNumber = /\d/.test(password);
        const hasSpecialChar = /[!@#$%^&*]/.test(password);

        if (!(hasUppercase && hasLowercase && hasNumber && hasSpecialChar && password.length >= 6)) {
            showError(passwordInput, "Password must be at least 6 characters.");
            isValid = false;
        } else {
            hideError(passwordInput);
        }

        

        

        return isValid;
    }

    function showError(inputElement, errorMessage) {
        const errorDiv = inputElement.nextElementSibling;
        inputElement.classList.add("error-input");
        errorDiv.textContent = errorMessage;
    }

    function hideError(inputElement) {
        const errorDiv = inputElement.nextElementSibling;
        inputElement.classList.remove("error-input");
        errorDiv.textContent = "";
    }
};
