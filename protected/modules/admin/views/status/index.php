<style type="text/css">
	.dataTables_processing{
		text-align: center;
		margin-right: 50px;
		font-size: 20px;
		font-family: 'Century Gothic';
	}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Status Management</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
    <h2>Status Table</h2>
    <div class="table-responsive">
      <table id="data" class="table table-bordered table-hover table-striped tablesort">
        <div class="form-inline" align="right" style="margin-bottom:-30px;">
        	<select id="searchField" class="form-control">
				<option value="">--All--</option>
				<option value="status_id">  		 <?= $model->getAttributeLabel('status_id')  			?></option>
				<option value="user_id"> 			 <?= $model->getAttributeLabel('user_id') 				?></option>
				<option value="status_text"> 		 <?= $model->getAttributeLabel('status_text') 			?></option>
				<option value="status_pict"> 		 <?= $model->getAttributeLabel('status_pict') 			?></option>
				<option value="status_file">    	 <?= $model->getAttributeLabel('status_file') 			?></option>
				<option value="status_like">		 <?= $model->getAttributeLabel('status_like') 	 		?></option>
				<option value="status_comment">   	 <?= $model->getAttributeLabel('status_comment')   		?></option>
				<option value="status_created_date"> <?= $model->getAttributeLabel('status_created_date')  	?></option>  
				<option value="status_modified_date"><?= $model->getAttributeLabel('status_modified_date') 	?></option>  
		    </select>
		    <div class="form-group" id="input">
		    	<input class="form-control" type="text" id="searchText" disabled="disabled" >
		    </div>
		    <a class="btn btn-default" onClick="$('#data').dataTable().fnDraw();">Search</a>
        </div>
        <thead>
          <tr>
            <th>StatusId</th>
            <th>UserId</th>
            <th>StatusText</th>
            <th>StatusPict</th>
            <th>StatusFile</th>
            <th>StatusLike</th>
            <th>StatusComment</th>
            <th>StatusCreatedDate</th>
            <th>StatusModifiedDate</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="form-actions" style="margin-top:10px;">
    	<a data-toggle="modal" href="<?= Yii::app()->createUrl('admin/user/addUser'); ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add</button></a>  
    </div>
  </div>
</div>