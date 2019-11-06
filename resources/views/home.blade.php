@extends('layout.app')

@section('content')

<div class="container">
            <!-- Default box -->
            <div class="box">
              
                <div class="box-body">
                  
                    <form method="post" action="{{ url('short') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">

                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">URL <span style="color:red">*</span> </label>
                                <div class="col-md-6">
                                    <input type="text" name="url" value="{{ old('url') }}" class="form-control" placeholder="Put Your Url without 'https://'" required>
                                    @if ($errors->has('url'))
                                        <span class="help-block">
                                            <strong class="help-block">{{ $errors->first('url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            

                           
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10" style="margin-left: 20px">
                                    <button type="submit" class="btn btn-primary">Short</button>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div> 
    </section>
@endsection

