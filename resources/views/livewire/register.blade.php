
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-right">
								<form wire:submit="register">
									<h3>Create your account </h3>
									<input type="text" wire:model="name" id="name" type="text" name="name" required autofocus autocomplete="name" placeholder="Full Name" />

                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

									<input type="text" wire:model="phone_number" id="phone_number" placeholder="Mobile number" required autocomplete="off" />

                                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />

									<input wire:model="email" id="email"  type="text" name="email" required autocomplete="username" placeholder="E-mail" autofocus />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />


									<input wire:model="password" id="password"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="new-password" >

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    <input wire:model="password_confirmation" id="password_confirmation"
                                    type="password"
                                    placeholder="Conform Password"
                                    required autocomplete="new-password" >

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

									<div class="modal-footer text-right">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<button type="submit" name="submit" id="submit" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
