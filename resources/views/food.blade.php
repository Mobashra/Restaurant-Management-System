<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of food with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                    @csrf
                    <div class="item">
                    <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'>
                            <div class="price"><h6>Tk.{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                       
                                    
                        </div>

                    </div>
                    <input type="number" name="quantity" min="1" value="1" style="width:80px;">

                    <style> 
                        input[type=submit]{
                        background-color: #04AA6D;
                        border: none;
                        color: white;
                        padding: 16px 25px;
                        text-decoration: none;
                        margin: 4px 2px;
                        cursor: pointer;
                        }
                    </style>
                    <input type="submit" value="add cart">
                    </form>
                    @endforeach
                    
                    </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->