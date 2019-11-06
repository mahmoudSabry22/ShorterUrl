
    @extends('layout.app')
    @section('content')  
       <section class="content">
        <div class="container">
            <!-- Default box -->
            <div class="box text-center">
                <div class="box-header with-border">
                   <h1 style="color:red"> Your Short Url</h1>
                </div>
                <div class="box-body ">
                  <
                    <h2 style="color:red">Click Her</h1>

                    <a href="{{$url->url}}" style="color:white" target="_blank">{{$url->short}}</a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div> 
    </section>
@endsection
