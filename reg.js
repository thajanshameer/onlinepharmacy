window.onload = function() {
    const form = document.getElementById("form");
    const usernameInput = document.getElementById("username");
    const phoneInput = document.getElementById("phone");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("pass");
    const conformPasswordInput = document.getElementById("conform");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        if (validateForm()) {
            form.submit();
        }
    });

    function validateForm() {
        let isValid = true;

        // Validate username
        const usernameregex =/^[A-Za-z]+$/;
        if (!usernameregex.test(usernameInput.value)) {
            showError(usernameInput, "Please enter a valid name.");
            isValid = false;
        } else {
            hideError(usernameInput);
        }

        // Validate phone number
        // if (phoneInput.value.trim() === "") {
        //     showError(phoneInput, "Please enter your phone number.");
        //     isValid = false;
        // } else if (!/^\d{10}$/.test(phoneInput.value.trim())) {
        //     showError(phoneInput, "Please enter a valid 10-digit phone number.");
        //     isValid = false;
        // } else {
        //     hideError(phoneInput);
        // }
        if (phoneInput.value.trim() === "") {
         showError(phoneInput, "Please enter your phone number.");
          isValid = false;
         } else if (!/^[6-9]{1}\d{9}$/.test(phoneInput.value.trim())) {
    showError(phoneInput, "Please enter a valid Indian phone number.");
    isValid = false;
        } else {
        hideError(phoneInput);
}

        function avoidalphabets(event){
            var x = event.which || event.keycode;
            if((x>=48 && x<=57))
            {
                isValid = true;
            }else{
                isValid = false;
            }
        }
        function alphabets(event){
            var x = event.which || event.keycode;
            if((x>=64 && x<=123)){
                return true;
            }else{
                return false;
            }
        } 
        // Validate email
        const validEmailDomains = ["gmail.com", "yahoo.com"]; // Add valid domains
        const emailDomain = emailInput.value.split('@')[1];
        if (!validEmailDomains.includes(emailDomain)) {
            showError(emailInput, "Please use a valid email address.");
            isValid = false;
        }

        // Validate password
        if (passwordInput.value.length < 6) {
            showError(passwordInput, "Password must be at least 6 characters long.");
            isValid = false;
        } else {
            hideError(passwordInput);
        }
        
        // Validate confirm password
        if (conformPasswordInput.value.trim() === "") {
            showError(conformPasswordInput, "Please enter your confirm password.");
            isValid = false;
        } else if (conformPasswordInput.value !== passwordInput.value) {
            showError(conformPasswordInput, "Passwords do not match.");
            isValid = false;
        } else {
            hideError(conformPasswordInput);
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
