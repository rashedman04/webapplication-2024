// Get the form element
let form = document.querySelector(".signUp");

// Add submit event listener to the form
form.addEventListener("submit", function (event) {
  // Get password and confirm password values
  let password = document.querySelector("#password").value;
  var confirmPassword = document.querySelector("#confirmPassword").value;

  // Check if passwords match
  if (password !== confirmPassword) {
    // Prevent form submission
    event.preventDefault();

    // Display an error message or perform any other action
    alert("Passwords do not match. Please re-enter.");
  }
});
