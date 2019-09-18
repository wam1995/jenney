/*

*/

jQuery(document).on('click', '.install-nc-store-now', function(event) {
	event.preventDefault();

	var $ = jQuery;
	var that = $(this);

	if( !that.hasClass('ing') ){
		that.text('正在安装...').addClass('ing');

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			dataType: 'json',
			data: {action: 'joytheme-xyz-install'},
		})
		.done(function( data ) {
			if( data.status == 200 ){

				that.text('安装成功');

				if( confirm('安装成功，现在就启动他？') == true ){
					window.location.href = data.url;
				}

			}else{
				alert( data.msg );
			}
		})
		.fail(function() {
			alert('网络错误，请稍后再试！')
		});

	}

});



