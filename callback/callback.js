$("#submit").click(function(){
     var txtphonenumber = document.getElementById("phone-number").value;
     console.log(txtphonenumber);
     $.ajax({
        type: "post",
	dataType: "json",
        url: 'callback/arrcallback.php',
        data: {txtphonenumber:txtphonenumber},
         success: function (data) {
           alert(data)
         },
      });
  });