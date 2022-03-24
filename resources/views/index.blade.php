@extends('layout')
@section('home')

<style>
 .home{
    height: 100vh;
    /*width: 100%;*/
    background-image: url(../images/background.jpg);
    background-size: cover; /*الصورة علي قد مساحة الصفحة*/
    /*background-repeat: no-repeat;*/
    position: relative;
}

</style>
		  <!-- *****************************************************************************
********************************* page 1 **********************************************
************************************************************************************-->
            <div class="over">
                    <div class="home-content">
                            <h1 class="message">Best Care For Your  Health </h1>
                            <p class="description">
                               We Care For Your Health Every Moment And
                                Provide High Solutions.
                            </p>
                            <input  type="button" onclick="location.href='{{route('home')}}'" class="btn button-start hover-opacity" value="Get Started !">
                            <input  type="button" onclick="location.href='{{route('appoint.index')}}'" class="btn button-start hover-opacity" value="Book Appointment">
                            {{-- <button class="btn button-book hover-opacity" href="#" data-scroll="book"">Book Appointment</button> --}}
                    </div> <!--   ./home-content -->
            </div> <!--   ./over -->
       </div> <!--   ./home -->

@endsection
