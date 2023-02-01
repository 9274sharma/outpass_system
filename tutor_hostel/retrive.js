"use strict";
function decl() {
  var eadd = prompt("enter the reason for decline?");
  $.ajax({
    type: "POST",
    url: "/retrive.php",
    reason: eadd,
    success: function (reason, textStatus, jqXHR) {
      console.log(reason);
    },
  });
}
