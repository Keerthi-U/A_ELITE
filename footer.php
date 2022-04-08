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
              alert(data);
        
            //   $('#formdata').html(data);
          }
          });
   });

</script>
</body>
</html>