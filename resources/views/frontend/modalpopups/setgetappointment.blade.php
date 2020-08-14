<div class="modal fade" id="setWTimeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="frmSetWTime" role="form">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                class="sr-only"></span></button>
            <h2 class="no-margins">Set Working Times</h2>
          </div>
  
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="choosen_week_day">Select day</label>
                  <select id="choosen_week_day" style="width:100%;" name="week_day[]" class="form-control" multiple
                    tabindex="4" required>
                    @foreach (getWorkingDays() as $dayNum => $days)
                    <option value="{{$dayNum}}">{{$days}}</option>
                    @endforeach
                  </select>
                </div><!-- /.form-group -->
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="control-label" for="from_time">Working Time From</label>
                  <div class="input-group clockpicker">
                    <input type="text" name="from_time" autocomplete="off" onkeypress="return false;" id="from_time"
                      class="form-control" required>
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div><!-- /.col-md-6 -->
  
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="control-label">Working Time To</label>
                  <div class="input-group clockpicker">
                    <input type="text" name="to_time" autocomplete="off" onkeypress="return false;" class="form-control"
                      required>
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
  
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="control-label">Lunch Break From</label>
  
                  <div class="input-group clockpicker">
                    <input type="text" name="lunch_from_time" autocomplete="off" onkeypress="return false;"
                      class="form-control">
  
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col-md-6 -->
  
              <div class="col-xs-6">
                <div class="form-group">
                  <label class="control-label">Lunch Break To</label>
                  <div class="input-group clockpicker">
                    <input type="text" name="lunch_to_time" autocomplete="off" onkeypress="return false;"
                      class="form-control" data-msg-required="">
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
  
            <div class="form-group" style="display:none">
              <p class="text-danger" id="time-error-msg"></p>
            </div>
          </div><!-- /.panel-body -->
  
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Set Working Times</button>
            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="showWTimeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only"></span></button>
          <h2 class="no-margins">Set Working Times</h2>
        </div>
  
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Working Hour</th>
                    <th scope="col">Lunch Break</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($availability as $item)
                  <tr>
                    <th scope="row">{{getWorkingDays()[$item->avail_day]}}</th>
                    <td><span class="label label-primary">{{$item->time_from}} - {{$item->time_to}}</span></td>
                    <td>
                      @if ($item->break_from)
                      <span class="label label-primary"> {{ $item->break_from.'-'.$item->break_to}}</span></td>
                      @else
                      Lunch off
                      @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.panel-body -->
        <div class="modal-footer">
          {{-- <button type="submit" class="btn btn-danger">Set Working Times</button> --}}
          <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
        </div>
        </form>
      </div>
    </div>
  </div>