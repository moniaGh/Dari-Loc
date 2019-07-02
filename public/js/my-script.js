  var fileNumber = 0;

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        $("#add-photos").css("padding",'5px');
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"img-new-pub\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\"><img src='https://png.icons8.com/color/260/close-window.png' style='width:30px;' > </span>" +
            "</span>").appendTo(".gallery");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            console.log('done')
          });
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


// Adding popstate event listener to handle browser back button  
window.addEventListener("popstate", function(e) {

    // Get State value using e.state
    update_url(location.pathname, false);
});

function update_url(url, addEntry) {
    $.get(url)
    .done(function( data ) {

        // Updating Content on Page
        $('#top').html(data);

        if(addEntry == true) {
            // Add History Entry using pushState
            history.pushState(null, null, url); 
        }

    });
}

$("#files").on("change", function() {
  fileNumber+=$("#files")[0].files.length;
  if(fileNumber > 8){
    alert("Vous ne pouvez sélectionner que 8 images");
     fileNumber-=$("#files")[0].files.length;
     document.getElementById('files').value = "";

  }else if($("#files")[0].files.length > 8) {
    alert("Vous ne pouvez sélectionner que 8 images");
    document.getElementById('files').value = "";
    fileNumber = 0;
  }
});

/*
window.oncontextmenu = function () {
  return false;
}
document.onkeydown = function (e) { 
  if (window.event.keyCode == 123 ||  e.button==2)    
    return false;
}
*/

function tostep2() {
  document.getElementById("step1").style.display = "none";
  document.getElementById("step2").style.display = "block";
}

function tostep1() {
  document.getElementById("step1").style.display = "block";
  document.getElementById("step2").style.display = "none";
}

$('#trie').change(function(){
    var value = $(this).val();
    window.location = "/annonces/recherche/" + value
});

   function uncheckAllOptions(divid) {
      var checks = document.querySelectorAll('.' + divid + ' input[type="checkbox"]');
      for(var i =0; i< checks.length;i++){
        var check = checks[i];
         check.checked = false;
      }
   }


var rad = document.myForm.transaction;
var prev = null;
for(var i = 0; i < rad.length; i++) {
  rad[i].onclick = function() {
    (prev)? console.log(prev.value):null;
    if(this !== prev) {
      prev = this;
    }
    if(this.value == 1) {
       document.getElementById("typeDate").style.display = "none";
       document.getElementById("price").classList.remove("col-md-6");
       document.getElementById("price").classList.add("col-md-12");
    }else {
      document.getElementById("typeDate").style.display = "block";
       document.getElementById("price").classList.add("col-md-6");
       document.getElementById("price").classList.remove("col-md-12");
    }
  };
}