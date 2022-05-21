function _(e) {
  return document.getElementById(e);
}

function openList(navid) {
    navList = document.getElementById(navid);
  
    navList.classList.toggle("d-none")
    
  }
  
  function toggleproductVariant(variantid) {
    pvariantId = document.getElementById(variantid);
    pvariantId.classList.toggle("d-none")
  }

  var tooltipBtn = document.querySelectorAll(".addproducttooltip");
  if(tooltipBtn) {
    for(i=0; i < tooltipBtn.length; i++) {
      var tooltipSh = tooltipBtn[i];
      tooltipSh.addEventListener("mouseenter", function() {
        this.previousElementSibling.classList.remove("d-none");
      })
      tooltipSh.addEventListener("mouseout", function() {
        this.previousElementSibling.classList.add("d-none");
      })
    }
  }

  function selectproductCategory(e) {
  selectTag = document.getElementById(e);
    selectedTagactualId = selectTag.getAttribute("id");
    
    if(selectedTagactualId === 'productcategory') {
        if(selectTag.value === 'Drug') {
            druginfoDiv = document.getElementById("showdruginfo");
            drugsubCat = document.getElementById("drugsubcat");
            productusageinfo = document.getElementById("pusageinfo");
            creamsubCat = document.getElementById("creamsubcat");
            supplementsubCat = document.getElementById("supplementsubcat");
            medicaldevicesubCat = document.getElementById("medicaldevicesubcat");

            druginfoDiv.classList.remove("d-none");
            drugsubCat.classList.remove("d-none");
            creamsubCat.classList.add("d-none");
            supplementsubCat.classList.add("d-none");
            productusageinfo.classList.remove("d-block");
            productusageinfo.classList.add("d-none");
            medicaldevicesubCat.classList.add("d-none");
        }
        
        else if(selectTag.value === 'Cream') {
            druginfoDiv = document.getElementById("showdruginfo");
            drugsubCat = document.getElementById("drugsubcat");
            productusageinfo = document.getElementById("pusageinfo");
            creamsubCat = document.getElementById("creamsubcat");
            supplementsubCat = document.getElementById("supplementsubcat");
            medicaldevicesubCat = document.getElementById("medicaldevicesubcat");

            druginfoDiv.classList.add("d-none");
            drugsubCat.classList.add("d-none");
            creamsubCat.classList.remove("d-none");
            supplementsubCat.classList.add("d-none");
            medicaldevicesubCat.classList.add("d-none");
            productusageinfo.classList.add("d-block");
            productusageinfo.classList.remove("d-none");
        }
        
        else if(selectTag.value === 'Supplements') {
            druginfoDiv = document.getElementById("showdruginfo");
            drugsubCat = document.getElementById("drugsubcat");
            productusageinfo = document.getElementById("pusageinfo");
            creamsubCat = document.getElementById("creamsubcat");
            supplementsubCat = document.getElementById("supplementsubcat");
            medicaldevicesubCat = document.getElementById("medicaldevicesubcat");

            druginfoDiv.classList.add("d-none");
            drugsubCat.classList.add("d-none");
            creamsubCat.classList.add("d-none");
            supplementsubCat.classList.remove("d-none");
            medicaldevicesubCat.classList.add("d-none");
            productusageinfo.classList.add("d-block");
            productusageinfo.classList.remove("d-none");
        }
        else if(selectTag.value === 'Medical-devices') {
            druginfoDiv = document.getElementById("showdruginfo");
            drugsubCat = document.getElementById("drugsubcat");
            productusageinfo = document.getElementById("pusageinfo");
            creamsubCat = document.getElementById("creamsubcat");
            supplementsubCat = document.getElementById("supplementsubcat");
            medicaldevicesubCat = document.getElementById("medicaldevicesubcat");

            druginfoDiv.classList.add("d-none");
            drugsubCat.classList.add("d-none");
            creamsubCat.classList.add("d-none");
            supplementsubCat.classList.add("d-none");
            medicaldevicesubCat.classList.remove("d-none");
            productusageinfo.classList.add("d-block");
            productusageinfo.classList.remove("d-none");
        }
      }

    }


    function addProduct() {
      _("addproduct").onsubmit = function(event) {
          event.preventDefault();
      }
  
      var status = document.getElementById("errAlert");
      var sto = document.querySelector("input[type='radio'][name='storedisplayoption']:checked").value;
      var pn = _("productname").value;
      var sn = _("storename").value;
      var bn = _("brandname").value;
      var pc = _("productcategory").value;
      var dsc = _("drugsubcategory").value;
      var csc = _("creamsubcategory").value;
      var ssc = _("supplementsubcategory").value;
      var mdsc = _("medicaldevicesubcategory").value;
      var dd = _("drugdosage").value;
      var dae = _("drugadverseeffects").value;
      var dci = _("drugcontraindications").value;
      var du = _("drugusageinfo").value;
      var aq = _("availablequantity").value;
      var pw = _("productweight").value;
      var spd = _("shortproductdescription").value;
      var fpd = _("fullproductdescription").value;
      var pui = _("productusageinfo").value;
      var d = _("discount").value;
      // var v1 = _("variant1").value;
      // var v2 = _("variant2").value;
      // var v3 = _("variant3").value;
      // var v4 = _("variant4").value;
      // var v5 = _("variant5").value;
      // var v6 = _("variant6").value;
      // var v7 = _("variant7").value;
      var ss = _("stockstatus").value;
      console.log(spd)
      console.log(ss)
      console.log(pn)
      
      if(sto != "" && pn != "" &&  pc != "" && aq != "" && spd != "" && fpd !="") {
         console.log(fpd)
          var hr = new XMLHttpRequest();
          hr.open("POST","addproduct.php",true);
          hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
          hr.onreadystatechange = function () {
              if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                  status.style.color = 'red';
                  status.style.fontSize = "14"+"px";
                  status.innerHTML = hr.response;
                  console.log(hr.response)
                  }
          }
          hr.send("storename="+sn+"&productname="+pn+"&brandname="+bn+"&productcategory="+pc+"&drugsubcategory="+dsc+"&creamsubcategory="+csc+"&supplementsubcategory="+ssc
          +"&medicaldevicesubcategory="+mdsc+"&drugdosage="+dd+"&drugadverseeffects="+dae+"&drugcontraindications="+dci+"&drugusage="+du+"&availablequantity="+aq
          +"&productweight="+pw+"&shortproductdescription="+spd+"&fullproductdescription="+fpd+"&productusageinfo="+pui+"&discount="+d+"&stockstatus="+ss+"&storedisplayoption="+sdc);
  
      }   
  
  };


    function uploadfiles(e) {
      _("addproduct").onsubmit = function(event) {
        event.preventDefault();
    }

      var customtarget = document.getElementById(e);
      var actualid = customtarget.getAttribute("id");
      
      customtarget.click();
      var file = customtarget.files;
      
      customtarget.addEventListener("change",function() {
          if(actualid === "property_images_upload") {
              if(file.length === 1) {
                  var file1 = document.getElementById("property_images_upload").files[0];
                  var formdata1 = new FormData();

                      formdata1.append("property_images_upload", file1);

                  var ajax = new XMLHttpRequest();
                  ajax.upload.addEventListener("progress", progressHandler, false);
                  ajax.addEventListener("load", completeHandler, false);
                  ajax.addEventListener("error", errorHandler, false);
                  ajax.addEventListener("abort", abortHandler, false);
                  ajax.open("POST","addproduct.php",true);
                  ajax.send(formdata1);
              }
          }
      },false)
      return false;
  }


  function progressHandler(event) {
      document.getElementById("status1").innerHTML = "Uploaded"+Math.round(event.loaded/1000)+"KB of"+Math.round(event.total/1000)+"KB";
      var percent = (event.loaded / event.total) * 100;
  }

  function completeHandler(event) {
      document.getElementById("status1").innerHTML = event.target.responseText; 
      
  }
  function errorHandler(event) {

  }
  function abortHandler(event) {
      
  }


