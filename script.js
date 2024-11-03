
function validateEmail(event) {
    // Selecteer het e-mail invoerveld in het formulier
    const emailInput = document.querySelector('input[name="email"]');
    
    // Haal de waarde van het e-mailveld op
    const email = emailInput.value;

    // Definieer een patroon (reguliere expressie) voor een geldig e-mailadres
    // Het patroon zoekt naar een combinatie van letters, cijfers en bepaalde speciale tekens,
    // gevolgd door een "@" en een domeinnaam met een extensie (zoals .com of .nl)
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    // Controleer of de e-mail voldoet aan het patroon
    if (!emailPattern.test(email)) {
        event.preventDefault(); // Voorkom het indienen van het formulier als het e-mailadres ongeldig is
        alert("Vul een geldig e-mailadres in, zoals example@domain.com."); // Waarschuw de gebruiker
    }
}

