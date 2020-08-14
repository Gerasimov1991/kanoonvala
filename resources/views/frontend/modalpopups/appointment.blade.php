<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="appointmentModalLabel">Book Appointment <span></span></h4>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> --}}
      </div>
      <form id="appointment-form" action="{{url('appointment')}}" method="post">
        <div class="modal-body">
          <div class="form-group">
            {{-- <select name="appointment_time" required class="form-control" id="appointment_time">{!!
            get_times(roundToNextHour(date('Y-m-d H:i:s', time()))->format('H:i')) !!}</select> --}}
            <div id="slot-list"></div>
          </div>
          <input type="hidden" name="lawyer_id">
          <input type="hidden" name="selectedSlot">
          <div class="form-group" style="display:none">
            <p class="text-danger" id="time-error-msg"></p>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Book Now</button>
        </div>
      </form>
    </div>
  </div>
</div>
