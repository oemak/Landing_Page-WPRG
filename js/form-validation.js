addEventListener("DOMContentLoaded", () => {
    const contactForm = document.querySelector("#contactForm");
  
    contactForm.addEventListener("submit", (event) => {
      if (!contactForm.checkValidity()) {
        event.preventDefault();
  
        contactForm.classList.add("was-validated");
      }
    });
  });