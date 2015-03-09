function timeOut(time,url)//倒计时跳转页面
{
		t=time;
		setInterval(function(){
				t=t-1;
				timeFlu(t,url);
		},1000);
}
function timeFlu(a,url) 
{
		if (a<0) {
				location.href=url; //不知道什么原因 无效
				return false;
		}
		$('#success').html('<h3>修改成功</h3><p>'+a+'后登出</p>');
}

function ajaxFileUpload()// 尚未启用
{
$.ajaxSetup({
		    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
});
		var url='avatar';
		$.ajaxFileUpload({
				url:url,
				type:'POST',
				data:{"name":'123'},
				dataType:'json',
				success:function(data){
						alert(data);
				},
				error:function(data){
						alert(data);
				}
		});
		return false;
}
function changePassword()//修改密码
{
		$.ajaxSetup({
		    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')// 用于传送csrf-token，用于laravel的安全验证
		    }
});

		var id=$('#id').val();
		var oldPassword=$('#oldPassword').val();
		var newPassword=$('#newPassword').val();
		var confirmPassword=$('#confirmPassword').val();
		var url='/user/'+id+'/changePassword';
		var para={"oldPassword":oldPassword,"newPassword":newPassword};
		if (confirmPassword!=newPassword) {
				$('#changePwd').html('<h3 style=\'text-align:center\'>两次输入密码不一致!请重新输入!</h3>');
		} else {
				$.ajax({
						url:url,
						type:'POST',
						data:para,
						success:function(data){
								if(data.msg==0) {
										timeOut(6);
								} else if (data.msg==1) {
										$('#changePwd').html('<h3 style=\'text-align:center\'>原始密码错误!</h3>');
								}
						}
				});
		};
		return false;
}
$(document).ready(function() //地区框选择功能
				{
		$.ajaxSetup({
		    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')// 用于传送csrf-token，用于laravel的安全验证
		    }
		});
						$('#province').change(function() {//判断省，加载城市
								var province=$('#province').val();
								var data={"province":province};
								var url='/listLocation';
								$.ajax({
										url:url,
										type:'POST',
										data:data,
										success:function(data) {
												$('#city').empty();
												$('#city').append('<option value=\'\'>请选择</option>');
												$.each(data,function(key,value) {
														$('#city').append('<option value=\''+value+'\'>'+value+'</option>');
												});
										}
								})

						});

						$('#city').change(function() {//判断城市，加载区县
								var city=$('#city').val();
								var data={"city":city};
								var url='/listLocation';
								$.ajax({
										url:url,
										type:'POST',
										data:data,
										success:function(data) {
												$('#town').empty();
												$('#town').append('<option value=\'\'>请选择</option>');
												$.each(data,function(key,value) {
														$('#town').append('<option value=\''+value+'\'>'+value+'</option>');
												});
										}
								})

						});
				})
function post() //ajax发布文章函数
{
		$('#progress').css({'height':'2px'}).animate({'width':'100%'},15000);
		$.ajaxSetup({
		    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')// 用于传送csrf-token，用于laravel的安全验证
		    }
		});
		var str=''; 
		var title=$('#title').val();
		var province=$('#province').val();
		var city=$('#city').val();
		var town=$('#town').val();
		var detail=$('#detail').val();
		var phone=$('#phone').val();
		var qq=$('#qq').val();
		var price=$('#price').val();
		var content=um.getContent();
		var locations='中国,'+province+','+city+','+town+','+detail; //用','分割，用于后续页面展示分割用
		var communication=phone+','+qq;
		var facility=$('input[name=\'facility\']:checked'); //获取所有被选中的checkbox
		facility.each(function() { //获取被选中checkbox的Value 并用','分割
				str+=$(this).val()+',';
		});
		if (str.length>0) {
				facility=str.substring(0,str.length-1); //去除末尾的','
		} else {
				facility='无';
		};
		var postType=$('#postType').val();
		switch(postType){
				case('A'):
						var age=$('#age').val();
						var job=$('#job').val();
						var sex=$('#sex').val();
						var parastr={"title":title,"location":locations,"communication":communication,"price":price,"age":age,"job":job,"sex":sex,"content":content,"facility":facility};
						var url='/user/1/A';
						$.ajax({
								url:url,
								type:'POST',
								data:parastr,
								success:function(data) {
										if(data) {
												$('#progress').fadeOut();
												timeOut(6,url);
												$('#postSuccess').modal();
										}
								}

						});
						break;
				case('B'):
						var square=$('#square').val(); 
						var type=$('#type').val();
						var direction=$('#direction').val();
						var dress=$('#dress').val();
						var parastr={"title":title,"location":locations,"communication":communication,"price":price,"content":content,"square":square,"homeType":type,"dress":dress,"direction":direction,"facility":facility};
						var url='/user/1/B';
						$.ajax({
								url:url,
								type:'POST',
								data:parastr,
								success:function(data) {
										if(data) {
												$('#progress').fadeOut();
												timeOut(6,url);
												$('#postSuccess').modal();
										}
								}

						});
						break;
				default:
						var square=$('#square').val(); 
						var type=$('#type').val();
						var dress=$('#dress').val();
						var parastr={"title":title,"location":locations,"communication":communication,"price":price,"content":content,"square":square,"homeType":type,"dress":dress,"facility":facility};
						var url='/user/1/C';
						$.ajax({
								url:url,
								type:'POST',
								data:parastr,
								success:function(data) {
										if(data) {
												$('#progress').fadeOut();
												timeOut(6,url);
												$('#postSuccess').modal();
										}
								}

						});
						break;
		};
		return false;
}
function listArticle(type)  //没有启用
{
		var url='/listArticle';
		var parastr={"type":type};
		$.ajax({
				url:url,
				type:'POST',
				data:parastr,
				success:function(data) {
								$('#masonry').empty();
								$.each(data,function(key,value) {
										if (value['post_type']=1) {
												var element='<div class=\'box\'>'+value['content']+'<div class=\'masonry-tab\'><label class=\'label label-warning\'>'+value['price']+'</label><label class=\'label label-success\'>'+value['age']+'</label><label class=\'label label-success\'>'+value['sex']+'</label><label class=\'label label-success\'>'+value['job']+'</label><label class=\'label label-success\'>'+value['location']+'</label><span>'+value['title']+'</span></div></div>';
												$('#masonry').prepend(element);
										}
						});
								var container=$('#masonry');
								var result=container.find('.box');
								container.masonry('prepended',result);
							

				}
		});
}

$(document).on('click','#load-more a',function(){ //ajax加载下一页
		$('#progress').css({'height':'2px'}).animate({'width':'100%'},15000);
		var url=$(this).attr('href');
		$.ajax({
				url:url,
				type:'POST',
				success:function(data) {
						var result=$(data).find('.box');
						$('#masonry').append(result);
						var container=$('#masonry');
						container.masonry('appended',result);
						var newUrl=$(data).find('#load-more a').attr('href');
						$('#load-more a').attr('href',newUrl);
						$('#progress').css({'height':'0'});
				}

		})
		return false;
})
function getComment(id) //页面载入完毕获取评论页面
{
		$('#progress').css({'height':'2px'}).animate({'width':'100%'},15000);
		var url='/comment/'+id;
		$.ajax({
				url:url,
				type:'POST',
				success:function(data){
						$('#comment').empty();
						$('#comment').append(data);
						$('#progress').stop(true,true);
						$('#progress').fadeOut();
				}
		});
}
function getCommentArea(id,postId,parentId)
{
		var parastr={"id":id,"postId":postId,"parentId":parentId};
		var url='/commentArea';
		$.ajax({
				url:url,
				type:'POST',
				data:parastr,
				success:function(data){
						if (parentId==0) {
						$('#commentArea').empty();
						$('#commentArea').append(data);
						} else {
								$('#commentArea').css({'display':'none'});
								$('#reply-'+parentId).css({'display':'none'});
								$('#cancelReply-'+parentId).css({'display':'inline'});
								$('#commentArea-'+parentId).empty();
								$('#commentArea-'+parentId).css({'display':'block'});
								$('#commentArea-'+parentId).append(data);
						}
				}
		});
}
function cancelReply(parentId)
{
								$('#reply-'+parentId).css({'display':'inline'});
								$('#cancelReply-'+parentId).css({'display':'none'});
								$('#commentArea').css({'display':'block'});
								$('#commentArea-'+parentId).css({'display':'none'});
}
$(document).on('click','#pageNav a',function(){ //评论ajax翻页

		$('#progress').css({'height':'2px'}).animate({'width':'100%'},15000);
		var url=$(this).attr('href');
		$.ajax({
				url:url,
				type:'POST',
				success:function(data){
						$('#commentBody').remove();
						$('#comment').append(data);
						$('#progress').stop(true,true);
						$('#progress').fadeOut();
				}
		});
		return false;
})
function postComment()
{
		var userId=$('#userId').val();
		var postId=$('#postId').val();
		var parentId=$('#parentId').val();
		var comment=$('#commentText').val();
		var parastr={"userId":userId,"postId":postId,"parentId":parentId,"comment":comment};
		var url='/postComment';
		$.ajax({
				url:url,
				type:'POST',
				data:parastr,
				success:function(data) {
						$('#commentArea').empty();
						$('#commentArea').append(data);
				}

		});
		return false;
}
$(document).ready(function(){
})
