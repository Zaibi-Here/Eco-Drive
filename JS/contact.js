function validateForm() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var message = document.getElementById("message").value;

      // Validate name
      if (name.trim() == "") {
        alert("Please enter your name.");
        return false;
      }

      // Validate email
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      // Validate phone number
      var phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phone)) {
        alert("Please enter a 10-digit phone number.");
        return false;
      }

      // Validate message
      if (message.trim() == "") {
        alert("Please enter your message.");
        return false;
      }

      return true; // Form submission allowed
    }
