
function validimiLogin() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Ju lutem plotesoni te dhenat");
        return false; 
    }
    return true;
}