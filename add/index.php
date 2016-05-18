<?php
include "../inc/header.php" ?>
<?php
/* kayıtların  alındığı alandır... */
if (isset($_POST["share"])) {
  # code...

$option_department = $_POST["option_department"];
$option_class = $_POST["option_class"];
$option_subject = $_POST["option_subject"];
$option_notes = $_POST["option_notes"];

/*Tyrkçe karakter kontrol yapılıyor varsa ingilizce karaktere çeviriliyor */
function turkce($metin){
   $aranan=array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü"," ");
   $yerine=array("c","c","g","g","i","i","o","o","s","s","u","u","_");
   return str_replace($aranan,$yerine,$metin);
}

   $gecici_ad=$_FILES["file"]["tmp_name"];
   $kalici_yol_ad="../uploads/".turkce($_FILES["file"]["name"]);

   
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
                  $pdo->query("INSERT INTO notes(department,class,subject,notes,file,user_id)
                   VALUES ('$option_department','$option_class','$option_subject','$option_notes','$kalici_yol_ad','$my_id')");

                     echo "<script>alert('Dosya başarı ile yüklendi.');</script>";
                   }else
                   {
                      echo "<script>alert('Dosya yükleme başarısız. Tekrar deneyiniz.');</script>";
                   }
          }else {
            echo "<script>alert('Lutfen 1MB dan kucuk dosya seciniz...');</script>";
          }

        }




}
 ?>

<div class="col-md-8 col-md-offset-2" >
  <h2>Uninote Add</h2>

<div class="w3-card-4 w3-animate-opacity" style="background-color: white;" >

  <div class="w3-container w3-blue" style="    background-color: #39435C!important; text-align:center;">
  <h2>Uninote Add</h2>
  </div>
<hr>

<form class="w3-container" enctype="multipart/form-data" action="" method="post">

            <p>  <select class="w3-select" name="option_department" required="yaz lan">
              <option value="" disabled selected>Choose your department</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
              <option value="Architecture">Architecture</option>
            </select></p>
          <p>
            <select class="w3-select" name="option_class" required="yaz lan">
            <option value="" disabled selected>Choose your class</option>
            <option value="Class 1">Class 1</option>
            <option value="Class 2">Class 2</option>
            <option value="Class 3">Class 3</option>
            <option value="Class 4">Class 4</option>
            <option value="Graduate Student">Graduate Student</option>
          </select></p>
          <p>

          <input class="w3-input" type="text" name="option_subject" placeholder="Subject" required="yaz lan"></p>
          <p>
          <p>
            <textarea class="w3-input" type="text" name="option_notes" placeholder="Enter your uninote here" rows="3" style="resize:none;" required="yaz lan"></textarea>
          </p>

            <input type="file" name="file" required="yaz lan"  ><hr>
            <button class="w3-btn w3-white w3-border w3-border-blue w3-round w3-btn-block " type="submit" name="share">Share</button>
          </p>
  </form>

</div>

</div>
<?php include "../inc/footer.php" ?>
