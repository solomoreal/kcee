
<div class="modal wire:submit="login" fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
						<div class="login-right">
							<form method="post">
								<h3>Signin with your account </h3>
								<input type="text" name="email" wire:model="form.email" ype="email" required autofocus autocomplete="username" id="email" placeholder="Enter your Email" >
                                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
								<input id="password" placeholder="Password" wire:model="form.password"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
								<h4><a href="forgot_password.php">Forgot password</a></h4>
								<div class="modal-footer text-right">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" name="log"  class="btn btn-primary">Login</button>
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
