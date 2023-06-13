<div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Our Master Chef</h2>
                </div>
               
                
                <div class="row">
                @foreach($chef as $chef)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="chefimage/{{$chef->image}}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>{{$chef->name}}</h2>
                                <p>{{$chef->speciality}}</p>
                            </div>
                           
                        </div>
                      
                    </div>
                    @endforeach
                </div>
               
            </div>
        </div>