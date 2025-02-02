<?php
include('../system/inc.php');
include('cms_check.php');
error_reporting(0);
include('model/slideshow.php');
?>
<?php include('inc_header.php') ?>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#picture').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_picture').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_picture').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
<?php include('inc_left.php') ?>
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="cms_welcome.php"><i class="icon fa fa-home"></i>首页</a></li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>幻灯管理</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class="row">						
						<div class="col-lg-12">
							<div class="panel bk-bg-white">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-tags red"></i>添加幻灯</h6><br>
									<label for="name-w1" style="padding-left:12px;"><span style=" background:#ff0d0d;padding:10px;color:#fff;">* 首页手动幻灯说明：1、首先要在系统设置-基础设置中启动首页幻灯，启动后自动幻灯失效。2、手动幻灯添加6个，否则影响显示效果，如幻灯数因数量少或多影响美观效果，建议关闭自动幻灯。3、添加幻灯排序序号必须从0开始，依次0、1、2、3...填写。</span></label>
								</div>
								<div class="panel-body">
									<div class="wizard-type1">
									
										<form method="post"><div class="tab-content">

											<div class="tab-pane1">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
														<div class="form-group has-feedback">
															<label for="name-w1">名称</label>
															<input id="s_name" class="form-control" name="s_name" type="text" size="60" value="" />
														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
														<div class="form-group has-feedback">
															<label for="name-w1">图片</label>
															<div class="input-group">
									<input id="s_picture" class="form-control" name="s_picture" type="text" size="60" data-validate="required:请输入或上传图片" value="" />
													<span class="input-group-btn">
													<button type="button" class="btn btn-success" id="picture">UP</button>
													</span>
												</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
														<div class="form-group has-feedback">
															<label for="name-w1">地址</label>
															<input id="s_url" class="form-control" name="s_url" type="text" size="60" value="" />
														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
														<div class="form-group has-feedback">
															<label for="name-w1">排序</label>
															<input id="s_order" class="form-control" name="s_order" type="text" size="60" data-validate="required:必填,plusinteger:请输入排序数字" value="0" />
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="actions">								
											<input type="submit" class="btn btn-info button-previous" name="save" value="提交" />
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
<div class="row">		
						<div class="col-lg-12">
							<div class="panel">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-table red"></i><span class="break"></span>幻灯管理</h6>

								</div>
								<div class="panel-body">
									<div class="table-responsive">	
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													
							<th>排序</th>
							<th>图片</th>
							<th>名称</th>
							<th>链接地址</th>
							<th>操作</th>
												</tr>
											</thead>   
											<tbody>								
<?php
						$result = mysqli_query($conn,'select * from mkcms_slideshow');
						while($row = mysqli_fetch_array($result)){
						?>
						<tr>
							<td><?php echo $row['s_order']?></td>
							<td><a href="<?php echo $row['s_picture']?>" target="_blank">点击查看</a></td>
							<td><?php echo $row['s_name']?></td>
							<td><?php echo substr($row['s_url'],0,20)?></td>
							<td><a class="btn btn-info" href="cms_slideshow_edit.php?id=<?php echo $row['id']?>"><span class="icon-edit"> 修改</span></a> <a class="btn btn-danger" href="cms_slideshow.php?del=<?php echo $row['id']?>" onclick="return confirm('确认要删除吗？')"><span class="icon-times"> 删除</span></a></td>
						</tr>
						<?php
						}
						?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>					
					</div>
					
				</div>
				<!-- End Main Page -->			
		
<?php include('inc_footer.php') ?>
