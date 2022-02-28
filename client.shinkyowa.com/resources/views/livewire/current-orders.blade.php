<div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <h6>Current Orders</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Car</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount Paid</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount Remaining</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Placed</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        @php 
                            $user = \App\Models\User::find($order->user_id);
                            $vehicle = \App\Models\Vehicle::find($order->vehicle_id);
                        @endphp
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $vehicle->make }}</p>
                                <p class="text-xs text-secondary mb-0">{{ $vehicle->model." ".$vehicle->year }}</p>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">PKR {{ $order->price }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">PKR {{ $order->advance }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">PKR {{ $order->remaining }}</span>
                            </td>
                            <td>
                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/show-car/{{ $order->vehicle_id }}" class="btn btn-info"><i class="fas fa-car"></i> Vehicle</a>
                                    <a href="/show-timeline/{{ $order->id }}" class="btn btn-success"><i class="fas fa-info-circle"></i> Status</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div> 
    </div>

</div>
