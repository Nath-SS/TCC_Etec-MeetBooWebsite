var btnSignIn = document.querySelector("#signIn");
var btnSignUp = document.querySelector("#signUp");

var body = document.querySelector("body");

btnSignIn.addEventListener("click", function(){
    body.className = "sign-in-js";
})

btnSignUp.addEventListener("click", function(){
    body.className = "sign-up-js";
})