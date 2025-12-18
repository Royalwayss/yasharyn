<?php
    $current_file_name = basename($_SERVER['PHP_SELF']); 
?>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<?php if($current_file_name == 'add_edit_product.php') { ?>
<script src="assets/js/summernote-bs4.min.js"></script>
<?php  } ?>
<script src="assets/js/jquery-ui.min.js"></script>
<!-- DataTables  & Plugins -->

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
           $("#DataTable").DataTable({
                    "order": [[ 0, "desc" ]], 
           });
});
function view_form(id,view_status){
         
         if( view_status == 0){
         $.ajax({
            url: "view.php?id="+id+"&table=<?php echo $table; ?>",
            type: "POST",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify({ id: 'id'}),
            success: function (result) {
         		$('#row-'+id).removeClass("btn-danger");
         		$('#row-'+id).addClass("btn-success");
         		var modal = document.getElementById("viewModal"+id);
         		modal.style.display = "block";
         	},
         	
         });
         }else{
         var modal = document.getElementById("viewModal"+id);
         modal.style.display = "block";
         }		
         
         }
         function model_close(id){
         var modal = document.getElementById("viewModal"+id);
         modal.style.display = "none";
         }
		 

</script>
<?php if($current_file_name == 'add_edit_product.php') { ?>
<script>
  $(function () {
    // Summernote
    $('#summernote_desc').summernote()
   
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
           
<?php } ?>
