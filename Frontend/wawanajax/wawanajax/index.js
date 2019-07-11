module.exports = {
	wget:function (scope,api,data,callback){
		const wget=$.ajax({
			type:"GET",
			url:api,
			success:function(result){
				if(result){
					callback.call(this,result,scope);
				}
			},
			error:function(err){
				console.log(err);
			},
			dataType:'json'
		})
	},
	wpost:function (scope,api,data,callback){
		const wpost=$.ajax({
			type:"POST",
			url:api,
			data:data,
			success:function(result){
				if(result){
					callback.call(this,result,scope);
				}
			},
			error:function(err){
				console.log(err);
			},
			dataType: 'json',
	    	contentType: 'application/json'	
		})
	},
	wput:function(scope,api,data,callback){
		const wput=$.ajax({
			type:"PUT",
			url:api,
			data:data,
			success:function(result){
				if (result){
					callback.call(this,result,scope)
				}
			},
			error:function(err){
				console.log(err);
			},
			dataType: 'json',
    		contentType: 'application/json'	
		})
	},
	wdelete:function(scope,api,data,callback){
		const wput=$.ajax({
			type:"DELETE",
			url:api,
			success:function(result){
				if (result){
					callback.call(this,result,scope)
				}
			},
			error:function(err){
				console.log(err);
			},
			dataType: 'json',
    		contentType: 'application/json'	
		})
	}
}