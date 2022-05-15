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

    var email,state,city,zipcode,premiselicense,cacnumber,locationaddress,storecategory,storename,storephonenumber;
    if(parentDivId === 'pharmacy-submit') {
        document.getElementById("pharmstoreform").onsubmit = function(event) {
            event.preventDefault();
        }
        email = _("pharmacystoreemail").value;
        premiselicense = _("pharmacystorepremiselicense").value;
        cacnumber = _("pharmacystorecacregno").value;
        locationaddress = _("pharmacystoreaddress").value;
        city = _("pharmacystorecity").value;
        storename = _("pharmacystorename").value;
        storephonenumber = _("pharmacystorephonenumber").value;
        state = _("pharmacystorestate").value;
        zipcode = _("pharmacystorecityzipcode").value;
        storecategory = 'Pharmacy',
        prevDiv = _("pharmplan-storeonboardmodal");
        prevDivId = _("pharmplan-storeonboardmodal").getAttribute("id");
    }else if(parentDivId === 'medlab-submit') {
        document.getElementById("medlabstoreform").onsubmit = function(event) {
            event.preventDefault();
        }
        email = _("medlabstoreemail").value;
        premiselicense = _("medlabstorepremiselicense").value;
        cacnumber = _("medlabstorecacregno").value;
        locationaddress = _("medlabstoreaddress").value;
        city = _("medlabstorecity").value;
        storename = _("medlabstorename").value;
        storephonenumber = _("medlabstorephonenumber").value;
        state = _("medlabstorestate").value;
        storecategory = 'MedLab';
        zipcode = _("medlabstorecityzipcode").value;
        prevDiv = _("medlab-onboardlocation");
        prevDivId = _("medlab-onboardlocation").getAttribute("id");
    }

    if(email &&  locationaddress && cacnumber) {
        var hr = new XMLHttpRequest();
        hr.open("POST","onboardlocations.php",true);
        hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                console.log(hr.response)
                closeModal(prevDivId);
                openModal(parentDivId);
                }
        }
        hr.send("email="+email+"&premiselicense="+premiselicense+"&cacnumber="+cacnumber+"&storeaddress="+locationaddress+"&storecity="+city+"&storestate="+state+"&zipcode="+zipcode+"&storecategory="+storecategory+"&storename="+storename+"&storephonenumber="+storephonenumber);
    }
    
}


// function form_submit() {
//     document.getElementById("search_form").submit();
//     alert()
//    }    

// var nextBtn = document.querySelectorAll(".nextBtn");
// if(nextBtn) {
//     console.log(nextBtn)
//     for(i=0; i <= nextBtn.length; i++) {
//         nextBtn[i].addEventListener("click",function(e) {
//             e.preventDefault()
//             alert()
//             console.log(nextBtn)
//         })
//     }
// }
// var btn = document.querySelectorAll(".nextBtn");
//     if(btn) {
//         console.log(btn)
//         for(var i = 0; i <= btn.length; i++) {
//             var sT = btn[i];
//             sT.onlcick = function() {
//                 alert()
//             }
//             // console.log(sT)
//         }
//     }

//     alert()
//     function onboardProfessionals(modalid) {
//         alert()
//     document.getElementById("pharmacistonboardform").onsubmit = function(event) {
//         event.preventDefault();
//     }
//     alert('immmmmmmmm')
// }

function onboardProfessionals(modalIdd) {
    var parentDiv = document.getElementById(modalIdd)
    var parentDivId = document.getElementById(modalIdd).getAttribute("id");

    var email,username,firstname,lastname,practicinglicense,password,confirmpassword,profession,fulladdress,state,city,zipcode;
    if(parentDivId === 'pharmplan-storeonboardmodal') {
        document.getElementById("pharmacistonboardform").onsubmit = function(event) {
            event.preventDefault();
        }
        email = _("pharmacistemail").value;
        practicinglicense = _("pharmacistlicensenumber").value;
        firstname = _("pharmacistfirstname").value;
        lastname = _("pharmacistlastname").value;
        username = _("pharmacistfirstname").value;
        password = _("pharmacistpassword").value;
        fulladdress = _("pharmacistfulladdress").value;
        city = _("pharmacistcity").value;
        state = _("pharmaciststate").value;
        zipcode = _("pharmacistzipcode").value;
        confirmpassword = _("pharmacistconfirmpassword").value;
        prevDiv = _("pharmacist-onboard-modal");
        prevDivId = _("pharmacist-onboard-modal").getAttribute("id");
        profession = 'Pharmacy';
    }else if(parentDivId === 'doctors-submit') {
        document.getElementById("doctorsonboardform").onsubmit = function(event) {
            event.preventDefault();
        }
        email = _("doctoremail").value;
        practicinglicense = _("doctorlicensenumber").value;
        firstname = _("doctorfirstname").value;
        lastname = _("doctorlastname").value;
        username = _("doctorusername").value;
        password = _("doctorpassword").value;
        fulladdress = _("medlabfulladdress").value;
        city = _("doctorcity").value;
        state = _("doctorstate").value;
        zipcode = _("doctorzipcode").value;
        confirmpassword = _("doctorconfirmpassword").value;
        profession = 'Doctor';
        prevDiv = _("doctors-onboard-modal");
        prevDivId = _("doctors-onboard-modal").getAttribute("id");
    }

    else if(parentDivId === 'medlab-onboardlocation') {
        document.getElementById("medlabonboardform").onsubmit = function(event) {
            event.preventDefault();
        }
        email = _("medlabemail").value;
        practicinglicense = _("medlablicensenumber").value;
        firstname = _("medlabfirstname").value;
        lastname = _("medlablastname").value;
        username = _("medlabusername").value;
        password = _("medlabpassword").value;
        fulladdress = _("medlabfulladdress").value;
        city = _("medlabcity").value;
        state = _("medlabstate").value;
        zipcode = _("medlabzipcode").value;
        confirmpassword = _("medlabconfirmpassword").value;
        profession = 'Medlab';
        prevDiv = _("medlab-onboardlocation");
        prevDivId = _("medlab-onboard-modal").getAttribute("id");
    }

    // console.log(email)
    //     console.log(practicinglicense)
    //     console.log(username)
        
        if(email &&  practicinglicense && username) {

        var hr = new XMLHttpRequest();
        hr.open("POST","registerhealthprofessionals.php",true);
        hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                // parentDiv.classList.add('visible');
                closeModal(prevDivId);
                openModal(parentDivId);
                }
        }
        hr.send("email="+email+"&practicinglicense="+practicinglicense+"&firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&confirmpassword="+confirmpassword+"&profession="+profession+"&state="+state+"&city="+city+"&zipcode="+zipcode+"&fulladdress="+fulladdress);
    }
    
}


function subscribeUsers(modalIdd) {
    document.getElementById("usersubform").onsubmit = function(event) {
        event.preventDefault();
    }
    var parentDiv = document.getElementById(modalIdd)
    var parentDivId = document.getElementById(modalIdd).getAttribute("id");

    console.log(parentDiv)
    console.log(parentDivId)
    var email,username,firstname,lastname,password,confirmpassword,usercategory,fulladdress;
    
        
    email = _("useremail").value;
    lastname = _("lastname").value;
    username = _("username").value;
    firstname = _("firstname").value;
    password = _("userpassword").value;
    state = _("state").value;
    city = _("city").value;
    zipcode = _("zipcode").value;
    fulladdress = _("userfulladdress").value;
    confirmpassword = _("userconfirmpassword").value;
    prevDiv = _("user-subscription");
    prevDivId = _("user-subscription").getAttribute("id");
    usercategory = 'User';
    
    if(email &&  fulladdress && username) {
    
    var hr = new XMLHttpRequest();
    hr.open("POST","usersubscription.php",true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
            // parentDiv.classList.add('visible');
            prevDiv.classList.remove('visible');
            console.log(hr.response)
            closeModal(prevDivId);
            openModal(parentDivId);
            }
        }
        hr.send("email="+email+"&firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&confirmpassword="+confirmpassword+"&usercategory="+usercategory+"&state="+state+"&city="+city+"&zipcode="+zipcode+"&fulladdress="+fulladdress);
    }
    
}




function chronicpatientsSubscription(modalIdd) {
    document.getElementById("chronicpatientsubform").onsubmit = function(event) {
        event.preventDefault();
    }
    var parentDiv = document.getElementById(modalIdd)
    var parentDivId = document.getElementById(modalIdd).getAttribute("id");

    console.log(parentDiv)
    console.log(parentDivId)
    var email,username,firstname,lastname,password,confirmpassword,usercategory,fulladdress;
    
        
    email = _("cpemail").value;
    lastname = _("cplastname").value;
    username = _("cpusername").value;
    firstname = _("cpfirstname").value;
    password = _("cppassword").value;
    state = _("cpstate").value;
    city = _("cpcity").value;
    zipcode = _("cpzipcode").value;
    fulladdress = _("cpfulladdress").value;
    confirmpassword = _("cpconfirmpassword").value;
    prevDiv = _("chronicpatient-subscription");
    prevDivId = _("chronicpatient-subscription").getAttribute("id");
    usercategory = 'Chronicpatient';
    
    if(email &&  fulladdress && username) {
    
    var hr = new XMLHttpRequest();
    hr.open("POST","chronicpatientsubscription.php",true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
            // parentDiv.classList.add('visible');
            prevDiv.classList.remove('visible');
            console.log(hr.response)
            closeModal(prevDivId);
            openModal(parentDivId);
            }
        }
        hr.send("email="+email+"&firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&confirmpassword="+confirmpassword+"&usercategory="+usercategory+"&state="+state+"&city="+city+"&zipcode="+zipcode+"&fulladdress="+fulladdress);
    }
    
}

function registerUsers() {
    document.getElementById("usersubform").onsubmit = function(event) {
        event.preventDefault();
    }

    var email,username,firstname,lastname,password,confirmpassword,usercategory,fulladdress;

        
    email = document.getElementById("useremail").value;
    lastname = document.getElementById("lastname").value;
    username = document.getElementById("username").value;
    firstname = document.getElementById("firstname").value;
    password = document.getElementById("userpassword").value;
    state = document.getElementById("state").value;
    city = document.getElementById("city").value;
    zipcode = document.getElementById("zipcode").value;
    fulladdress = document.getElementById("userfulladdress").value;
    confirmpassword = document.getElementById("userconfirmpassword").value;
    usercategory = 'User';

    if(email &&  fulladdress && username) {

    var hr = new XMLHttpRequest();
    hr.open("POST","../subscription-plan/usersubscription.php",true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
            // parentDiv.classList.add('visible');
            console.log(hr.response)
            //     // if(hr.response === "success") {
            //         window.location.href = "verify-email.php?emailcode=234322";
            //     // }
            }
        }
        hr.send("email="+email+"&firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&confirmpassword="+confirmpassword+"&usercategory="+usercategory+"&state="+state+"&city="+city+"&zipcode="+zipcode+"&fulladdress="+fulladdress);
    }

    }

    function usernameCheck() {
        var log = true;
        var email = document.getElementById("useremail").value;
        if(email) {
            var hr = new XMLHttpRequest();
            hr.open("POST","checklogin.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    error.style.display = 'block';
                    closeAlert.style.display = 'block';
                    error.innerHTML = hr.responseText;
              
                }
            }
            hr.send("email="+email+"&log="+log);
        }else {
            error.style.display = 'block';
            error.innerHTML = 'enter your email';
            return false;
        }

    }

    function showPassword() {
        var ddd = document.getElementById("passworded");
        var hideP = document.getElementById("hideP");

        if(ddd.getAttribute('type') == 'password') {
            ddd.setAttribute("type",'varchar');
            hideP.innerHTML = "<i class='fa fa-eye'></i>";
        }else {
            ddd.setAttribute("type",'password');
            hideP.innerHTML = "<i class='fa fa-eye-slash'></i>";
        }
      
      }



function closeModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.add('hidden')
}