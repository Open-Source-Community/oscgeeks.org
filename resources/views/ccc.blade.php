@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/cccs.css') }}">
@endsection




@section('content')

 <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s" offset="200">
                <div class="text-center">
                <h3 class = "hvr-grow" style="font-size: 400%; ">Content Creators Committee</h3>
                <img class="img-responsive" src="{{asset('/images/Background/1.jpg')}}">
                </div>
                <div class="text-center">
                <p class="vision" style="font-size: 200%;">
                    <br>
                   We're unique, one of a kind, you'll only find us at OSC. Our main
                     goal is to make technical and non-technical videos to spread, and
                      share the knowledge we have with our community
                    <br>
                </p>
                <p class="vision" style="font-size: 200%;">
                   Our committee was created when we felt that not everyone gets the whole benefits out of the English
tutorials, so we start making Arabic ones.
                    WANNA JOIN ?? check out our <a href="https://www.facebook.com/groups/OpenMinds.FCIS.ASU/">public group</a> 
                     
                    <br>
                </p>
                </div>
              </div>
                <div class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s" offset="200">
                <h3 class="text-center">Here're some of our tutorial videos </h3>     
<div class="container">
   <div class="row">
     <div class="col-md-6 form-group">
        <div class="embed-responsive embed-responsive-16by9">
           <iframe  src="https://www.youtube.com/embed/ulao4XtMByM" frameborder="0" allowfullscreen></iframe>
        </div>
     </div>
      <div class="col-md-6 form-group">
         <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JMRByB2NydY" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
  </div>
      <br> <br>
  <div class="row">
      
     <div class="col-md-6 form-group">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vMKk3jXYiU8" frameborder="0" allowfullscreen></iframe>
        </div>
     </div>
      
      
      <div class="col-md-6 form-group">
         <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HEmfKX3prdA" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
  </div>
    <br> <br>
</div>          
       </div>         
            </div>
        </div>

</div>
@endsection