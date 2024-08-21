<section id="packages" class="secPad">
    <div class="container">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Tour History</h2>
        <p>See Your Travel History and Conformation Below</p>
      </div>
      <div class="privacy">
        <div class="container">
          <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Tour History</h3>

            <p>
                <table class="table align-items-center table-flush table-hover table-bordered" width="100%">
                    <tr align="center">
                        <th>#</th>
                        <th>Booking Id</th>
                        <th>Package Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Booking Date</th>
                        <th>Action</th>
                    </tr>

                    @foreach($bookings as $index => $booking)
                        <tr align="center">
                            <td>{{ $index + 1 }}</td>
                            <td>#BK{{ $booking->id }}</td>
                            <td><a href="#">{{ $booking->tourPackage->name ?? 'N/A' }}</a></td>
                            <td>{{ $booking->start_at->format('Y-m-d') }}</td>
                            <td>{{ $booking->end_at->format('Y-m-d') }}</td>
                            <td>{{ $booking->comment }}</td>
                            <td>{{ $booking->status }}</td>
                            <td>{{ $booking->created_at->format('Y-m-d') }}</td>
                            <td>
                                @if($booking->status !== 'Cancelled')
                                    <a href="#" wire:click.prevent="cancelBooking({{ $booking->id }})">Cancel</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>

            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  </section>
