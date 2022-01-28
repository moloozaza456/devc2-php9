<?php include("include/header.php") ?>


<!-- Siderbar -->
<?php include("include/sidebar.php") ?>
<!-- Siderbar End -->

<!-- Topbar -->
<?php include("include/toobar.php") ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">ข่าวประชาสัมพันธ์ 1</h1>
		<h3>DMR | Web Development</h3>
	</div>
	<!-- Page Heading -->

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAdminNews" data-bs-whatever="@mdo">Add News</button>

	<div class="modal fade" id="addAdminNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">ข่าวประชาสัมพันธ์</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<form action="news_code.php" method="post">

						<div class="mb-3">
							<label class="col-form-label">หัวข้อข่าว:</label>
							<textarea name="detail" class="form-control" required placeholder="เพิ่ม-หัวข้อข่าว"></textarea>
						</div>
						<div class="mb-3">
							<label class="col-form-label">รายละเอียดข่าว:</label>
							<textarea rows="4" cols="50" name="detail" required class="form-control" placeholder="เพิ่ม-รายละเอียดข่าว"></textarea>
						</div>

						<div class="form-group">
							<label class="col-form-label">รายละเอียดข่าว: เช่น *.jpg,png</label>
							<input type="file" name="hotnew_image" class="form-control-file" placeholder="เพิ่ม-รูปภาพ">
						</div>

						<div class="form-group">
							<label class="col-form-label">แนบไฟล์: เช่น *.pdf,doc,xls,ppt,ra</label>
							<input type="file" name="hotnew_doc" class="form-control-file" placeholder="แนบไฟล์">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
							<button type="submit" name="news_save" class="btn btn-primary">Save</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>




	<!-- Footer -->
	<?php include("include/footer.php") ?>
	<!-- End of Footer -->

	<!-- Logout Modal-->
	<?php include("include/logoutmodal.php") ?>

	<?php include("include/script.php") ?>