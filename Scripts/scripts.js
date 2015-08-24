$(document).ready(function(e) {
    $('#editor').hide();
	$('#add').click(function(){
		alert('work');
		$.ajax({
			'method':'post',
			'url':'addprod.php',
			'data':{name:$('#name').val(),
					imgname:$('#imgname').val(),
					catname:$('#catname').val(),
					price:$('#price').val(),
					stock:$('#stock').val(),
					desc:$('#desc').val()}
			
			}).done(function(res){
				alert(res);
					if(res==0)
					alert('Bro, you are entering something wrong');
					else if(res==1)
					{
					alert('It seems you are trying to enter an already existing product. Please use EDIT to change an existing product ');
					$('#name').focus();
					$('.back').animate({'height':'4em','font-weight':'bold'},1000);
					}
					else if(res==2)
					{
						alert('Ok, we are cool, everythings done.');
						$('input').val('');
						$('textarea').val('');
					}
					
			});
		
		return false;
		});
		
		$('.remove').click(function(){
			//var confirm=confirm("Is it ok to delete this record?");
			var prodId = $(this).parent().siblings('.id').text();
    		var prodName = $(this).parent().siblings('.pname').text();
			var dec=confirm('Is it ok to delete this record?'+prodId+' '+prodName);
		if(dec==true){
		$.ajax({
			'method':'post',
			'url':'removeprod.php',
			'data':{id:$(this).attr('value')}
			
			}).done(function(res){
					if(res==0)
					{
						alert('It seems you are trying to delete a non-existing product. Please use EDIT to change an existing product ');
					}
					else if(res==1)
					{
						alert('Ok, we are cool, everythings done.');
					}
					updatePage();
					
			});
		}
		return false;
		});
			
		$('.edit').click(function(){
			var prodId = $(this).parent().siblings('.id').text();
    		var prodName = $(this).parent().siblings('.pname').text();
			var prodPrice = $(this).parent().siblings('.price').text();
			var prodImg = $(this).parent().siblings('.pimage').text();
			var prodDesc = $(this).parent().siblings('.desc').text();
			var prodStock = $(this).parent().siblings('.stock').text();
			var prodCatname = $(this).parent().siblings('.catname').text();
			
			$('#editor').show('slow');
			
			$('#id').val(prodId);
			$('#name').val(prodName);
			$('#imgname').val(prodImg);
			$('#catname').val(prodCatname);
			$('#stock').val(prodStock);
			$('#desc').val(prodDesc);
			$('#price').val(prodPrice);
			
			
		
		return false;
		});
		
		$('#update').click(function(){
			alert($('#name').val()+$('#imgname').val()+$('#catname').val()+$('#price').val()+$('#stock').val()+$('#desc').val()+$('#id').val());
			$.ajax({
			'method':'post',
			'url':'addprod.php',
			'data':{name:$('#name').val(),
					imgname:$('#imgname').val(),
					catname:$('#catname').val(),
					price:$('#price').val(),
					stock:$('#stock').val(),
					desc:$('#desc').val(),
					id:$('#id').val()}
			
			}).done(function(res){
				alert('im here'+res);
					if(res==0)
					alert('Bro, you are entering something wrong');
					else if(res==2)
					{
						alert('Ok, we are cool, everythings done.');
						$('#editor').hide();
						updatePage();
					}
					
			});
		
		return false;
		
		});
		
		$('table tr:odd').addClass('odd');
		$('table tr:even').addClass('even');
		});
		
		
		
		function updatePage(){
			window.location.reload();
			};