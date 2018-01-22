function auth(type) {
	if(type == 1) var id = '#form-auth';
	else var id = '#form-reg';
	$('#loader-text').text('Загрузка...');
	$('#loader').fadeIn(400);
 	$.ajax({
		type: 'POST',
		url: '/lib/auth.php',
		data: $(id).serialize(),
		success: function(data) {
			var json_data = JSON.parse(data);
			if(json_data['type'] == 'error') {
				toastr.warning(json_data['text']);
				$('#loader').fadeOut(400);
			} else if(json_data['type'] == 'success') {
				toastr.success(json_data['text']);
				setTimeout("document.location.href='/my/'", 1000);
				$('#loader').fadeOut(400);
			}
		}
	});
};

function newpassword() {

				toastr.error('Not ready yet.');
	//$('#loader-text').text('Загрузка...');
	//$('#loader').fadeIn(400);
 	//$.ajax({
	//	type: 'POST',
	//	url: '/system/newpassword.php',
	//	data: $('#form-auth').serialize(),
	//	success: function(data) {
	//		var json_data = JSON.parse(data);
	//		if(json_data['type'] == 'error') {
	//			toastr.warning(json_data['text']);
	//			$('#loader').fadeOut(400);
	//		} else if(json_data['type'] == 'success') {
	//			toastr.success(json_data['text']);
	//			setTimeout("document.location.href='/my/'", 1000);
	//			$('#loader').fadeOut(400);
	//		}
	//	}
	//});
};

function add_link(type) {
	$('#loader-text').text('Загрузка...');
	$('#loader').fadeIn(400);
	if(type == 'check') {
		$.ajax({
			type: 'POST',
			url: '/system/community-add.php',
			data: $('#form-add').serialize(),
			success: function(data) {
				var json_data = JSON.parse(data);
				if(json_data['type'] == 'error') {
					toastr.warning(json_data['text']);
					$('#loader').fadeOut(400);
				} else if(json_data['type'] == 'success') {
					$('#section-1').fadeOut(400);
					$('#section-2').fadeIn(800);
					$(".add-image").attr("src",json_data['text']['community_photo']);
					$(".add-name").text(json_data['text']['community_name']);
					$("input[name='community_name']").val(json_data['text']['community_name'])
					$(".add-id").text('ID: '+json_data['text']['community_id']);
					$("input[name='community_id']").val(json_data['text']['community_id'])
					$(".add-link").html('РЎРѕР·РґР°Р№С‚Рµ РєР»СЋС‡ СЃ РґРѕСЃС‚СѓРїРѕРј Рє С„РѕС‚РѕРіСЂР°С„РёСЏРј СЃРѕРѕР±С‰РµСЃС‚РІР° Рё РІРІРµРґРёС‚Рµ РµРіРѕ РЅРёР¶Рµ. Р”Р»СЏ РіРµРЅРµСЂР°С†РёРё СЃРµРєСЂРµС‚РЅРѕРіРѕ РєР»СЋС‡Р° <a style="color: #fff;" target="_blank" href="https://vk.com/club'+json_data['text']['community_id']+'?act=tokens"><b>РЅР°Р¶РјРёС‚Рµ Р·РґРµСЃСЊ</b></a>.');
					$('#loader').fadeOut(400);
				}
			}
		});
	} else if(type == 'send') {
		$.ajax({
			type: 'POST',
			url: '/system/community-add.php',
			data: $('#form-add1').serialize(),
			success: function(data) {
				var json_data = JSON.parse(data);
				if(json_data['type'] == 'error') {
					toastr.warning(json_data['text']);
					$('#loader').fadeOut(400);
				} else if(json_data['type'] == 'success') {
					toastr.success(json_data['text']);
					setTimeout("document.location.href='/my/communities/'", 1000);
					$('#loader').fadeOut(400);
				}
			}
		});
	}
};

function rowDelete(id) {
 	$.ajax({
		type: 'POST',
		url: '/system/community-add.php',
		data: 'delete='+id,
		success: function(data) {
			if (data == '1') {
				toastr["success"]("РЎРѕРѕР±С‰РµСЃС‚РІРѕ СѓСЃРїРµС€РЅРѕ СѓРґР°Р»РµРЅРѕ!")
				setTimeout("location.reload()", 1000);
			}
		}
	});
}

function settings(type) {
	$('#loader-text').text('Загрузка...');
	$('#loader').fadeIn(400);
	
	if(type == 'reemail') {
		$.ajax({
			type: 'POST',
			url: '/system/settings.php',
			data: $('#form-newemail').serialize(),
			success: function(data) {
				var json_data = JSON.parse(data);
				if(json_data['type'] == 'error') {
					toastr.warning(json_data['text']);
					$('#loader').fadeOut(400);
				} else if(json_data['type'] == 'success') {
					toastr.success(json_data['text']);
					setTimeout("location.reload()", 1000);
					$('#loader').fadeOut(400);
				}
			}
		});
	} else if(type == 'newpass') {
		$.ajax({
			type: 'POST',
			url: '/system/settings.php',
			data: $('#form-newpass').serialize(),
			success: function(data) {
				var json_data = JSON.parse(data);
				if(json_data['type'] == 'error') {
					toastr.warning(json_data['text']);
					$('#loader').fadeOut(400);
				} else if(json_data['type'] == 'success') {
					toastr.success(json_data['text']);
					setTimeout("location.reload()", 1000);
					$('#loader').fadeOut(400);
				}
			}
		});
	} else if(type == 'comm_edit') {
		$.ajax({
			type: 'POST',
			url: '/system/settings.php',
			data: $('#form-edit').serialize(),
			success: function(data) {
				var json_data = JSON.parse(data);
				if(json_data['type'] == 'error') {
					toastr.warning(json_data['text']);
					$('#loader').fadeOut(400);
				} else if(json_data['type'] == 'success') {
					toastr.success(json_data['text']);
					setTimeout("document.location.href='/my/communities/'", 1000);
					$('#loader').fadeOut(400);
				}
			}
		});
	}
}