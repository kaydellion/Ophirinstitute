$(function() {
  $(".num").change(function() {
    $(this).parents("form").submit()
     e.preventDefault();
      $.ajax({
          url: "addnum.php",
          type: "POST",
          data:  new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success :function(data){
            $.get("index.php", function(data) {
              $("#page-top").html(data);
            });  
            }
         
      })
    
  }); 
  });

