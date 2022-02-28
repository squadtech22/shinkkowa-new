<main>

  <div class="row py-5 px-5">
    <a href="{{ route('user-profile') }}" class="col-md-3">
        <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div
                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fas fa-landmark opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">User Profile</h6>
            </div>
        </div>
    </a>
    @if(auth()->user()->roles->pluck('name') == '["client"]')
    <a href="{{ route('current-orders') }}" class="col-md-3">
        <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div
                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">Current Orders</h6>
            </div>
        </div>
    </a>
    @endif
    @if(auth()->user()->roles->pluck('name') == '["admin"]')
    <a href="{{ route('user-management') }}" class="col-md-3">
        <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div
                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">User Management</h6>
            </div>
        </div>
    </a>
    <a href="{{ route('add-vehicle') }}" class="col-md-3">
        <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div
                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">Add Vehicle</h6>
            </div>
        </div>
    </a>
    <a href="{{ route('all-orders') }}" class="col-md-3">
        <div class="card">
            <div class="card-header mx-4 p-3 text-center">
                <div
                    class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                </div>
            </div>
            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">All Orders</h6>
            </div>
        </div>
    </a>
    @endif
  </div>

<main>