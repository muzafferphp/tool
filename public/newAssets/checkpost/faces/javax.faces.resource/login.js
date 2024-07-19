function checkit() {
    var element = document.getElementById("txtPassword");
    var element1 = document.getElementById("txtcheckHidden");
    var val = element.value;
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        var randomnumber = element1.value;
        val = hex_md5(md5val + randomnumber);
        element.value = val;
        return true;
    }
}

function checkitSha() {
    var element = document.getElementById("txtPassword");
    var element1 = document.getElementById("txtcheckHidden");
    var element2 = document.getElementById("txtPasswordSha");
    var val = element.value;
    var val2 = element2.value;
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        var sha256val = hex_sha256(val);
        var randomnumber = element1.value;
        val = hex_md5(md5val + randomnumber);
        val2 = hex_sha256(sha256val + randomnumber);
        element.value = val;
        element2.value = val2;
        return true;
    }
}

function passwordEnc(element) {
    var val = element.value;
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        element.value = md5val;
        return true;
    }
}

function passwordEncNew() {
    var element = document.getElementById("newPassword");
    var val = element.value;
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        element.value = md5val;
        return true;
    }
}

function cnf_passwordEnc(element) {
    var val = element.value;
    alert(val);
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        element.value = md5val;
        return true;
    }
}

function checkitForAppLogin() {
    //alert("call CheckIt");
    var element = document.getElementById("apptxtPassword");
    var element1 = document.getElementById("txtcheckHidden");
    var val = element.value;
    if (val === '') {
        return false;
    } else {
        var md5val = hex_md5(val);
        // alert(element.value);
        // alert(element1.value);
        // alert("first Md5"+md5val);
        //    var randomnumber=Math.floor(Math.random()*1000);
        // alert("random no"+element1.value);
        var randomnumber = element1.value;
        val = hex_md5(md5val + randomnumber);
        // alert("double md5"+val);
        element.value = val;
        return true;
    }
}

function resetField() {
    var element = document.getElementById("userId");
    element.value = " ";
    var element1 = document.getElementById("userPassword");
    element1.value = " ";
    return true;
}

function checkitSAVE() {
    var element = document.getElementById("stae_register:txtuserPassword");
    var val = element.value;
    alert(val);
    var md5val = hex_md5(val);
    alert(md5val);
    element.value = md5val;
    return true;
}

function checkitConfirm() {
    var elementConfirm = document.getElementById("tf_CONF_PASS");
    var valConfirm = elementConfirm.value;
    var md5valConfirm = hex_md5(valConfirm);
    elementConfirm.value = md5valConfirm;
    return true;
}

function checkitEdit() {
    var element = document.getElementById("tf_PASS_EDIT");
    var val = element.value;
    var md5val = hex_md5(val);
    element.value = md5val;

    return true;
}

function checkitSAVE1() {
    var element = document.getElementById("tf_PASS_EDIT");
    var val = element.value;
    var md5val = hex_md5(val);
    element.value = md5val;

    var elementConfirm = document.getElementById("tf_CONF_PASS_EDIT");
    var valConfirm = element.value;
    var md5valConfirm = hex_md5(valConfirm);
    elementConfirm.value = md5valConfirm;
    //alert("hello");
    return true;
}

function checkPass() {
    var pass = document.getElementById("tf_USER_PASSWORD").value;
    var conPass = document.getElementById("tf_USER_PASSWORD_CONFIRM").value;
    if (pass == conPass) {
        return true;
    } else {
        document.getElementById("id_show_msg").xhtml = " Password does not match......."
        return false;
    }
}

function passwordStrengthOld(element) {
    var password = element.value
    var flag = true;
    if (flag && password.match(/[a-z]/) == null) {
        element.value = "";
        flag = false;
        alert(password + " :Password should contain atleast One Small Alphabet [ a-z ]...");
    }
    if (flag && password.match(/[A-Z]/) == null) {
        element.value = "";
        flag = false;
        alert(password + " :Password should contain atleast One Capital Alphabet [ A-Z ]...");
    }
    if (flag && password.match(/[0-9]/) == null) {
        element.value = "";
        flag = false;
        alert(password + " :Password should contain atleast One Numeric [ 0-9 ]...");
    }
    if (flag && password.match(/[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) == null) {
        element.value = "";
        flag = false;
        alert(password + " :Password should contain atleast One Special Character [ !,@,#,$,%,^,&,*,?,_,~,-,(,) ]...");
    }
    if (flag) {
        passwordEnc(element)
    }
    return flag;
}

function passwordStrength(element) {
    var password = element.value
    var flag = true;
    if (flag && password != "" && password.match(/[a-z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Small Alphabet [ a-z ]...");
    }
    if (flag && password != "" && password.match(/[A-Z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Capital Alphabet [ A-Z ]...");
    }
    if (flag && password != "" && password.match(/[0-9]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Numeric [ 0-9 ]...");
    }
    if (flag && password != "" && password.match(/[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Special Character [ !,@,#,$,%,^,&,*,?,_,~,-,(,) ]...");
    }
    if (flag) {
        passwordEnc(element)
    }
    return flag;
}

function passwordStrengthSha(element) {
    var password = element.value
    var flag = true;
    if (flag && password != "" && password.match(/[a-z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Small Alphabet [ a-z ]...");
    }
    if (flag && password != "" && password.match(/[A-Z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Capital Alphabet [ A-Z ]...");
    }
    if (flag && password != "" && password.match(/[0-9]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Numeric [ 0-9 ]...");
    }
    if (flag && password != "" && password.match(/[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Special Character [ !,@,#,$,%,^,&,*,?,_,~,-,(,) ]...");
    }
    if (flag) {
        passwordEncSha(element)
    }
    return flag;
}

function passwordStrengthSha256(element, element1) {
    var password = element.value
    var userId = element1.value;
    var n = password.includes(userId);
    var flag = true;
    if (flag && password != "" && password.match(/[a-z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Small Alphabet [ a-z ]...");
    }
    if (flag && password != "" && password.match(/[A-Z]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Capital Alphabet [ A-Z ]...");
    }
    if (flag && password != "" && password.match(/[0-9]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Numeric [ 0-9 ]...");
    }
    if (flag && password != "" && password.match(/[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) == null) {
        element.value = "";
        flag = false;
        alert("Password should contain atleast One Special Character [ !,@,#,$,%,^,&,*,?,_,~,-,(,) ]...");
    }
    if (flag && password != "" && userId != "" && n) {
        element.value = "";
        flag = false;
        alert("Password should not contain userId.");
    }
    if (flag && password != "") {
        var i;
        var j;
        for (i = 0; i < password.length; i++) {
            if (password.charCodeAt(i) === password.charCodeAt(i + 1)) {
                alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1));
                element.value = "";
                flag = false;
            }

            for (j = 65; j < 91; j++) {

                if (password.charCodeAt(i) === j && (password.charCodeAt(i + 1) === (j + 32))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j + 32) && (password.charCodeAt(i + 1) === j)) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j) && (password.charCodeAt(i + 1) === (j + 1)) && (password.charCodeAt(i + 2) === (j + 2))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j) && (password.charCodeAt(i + 1) === (j + 33)) && (password.charCodeAt(i + 2) === (j + 2))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j) && (password.charCodeAt(i + 1) === (j + 1)) && (password.charCodeAt(i + 2) === (j + 34))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j) && (password.charCodeAt(i + 1) === (j + 33)) && (password.charCodeAt(i + 2) === (j + 34))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j + 32) && (password.charCodeAt(i + 1) === (j + 1)) && (password.charCodeAt(i + 2) === (j + 2))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j + 32) && (password.charCodeAt(i + 1) === (j + 33)) && (password.charCodeAt(i + 2) === (j + 2))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j + 32) && (password.charCodeAt(i + 1) === (j + 33)) && (password.charCodeAt(i + 2) === (j + 34))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }
                if (password.charCodeAt(i) === (j + 32) && (password.charCodeAt(i + 1) === (j + 1)) && (password.charCodeAt(i + 2) === (j + 34))) {
                    alert("Password will be not like..." + password.charAt(i) + " " + password.charAt(i + 1) + " " + password.charAt(i + 2));
                    element.value = "";
                    flag = false;
                }

            }
        }
    }
    if (flag) {
        passwordEncSha(element)
    }
    return flag;
}

function passwordEncSha(element) {
    var val = element.value;
    if (val === '') {
        return false;
    } else {
        var shaval = hex_sha256(val);
        element.value = shaval;
        return true;
    }
}