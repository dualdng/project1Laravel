@extends('layout')
@section('nav')
<?php if ($id>0) {?>
						<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">帐号 <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
								<li><a href="/user/<?php echo $id;?>">用户首页</a></li>
										<li><a href="/auth/logout">登出</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="/auth/logout">登出</a></li>
								</ul>
								</li>
						</ul>
<?php } else {?>
						<ul class="nav navbar-nav navbar-right">
								<li><a  href="/auth/login">登录</a></li>
								<li><a  href="/auth/register">注册</a></li>
						</ul>
<?php }?>
@endsection
@section('content')
<article class='container'>
<div class='row'>
		<div class='col-md-9'>
				<form method='post' onSubmit='return post()'> 
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>标题</div>
								</div>
								<div class='panel-body'>
										<input type='text' id='title' name='title' class='form-control' placeholder='请输入标题' required='required' />
								</div>
						</div>
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>地区</div>
								</div>
								<div class='panel-body'>
										<select class='form-control inputInline' id='province'>
												<option value='请选择'>选择省</option>
												<?php 
												foreach(array_unique($province) as $value) {
												echo '<option value=\''.$value.'\'>'.$value.'</option>';
												}
												;?>	
										</select>
										<label for='province'>&nbsp&nbsp-&nbsp&nbsp</label>
										<select class='form-control inputInline' id='city'>
										</select>
										<label for='city'>&nbsp&nbsp-&nbsp&nbsp</label>
										<select class='form-control inputInline' id='town'>
										</select>
										<label for='town'></label>
										<label for='detail'>&nbsp&nbsp-&nbsp&nbsp</label>
										<input type='text' class='form-control inputInline inputLong' id='detail' name='detail' placeholder='详细' />
								</div>
						</div>
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>联系方式</div>
								</div>
								<div class='panel-body'>
										<label for='phone'>电话&nbsp:&nbsp</label>
										<input type='text' id='phone' name='phone' class='form-control inputInline inputMiddle' placeholder='请输入手机号码' required='required' />
										<label for='qq'>&nbsp&nbsp&nbsp&nbsp&nbspQQ&nbsp:&nbsp</label>
										<input type='text' id='qq' name='qq' class='form-control inputInline inputMiddle' placeholder='请输入QQ' required='required' />
								</div>
						</div>

				<?php switch($type){
				case 'A':?>
						<input type='hidden' id='postType' name='postType' class='form-control'  required='required' value='A'/> <!--传递type值，用于post()函数判断类型-->

						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>其他信息</div>
								</div>
								<div class='panel-body'>
										<label for='price'>&nbsp&nbsp价格&nbsp:&nbsp</label>
										<input type='text' id='price' name='price' class='form-control inputInline' placeholder='请输入期望价格' required='required' />
										<label for='age'>&nbsp&nbsp&nbsp年龄&nbsp:&nbsp</label>
										<input type='text' id='age' name='age' class='form-control inputInline' placeholder='请输入年龄' required='required' />
										<label for='sex'>&nbsp&nbsp&nbsp职业&nbsp:&nbsp</label>
										<input type='text' id='job' name='job' class='form-control inputInline'  required='required' />
										<label for='sex'>&nbsp&nbsp&nbsp性别&nbsp:&nbsp</label>
										<select class='form-control inputInline' name='sex' id='sex'>
												<option value='0'>男</option>
												<option value='1'>女</option>
										</select>
								</div>
						</div>
				<?php break; 
				case 'B':?>
						<input type='hidden' id='postType' name='postType' class='form-control'  required='required' value='B'/> <!--传递type值，用于post()函数判断类型-->
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>房屋信息</div>
								</div>
								<div class='panel-body'>
										<label for='price'>&nbsp&nbsp价格&nbsp:&nbsp</label>
										<input type='text' id='price' name='price' class='form-control inputInline' placeholder='请输入价格' required='required' />元
										<label for='square'>&nbsp&nbsp&nbsp面积&nbsp:&nbsp</label>
										<input type='text' id='square' name='square' class='form-control inputInline' placeholder='请输入面积' required='required' />m2
										<label for='type'>&nbsp&nbsp&nbsp户型&nbsp:&nbsp</label>
										<select class='form-control inputInline' name='type' id='type'>
												<option value='0'>两居室</option>
												<option value='1'>三居室</option>
												<option value='2'>四居室及以上</option>
												<option value='3'>单居室</option>
										</select>
										<label for='direction'>&nbsp&nbsp&nbsp朝向&nbsp:&nbsp</label>
										<select class='form-control inputInline' name='direction' id='direction'>
												<option value='南'>南</option>
												<option value='北'>北</option>
												<option value='其他'>其他</option>
										</select>

								</div>
						</div>

				<?php break; 
				default:?>
						<input type='hidden' id='postType' name='postType' class='form-control'  required='required' value='C'/> <!--传递type值，用于post()函数判断类型-->
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>房屋信息</div>
								</div>
								<div class='panel-body'>
										<label for='price'>&nbsp&nbsp价格&nbsp:&nbsp</label>
										<input type='text' id='price' name='price' class='form-control inputInline' placeholder='请输入价格' required='required' />元
										<label for='square'>&nbsp&nbsp&nbsp面积&nbsp:&nbsp</label>
										<input type='text' id='square' name='square' class='form-control inputInline' placeholder='请输入面积' required='required' />m2
										<label for='type'>&nbsp&nbsp&nbsp户型&nbsp:&nbsp</label>
										<select class='form-control inputInline' name='type' id='type'>
												<option value='0'>两居室</option>
												<option value='1'>三居室</option>
												<option value='2'>四居室及以上</option>
												<option value='3'>单居室</option>
										</select>
								</div>
						</div>
				<?php }?>
						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>装修情况</div>
								</div>
								<div class='panel-body'>
										<label for='dress'>&nbsp&nbsp&nbsp装修&nbsp:&nbsp</label>
										<select class='form-control' name='dress' id='dress' style='display:inline;width:150px'>
												<option value='0'>豪华装修</option>
												<option value='1'>精装修</option>
												<option value='2'>中等装修</option>
												<option value='3'>一般装修</option>
												<option value='4'>毛坯</option>
										</select>
										<!--									<label for='facility'>&nbsp&nbsp&nbsp设施&nbsp:&nbsp</label> -->
										<label>&nbsp&nbsp&nbsp设施&nbsp:&nbsp</label>
												<label class='checkbox-inline'><input type='checkbox' value='床' name='facility' class='checkbox-inline'/>床</label>
												<label class='checkbox-inline'><input type='checkbox' value='空调' name='facility' class='checkbox-inline'/>空调</label>
												<label class='checkbox-inline'><input type='checkbox' value='热水器' name='facility' class='checkbox-inline'/>热水器</label>
												<label class='checkbox-inline'><input type='checkbox' value='宽带' name='facility' class='checkbox-inline'/>宽带</label>
												<label class='checkbox-inline'><input type='checkbox' value='冰箱' name='facility' class='checkbox-inline'/>冰箱</label>
												<label class='checkbox-inline'><input type='checkbox' value='洗衣机' name='facility' class='checkbox-inline'/>洗衣机</label>
								</div>
						</div>


						<div class='panel panel-success'>
								<div class='panel-heading'>
										<div class='panel-title'>详情</div>
								</div>
								<div class='panel-body'>
										<div class='textarea' id="umeditor" name='contents'>
												<p>这里我可以写一些输入提示</p>
										</div>
										<script type='text/javascript' name='contents'>
												var um = UM.getEditor('umeditor');
										</script>
								</div>
						</div>
						<div class='postSubmit'>
								<button type='submit' class='btn btn-success btn-lg'  style='width:30%'>提交</button>
								<a class='btn btn-info btn-lg'  style='width:30%;margin-left:10%;' href='/user/<?php echo $id;?>'>返回</a>
						</div>
				</form>

				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id='postSuccess'>
						<div class="modal-dialog modal-sm">
								<div class="modal-content">
										<div class='modal-header'>
												<h4 class='modal-title'>发布成功</h4>
										</div>
										<div class='modal-body' id='success'>
												<p>点击<a href='/user/<?php echo $id;?>'>跳转</a></p>
										</div>
										<div class='modal-footer'>
										</div>
										...
								</div>
						</div>
				</div>
		</div>
		<div class='col-md-3'>
		</div>
</div>
</article>
@endsection
