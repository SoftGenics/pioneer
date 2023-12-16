</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $(document).on("click","#btnadd", function(e){
          e.preventDefault();
        // let csv=$("#csv").val();
        //     console.log(csv)
    $.ajax({
        url:"addtender.php",
        method:"POST",
        data:{desc: $("#descripition").val(), file: $("#csv").val(), pdf: $("#pdf").val(), sdate: $("#sdate").val(), edate: $("#edate").val(), mark: $("#mark").val() },
        success: function(data){
        $("#descripition").val('');
        console.log(data)
        showtenders()
        window.scrollTo(0,0)
        
        },
    })
    })
    
 showtenders()
    function showtenders(){
        $.ajax({
            url:"fetchtenders.php",
            method: "GET",
            success:function(data){
            $("#tenderbody").html(data);
            },
        });
    }
     $(document).on("click",".fa-edit", function(){
		 $("#tenderModal").modal("show");
		  id_std=$(this).attr("id");
		  $("#userdata").html(id_std)
		  // $.ajax({
		  //        url:"studentsdata.php",
		  //        method:"POST",
		  //        data:{id_std:id_std},
		  //        success: function(data){
		  //        $("#userdata").html(data)
		  //        console.log(data)
		  //              }
		  //          });
		        })
		 function updatetender(){
        
            $(document).on("click","#update", function(e){
            e.preventDefault();
 
            $.ajax({
                url:"updatetender.php",
                method:"POST",
                data:{desc: $("#descripition").val(), csv: $("#csv").val(), pdf: $("#pdf").val(), sdate: $("#sdate").val(), edate: $("#edate").val(), mark: $("#mark").val() },
                success: function(data){
                showtenders()
                window.scrollTo(0,0)
                },
            })
            })
        
    }

    $(document).on("click",".fa-trash-alt", function(){
    id_del=$(this).attr("id");
    $.ajax({
            url:"deletetender.php",
            method:"POST", 
            data:{id: id_del},
            success: function(res){
            showtenders()
            },
    })
    });



});
</script>