<script>
    $(document).ready(function() {
  
  var counter = 0;
  var c = 0;

  var i = setInterval(function(){
      $(".loading-page .counter h1").html(c + "%");
      $(".loading-page .counter hr").css("width", c * 3.7  + "px");
      

    
    //$(".loading-page .counter h1.color").css("width", c + "%");
    
    counter++;
    c++;
      
    if(counter == 101) {
        clearInterval(i);
        document.location.href = "../Proto-plasma/os.html";
    }
  }, 50);
});

</script>