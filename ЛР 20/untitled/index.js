

function formValidate() {

    let firstname = document.getElementById("firstname");
    let lastname = document.getElementById("lastname");
    let email = document.getElementById("email")
    let password = document.getElementById("password");
    let passwordRep = document.getElementById("passwordRep");
    let country = document.getElementById("country");
    let news = document.getElementById("news");

    let fnVal = firstname.value.toString();
    let lnVal = lastname.value.toString();
    let eVal = email.value.toString();
    let pVal = password.value.toString();
    let pRepVal = passwordRep.value.toString();
    let cVal = country.value.toString();
    let nVal = news.checked.toString();

    let emailCheck = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

    let cookieMas = ["firstname", "lastname", "email", "password", "passwordRep", "country", "news"];

    document.cookie = "firstname=" + fnVal;
    document.cookie = "lastname=" + lnVal;
    document.cookie = "email=" + eVal;
    document.cookie = "password=" + pVal;
    document.cookie = "passwordRep=" + pRepVal;
    document.cookie = "country=" + cVal;
    document.cookie = "news=" + nVal;

    let inf = {
        firstname: fnVal,
        lastname: lnVal,
        email: eVal,
        password: pVal,
        passwordRep: pRepVal,
        country: cVal,
        news: nVal,
    }


        var mas = [ firstname, lastname, email, password, passwordRep, country];

        if (firstname.value == null && fnVal.length <= 0){
            if (!firstname.classList.contains("invalid"))
                firstname.classList.add("invalid");
        } else {
            if (firstname.classList.contains("invalid"))
                firstname.classList.remove("invalid");
        }
        if (lastname.value == null) {
            if (!lastname.classList.contains("invalid"))
                lastname.classList.add("invalid");
        } else {
            if (lastname.classList.contains("invalid"))
                lastname.classList.remove("invalid");
        }
        if (email.value == null || !emailCheck.test(email.value)) {
            if (!email.classList.contains("invalid"))
                email.classList.add("invalid");
        } else {
            if (email.classList.contains("invalid"))
                email.classList.remove("invalid");
        }
        if (password == null && passwordRep == null && password.value != passwordRep.value) {
            if (!password.classList.contains("invalid") && passwordRep.classList.contains("invalid")) {
                password.classList.add("invalid");
                passwordRep.classList.add("invalid");
            }
        } else {
            if (password.classList.contains("invalid") && passwordRep.classList.contains("invalid")) {
                password.classList.remove("invalid");
                passwordRep.classList.remove("invalid");
            }
        }

        let count = 0;

        for (var i = 0; i < mas.length; i++) {
            if (mas[i].classList.contains("invalid")){
                count ++;
            }
        }

        if (count == 0){
            alert(document.cookie);

            /*var cookies = document.cookie.split(/;/);
            for (var i = 0, len = cookies.length; i < len; i++) {
                var cookie = cookies[i].split(/=/);
                document.cookie = cookie[0] + "=;max-age=-1";
            }*/

            /*deleteCookie("firstname");
            deleteCookie("lastname");
            deleteCookie("email");
            deleteCookie("password");
            deleteCookie("passwordRep");
            deleteCookie("country");
            deleteCookie("news");*/


            event.preventDefault();

            let json = JSON.stringify(inf);

            console.log(json);
        } else {
            alert("Допущена ошибка при заполнении формы!");
        }

    event.preventDefault();
}

function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

function deleteCookie(name) {
    setCookie(name, "", {
        'max-age': -1
    })
}