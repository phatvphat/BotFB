<?php
error_reporting(0);
$token = 'EAAAACZAVC6ygBAJwe6F0oDbj0Fy2mUZBhHbnzdZCOJCcvP502ZAoKOb1jlQh5EFGDtgPz0fkvaSV8QSKZAtCYcEuld6NTMsjJTGRM0uVbSkpg1CVzYPNIPhZCFY7vwtHeJZCvcTVzZBq5sMVdij1qa0V86ojlESsGCMZD';
define("ACCESS_TOKEN",$token);
function auto($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return $data;
}
function icon_fb($mess)
{
	$dir = 'http://'.$_SERVER["HTTP_HOST"].'/fb/icon';
	$sty = 'width="28" height="28"';
	$a = array(
		'/😍/',
			'/💩/',
				'/😂/',
					'/😳/',
						'/👊/',
							'/😚/',
								'/😝/',
									'/👎/',
										'/😶/',
											'/😒/',
												'/😭/',
													'/😘/',
														'/😩/',
															'/😇/',
																'/😛/',
																	'/😙/',
																		'/🎂/',
																			'/💓/',
																				'/😪/',
																					'/😋/'
	);
	$b = array(
		'<img src="'.$dir.'/1f60d.png" '.$sty.'/>',
			'<img src="'.$dir.'/1f4a9.png" '.$sty.'/>',
				'<img src="'.$dir.'/1f602.png" '.$sty.'/>',
					'<img src="'.$dir.'/1f633.png" '.$sty.'/>',
						'<img src="'.$dir.'/1f44a.png" '.$sty.'/>',
							'<img src="'.$dir.'/1f61a.png" '.$sty.'/>',
								'<img src="'.$dir.'/1f61d.png" '.$sty.'/>',
									'<img src="'.$dir.'/1f44e.png" '.$sty.'/>',
										'<img src="'.$dir.'/1f636.png" '.$sty.'/>',
											'<img src="'.$dir.'/1f612.png" '.$sty.'/>',
												'<img src="'.$dir.'/1f62d.png" '.$sty.'/>',
													'<img src="'.$dir.'/1f618.png" '.$sty.'/>',
														'<img src="'.$dir.'/1f629.png" '.$sty.'/>',
															'<img src="'.$dir.'/1f607.png" '.$sty.'/>',
																'<img src="'.$dir.'/1f61b.png" '.$sty.'/>',
																	'<img src="'.$dir.'/1f619.png" '.$sty.'/>',
																		'<img src="'.$dir.'/1f382.png" '.$sty.'/>',
																			'<img src="'.$dir.'/1f493.png" '.$sty.'/>',
																				'<img src="'.$dir.'/1f62a.png" '.$sty.'/>',
																					'<img src="'.$dir.'/1f60b.png" '.$sty.'/>'
	);
	$res = preg_replace($a,$b,$mess);
return $res;
}
function non_vi($str){
$unicode = array(
'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
'd'=>'đ',
'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
'i'=>'í|ì|ỉ|ĩ|ị',
'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
'D'=>'Đ',
'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
''=>' ',
);
foreach($unicode as $nonUnicode=>$uni){
$str = preg_replace("/($uni)/i", $nonUnicode, $str);
}
return $str;
}
?>
