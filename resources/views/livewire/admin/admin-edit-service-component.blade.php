
<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Service</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li> Edit Service</li>
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
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <h5>Edit Service</h5>

                                           </div>
                                           <div class="col-md-6">
                                               <a href="{{route('admin.all_services')}}" class="btn btn-info pull-right">All Service</a>
                                           </div>
                                       </div>

                                   </div>
                                   <div class="panel-body">
                                       @if(Session::has('message'))
                                       <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                       @endif
                                       <form action="#" method="POST" class="form-horizontal" enctype='multipart/form-data' wire:submit.prevent="updateService">
                                           @csrf
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Name*</label>
                                                       <div class="col-sm-9">
                                                           <input type="text" name="service_name" placeholder="Service Name" class="form-control" wire:model="name" wire:keyup="generateSlug">
                                                           @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Slug*</label>
                                                       <div class="col-sm-9">
                                                           <input type="text" name="service_slug" placeholder="Service Slug" class="form-control" wire:model="slug">
                                                           @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Tagline*</label>
                                                       <div class="col-sm-9">
                                                           <input type="text" name="service_tagline" placeholder="Service tagline" class="form-control" wire:model="tagline">
                                                           @error('tagline') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Category*</label>
                                                       <div class="col-sm-9">
                                                       <select name="servicecategory" id="servicecategory" class="form-control" wire:model="service_category_id">
                                                           <option value="">Select Service Category</option>
                                                           @foreach($categories as $category)
                                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                                           @endforeach
                                                       </select>   
                                                        @error('service_category_id') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Price*</label>
                                                       <div class="col-sm-9">
                                                           <input type="text" name="service_price" placeholder="Service price" class="form-control" wire:model="price">
                                                           @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Discount*</label>
                                                       <div class="col-sm-9">
                                                           <input type="text" name="service_discount" placeholder="Service discount" class="form-control" wire:model="discount">
                                                           @error('discount') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Discount Type*</label>
                                                       <div class="col-sm-9">
                                                           <select name="discount_type" id="" class="form-control" wire:model="discount_type">
                                                               <option value="">Choose Discount Type</option>
                                                               <option value="fixed">Fixed</option>
                                                               <option value="percent">Percent</option>
                                                           </select>
                                                           @error('discount_type') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Featured Type*</label>
                                                       <div class="col-sm-9">
                                                           <select name="featured" id="" class="form-control" wire:model="featured">
                                                               <option value="">Choose Featured Type</option>
                                                               <option value="0">No</option>
                                                               <option value="1">Yes</option>
                                                           </select>
                                                           @error('featured') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Description*</label>
                                                       <div class="col-sm-9">
                                                        <textarea name="description" id="" cols="30" rows="10" class="form-control" wire:model="description"></textarea>   
                                                         @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Inclusive*</label>
                                                       <div class="col-sm-9">
                                                        <textarea name="conclusion" id="" cols="30" rows="10" class="form-control" wire:model="conclusion"></textarea>   
                                                         @error('conclusion') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="name" class="control-label col-sm-3">Service Exclusive*</label>
                                                       <div class="col-sm-9">
                                                        <textarea name="exclusive" id="" cols="30" rows="10" class="form-control" wire:model="exclusive"></textarea> 
                                                         @error('exclusive') <p class="text-danger">{{$message}}</p> @enderror
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="image" class="control-label col-sm-3">Service Thumbnail*</label>
                                                       <div class="col-sm-9">
                                                           <input type="file" name="newthumnail" placeholder="Thubnail" class="form-control" wire:model="newthumnail">
                                                           @error('newthumnail') <p class="text-danger">{{$message}}</p> @enderror
                                                           @if($newthumnail)
                                                           <img src="{{$newthumnail->temporaryUrl()}}" width="100">
                                                           @else
                                                           <img src="{{asset('images/services/thumbnails')}}/{{$thumnail}}">
                                                           @endif

                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="image" class="control-label col-sm-3">Service Image*</label>
                                                       <div class="col-sm-9">
                                                           <input type="file" name="newimage" placeholder="category Slug" class="form-control" wire:model="newimage">
                                                           @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                                           @if($newimage)
                                                           <img src="{{$newimage->temporaryUrl()}}" width="100">
                                                           @else
                                                           <img src="{{asset('images/services')}}/{{$image}}">

                                                           @endif

                                                       </div>
                                                   </div>
                                               <button type="submit" class="btn btn-success pull-right">Update Service</button>
                                               

                                           
                                       </form>

                                   </div>

                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
