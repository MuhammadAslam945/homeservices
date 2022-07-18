<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{$service->name}} Servicing</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$service->name}} Servicing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">{{$service->name}}: {{$service->category->name}}</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="{{asset('images/services')}}/{{$service->image}}" alt=""
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{$service->name}}</h3>
                                                <p>{{$service->description}}.</p>
                                                <h4>Inclusion</h4>
                                                <ul class="list-styles">
                                                    @foreach(explode("|",$service->conclusion) as $con)
                                                    <li><i class="fa fa-plus"></i>{{$con}}}.</li>
                                                    @endforeach
                                                </ul>
                                                <h4>Exclusion</h4>
                                                <ul class="list-styles">
                                                @foreach(explode("|",$service->exclusive) as $ex)
                                                    <li><i class="fa fa-minus"></i>{{$ex}}.</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="widget" style="margin-top: 18px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Booking Details</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <td style="border-top: none;">Price</td>
                                                    <td style="border-top: none;"><span>&#36;</span> {{$service->price}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Quntity</td>
                                                    <td>1</td>
                                                </tr>
                                                
                                                @php 
                                                $total=$service->price;
                                              
                                                @endphp
                                                @if($service->discount)
                                                @if($service->discount_type=='fixed')
                                                <tr>
                                                    <td>Discount</td>
                                                 
                                                    <td>PKR.{{$service->discount}}</td>

                                                    
                                                    
                                                </tr>
                                                @php
                                                $total=$total-$service->discount;
                                                @endphp
                                                @else($service->discount_type=='percent')
                                                <tr>
                                               
                                                    <td>Discount</td>
                                                 
                                                    <td>{{$service->discount}}%</td>
                                                    
                                                   @php $dis=$total-($total*$service->discount/100); @endphp
                                                </tr>
                                                @endif
                                                @endif
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span>&#36;</span> {{$total}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <form>                                                
                                                <input type="submit" class="btn btn-primary" name="submit"
                                                    value=" Book Now">
                                            </form>
                                        </div>
                                    </div>
                                </aside>
                                <aside>
                                    @if($rservice)
                                    <h3>Related Service</h3>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px">
                                        <a href="{{route('home.service_details',['service_slug'=>$rservice->slug])}}">
                                            <div class="img-hover">
                                                <img src="{{asset('images/services/thumbnails')}}/{{$rservice->thumnail}}" alt="{{$rservice->name}}"
                                                    class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    {{$rservice->name}}
                                                </h3>
                                                <hr class="separator">
                                                <p>{{$rservice->name}}</p>
                                                <div class="content-btn"><a href="ac-wet-servicing.html"
                                                        class="btn btn-warning">View Details</a></div>
                                                <div class="price"><span>&#36;</span><b>From</b>{{$rservice->price}}</div>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>