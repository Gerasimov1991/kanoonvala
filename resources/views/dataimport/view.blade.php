@extends('frontend.layouts.app')


@section('content')

<div class="section-empty">
    <div class="container">
        <div class="col-md-6 col-md-offset-3 form-group">
            <div class="row">
                <div class="col-md-12">
                    <!-- Lawyer Box Open -->
                    <div class="shadow_box">
                        <div class="col-md-8 col-md-offset-2">
                            <h4>Select File ( Regular Master )</h4>
                            <form action="/dataimport-submit" method="POST" enctype="multipart/form-data">
                                <!-- COMPONENT START -->
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-file">
                                        <span class="input-group-btn">
                                            <input type="file" name="regular-file" id="file" class="form-control btn btn-default btn-choose" />
                                        </span>
                                    </div>
                                </div>
                                <!-- COMPONENT END -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </form> 
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <h4>Select File ( Site Master )</h4>
                            <form action="/dataimport-submit" method="POST" enctype="multipart/form-data">
                                <!-- COMPONENT START -->
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-file">
                                        <span class="input-group-btn">
                                            <input type="file" name="site-file" id="file" class="form-control btn btn-default btn-choose" />
                                        </span>
                                    </div>
                                </div>
                                <!-- COMPONENT END -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).on('submit','form', function(){
            $(this).find('button').addClass('btn-danger');
            $(this).find('button').attr('disabled','disabled');
        })
</script>
@endsection