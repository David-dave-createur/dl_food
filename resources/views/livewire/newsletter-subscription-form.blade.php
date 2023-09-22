<div>
    @if($successMessage)
        <div class="alert alert-success">{{ $successMessage }}</div>
    @endif

    <form wire:submit.prevent="subscribe">
        <div class="row input-group-icon mb-5">
            <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
                <input class="form-control input-box bg-800 border-0" type="email" placeholder="Enter Email" aria-label="email" wire:model="email" />
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">S'abonner</button>
            </div>
        </div>
    </form>
</div>
