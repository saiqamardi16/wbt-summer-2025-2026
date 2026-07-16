let form = document.getElementById("myForm");


form.onsubmit = function(event) {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;

    if (name == "") {
        alert("Please enter your name.");
        event.preventDefault();
        return;
    }

  
    if (email == "") {
        alert("Please enter your email.");
        event.preventDefault();
        return;
    }

    
    if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
        alert("Please enter a valid email.");
        event.preventDefault();
        return;
    }

    
    alert("Form submitted successfully!");
};