<script language="javascript">
function validat{select_box}{
	if {select_box.value == '0'}
	alert("You must select an option");
	return false;}
</script>

<?php include 'header.php';?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotel in Delta State Nigeria</h1>
                <p class="animated fadeInUp">Most Luxurious hotel with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe width="100%" height="360" src="//www.youtube.com/embed/iI0w1jnr9PU?feature=player_detailpage" frameborder="0" allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" method="post" action="sendemail.php" role="form" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control" name = "name" placeholder=" Enter full Names" required >
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name = "email" placeholder="Email" required >
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name ="phone"  placeholder="Phone" required>
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class= "form-control" name = "select_box"  required>             
              <option value="0">No. of Rooms</option>
              <option value="1">1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="number-of-adults">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="check-in-date" input="expiry-month" required>
                <option>Date</option>
                
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">12</option>
                <option value="20">20</option>
                <option value="12">12</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="check-in-month" id="expiry-month" required>
                <option>Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="check-in-year" required>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name = "message" placeholder="Message" rows="4"></textarea>
        </div>
        <button type="submit" value=" Send" class="btn btn-default" onclick="return validat{select_box}">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/wproom4.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/penny1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/penny2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/penny3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/penny4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/penny5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/wproom5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/wprest1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/pennygym1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/pennygym2.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Other Services<a href="gallery" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/wpbar1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/pennyfood2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/pennyfood3.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>