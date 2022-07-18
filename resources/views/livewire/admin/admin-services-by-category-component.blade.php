<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{$category->name}} Services </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$category->name}} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                               
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Category</th>
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td><img src="{{asset('images/services/thumbnails')}}/{{$category->thumnail}}" width="100"></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->price}}</td>
                                            <td>
                                                @if($category->status)
                                                Active
                                                @else
                                                Inactive
                                                @endif
                                                </td>
                                            <td>{{$category->category->name}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td><a href="#"><i class="fa fa-plus-square text-success fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"><i class="fa fa-trash text-danger fa-2x"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                {{$services->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
