<?php
include "../inc/header.php" ?>

<?php
if (isset($_POST["upload"])) {
  # code...


/*Tyrkçe karakter kontrol yapılıyor varsa ingilizce karaktere çeviriliyor */
function turkce($metin){
   $aranan=array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü"," ");
   $yerine=array("c","c","g","g","i","i","o","o","s","s","u","u","_");
   return str_replace($aranan,$yerine,$metin);
}

   $gecici_ad=$_FILES["file"]["tmp_name"];
   $kalici_yol_ad="../images/".rand(1, 100000000)."_".turkce($_FILES["file"]["name"]);

   if ($_FILES["file"]["error"]) // hata oluştu ise
      echo "<font color='green'>Hata : ",$_FILES["file"]["error"],"</font>";
   else{
      if (file_exists($kalici_yol_ad)) // yüklenen dosya upload dizininde varsa
         echo "<script>alert('Yazdığınız ad ile bir dosya zaten kayıtlıdır.');</script>";
      else{
          if ($_FILES["file"]["size"]<1000*1024) {
                  if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) {// eğer dosya kaydedilirse
                  $pdo = new PDO("mysql:host=localhost;dbname=uninote;charset=utf8","root","");
                  $my_email = $_SESSION["email"];
                  $control = $pdo->query("SELECT id FROM user WHERE email='$my_email'");
                  $result = $control->fetch(PDO::FETCH_LAZY);

                  $my_id = $result->id;
                  $control2 = $pdo->query("SELECT id FROM images WHERE id='$my_id'");
                  $result2 = $control2->fetch(PDO::FETCH_LAZY);
                            if ($result2) {
                              $son_id = $result2->id;
                              $pdo->query("UPDATE images SET image_file = '$kalici_yol_ad' WHERE id='$son_id'");
                              echo "<script>alert('Resminiz update edilmiştir.');</script>";

                            }else{
                            $pdo->query("INSERT INTO images(image_file,user_id)
                             VALUES ('$kalici_yol_ad','$my_id')");

                              echo "<script>alert('Dosya başarı ile yüklendi.');</script>";

                            }
                   }else
                   {
                      echo "<script>alert('Dosya yükleme başarısız. Tekrar deneyiniz.');</script>";
                   }
          }else {
            echo "<script>alert('Lutfen 1MB dan kucuk dosya seciniz...');</script>";
          }

        }
   }



}

 ?>
<div class="col-md-8 col-md-offset-2">
  <h3>Settings</h3>

  <div class="w3-card-4 w3-animate-opacity" style="background-color: white;" >

    <div class="w3-container w3-blue" style="    background-color: #39435C!important; text-align:center;">
    <h2>Uninote Add</h2>
    </div>
  <hr>

  <form class="w3-container" enctype="multipart/form-data" action="" method="post">


              <label>Fotografınız seciniz..</label>
              <input type="file" name="file" required="yaz lan"  ><hr>
              <button class="w3-btn w3-white w3-border w3-border-blue w3-round w3-btn-block " type="submit" name="upload">Upload</button>
            </p>
    </form>

  </div>

</div>
<?php include "../inc/footer.php" ?>
 ?>
