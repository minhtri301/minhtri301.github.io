<script type="text/javascript">
 $(".label_title").each(function(){
  if($(this).text().length > 100) {
    $(this).text($(this).text().substr(0, 100));
    $(this).append('...');
  }
  });
</script>


<script type="text/javascript">
   $('#keywork').keyup(function(){
       var key = $(this).val();
        
        var _token = $('input[name="_token"]').val();
        // if(key=='') return;
        $.ajax({
          url: "{{url('/search-ajax')}}",
          method: "post",
          dataType: "json",
          data:{key:key,_token:_token}, 
          success:function(data){
            $('#search-keywork').html(data.html);
          }

        }); 
    

   });
</script>