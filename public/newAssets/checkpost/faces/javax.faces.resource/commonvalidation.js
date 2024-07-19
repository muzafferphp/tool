function makeCaps(data) {
    var val = data.value;
    data.value = val.toUpperCase();

}

function checkAlphabate(str, obj) {
    var re = /^[a-zA-Z ]*$/;
    if (str != "") {
        if (!re.test(str)) {
            alert("please enter char only");
            document.getElementById(obj).value = "";
            return false;
        }
    } else {
        alert("Please Enter Name !!!")
        return false;
    }
    return true;

}


function isNumeric(str, obj) {
    if (str != "") {
        var regexp1 = new RegExp("[^0-9]");
        if (regexp1.test(str)) {
            alert("Only numbers are allowed");
            document.getElementById(obj).value = "";
            return false;
        }
    }
}

function isNumericMobile(str, obj) {
    if (str != "") {
        var regexp1 = new RegExp("[^0-9]");
        if (regexp1.test(str) || (str.length != 10)) {
            alert("Please Enter your 10 digit mobile number.");
            document.getElementById(obj).value = "";
            return false;
        }
    } else {
        alert("Please Enter your 10 digit mobile number.");
        return false;
    }
    return ture;
}

function isNumericPincode(str, obj) {
    if (str != "") {
        var regexp1 = new RegExp("[^0-9]");
        if (regexp1.test(str) || (str.length != 6)) {
            alert("Please enter pincode of 6 digit.");

            document.getElementById(obj).value = "";
            return false;
        }
    } else {
        alert("Please Enter PinCode of 6 digit");
        return false;
    }
    return true;
}

function checkAlphaNumeric(str, obj) {
    var re = /^[0-9a-zA-Z]+$/;
    if (!re.test(str)) {
        alert("Please enter alphanumeric only");
        document.getElementById(obj).value = "";
        // document.getElementById(obj).focus();
    }
}

function isEmailValid(str, obj) {
    if (str !== "") {
        var re = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if (!re.test(str)) {
            alert("Please enter Vaild Email Address.");
            document.getElementById(obj).value = "";
        }
    } else {
        //alert("Please Enter Email Id");
        return false;
    }
    return true;
}

function onlyCharNoSpace(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    //alert(charCode)
    if ((charCode > 31 & charCode < 65) | (charCode > 90 & charCode < 97) | (charCode > 122 & charCode < 127)) {
        status = "This field accepts charecters only."
        return false
    }
    status = ""
    return true
}

//for only Numeric
function NumericOnly(e, blnDecimal) {
    // alert("call Numberic only");
    var key;
    var keychar;
    var strCheckString;

    strCheckString = "0123456789";

    if (blnDecimal)
        strCheckString = strCheckString + ".";

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();

    // control keys
    if ((key == null) || (key == 0) || (key == 8) ||
        (key == 9) || (key == 13) || (key == 27))
        return true;

    // numbers only
    else if ((strCheckString.toString().indexOf(keychar) > -1))
        return true;
    else
        return false;
}


//for NoSpecialCharacter
function NoSpecialCharacter(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    //alert(charCode)
    if ((charCode >= 32 & charCode < 48) | charCode == 64 | charCode == 94 | charCode == 95 | charCode == 61 | charCode == 126 | charCode == 96) {
        status = "This field accepts No Special Character."
        return false
    }
    status = ""
    return true
}

function onlyAlphNumericAllowed(evt) {
    evt = (evt) ? evt : (window.event);
    var charCode = (evt.which) ? evt.which : (evt.keyCode);


    if ((charCode >= 32 & charCode <= 47) | (charCode >= 58 & charCode <= 64) | (charCode >= 91 & charCode <= 96) | (charCode >= 123 & charCode <= 126)) {

        staturs = "Only Alpha numeric values are allowed";
        alert(staturs);
        return false;
    }
    staturs = ""
    return true;


}

function AlphaWithSpaceOnly(e, strExtraChar) {
    var key;
    var keychar;
    var strCheckString;

    strCheckString = "abcdefghijklmnopqrstuvwxyzb " + strExtraChar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();

    // control keys
    if ((key == null) || (key == 0) || (key == 8) ||
        (key == 9) || (key == 13) || (key == 27))
        return true;

    // alphas and numbers
    else if ((strCheckString.toString().indexOf(keychar) > -1))
        return true;
    else
        return false;
}

function AlphaOnly(e, strExtraChar) {
    var key;
    var keychar;
    var strCheckString;

    strCheckString = "abcdefghijklmnopqrstuvwxyz" + strExtraChar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();

    // control keys
    if ((key === null) || (key === 0) || (key === 8) ||
        (key === 9) || (key === 13) || (key === 27))
        return true;

    // alphas and numbers
    else if ((strCheckString.toString().indexOf(keychar) > -1))
        return true;
    else
        return false;
}

function disableCopyPaste(ev) {
    var kCode = ev.keyCode || ev.button;
    if (kCode == 17 || kCode == 2) {
        //alert("Cntrl key/ Right Click Option disabled");
        //alert(ev.clipboardData.getData("html/text"));
        e.clipboardData.setData('text/plain', '');
        //window.clipboardData.setData("Text", "s");
        //var element = document.getElementById("txtLogin");
        //element.value = "";
        return true;
    }
}