var index = 0;
    function insertRow(){
        index += 1;
                var table=document.getElementById("myTable");
                var row=table.insertRow(table.rows.length);
                 row.id="row"+index+"";

                var cell1=row.insertCell(0);

                var t1=document.createElement("input");
               
                    t1.id = "txtfirst"+index;
                   
                    t1.setAttribute("class", "form-control");
                    t1.setAttribute("name", "name[]");
                    t1.setAttribute("id", "txtfirst");
                    t1.setAttribute("type", "text");
                    cell1.appendChild(t1);

                var cell2=row.insertCell(1);

                var t2=document.createElement("input");
                
                    t2.id = "txtsecond"+index;
                    t2.setAttribute("name", "age[]");
                    t2.setAttribute("type", "text");
                    t2.setAttribute("class", "form-control ");
                    t2.setAttribute("id", "txtsecond");
                    cell2.appendChild(t2);

                var cell3=row.insertCell(2);

                var t3=document.createElement("input");
                
                    t3.id = "txtthird"+index;
                    t3.setAttribute("name", "genders[]");
                    t3.setAttribute("type", "text");
                    t3.setAttribute("class", "form-control ");
                    t3.setAttribute("id", "txtthird");
                    cell3.appendChild(t3);

                  // var cell4=row.insertCell(3);

                  //  var t4=document.createElement("input");
                  // t4.setAttribute("name", "relation[]");
                  //   t4.id = "txtfourth"+index;
                  //   t4.setAttribute("type", "text");
                  //   t4.setAttribute("class", "form-control t");
                  //   t4.setAttribute("id", "txttotal");
                  //   cell4.appendChild(t4);


                  var cell4=row.insertCell(3);
                   
                  var t4=document.createElement("select");
                  var opt1 = document.createElement("option");
                  var opt2 = document.createElement("option");
                  var opt3 = document.createElement("option");
                  var opt4 = document.createElement("option");
  
                  opt1.value = "1";
                  opt1.text = "Father";
  
                  opt2.value = "2";
                  opt2.text = "Mother";
  
                  opt3.value = "3";
                  opt3.text = "sister";
  
                  opt4.value = "4";
                  opt4.text = "brother";
  
                  t4.add(opt1, null);
                  t4.add(opt2, null);
                  t4.add(opt3, null);
                  t4.add(opt4, null);
                
                  t4.setAttribute("value", "father");
                  t4.setAttribute("name","relation")
                      t4.id = "txtfourth"+index;
                     
                      t4.setAttribute("class", "form-control");
                      t4.setAttribute("name", "relation[]");
                      t4.setAttribute("id", "txtfourth");
                      t4.setAttribute("type", "text");
                      var t = document.createTextNode("Volvo");
                      t4.appendChild(t);
                      cell4.appendChild(t4);
  
                    var cell5=row.insertCell(4);
                   
                var t5=document.createElement("select");
                var opt1 = document.createElement("option");
                var opt2 = document.createElement("option");
                var opt3 = document.createElement("option");
                var opt4 = document.createElement("option");

                opt1.value = "1";
                opt1.text = "Married";

                opt2.value = "2";
                opt2.text = "Unmarried";

                opt3.value = "3";
                opt3.text = "Widow/Widowar";

                opt4.value = "4";
                opt4.text = "Single Parent";

                t5.add(opt1, null);
                t5.add(opt2, null);
                t5.add(opt3, null);
                t5.add(opt4, null);
              
                t5.setAttribute("value", "married");
                t5.setAttribute("name","marital_status")
                    t5.id = "txtfifth"+index;
                   
                    t5.setAttribute("class", "form-control");
                    t5.setAttribute("name", "martial_status[]");
                    t5.setAttribute("id", "txtfirst");
                    t5.setAttribute("type", "text");
                    var t = document.createTextNode("Volvo");
                    t5.appendChild(t);
                    cell5.appendChild(t5);

                    var cell6=row.insertCell(5);

                var t6=document.createElement("input");
               
                    t6.id = "txtsix"+index;
                    t6.setAttribute("name", "occupation[]");
                    t6.setAttribute("class", "form-control");
                    t6.setAttribute("id", "txtfirst");
                    t6.setAttribute("type", "text");
                    
                    cell6.appendChild(t6);

                    var cell7=row.insertCell(6);

                var t7=document.createElement("input");
                
                    t7.id = "txtseven"+index;
                   
                    t7.setAttribute("class", "form-control");
                    t7.setAttribute("name", "annual_income[]");
                    t7.setAttribute("id", "txtfirst");
                    t7.setAttribute("type", "text");
                    cell7.appendChild(t7);

                    var cell8=row.insertCell(7);
                    var removebtn = document.createElement('input');
                    removebtn.classList.add('btn','btn-danger','Removebtn');
                    removebtn.id="btn"+index;
                    removebtn.onclick = function remove() {
                      document.getElementById("myTable").deleteRow(2);
                    };
                    
                     removebtn.setAttribute("type","button")
                     removebtn.setAttribute("value","-")
                     cell8.appendChild(removebtn);

                     index++;

                     var listitems= row.querySelectorAll("input");
       
                    for (i=0; i<listitems.length; i++) {
                    listitems[i].setAttribute("oninput", "calculate('"+row.id+"')");
                    }
                
          
    }
    // This for toogle 

    $(document).ready(function(){
      $("#t1").click(function(){
        $(this).css("background-color"," #5387ba");
        $("#t2").css("background-color","");
        $("#t3").css("background-color","");
        $("#t5").css("background-color","");
        $("#toggle1").slideToggle(1000, function(){
          $("#toggle2").slideUp(1000);
          $("#toggle3").slideUp(1000);
          $("#toggle5").slideUp(1000);
          $(".second").toggleClass("up")  ; 
          $(".third").toggleClass("up")  ; 
          $(".fith").toggleClass("up")  ; 
        });
      });

      $("#t2").click(function(){
        $(this).css("background-color"," #5387ba");
        $("#t1").css("background-color","");
        $("#t3").css("background-color","");
        $("#t5").css("background-color","");
        $("#toggle2").slideToggle(1000, function(){
          $("#toggle1").slideUp(1000);
          $("#toggle3").slideUp(1000);
          $("#toggle5").slideUp(1000);
          $(".first").toggleClass("up"); 
          $(".fith").toggleClass("up")  ; 
          $(".third").toggleClass("up"); 
        });
      });

      $("#t5").click(function(){
        $(this).css("background-color"," #5387ba");
        $("#t2").css("background-color","");
        $("#t1").css("background-color","");
        $("#t3").css("background-color","");
        $("#toggle5").slideToggle(1000, function(){
          $("#toggle1").slideUp(1000);
          $("#toggle2").slideUp(1000);
          $("#toggle3").slideUp(1000);
          $(".first").toggleClass("up"); 
          $(".second").toggleClass("up");
          $(".third").toggleClass("up");  

        });
      });
      $("#t3").click(function(){
        $(this).css("background-color"," #5387ba");
        $("#t2").css("background-color","");
        $("#t1").css("background-color","");
        $("#toggle3").slideToggle(1000, function(){
          $("#toggle1").slideUp(1000);
          $("#toggle2").slideUp(1000);
          $("#toggle5").slideUp(1000);
          $(".first").toggleClass("up"); 
          $(".second").toggleClass("up"); 
          $(".fith").toggleClass("up");  

        });
      });
      $("#stu_customRadio3").click(function(){
        $("#o_yes").show(function(){
            $("#o_no").slideUp(1000);
        });
        
      });
      $("#stu_customRadio4").click(function(){
        $("#o_yes").hide();
        $("#o_no").slideToggle(1000);
      });

      $("#customRadio5").click(function(){
        $("#in_yes").show(function(){
            $("#in_no").slideUp(1000);
        });
        
      });
      $("#customRadio6").click(function(){
        $("#in_yes").hide();
        $("#in_no").slideToggle(1000);
      });

      $("#t1").click(function(){
        $(".first").toggleClass("up")  ; 
       })
       $("#t2").click(function(){
        $(".second").toggleClass("up")  ; 
       })
       $("#t3").click(function(){
        $(".third").toggleClass("up")  ; 
       })

       $("#datepicker").click(function(){

        $(this).datepicker();

       });

       $(".date").datepicker({
        format: "dd-mm-yyyy",
      });
    });

    $("#md_toggle5").hide();


    $('#flip').change(function(){
        // alert('hi');
          alert($(this).val());
         $select =$(this).val();
      if($select == '1'){
     
       $('.wrapper').removeClass('wrapperhide');
      
        $("#toggle1").slideDown(1000);
        $("#stu_toggle2").show();
        $("#md_toggle5").hide();
     

       
      }
      else if ($select == '2') {
        $('.wrapper').removeClass('wrapperhide');
        $("#toggle1").slideDown(1000);
        $("#md_toggle5").show();
        $("#stu_toggle2").hide();
       

      }
    

    });


    // $("#file-upload").change(function(){
    //  $(#file-name)(this.files[0].name);
      
    // });

    $("#file-upload").change(function(){
      // var fileName = $(this.files[0].name);
      // $('#file-name').val(fileName);

      var fname=$('#file-upload').val().split('\\').pop().split('/').pop();
      alert(fname);
      $('#file-name').val(fname);
    });
 
    $("#file-upload1").change(function(){
      var fname1=$("#file-upload1").val().split('\\').pop().split('/').pop();
      alert(fname1);
      $('#file-name1').val(fname1);
    });

    
    $("#file-upload2").change(function(){
    var fname2=$("#file-upload2").val().split('\\').pop().split('/').pop();
      alert(fname2);
      $('#file-name2').val(fname2);
    });

    $("#file-upload3").change(function(){
      var fname3=$("#file-upload3").val().split('\\').pop().split('/').pop();
        alert(fname3);
        $('#file-name3').val(fname3);
    });

    $("#file-upload4").change(function(){
        var fname4=$("#file-upload4").val().split('\\').pop().split('/').pop();
          alert(fname4);
          $('#file-name4').val(fname4);
    });
 