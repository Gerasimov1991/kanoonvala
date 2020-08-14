<form id="enquiryForm" class="form_box" action="{{url('enquiryFormSubmit')}}" method="post" role="form">
@csrf
  <h2 class="text-center profile-hide">Get Expert Legal advice with in 10 Minutes.Send A Legal Notice To Builder For Delayed
    Possession or any property related disputes</h2>
  <div class="row">
    <div id="time-error-msg"></div>
    <div class="col-md-6 form-group">
      <div class="row">
        <div class="col-md-12 form-group">
          <label>Name *</label>
          <input type="text" name="name" maxlength="50" placeholder="Your Name" class="form-control" required>
        </div>
        <div class="col-md-12 form-group">
          <label>Email *</label>
          <input type="text" name="email"  maxlength="50" placeholder="Your Email" class="form-control" required>
        </div>
        <div class="col-md-12">
          <label>Mobile *</label>
          <input type="text" pattern="\d*" maxlength="16" name="mobile" placeholder="Your Mobile" class="form-control" required>
        </div>
      </div>
    </div>

    <div class="col-md-6 form-group">
      <div class="row">
        <div class="col-md-12 form-group profile-hide">
          <label>Select Issue *</label>
          <select class="form-control" name="reason_for" required>
            <option value="Contract Drafting / Review">Contract Drafting / Review</option>
            <option value="Sexual Harassment at work">Sexual Harassment at work</option>
            <option value="Venture Capital / Funding Related">Venture Capital / Funding Related</option>
            <option value="Business / Trade License">Business / Trade License</option>
            <option value="Mergers &amp; Acquisitions">Mergers &amp; Acquisitions</option>
            <option value="Business Compliances">Business Compliances</option>
          </select>
        </div>
        <div class="col-md-12 form-group call-hide">
          <label>Your Query </label>
          <textarea name="enquiry_statement" maxlength="250" placeholder="Enter your query" class="form-control" style="height:134px;"></textarea>
        </div>
      </div>
    </div>
    <div class="col-md-12 form-group">
      <button name="submit" class="btn btn-lg btn-danger">Submit</button>
    </div>
    <div class="col-md-12 form-group">
      <p>100% Transparency, 100% Confidentiality,Easy Approach and Immediate support</p>
    </div>
  </div>

</form>

@section('after-scripts')
  <script>
    $("[name='reason_for']").select2({
      tags: true
    });
  </script>
@endsection