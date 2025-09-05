function validateForm() {
  let Surname = document.forms["regform"]["Surname"].value;
  let Firstname = document.forms["regform"]["Firstname"].value;
  let mail = document.forms["regform"]["mail"].value;
  if (Surname == "" || Firstname == "" || mail == "") {
    alert("Name(s) must be filled out");
    return false;
  }
}