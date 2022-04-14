<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha512-XVz1P4Cymt04puwm5OITPm5gylyyj5vkahvf64T8xlt/ybeTpz4oHqJVIeDtDoF5kSrXMOUmdYewE4JS/4RWAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="asset/js/student application.js"></script>
<script>

// INSERT QUERY 
  
$('#submit').click(function(e){
   e.preventDefault();
      alert('ok');
    //   var file_image = $('#previous_marksheet').prop('files')[0];
    //   alert(file_image);
      var formdata = new FormData(document.getElementById('myform'));
    //   formdata.append('file',file_image);
        alert(formdata);
        $.ajax({
          url: 'insert.php',
          data: formdata,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
              // alert(data);
        
            //   $('#formdata').html(data);
            swal({ title:"loading",
                  button:false,
                  icon: "https://www.boasnotas.com/img/loading2.gif",
                  timer: 2000}).then(function(){
                    // alert("test");
                    swal({ title:"Registration successfull",
                      icon: "success",
                      button:false,
                      timer: 2000

                    });
                  });
                  
                   
          }
          });
   });

</script>
</body>
</html>