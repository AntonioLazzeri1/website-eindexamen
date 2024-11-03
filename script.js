
    
    function validateEmail(event) {
        const emailInput = document.querySelector('input[name="email"]');
        const email = emailInput.value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        
        // Controleer de e-mail met een reguliere expressie
        if (!emailPattern.test(email)) {
            event.preventDefault(); // Stop het formulier indien onjuist
            alert("Vul een geldig e-mailadres in, zoals example@domain.com.");
        }
    }
