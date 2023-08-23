document.addEventListener("DOMContentLoaded", function () {
    const prescriptionUploadForm = document.getElementById("prescriptionUploadForm");
    const prescriptionFileInput = document.getElementById("prescriptionFile");
    const verificationStatusDiv = document.getElementById("verificationStatus");

    prescriptionUploadForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        const prescriptionFile = prescriptionFileInput.files[0];
        if (!prescriptionFile) {
            showVerificationStatus("Please select a file.", "red");
            return;
        }

        try {
            const verificationResult = await verifyPrescription(prescriptionFile);

            if (verificationResult.verified) {
                showVerificationStatus("Prescription verified and uploaded!", "green");
            } else {
                showVerificationStatus("Prescription not verified. Please follow the instructions for further verification.", "red");
            }
        } catch (error) {
            console.error("An error occurred:", error);
            showVerificationStatus("An error occurred during prescription upload and verification.", "red");
        }
    });

    async function verifyPrescription(prescriptionFile) {
        const formData = new FormData();
        formData.append("prescription", prescriptionFile);

        const response = await fetch("/verify-prescription", {
            method: "POST",
            body: formData
        });

        if (!response.ok) {
            throw new Error("Prescription verification request failed");
        }

        return response.json();
    }

    function showVerificationStatus(message, color) {
        verificationStatusDiv.textContent = message;
        verificationStatusDiv.style.color = color;
    }
});
