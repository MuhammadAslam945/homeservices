<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Categories</li>
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
                                @if(Session::has('del_msg'))
                                <div class="alert alert-success" role="alert">{{Session::get('del_msg')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>
                                                Featured
                                            </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($scategories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td><img src="{{asset('images/categories')}}/{{$category->image}}" width="100"></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                                @if($category->featured)
                                                Yes
                                                @else
                                                No
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.service_by_category',['category_slug'=>$category->slug])}}"><i class="fa fa-list text-success fa-2x"></i></a>
                                                <a href="{{route('admin.add_service_category')}}"><i class="fa fa-plus-square text-success fa-2x"></i></a>
                                                <a href="{{route('admin.edit_service_category',['category_id'=>$category->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete Service Category') || event.stopImmediatePropagation();" wire:click.prevent="deleteServiceCategory({{$category->id}})"><i class="fa fa-trash text-danger fa-2x"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                {{$scategories->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
