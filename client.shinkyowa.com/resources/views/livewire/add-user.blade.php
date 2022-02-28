<div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-role" class="form-control-label">{{ __('User Role') }}</label>
                                <div class="@error('role') border border-danger rounded-3 @enderror">
                                    <select wire:model="role" class="form-control" id="user-role" required>
                                        <option selected hidden>Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                    </select>
                                </div>
                                @error('role') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>
                                <div class="@error('name') border border-danger rounded-3 @enderror">
                                    <input wire:model="name" class="form-control" type="text" placeholder="Name"
                                        id="user-name">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-phone" class="form-control-label">{{ __('Phone') }}</label>
                                <div class="@error('phone') border border-danger rounded-3 @enderror">
                                    <input wire:model="phone" class="form-control" type="tel"
                                        placeholder="40770888444" id="user-phone">
                                </div>
                                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input wire:model="email" class="form-control" type="email"
                                        placeholder="@example.com" id="user-email">
                                </div>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-password" class="form-control-label">{{ __('Password') }} <button wire:click="generate" type="button" class="btn btn-primary btn-sm" style="margin: 0px !important; padding: 4px 16px !important;">Auto Generate</button></label>
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input wire:model="password" class="form-control" type="text"
                                        placeholder="Password" id="user-password">
                                </div>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-location" class="form-control-label">{{ __('Location') }}</label>
                                <div class="@error('location') border border-danger rounded-3 @enderror">
                                    <input wire:model="location" class="form-control" type="text"
                                        placeholder="Location" id="user-location">
                                </div>
                                @error('location') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
