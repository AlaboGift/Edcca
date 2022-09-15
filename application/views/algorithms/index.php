<!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><?=$title?></h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">EDCCA</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- pageheader  -->
               <!-- ============================================================== -->
               <div>
                   <p class="footer">Algorithm took <strong>{elapsed_time}</strong> seconds.</p>
                   <br>
               </div>
                 <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12" id='nav'>
                               <span><i class="fa fa-caret-right" style="color: lightblue">&nbsp;</i><i class="fa fa-folder"></i> No file(s) Selected..</span> 
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2" style="float: right; margin-top: -400px">
                            <div class="alert alert-warning btn-lg">Select files before clicking on Cluster, Classify or Cluster & classify</div>
                              <button class="btn btn-info btn-lg">Cluster</button><br><br>
                              <button class="btn btn-info btn-lg">Classify</button><br><br>
                              <button class="btn btn-info btn-lg">Cluster & Classify</button>
                            </div>
                            <br>
                            <input type="file" name="file[]" multiple="multiple" id="files" onchange="selectFiles()">
                        </div>
                 </div>
                 </div>
            </div>
        </div>
<!-- wrapper  -->
        <!-- ============================================================== -->
<script type="text/javascript">
    function selectFiles() {
        var file = $('#files')[0].files;
        for (var i = 0; i < file.length; i++) {
            files += '<i class="fa fa-file"></i>&nbsp;'+file[i].name+'<br>';
            //
        }
        files = files.substr(25);
        $('#nav').html(files);
    }
</script>