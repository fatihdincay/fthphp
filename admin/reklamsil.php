<!-- Şuanki Modülde giriş yetkisi kontrolü yok eğer eklenmezse parametre link yöntemi ile datalar yetki dışı silinebilir 

Tavsiye
1-> Session oturumu burada tekrar eklemek
2-> Session oturumu baglan.php sayfasına eklemek
3->Aşağıdaki modül ilgili sil butonun olduğu sayfada en sona yazılabilir
Not:Header ve footerı işlem hızını artırmak için çağırmadık.
-->
<?php 

require_once('baglan.php'); 

$id = $_GET['id'];
$sorgu = $db->prepare('delete from reklam where id=?');
$sorgu->execute(array($id));
if ($sorgu->rowCount()) {
    echo '<meta http-equiv="refresh" content="0; url=reklam.php">';
    
} else {
    echo '<meta http-equiv="refresh" content="0; url=reklam.php">';
}
 ?>