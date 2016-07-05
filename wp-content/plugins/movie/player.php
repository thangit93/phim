<?php
function cut_str($str_cut,$str_c,$val) {
    $url=explode($str_cut,$str_c);
    $urlv=$url[$val];
    return $urlv;
}

function get_link_total($url) {
    global $wpdb;
    $link = $url;
    $mylink='http://top1vn.info/player/mediaplayer.swf?file=';
    $t="";
    if (preg_match("#thienduongviet.org/getlink/(.*?)#", $url)) {
        $link=str_replace('http://top1vn.info/player/mediaplayer.swf?file=',$mylink,$url);
        $url=$link;
    }

    elseif (preg_match("#video.google.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }

    elseif (preg_match("#ooyala.com/online/(.*?)#s",$url)) {
        $id = cut_str('online/',$url,1);
        $link2=$id;
        $url=$link2;
    }
	
    elseif (preg_match("#go.vn/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#modovideo.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#movreel.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#openfile.ru/video/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#divxstage.eu/video/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#uploads.glumbo.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#sharefiles4u.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#banbe.net/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#xvidstage.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#hulkshare.com/(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
    
    elseif (preg_match('#veoh.com/(.*?)#s', $url, $id_sr)){
        $id = cut_str('watch/',$url,1);
        $link2=$id;
        $url=$link2;
    }
    
    elseif (preg_match('#picasaweb.google.com/(.*?)#s', $url, $id_sr)){
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#http://v1vn.com/xem-phim-online/(.*?).html#s",$url, $id_sr)){
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match('#2shared.com/file/(.*?)#s', $url, $id_sr)){
        $id = cut_str('file/',$url,1);
        $link2=$id;
        $url=$link2;
    }
	
    else if (preg_match('#2shared.com/video/(.*?)#s', $url, $id_sr)){
        $id = cut_str('video/',$url,1);
        $link2=$id;
        $url=$link2;
    }
	
    else if (preg_match('#4shared.com/file/(.*?)#s', $url, $id_sr)){
        $id = cut_str('file/',$url,1);
        $link2=$id;
        $url=$link2;
    }
		
    else if (preg_match('#4shared.com/video/(.*?)#s', $url, $id_sr)){
        $id = cut_str('video/',$url,1);
        $link2 = $id;
        $url = $link2;
    }
		
    else if (preg_match('#4shared.com/embed/(.*?)#s', $url, $id_sr)){
        $id = cut_str('embed/',$url,1);
        $link2=$id;
        $url=$link2;
    }
	
    elseif (preg_match("#videoweed.es/file/([^/]+)#",$url,$id_sr)) {
        $id = cut_str('file/',$url,1);
        $link2='http://embed.videoweed.es/embed.php?v='.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#videobb.com/video/([^/]+)#",$url,$id_sr)) {
        $id = cut_str('video/',$url,1);
        $link2='http://videobb.com/e/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#videobb.com/e/([^/]+)#",$url,$id_sr)) {
        $id = cut_str('e/',$url,1);
        $link2='http://videobb.com/e/'.$id;
        $url=$link2;
    }
		
    else if (preg_match('#share.vnn.vn/dl.php/(.*?)#s', $url, $id_sr)){
        $id = $url;
        $url=$id;
    }
    
    else if (preg_match("#videozer.com/embed/(.*?)#s", $url, $id_sr)){
        $id = cut_str('embed/',$url,1);
        $link2='http://videozer.com/flash/'.$id;
        $url=$link2;
    }
    
    else if (preg_match('#videozer.com/video/(.*?)#s', $url, $id_sr)){
        $id = cut_str('video/',$url,1);
        $link2='http://videozer.com/flash/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match('#clip.vn/watch/(.*?)#s',$url)) {
        $id = cut_str('/',$url,4);
        $link2 = 'http://clip.vn/watch/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match('#clip.vn/w/(.*?)#s',$url)) {
        $id = cut_str('/',$url,4);
        $link2 = 'http://clip.vn/w/'.$id;
        $url=$link2;
    }
    
    elseif (preg_match("#dailymotion.com/video/(.*?)#s",$url,$id_sr)) {
        $id = cut_str('/',$url,4);		
        $link2='http://www.dailymotion.com/swf/'.$id;
        $url=$link2;
    }
   
    elseif (preg_match("#youtube.com/watch\?v=(.*?)#s", $url,$id_sr)){
        $id=cut_str('=',$url,1);
        $link2='http://www.youtube.com/v/'.$id;
        $url=$link2;
    }
	
    else if (preg_match("#hayghe.com/xem-phim/(.*?)#s", $url,$id_sr)){
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#youtube.com/v/([^/]+)#",$url,$id_sr)) {
        $id = cut_str('v/',$url,1);
        $link2='http://www.youtube.com/watch?v='.$id;
        $url=$link2;
    }

	
    elseif (preg_match("#youtube.com/feeds/api/playlists/([^/]+)#",$url,$id_sr)) {
        $id = cut_str('playlists/',$url,1);
        $link2='http://gdata.youtube.com/feeds/api/playlists/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#viddler.com/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#video.zing.vn/([^/]+)#",$url,$id_sr)){
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#video.zing.vn/video/clip/([^/]+)#",$url,$id_sr)){
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match("#mp3.zing.vn/tv/media/([^/]+)#",$url,$id_sr)){
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match("#nhaccuatui.com(.*?)#s", $url)){
        $kind=substr($url,31,1);
        $id = cut_str('=',$url,1);
        $link=$mylink.'/nct/'.$id.'.flv';
        if($kind=="M")	
            $url='http://www.nhaccuatui.com/m/'.$id;
        else if($kind=="L")
            $url='http://www.nhaccuatui.com/L/'.$id;
    }
	
    else if (preg_match("#video.timnhanh.com/xem-clip/([^/]+)#",$url,$id_sr)) {
        $id = $id_sr[1];
        $link='http://vn1.vtoday.net/vtimnhanh/'.$id.'.flv';
        $url=$web_link.'/'.'player.swf?autostart=false&file='.$link;
    }
	
    else if (preg_match("#http://video.yume.vn/xem-clip/([^/]+)#",$url,$id_sr)) {
        $id = $id_sr[1];
        $link='http://vn1.vtoday.net/vtimnhanh/'.$id.'.flv';
        $url=$web_link.'/'.'player.swf?autostart=false&file='.$link;
    }
		
    else if (preg_match("#http://video.yume.vn/video-clip/([^/]+)#",$url,$id_sr)) {
        $id = $id_sr[1];
        $link='http://vn1.vtoday.net/vtimnhanh/'.$id.'.flv';
        $url=$web_link.'/'.'player.swf?autostart=false&file='.$link;
    }
		
	
    else if (preg_match("#badongo.com/vid/(.*?)#s", $url,$id_sr)){
        $id=cut_str('/',$url,4);
        $link2='http://www.badongo.com/vid/'.$id.'';
        $url=$link2;
    }
	
	
    else if (preg_match("#sendspace.com/file/(.*?)#s", $url)){
        $id = cut_str('/',$link,4);
        $link2='http://www.sendspace.com/file/'.$id;
        $url=$link2;
    }
	
    else if (preg_match("#vidxden.com/(.*?)#s", $url)){
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match("#movshare.net/video/(.*?)#s", $url)){
        $id = cut_str('/',$link,4);
        $link2='http://www.movshare.net/video/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#twitvid.com/(.*?)#s",$url)) {
        $id = cut_str('/',$url,3);
        $link2='http://www.twitvid.com/embed.php?guid='.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#ovfile.com/(.*?)#s",$url)) {
        $id = cut_str('/',$url,3);
        $link2='http://ovfile.com/'.$id;
        $url=$link2;
    }
	
    else if (preg_match("#novamov.com/video/(.*?)#s", $url)){
        $id = cut_str('/',$link,4);
        $link2='http://www.novamov.com/video/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#zippyshare.com/v/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#cyworld.vn/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#megafun.vn/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
	
    elseif (preg_match("#[0-9]/[0-9]+(.*?)#s",$url)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#speedyshare.com/files/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match("#mediafire.com/?(.*?)#s", $url)){
        $id = $url;
        $url=$id;
    }
	
    else if (preg_match("#video.tamtay.vn/(.*?)#s", $url)){
        $id = cut_str('/',$link,4);
        $link2='http://video.tamtay.vn/play/'.$id;
        $url=$link2;
    }
	
    elseif (preg_match("#video.rutube.ru/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#video.seeon.tv/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#zalaa.com/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#vidbux.com/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#eyvx.com/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }
	
    elseif (preg_match("#film.rolo.vn/([^/]+)#",$url,$id_sr)) {
        $id = $url;
        $url=$id;
    }

    if (($t=="") && (substr_count($url,$web_link.'/player.swf') != 0)) 	
    //$url=$url.'&plugins=captions-1&captions.file='.$web_link.'/'.'captions.xml&captions.back=ffff&logo='.$web_link.'/logo.png';	
    $url=$url.'&logo='.$web_link.'/logo.png';
    if ($type==0) $trave=$url;
    elseif ($type==1) $trave=$link;
    return $trave;
    }


function players($url){
    global $wpdb;$type=acp_type($url);
    $mahoa="aHR0cDovL3d3dy55b3V0dWJlLmNvbS92L1ZLc3F4b21SM0tv";
    $url = get_link_total($url);
    //3zing, 
	if ($type==1 || $type==2 || $type==3 || $type==9 || $type==10 || $type==12 ||$type==13 || $type==17 ||$type==18 || $type==19 || $type==20)  
	$player = "<embed width=\"670\" height=\"500\" name=\"flashplayer\" src=\"".get_site_url()."/static/player/player.swf\" FlashVars=\"plugins=captions,".get_site_url()."/static/player/plugins/proxy.swf&proxy.link=$url&skin=".get_site_url()."/static/player/lightrv5/lightrv5.xml&autostart=false&captions.file=".get_site_url()."/static/player/default.srt&captions.fontFamily=Arial&captions.fontSize=17&captions.fontWeight=bold&captions.state=true\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" />";
        //youtube
	elseif ($type==4)
            $player = "<embed width=\"670\" height=\"500\" name=\"flashplayer\" src=\"".get_site_url()."/static/player/player.swf\" FlashVars=\"plugins=captions,".get_site_url()."/static/player/plugins/proxy.swf&proxy.link=$url&skin=".get_site_url()."/static/player/lightrv5/lightrv5.xml&autostart=false&captions.file=".get_site_url()."/static/player/default.srt&captions.fontFamily=Arial&captions.fontSize=17&captions.fontWeight=bold&captions.state=true\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" />";
	
        elseif ($type==21)
            $player = "<iframe src=\"http://phim.styledn.net/grab/grabv1vn.php?link=$url&amp;autostart=false&amp;allowfullscreen=true\"  width=\"100%\" height=\"500\" frameborder=\"0\"></iframe>";
	
        elseif ($type==22)
            $player = "<embed src=\"http://phim.styledn.net/grab/grabhg.php?link=$url\" width=\"100%\" height=\"500\" allowfullscreen=\"true\" allowscriptaccess=\"always\" autostart=\"true\"/>";
	
        //picasaweb
	elseif($type==5)
            // $player = "<embed width=\"670\" height=\"500\" name=\"flashplayer\" src=\"".get_site_url()."/static/player/player.swf\" FlashVars=\"plugins=captions,".get_site_url()."/static/player/plugins/proxy.swf&proxy.link=$url&skin=".get_site_url()."/static/player/lightrv5/lightrv5.xml&autostart=false&captions.file=".get_site_url()."/static/player/default.srt&captions.fontFamily=Arial&captions.fontSize=17&captions.fontWeight=bold&captions.state=true\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" />";
            $player = "<embed width=\"670\" height=\"500\" name=\"flashplayer\" src=\"".get_site_url()."/static/player/player.swf\" FlashVars=\"plugins=captions,".get_site_url()."/static/player/plugins/proxy.swf&proxy.link=$url&skin=".get_site_url()."/static/player/lightrv5/lightrv5.xml&autostart=false&captions.file=".get_site_url()."/static/player/default.srt&captions.fontFamily=Arial&captions.fontSize=17&captions.fontWeight=bold&captions.state=true\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" />";
	
        elseif ($type==6)
            $player = "<object type=\"application/x-shockwave-flash\" data=\"http://www.movshare.net/player/player.swf\" width=\"100%\" height=\"410\"><param name=\"allowfullscreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"wmode\" value=\"transparent\" /><param name=\"flashvars\" value=\"plugins=http://anhtrang.org/images/grab.swf&anhtrang.org=$url&autostart=false&repeat=always\" /></object>";

	elseif ($type==7)
            $player = "<center><b><font size=\"5\" color=\"red\"><a href=\"$url\" target=\"_blank\">Nhan vao day de xem phim</a></font></b></center>";
	
        //4shared
	elseif ($type==8)
            $player = "<embed width=\"100%\" height=\"500\" allowfullscreen=\"true\" allowscriptaccess=\"always\" src=\"http://www.4shared.com/embed/$url\" type=\"application/x-shockwave-flash\" />";					
	
        //clipvn
        elseif ($type==11)
            $player = "<embed width=\"670\" height=\"500\" name=\"flashplayer\" src=\"".get_site_url()."/static/player/player.swf\" FlashVars=\"plugins=captions,http://rapphimviet.com/static/player/plugins/proxy.swf&proxy.link=$url&skin=".get_site_url()."/static/player/lightrv5/lightrv5.xml&autostart=false&captions.file=".get_site_url()."/static/player/default.srt&captions.fontFamily=Arial&captions.fontSize=17&captions.fontWeight=bold&captions.state=true\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" />";
	
        elseif ($type==14)
            $player = "type 14";
		
	elseif ($type==15)
		$player = "type 15";
        
        elseif ($type==16)
		$player = "<script type=\"text/javascript\">jwplayer(\"mediaplayer\").setup({\"flashplayer\":\"http://player2.xixam.com/player.swf\",\"width\": \"670\",\"height\": \"450\",\"proxy.link\": \"http://www.dailymotion.com/swf/x11lh85\",\"repeat\": \"list\",\"autostart\": \"true\",\"skin\":\"http://phim22.com/player/youtube/youtube.xml\",\"controlbar\":\"bottom\",\"plugins\":\"captions,timeslidertooltipplugin-2,http://player2.xixam.com/plugins10/proxy.swf\",\"captions.file\": \"http://phim8.vn/sub/nosub.srt\",\"captions.color\": \"#FFCC00\",\"captions.fontFamily\": \"Arian,sans-serif\",\"captions.fontSize\": \"18\",\"logo.file\":\"http://phim8.vn/player/logo.png\",\"logo.position\":\"top-left\",\"logo.margin\":\"18\",\"logo.over\":\"1\",\"logo.out\":\"1\",\"logo.hide\":\"false\",events: {onComplete: function autonext() {Phim3s.Watch.autoNextExecute();}}});</script>";
        
        /*$player=base64_encode($player);
        return '<script type="text/javascript">document.write(Base64.decode("'.$player.'"));</script>';*/
        return $player;

    }

?>