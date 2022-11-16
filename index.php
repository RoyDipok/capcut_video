

<?php


$id = $_REQUEST['url'];
$response = file_get_contents($id);
//profile image fetch
$_1st = explode("dqQwHi7U9SevwDbKR9TA", $response)[0];
$_2nd = explode("<img src=", $_1st);
$user_image = $_2nd[count($_2nd) - 1];
$user_image = str_replace('"', "", $user_image);
$user_image = str_replace(' ', "", $user_image);
$user_image = str_replace('class=', "", $user_image);
//fetch end
//profile name fetch
$_1st = explode('"VD22lu202vitpJYvi0OV">', $response)[1];
$_2nd = explode("</h2>", $_1st)[0];
$user_name = $_2nd;
//fetch end
//fetch preview
$_1st = explode('bf3jnstij5FJqcgNwzxw', $response)[1];
$_2nd = explode("</video>", $_1st)[0];
$_3rd = explode('src="' , $_2nd)[1];
$_4th = explode('"', $_3rd)[0];
$url_main = $_4th;
//fetch end
//fetch cover
$_1st = explode('bf3jnstij5FJqcgNwzxw', $response)[1];
$_2nd = explode("</video>", $_1st)[0];
$_3rd = explode('poster="' , $_2nd)[1];
$_4th = explode('"', $_3rd)[0];
$poster = $_4th;
//fetch cover
//fetch open_url
$v_id = str_replace("https://www.capcut.com/watch/", '', $id);
$video_open =  "https://ttanchor.onelink.me/VQBU/CapCutSharedPage1?af_force_deeplink=true&af_dp=capcut://template/detail?template_id=$v_id&tab_name=template&enter_from=shared_h5link_template";

$return['user_image'] = $user_image;
$return['preview'] = $url_main;
$return['poster'] = $poster;
$return['open_link'] =$video_open;


//https://v16-vod.capcutvod.com/1156d242edb57e47f4780bb459cd0a3c/6343f1a8/video/tos/alisg/tos-alisg-v-643f9f/1f4d3a1ce5614469b5371b51747ff92a/?a=3006&ch=0&cr=0&dr=0&lr=all&cd=0%7C0%7C0%7C0&cv=1&br=2022&bt=1011&cs=0&ds=3&ft=iD15Ag3-InzxtH4_ABM&mime_type=video_mp4&qs=0&rc=ZzU7ZDM5Zzs8aDo8NDdpPEBpamVqZzc6ZmpsNzMzOGVkNEAuLjVfNjE2NV8xMC1gYzIyYSNtLW4xcjRfbmNgLS1kYi1zcw%3D%3D&l=2022101004191001018602920517A7AE7B&btag=80000"

//https://ttanchor.onelink.me/VQBU/CapCutSharedPage1?af_force_deeplink=true&af_dp=capcut://template/detail?template_id=7077433743136361729&tab_name=template&enter_from=shared_h5link_template


print_r(json_encode($return));

?>


