<div class="container-fluid py-4">

  <form wire:submit.prevent="save" action="#" method="POST">
    <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Order overview</h6>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-archive-2 text-danger text-gradient"></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #{{ $auction->order_no }} <i class="ni ni-check-bold text-success text-gradient"></i></h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-money-coins text-success text-gradient"></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">PKR {{ $auction->advance }}, Advance Recieved <i class="ni ni-check-bold text-success text-gradient"></i></h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-credit-card text-warning text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="car_bought" value="1" @if($car_bought == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Car Bought</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Car Bought @if($car_bought == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-satisfied text-danger text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="inspection_cleared" value="1" @if($inspection_cleared == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Inspection Cleared</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Inspection Cleared @if($inspection_cleared == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-watch-time text-info text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="car_on_port" value="1" @if($car_on_port == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Car on Port</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Car on Port @if($car_on_port == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-delivery-fast text-primary text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="car_shipped" value="1" @if($car_shipped == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Car Shipped to Host Country</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Car Shipped to Host Country @if($car_shipped == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-bus-front-12 text-dark text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="car_delivered" value="1" @if($car_delivered == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Car Delivered</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Car Delivered @if($car_delivered == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="ni ni-key-25 text-success text-gradient"></i>
              </span>
              <div class="timeline-content">
                @if(auth()->user()->roles->pluck('name') == '["admin"]')
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" wire:model="payment_recieved" value="1" @if($payment_recieved == 1) checked @endif>
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Total Payment Recieved</h6>
                </div>
                @endif
                @if(auth()->user()->roles->pluck('name') == '["client"]')
                <h6 class="text-dark text-sm font-weight-bold mb-0">Total Payment Recieved @if($payment_recieved == 1) <i class="ni ni-check-bold text-success text-gradient"></i> @endif</h6>
                @endif
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $auction->created_at->toFormattedDateString() }} {{ date('h:i A', strtotime($auction->created_at->toTimeString())) }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if(auth()->user()->roles->pluck('name') == '["admin"]')
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
      </div>
      @endif
  </form>

</div>