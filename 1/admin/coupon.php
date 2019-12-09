<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/controler.php');
include_once('phplib/view.php');

?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="categories.php">Coupons</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <!-- upload coupon code starts here -->
<?php
if(isset($_POST['btnuploadcoupon']))
{
    include_once("phplib/db_config.php");
    $cpname=$_POST['couponname'];
    $discount=$_POST['discount'];
    $category=$_POST['category'];
    $sql="INSERT INTO coupons (`coupon_name`,`discount`,`category_id`) VALUES('$cpname','$discount','$category')";
    if($con->query($sql)>0)
    {
        echo " <div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sucess!</strong> Category Upload Successfully.
                </div>";
    }
}
// DELETE Coupon
     if(isset($_GET['coupon_id']))
     {
        DeleteCoupon(base64_decode($_GET['coupon_id']));
     }
     
?>



<!-- Upload coupon code ends here -->
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Coupons Managment</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">New Coupons</a></li>
                    <li><a href="#custom">Manage Coupons</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Coupon
                            <small>Add New Coupon</small>
                        </h3>


                       <form role="form" action="coupon.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Coupons Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Taste40" name="couponname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Discount percentage</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="20%" name="discount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category</label>
                            <select name=category>
                                <option>---Select---</option>
                            <?php 
                                include("phplib/db_config.php");
                                $result=mysqli_query($con,"select * from catrgories");
                                while($row=mysqli_fetch_array($result))
                                {
                                    ?>

                                    <option value=<?php echo $row['category_id'];?> > <?php echo $row['category_name'];?> </option>
                               <?php 
                                }
                                 ?>
                        </select>
                        </div>
                        <button type="submit" name="btnuploadcoupon" class="btn btn-default">Upload</button>
                        <!--div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div-->
                    </form>
                    <bra/>
                    </div>
                    <div class="tab-pane " id="custom">
                        <h3>Manage Coupon
                            <small>View All Coupons Or Delete Coupons</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Coupon Name </th>
        <th>Discount on coupon</th>
        <th>Category</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <?php manageAllcoupons(); ?>
    </tbody>
    </table>
    <script type="text/javascript">
    var elems = document.getElementsByClassName('saikat');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div-->
    <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
<?php
include_once('include/footer.php');
?>
