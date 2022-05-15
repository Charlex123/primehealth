function _(e) {
    return document.getElementById(e);
}

function openModal(modalId) {
    modalid = document.getElementById(modalId)
    modalid.classList.remove('hidden')
}

function onboardLocations(modalId) {
    var parentDiv = document.getElementById(modalId)
    var parentDivId = document.getElementById(modalId).getAttribute("id");

    var email,state,city,zipcode,premiselicense,cacnumber,locationaddress;
    if(parentDivId === 'pharmplan-modal') {
        email = _("pharmacystoreemail").value;
        premiselicense = _("pharmacystorepremiselicense").value;
        cacnumber = _("pharmacystorecacregno").value;
        locationaddress = _("pharmacystoreaddress").value;
        city = _("pharmacystorecity").value;
        state = _("pharmacystorestate").value;
        zipcode = _("pharmacystorecityzipcode").value;
    }else if(parentDivId === 'pharmplan-modal') {
        email = _("pharmacystoreemail").value;
        premiselicense = _("pharmacystorepremiselicense").value;
        cacnumber = _("pharmacystorecacregno").value;
        locationaddress = _("pharmacystoreaddress").value;
        city = _("pharmacystorecity").value;
        state = _("pharmacystorestate").value;

        zipcode = _("pharmacystorecityzipcode").value;
    }
    else if(parentDivId === 'pharmplan-modal') {
        email = _("pharmacystoreemail").value;
        premiselicense = _("pharmacystorepremiselicense").value;
        cacnumber = _("pharmacystorecacregno").value;
        locationaddress = _("pharmacystoreaddress").value;
        city = _("pharmacystorecity").value;
        state = _("pharmacystorestate").value;
        zipcode = _("pharmacystorecityzipcode").value;
    }

    if($email &&  locationaddress && cacnumber) {
        var hr = new XMLHttpRequest();
        hr.open("POST","onboardlocations.php",true);
        hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                status4.style.color = 'blue';
                status4.style.fontSize = "14"+"px";
                status4.innerHTML = hr.response;
                }
        }
        hr.send("email="+email+"&premiselicense="+premiselicense+"&cacnumber="+cacnumber+"&locationaddress="+locationaddress+"&city="+city+"&state="+state+"&zipcode="+zipcode);
    }
    
}


function form_submit() {
    document.getElementById("search_form").submit();
    alert()
   }    

var nextBtn = document.querySelectorAll(".nextBtn");
if(nextBtn) {
    console.log(nextBtn)
    for(i=0; i <= nextBtn.length; i++) {
        nextBtn[i].addEventListener("click",function(e) {
            e.preventDefault()
            alert()
            console.log(nextBtn)
        })
    }
}
function onboardProfessionals(modalid) {
    document.getElementById("pharmacistonboardform").onsubmit = function(event) {
        event.preventDefault();
    }
    alert()
    var parentDiv = document.getElementById(modalIdd)
    var parentDivId = document.getElementById(modalIdd).getAttribute("id");

    // var email,username,firstname,lastname,practicinglicense,password,confirmpassword;
    // if(parentDivId === 'pharmplan-storeonboardmodal') {
    //     email = _("pharmacistemail").value;
    //     practicinglicense = _("pharmacistpremiselicense").value;
    //     firstname = _("firstname").value;
    //     lastname = _("lastname").value;
    //     username = _("username").value;
    //     password = _("password").value;
    //     confirmpassword = _("confirmpassword").value;
    // }else if(parentDivId === 'doctor-onboard-modal') {
    //     email = _("pharmacistemail").value;
    //     practicinglicense = _("pharmacistpremiselicense").value;
    //     firstname = _("firstname").value;
    //     lastname = _("lastname").value;
    //     username = _("username").value;
    //     password = _("password").value;
    //     confirmpassword = _("confirmpassword").value;
    // }
    // else if(parentDivId === 'medlad-onboard-modal') {
    //     email = _("pharmacistemail").value;
    //     practicinglicense = _("pharmacistpremiselicense").value;
    //     firstname = _("firstname").value;
    //     lastname = _("lastname").value;
    //     username = _("username").value;
    //     password = _("password").value;
    //     confirmpassword = _("confirmpassword").value;
    // }

    // console.log(email)
    //     console.log(practicinglicense)
    //     console.log(username)
        
    //     if($email &&  practicinglicense && username) {

    //     console.log(email)
    //     console.log(practicinglicense)
    //     console.log(username)
    //     var hr = new XMLHttpRequest();
    //     hr.open("POST","registerhealthprofessionals.php",true);
    //     hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //     hr.onreadystatechange = function () {
    //         if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
    //             status4.style.color = 'blue';
    //             status4.style.fontSize = "14"+"px";
    //             status4.innerHTML = hr.response;
    //             parentDiv.classList.add('hidden')
    //             }
    //     }
    //     hr.send("email="+email+"&premiselicense="+premiselicense+"&cacnumber="+cacnumber+"&locationaddress="+locationaddress+"&city="+city+"&state="+state+"&zipcode="+zipcode);
    // }
    
}

function closeModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.add('hidden')
}