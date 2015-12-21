addEventListener('load', initiate);

function initiate(){
			dell=document.querySelectorAll('.dell');
				
				for (var i=0,cnt=dell.length; i<cnt;i++){
				
				dell[i].addEventListener('click',function(){
				var url=this.getAttribute('data_url');
				var ask='вы действительно хотите удалить?';
					if (confirm(ask)){
					//console.log(url);
					document.location.href=url;
						}
					else{
					console.log('NO');
			}
	});
	}
	}
