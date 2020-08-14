@if($lawyerList)
@foreach ($lawyerList as $lawyer)
        <div class="advocate_list_box">
          <div class="row">
            <div class="col-md-12 form-group"><a href="{{ url('advocate-profile/'.$lawyer->url_slug) }}"
                class="btn btn-block btn-black text-left">New: Click here to view detailed insights for this lawyer <i
                  class="fa fa-angle-double-right"></i></a></div>
          </div>
          <div class="rating_wrap"> <span class="rating_bg">4.6</span>
            <p>4052 Views</p>
          </div>
          <div class="row">
            <div class="col-md-3 form-group"> <a href="{{ url('advocate-profile/'.$lawyer->url_slug) }}"><img
                  src="{{ $lawyer->profile_image? URL::asset('uploads/profile/'.$lawyer->profile_image) :'/assets/images/client1.jpg' }}"
                  class="lawyers_thum"></a>
                  <p class="text-center"> Verified  <img src="{!! asset('assets/images/verify.png') !!}" style="max-width: 100%;max-height: 32px;margin: 5px 0;" ></p>
              </div>
            <div class="col-md-9 form-group">
              <h4 class="text-bold text-danger mb10"><a
                  href="{{ url('advocate-profile/'.$lawyer->url_slug) }}">{{'Advocate '.$lawyer->first_name.' '.$lawyer->last_name}}</a>
              </h4>
              <p class="mt0"><b><i class="fa fa-map-marker"></i> {{$lawyer->address?$lawyer->address:'Address not mentioned'}}</b> <br>
                <i class="fa fa-black-tie"></i> {!! $lawyer->experience?$lawyer->experience.'<sup>+</sup> Year(s) Of Experience':'Experience not
                mentioned' !!}</p>
              <p>
                @php
                if($lawyer->specialization){
                $specialArr = explode(',',$lawyer->specialization);
                foreach ($specialArr as $key => $value) {
                echo '<a href="javascript:void(0)" style="margin-right:5px; margin-bottom:5px;"
                  class="btn btn-sm btn-danger">'.@$specializationKeyPair[$value].'</a>';
                }
                }else{
                echo 'Experties not mentioned';
                }
                @endphp
                {{-- <a href="#!" class="btn btn-sm btn-danger">Corporate Law</a> <a href="#!" class="btn btn-sm btn-danger">Divorce</a> --}}
              </p>
              <hr />
              <p><strong><i class="fa fa-university"></i></strong>
                @php
                if($lawyer->court_in){
                $court_inArr = explode(',',$lawyer->court_in);
                $courts = [];
                foreach ($court_inArr as $key => $value) {
                $courts[] = @$courtList[$value];
                }
                echo implode(', ',$courts);
                }else{
                echo 'Not mentioned';
                }
                @endphp
              </p>
              <p><strong>Consultation:</strong> <span
                  class="text-danger text-bold"><i class="fa fa-inr"></i> {{$lawyer->adv_fee?''.$lawyer->adv_fee:'Not mentioned'}}</span>
              </p>
              <!--
              <p><strong>Bar Council No:</strong> <span
                  class="text-danger text-bold">{{$lawyer->bar_council_no?$lawyer->bar_council_no:'Not mentioned'}}</span>
              </p>
              <p><strong>AOR No:</strong> <span
                  class="text-danger text-bold">{{$lawyer->aor_number?$lawyer->aor_number:'Not mentioned'}}</span>
              </p>
              <p><strong>Hours:</strong> {!! _getAvailabilityHtml($lawyer->id) !!}</p>
            -->
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 form-group">
            <a class="btn btn-block btn-danger" href="{{ url('advocate-profile/'.$lawyer->url_slug) }}">Book Consultation <i class="fa fa-calendar"></i>
              </a>
            </div>

            <div class="col-md-4 form-group"> <a href="{{ url('advocate-profile/'.$lawyer->url_slug) }}" class="btn btn-block btn-success">Contect Now <i
                  class="fa fa-handshake-o"></i></a> </div>

            <div class="col-md-4 form-group"> <a href="{{ url('advocate-profile/'.$lawyer->url_slug) }}" class="btn btn-block btn-success">Call For Free Advice <i
                  class="fa fa-phone"></i></a> </div>
          </div>
        </div>
        @endforeach
    {{ $lawyerList->links() }}
@else
    <div class="advocate_list_box">
        <div class="row">
            <div class="col-md-12 form-group">No Record found.</div>
        </div>
    </div>
@endif

