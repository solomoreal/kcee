<div class="container">

    <div class="selectroom_top">
        <div class="col-md-4 selectroom_left">
            <img src="{{ asset('storage/' . $package->image) }}" class="img-responsive" alt="">
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-md-8 selectroom_right">
            <h2>{{$package->name}}</h2>
            <p class="dow">#PKG-{{$package->id}}</p>
            <p><b>Package Type :{{$package->type}}</p>
            <p><b>Package Location :</b> {{$package->location}}</p>
            <p><b>Features:</b> {{$package->features}}</p>
            <div class="clearfix"></div>
            <div class="grand">
                <p>Grand Total</p>
                <h3>NGN {{$package->price}}</h3>
            </div>
        </div>
        <h3>Package Details</h3>
        <p>{{$package->details}}</p>
        <div class="clearfix"></div>
    </div>
    <form wire:submit.prevent="book">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="selectroom_top">
            <div class="selectroom-info">
                <div class="ban-bottom">
                    <div class="col-md-6">
                        <label class="inputLabel">From</label>
                        <input class="form-control" type="date" wire:model="start_at">
                        @error('start_at') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="inputLabel">To</label>
                        <input class="form-control" type="date" wire:model="end_at">
                        @error('end_at') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>


                <ul>
                    <li class="spe">
                        <label for="selectedGuides" class="inputLabel">Select Tour Guides</label>
                        <select multiple id="selectedGuides" wire:model="selectedGuides" class="form-control">
                            @foreach($tourGuides as $guide)
                                <option value="{{ $guide->id }}">{{ $guide->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedGuides') <span class="text-danger">{{ $message }}</span> @enderror
                        </li>
                    <li class="spe">
                        <label class="inputLabel">Comment</label>
                        <textarea class="form-control" rows="4" name="comment" required=""></textarea>
                    </li>
                    @auth
                    <li class="spe" align="center">
                        <button type="submit" name="submit2" class="btn-primary btn">Book</button>
                    </li>
                    @else

                    <li align="center" style="margin-top: 1%">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Book</a>
                    </li>

                    @endauth

                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </form>
    @auth
    <h4>Rate this Package</h4>
    <form wire:submit.prevent="rate">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="star-rating">
            <input type="radio" name="rating" value="1" id="1" wire:model="rating"><label for="1">&#9733;</label>
            <input type="radio" name="rating" value="2" id="2" wire:model="rating"><label for="2">&#9733;</label>
            <input type="radio" name="rating" value="3" id="3" wire:model="rating"><label for="3">&#9733;</label>
            <input type="radio" name="rating" value="4" id="4" wire:model="rating"><label for="4">&#9733;</label>
            <input type="radio" name="rating" value="5" id="5" wire:model="rating"><label for="5">&#9733;</label>
        </div>
        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
        <div align="center" class="mt-3">
            <button type="submit" class="btn btn-primary">Submit Rating</button>
        </div>
    </form>
    @else
    <div align="center" style="margin-top: 1%">
        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Login to Rate</a>
    </div>
    @endauth

</div>
