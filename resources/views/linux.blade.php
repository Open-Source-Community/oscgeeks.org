@extends('layouts.app2')

    @section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/linux.css') }}" >
    <!--End Styles -->
@endsection
   @section('JS')
    <script src="{{ asset('js/linux.js') }}"></script>
    <!--End Scripts -->
@endsection
@section('content')
<div class="container">
    <br>
    <br>
<br>
 
   <br>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div id="div-pos1" class="panel-heading">
                <h4 class="text-pos1" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">سطب ubuntu خطوه بخطوه</a>
                </h4> //سطب ubuntu خطوه بخطوه
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="div-pos2" class="panel-heading">
                <h4 class="text-pos2" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">6 حاجات لازم تعملهم لما تصطب لينكس</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="div-pos3" class="panel-heading">
                <h4 class="text-pos3" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">شروق تكتشف لينكس</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection