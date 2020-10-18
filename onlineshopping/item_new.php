 
<?php 

    require('backend_header.php');
    require('db_connect.php');
 ?>


 <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Item Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="item_list.php" class="btn btn-outline-primary">
                        <i class="icofont-double-left"></i>
                    </a>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form>
                                 <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                    <div class="col-sm-10">
                                      <input type="file" id="photo_id" name="photo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="name">
                                    </div>
                                </div>
                     <input type="hidden" name="edit_id" id="edit_id">
                    <input type="hidden" name="edit_oldprofile" id="edit_oldprofile">

                    <div class="form-group row">
                        <label for="profile" class="col-sm-2 col-form-label"> Price </label>
                        <div class="col-sm-10">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Unit Price </a>
                                </li>
      
                                <li class="nav-item">
                                    <a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> Discount</a>
                                </li>
                            </ul>
                           <!--  <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
                                    <img src="" id="showOldPhoto" class="img-fluid" width="100px" height="90px">
                                </div>
                            
                                <div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
                                    <input type="file"  id="profile" name="edit_newprofile">
                                </div>

                               </div> -->


                               


                        
                            
                                 </div>

                                </div>

                                <div class="form-group row">
                                     <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label"></label>
                                     <div class="col-sm-10">

                                <input type="text" class="form-control" id="name_id" name="name">
                                </div>
                                    
                                </div>
                               
                                <div class="form-group row">
                                     <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Destription</label>
                                    <div class="col-sm-10">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Category </label>
                                    <div class="col-sm-10">
                                     <select class="custom-select custom-select-lg mb-3">
                                      <option selected>Choose Category</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Subcategory </label>
                                    <div class="col-sm-10">
                                     <select class="custom-select custom-select-lg mb-3">
                                      <option selected>Choose Subcategory</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>

                   

                               

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icofont-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

 <?php 

    require('backend_footer.php');
 ?>