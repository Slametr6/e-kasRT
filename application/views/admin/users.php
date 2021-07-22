		<!-- PAGE CONTENT-->
		<div class="page-content--bgf7">
			<!-- DATA TABLE-->
            <section class="p-t-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
							<div class="table-data__tool">
								<div class="table-data__tool-left">
									<h3 class="title-5 m-b-35">data user akses</h3>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addUserModal">
                                        <i class="zmdi zmdi-plus"></i>add user</button>
                                </div>
                            </div>
                            <!-- DATA TABLE-->
							<div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>username</th>
                                            <th>gambar</th>
                                            <th>is_active</th>
                                            <th>role</th>
                                            <th>email</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($auth as $val):?>
                                        <tr>
                                            <td><?= $val->user;?></td>
                                            <td><?= $val->username;?></td>
                                            <td><img width="20%" src="<?= base_url('assets/'). $val->img;?>" /></td>
                                            <td class="process"><?= $val->is_active;?></td>
                                            <td class="process"><?= $val->role;?></td>
                                            <td><?= $val->email;?></td>
											<td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="modal" data-target="#editUserModal<?= $val->user_id;?>" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" title="Delete">
													<a href="#!" onclick="deleteConfirm('<?= base_url('auth/deluser/'. $val->user_id);?>')" >
                                                        <i class="zmdi zmdi-delete" style="color:red"></i></a>
                                                    </button>
													<button class="item" data-toggle="modal" data-target="#resetPasswordModal<?= $val->user_id;?>" title="Password">
                                                        <i class="zmdi zmdi-key" style="color:blue"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
										<?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

			<!-- modal addUser -->
			<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="addUserModal">Add User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="login-form">
								<form action="<?= base_url('auth/adduser');?>" method="post">
									<div class="form-group">
										<label>Nama</label>
										<input class="form-control" type="text" name="user" id="user" placeholder="Nama Lengkap" value="<?= set_value('user');?>" required>
									</div>
									<div class="form-group">
										<label>Username</label>
										<input class="form-control" type="text" name="username" id="username" placeholder="Username" value="<?= set_value('username');?>" required>
										<?= form_error('username','<small class="text-danger pl-3">','</small>');?>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
										<?= form_error('password','<small class="text-danger pl-3">','</small>');?>
									</div>
									<div class="form-group">
										<label>Kofirmasi Password</label>
										<input class="form-control" type="password" name="password1" id="password1" placeholder="Kofirmasi Password" required>
										<?= form_error('password1','<small class="text-danger pl-3">','</small>');?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Confirm</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal addUser -->
			
			<!-- modal editUser -->
			<?php $no = 0;
				foreach($auth as $val): $no++;?>
			<div class="modal fade" id="editUserModal<?= $val->user_id;?>" tabindex="-1" role="dialog" aria-labelledby="editUserModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="editUserModal">Edit User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="login-form">
								<?= form_open_multipart('auth/edituser');?>
									<input type="hidden" name="user_id" id="user_id" value="<?= $val->user_id;?>" >
									<div class="form-group">
										<label>Nama</label>
										<input class="form-control" type="text" name="user" id="user" placeholder="Nama Lengkap" value="<?= $val->user;?>" >
									</div>
									<div class="form-group">
										<label>Username</label>
										<input class="form-control" type="text" name="username" id="username" placeholder="Username" value="<?= $val->username;?>" readonly >
									</div>
									<div class="form-group">
										<label>Gambar</label>
										<div class="col-sm">
											<img src="<?= base_url('assets/').$val->img;?>" class="img-thumbnail" width="150px" hight="150px" >
										</div>
										<div class="col-sm">
											<input type="file" class="form-control-file" id="image" name="image">
										</div>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" name="email" id="email" placeholder="Email" value="<?= $val->email;?>">
									</div>
									<div class="form-group">
										<label>Role ID</label>
										<select class="form-control" name="role_id" id="role_id" required>
											<option value="<?= $val->id;?>"><?= $val->role_id;?></option>
											<?php foreach($role as $r):?>
											<option value="<?= $r->id;?>"><?= $r->role;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<div class="form-group">
										<label>Is Active?</label>
										<select class="form-control" name="is_active" id="is_active">
											<option value="<?= $val->is_active;?>"><?= $val->is_active;?></option>
											<option value="1">1 : Active</option>
											<option value="0">0 : Not Active</option>
										</select>
									</div>
									
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Confirm</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach;?>
			<!-- end modal editUser -->
			
			<!-- modal resetPasswordModal -->
			<?php $no = 0;
				foreach($auth as $val): $no++;?>
			<div class="modal fade" id="resetPasswordModal<?= $val->user_id;?>" tabindex="-1" role="dialog" aria-labelledby="resetPasswordModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="resetPasswordModal">Reset Password</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="login-form">
								<form action="<?= base_url('auth/resetPassword');?>" method="post">
									<input type="hidden" name="user_id" id="user_id" value="<?= $val->user_id;?>" >
									<div class="form-group">
										<label for="password1">New Password</label>
										<input type="password" class="form-control" id="password1" name="password1" placeholder="New Password" required>
									</div>
									<div class="form-group">
										<label for="password2">Repeat Password</label>
										<input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password" required>
									</div>
									
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button id="btn-reset" type="submit" class="btn btn-primary">Confirm</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach;?>
			<!-- end modal resetPasswordModal -->
