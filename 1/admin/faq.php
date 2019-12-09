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
            <a href="banner.php">FAQ</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php
  // insert faq
    if(isset($_POST['btnfaqUpload']))
	 {
		$que=$_POST['txtfaqque'];
        $ans=$_POST['txtfaqans'];
        include_once('phplib/db_config.php');
        $result=mysqli_query($con,"insert into xll_faq value('','$que','$ans')");
        if(mysqli_affected_rows($con)>=1)
        {
        echo " <div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sucess!</strong>  Upload Successfully.
                </div>";
        }
        else
        {
        echo " <div class='alert alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>";
        }

     }
     // Update FAQ
     if(isset($_POST['btnfaqupdate']))
     {
        $que=$_POST['txtfaqque'];
        $ans=$_POST['txtfaqans'];
        $id=$_POST['id'];
        include_once('phplib/db_config.php');
        $result=mysqli_query($con,"update xll_faq set faq_question='$que',faq_answer='$ans' where faq_id='$id'");
        if(mysqli_affected_rows($con)>0)
        {
        echo " <div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sucess!</strong>  Updated Successfully.
                </div>";
        }
        else
        {
        echo " <div class='alert alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>";
        }

     }
     // DELETE FAQ
     if(isset($_GET['faqID']))
     {
        Deletefaq(base64_decode($_GET['faqID']));
     }
	 ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> FAQ Managment</h2>

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
                    <li class="active"><a href="#info">ADD NEW Question</a></li>
                    <li><a href="#custom">Manage FAQ</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Questions
                            <small>Upload New Question Here</small>
                        </h3>
                  <?php
                  
                //     $result=mysqli_query($con,"Select * from xll_faq where faq_id='$id'")or die("Query failed".mysqli_error());
                // while($row=mysqli_fetch_assoc($result))
                // {

                    ?>
                       <form role="form" action="faq.php" enctype="multipart/form-data" method="post">
	                    <div class="form-group">
                           
                          
                             <input type="hidden" name="id" value="<?php if(isset($_GET['EditID'])) { echo (base64_decode($_GET['EditID'])); } ?>">       
	                        <label for="exampleInputPassword1">FAQ Question</label>
	                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="How to contact Customer care?" name="txtfaqque" value="<?php if(isset($_GET['EditID'])) { echo (base64_decode($_GET['question'])); } ?>">
	                    </div>
	                    <div class="form-group">
	                        <label for="exampleInputFile">Answer For the Question</label>
	                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Call on tollfree number 1800-100-150-142" name="txtfaqans" value="<?php if(isset($_GET['EditID'])) { echo (base64_decode($_GET['answer'])); }?>">
	                    </div>
                        <?php 
                    // }
                        if(isset($_GET['EditID'])) 
                        {

                            ?>
                            <button type="submit" name="btnfaqupdate" class="btn btn-default">Update</button>
                        <?php
                        }
                        else
                        {
                        ?>
	                    <button type="submit" name="btnfaqUpload" class="btn btn-default">Upload</button>
	                    <?php
                        }
                        ?>
                        <!--div class="checkbox">
	                        <label>
	                            <input type="checkbox"> Check me out
	                        </label>
	                    </div-->
                	</form>
                	<br/>
                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Manage FAQ
                            <small>View All Questions Or Delete Questions</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID </th>
        <th>Question</th>
        <th>Answer</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php managefaq(); ?>
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
