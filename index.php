<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>



    <div class="px-4  my-5 text-center">  
        <div class="col-lg-6 mx-auto">
            <img src="images/gbb.png" width="20%" height="20%" >
            <h1 class="display-5 fw-bold">اربح مع عبدالله</h1>
            <p class="lead mb-4">باقي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead mb-4 fw-bold">للسحب على نسخة مجانية من البرنامج</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            
        </div>
        </div>

        <div class="container">
            <br><h3>للدخول في السحب اتبع ما يلي:</h3><br>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" >تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
                <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
                <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
                <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
                <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
            </ul>
        </div>
    </div>





<!--container-->
<div class="container">


    <div class="px-4  my-5 text-center">  
        <div class="col-lg-6 mx-auto">
            <form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <div class="last">
                <h3>الرجاء ادخل معلوماتك</h3>
                <div class="mb-3">
                    <label for="firstName" class="form-label">الأسم الأول</label>
                    <input type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>" class="form-control">
                    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">الأسم الاخير</label>
                    <input type="text" name="lastName" id="lastName" value="<?php echo $lastName ?>" class="form-control">
                    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="text" name="email" id="email" value="<?php echo $email ?>" class="form-control">
                    <div class="form-text error"><?php echo $errors['emailEroor'] ?></div>
                </div>
                <button type="submit" name="submit" class="btbt"><h6>ارسال المعلومات </h6></button>
            </form>
            </div>
        </div>
    


    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
</div>
      
    

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-5">
    
<button type="button" id="winner" class="btbt">
  <h6>اختيار الرابح</h6>
</button>
</div>



<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

    <?php include_once './parts/footer.php'; ?>