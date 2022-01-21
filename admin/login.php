<?php session_start(); ?>
<?php include("include/header.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow my-5">
                <div class="card-body ">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-text mx-auto" style="width: 20rem;">
                                <img src="img/undraw_posting_photo.svg" class="card-img-top" alt="img">
                                <div class="card-body">
                                    <h3 class="card-title text-center text-warning fs-2">ผู้ดูแลระบบ</h3>
                                </div>
                            </div>

                            <?php include("message.php");?>

                            <form action="code.php" method="post">
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label text-primary">อีเมลล์</label>
                                    <input type="email" name="email" class="form-control" required placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label text-primary">รหัสผ่าน</label>
                                    <input type="password" name="password" class="form-control" required placeholder="Enter Password">
                                </div>
                                <button type="submit" name="login_btn" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
<?php include("include/script.php"); ?>