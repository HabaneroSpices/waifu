<?php
  include_once 'inc/dbh.inc.php';

if(isset($_GET['t'])){
    $id = $_GET['t'];
    $stat = $db->prepare("SELECT * FROM torrents WHERE torrent_id=?;");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();
    if(!$data['torrent_id'])
    {
        header("Location: dl.php?err=id-not-found");
    } else {
	if($data['torrent_disabled'])
	{
	  header("Location: dl.php?err=torrent_disabled");
	} else {
        $file = '../storage/torrents/'.$data['torrent_path'];

        if(!file_exists($file)){
            header("Location: dl.php?err=file-not-found");
        }
        else {
            header('Content-Type: torrent');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: '.filesize($file));
            readfile($file);
            exit;
        }
    }
}
} elseif($_GET['err']){
    $err = $_GET['err'];
    echo "Error: ";
    switch($err) {
    case "id-not-found":
        echo "Torrent not found in database.";
        break;
    case "file-not-found":
        echo "Torrent not found on server.";
        break;
    case "torrent_disabled":
	echo "Torrent has been disabled.";
	break;
    default:
        echo "Unkown.";
    }
} else {
    header("Location: /");
}
