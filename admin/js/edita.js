function removeHttp(url) {
  return url.replace(/^https?:\/\//, "");
}
function editmodaltop(id) {
  // console.log("test");
  // console.log(id);

  // var filename = document.getElementById("filename-" + id).innerText;
  var name = document.getElementById("nameatop-" + id).innerText;
  var location = document.getElementById("locationatop-" + id).innerText;
  var locationurl = document.getElementById("locationurlatop-" + id).innerText;
  var content = document.getElementById("contentatop-" + id).innerText;
  var imagename = document.getElementById("filenameatop-" + id).innerText;
  var hours = document.getElementById("hoursatop-" + id).innerText;
  var phone = document.getElementById("phoneatop-" + id).innerText;
  var order = document.getElementById("orderatop-" + id).innerText;

  // console.log(filename);
  // console.log(name);
  // console.log(order);
  var formname = document.getElementById("nameatop");
  var formlocation = document.getElementById("locationatop");
  var formlocationurl = document.getElementById("locationurlatop");
  var formcontent = document.getElementById("contentatop");
  var formorder = document.getElementById("orderatop");
  var formid = document.getElementById("atopid");
  var formimage = document.getElementById("imagenameatop");
  var formhours = document.getElementById("hoursatop");
  var formphone = document.getElementById("phoneatop");
  formid.value = id;
  formlocation.value = location;
  formimage.value = imagename;  
  formlocationurl.value = locationurl;
  formcontent.value = content;
  formorder.value = order;
  formhours.value = hours;
  formphone.value = phone;
  formname.value = name;
  $("#edittopmodal").modal("show");
}


function editmodalah(id) {
  // console.log("test");
  // console.log(id);

  // var filename = document.getElementById("filename-" + id).innerText;
  var name = document.getElementById("nameah-" + id).innerText;
  var location = document.getElementById("locationah-" + id).innerText;
  var locationurl = document.getElementById("locationurlah-" + id).innerText;
  var content = document.getElementById("contentah-" + id).innerText;
  var imagename = document.getElementById("filenameah-" + id).innerText;
  var hours = document.getElementById("hoursah-" + id).innerText;
  var phone = document.getElementById("phoneah-" + id).innerText;
  var order = document.getElementById("orderah-" + id).innerText;

  // console.log(filename);
  // console.log(name);
  // console.log(order);
  var formname = document.getElementById("nameah");
  var formlocation = document.getElementById("locationah");
  var formlocationurl = document.getElementById("locationurlah");
  var formcontent = document.getElementById("contentah");
  var formorder = document.getElementById("orderah");
  var formid = document.getElementById("ahid");
  var formimage = document.getElementById("imagenameah");
  var formhours = document.getElementById("hoursah");
  var formphone = document.getElementById("phoneah");

  formid.value = id;
  formlocation.value = location;
  formimage.value = imagename;
  formlocationurl.value = locationurl;
  formcontent.value = content;
  formhours.value = hours;
  formphone.value = phone;
  formorder.value = order;
  formname.value = name;
  $("#editahmodal").modal("show");
}


function editmodalabh(id) {
  // console.log("test");
  // console.log(id);

  // var filename = document.getElementById("filename-" + id).innerText;
  var name = document.getElementById("nameabh-" + id).innerText;
  var location = document.getElementById("locationabh-" + id).innerText;
  var locationurl = document.getElementById("locationurlabh-" + id).innerText;
  var content = document.getElementById("contentabh-" + id).innerText;
  var imagename = document.getElementById("filenameabh-" + id).innerText;
  var hours = document.getElementById("hoursabh-" + id).innerText;
  var phone = document.getElementById("phoneabh-" + id).innerText;
  var order = document.getElementById("orderabh-" + id).innerText;

  // console.log(filename);
  // console.log(name);
  // console.log(order);
  var formname = document.getElementById("nameabh");
  var formlocation = document.getElementById("locationabh");
  var formlocationurl = document.getElementById("locationurlabh");
  var formcontent = document.getElementById("contentabh");
  var formorder = document.getElementById("orderabh");
  var formid = document.getElementById("abhid");
  var formimage = document.getElementById("imagenameabh");
  var formhours = document.getElementById("hoursabh");
  var formphone = document.getElementById("phoneabh");

  formid.value = id;
  formlocation.value = location;
  formimage.value = imagename;
  formlocationurl.value = locationurl;
  formcontent.value = content;
  formhours.value = hours;
  formphone.value = phone;
  formorder.value = order;
  formname.value = name;
  $("#editabhmodal").modal("show");
}


function editmodalabks(id) {
  // console.log("test");
  // console.log(id);

  // var filename = document.getElementById("filename-" + id).innerText;
  var name = document.getElementById("nameabks-" + id).innerText;
  var location = document.getElementById("locationabks-" + id).innerText;
  var locationurl = document.getElementById("locationurlabks-" + id).innerText;
  var content = document.getElementById("contentabks-" + id).innerText;
  var imagename = document.getElementById("filenameabks-" + id).innerText;
  var hours = document.getElementById("hoursabks-" + id).innerText;
  var phone = document.getElementById("phoneabks-" + id).innerText;
  var order = document.getElementById("orderabks-" + id).innerText;

  // console.log(filename);
  // console.log(name);
  // console.log(order);
  var formname = document.getElementById("nameabks");
  var formlocation = document.getElementById("locationabks");
  var formlocationurl = document.getElementById("locationurlabks");
  var formcontent = document.getElementById("contentabks");
  var formorder = document.getElementById("orderabks");
  var formid = document.getElementById("abksid");
  var formimage = document.getElementById("imagenameabks");
  var formhours = document.getElementById("hoursabks");
  var formphone = document.getElementById("phoneabks");

  formid.value = id;
  formlocation.value = location;
  formimage.value = imagename;
  formlocationurl.value = locationurl;
  formcontent.value = content;
  formhours.value = hours;
  formphone.value = phone;
  formorder.value = order;
  formname.value = name;
  $("#editabksmodal").modal("show");
}




var toastbody = document.getElementById("toast-body");
$("#toast11").hide();
function toastupdate(body) {
  console.log("test");

  const toastLiveExample = document.getElementById("liveToast");

  const toast = new bootstrap.Toast(toastLiveExample);

  var toastbody = document.getElementById("toast-body");
  toastbody.innerHTML = body;
  $(".toast").toast("show");
  $("#toast11").toast("show");

  toast.show();
}
