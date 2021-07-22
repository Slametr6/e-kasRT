		<!-- modal changePasswordModal -->
		<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="changePasswordModal">Change Password</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="login-form">
							<form action="<?= base_url('auth/changePassword');?>" method="post">
								<input type="hidden" name="user_id" id="user_id" value="<?= $user['user_id'];?>" >
								<div class="form-group">
									<label>Current Password</label>
									<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" required>
								</div>
								<div class="form-group">
									<label for="new_password1">New Password</label>
									<input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password" required>
								</div>
								<div class="form-group">
									<label for="new_password2">Repeat Password</label>
									<input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat Password" required>
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button id="btn-pass" type="submit" class="btn btn-primary">Confirm</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal changePasswordModal -->

		<!-- modal Delete -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Are you sure?</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">Data will deleted permanently</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
				</div>
				</div>
			</div>
		</div>
		<!-- end modal Delete -->

			<!-- COPYRIGHT-->
			<section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 Sistem Informasi Kas RT 002</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url ();?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url ();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url ();?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url ();?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url ();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url ();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url ();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url ();?>assets/vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="<?= base_url ();?>assets/js/main.js"></script>
	<script>
		function changePassword(url){
			$('#btn-pass').attr('href', url);
			$('#changePasswordModal').modal();
		}
	</script>

	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>

</html>
<!-- end document-->
