<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .div_1{
        width: 100px;
        height: 100px;
        border: 1px solid black;
  }
  .div_3 {
    border-radius: 50%;
    border: 1px solid;
    height: 80px;
    width: 80px;
    margin: 10px;
  }
  .div_4 {
    width: 40px;
    margin: 20px;
    height: 40px;
    transform: rotate(45deg);
    border: 1px solid black;
}
  </style> 
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Employee
                    <small>Details</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             <h4>Search</h4>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Name , Phone" class="form-control" />
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Employee id</th>
                        <th> Name</th>
                        <th>Phone</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>

<div class="container text-center">
  <div class="div_1">
    <div class="div_2">
      <div class="div_3">
        <div class="div_4">
        </div>  
      </div>  
    </div> 
  </div>  
</div>  
 
        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Emp Id</label>
                            <div class="col-md-10">
                              <input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employee id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Employee Name</label>
                            <div class="col-md-10">
                              <input type="text" name="emp_name" id="emp_name" class="form-control" placeholder="Employee Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Employee number</label>
                            <div class="col-md-10">
                              <input type="text" name="emp_phone" id="emp_phone" class="form-control" placeholder="Employee Number">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Employee Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Employee Id</label>
                            <div class="col-md-10">
                              <input type="text" name="product_code_edit" id="product_code_edit" class="form-control" placeholder="Product Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Employee Name</label>
                            <div class="col-md-10">
                              <input type="text" name="product_name_edit" id="product_name_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Employee phone</label>
                            <div class="col-md-10">
                              <input type="text" name="price_edit" id="price_edit" class="form-control" placeholder="Price">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
 
        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
 

 
<script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product
         
       // $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('User_details/product_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].emp_id+'</td>'+
                                '<td>'+data[i].emp_name+'</td>'+
                                '<td>'+data[i].emp_phone+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].emp_id+'" data-product_name="'+data[i].emp_name+'" data-price="'+data[i].emp_phone+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].emp_id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var emp_id = $('#emp_id').val();
            var emp_name = $('#emp_name').val();
            var emp_phone        = $('#emp_phone').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('User_details/save')?>",
                dataType : "JSON",
                data : {emp_id:emp_id , emp_name:emp_name, emp_phone:emp_phone},
                success: function(data){
                    $('[name="emp_id"]').val("");
                    $('[name="emp_name"]').val("");
                    $('[name="emp_phone"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var product_code = $(this).data('product_code');
            var product_name = $(this).data('product_name');
            var price        = $(this).data('price');
             
            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="price_edit"]').val(price);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var emp_id = $('#product_code_edit').val();
            var emp_name = $('#product_name_edit').val();
            var emp_phone        = $('#price_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('User_details/update')?>",
                dataType : "JSON",
                data : {emp_id:emp_id , emp_name:emp_name, emp_phone:emp_phone},
                success: function(data){
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var product_code = $(this).data('product_code');
             
            $('#Modal_Delete').modal('show');
            $('[name="product_code_delete"]').val(product_code);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var product_code = $('#product_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('User_details/delete')?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
    });
 
</script>
<script>
$(document).ready(function(){

 //load_data('','all');

 function load_data(query,id)
 {
    $.ajax({
    url:"<?php echo base_url(); ?>User_details/fetch",
    method:"POST",
    data:{query:query},
     success:function(data){
     	console.log(data);
     	data = JSON.parse(data);
     	var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].emp_id+'</td>'+
                                '<td>'+data[i].emp_name+'</td>'+
                                '<td>'+data[i].emp_phone+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].emp_id+'" data-product_name="'+data[i].emp_name+'" data-price="'+data[i].emp_phone+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].emp_id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
     }
    })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</body>
</html>