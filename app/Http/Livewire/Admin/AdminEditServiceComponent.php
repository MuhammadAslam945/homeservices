<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Suppport\Str;
use Livewire\WithFileUploads;
use App\Models\Service;
use App\Models\ServiceCategory;
use Carbon\Carbon;

class AdminEditServiceComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $tagline;
    public $price;
    public $service_category_id;
    public $description;
    public $conclusion;
    public $exclusive;
    public $image;
    public $thumnail;
    public $discount;
    public $discount_type;
    public $newimage;
    public $newthumnail;
    public $service_id;
    public $featured;

    public function mount($service_slug){
        $service=Service::where('slug',$service_slug)->first();
        $this->service_id=$service->id;
        $this->name=$service->name;
        $this->slug=$service->slug;
        $this->tagline=$service->tagline;
        $this->price=$service->price;
        $this->service_category_id=$service->service_category_id;
        $this->description=$service->description;
        $this->conclusion=Str_replace('|','\n',$service->conclusion);
        $this->exclusive=Str_replace('|','\n',$service->exclusive);
        $this->image=$service->image;
        $this->thumnail=$service->thumnail;
        $this->discount=$service->discount;
        $this->discount_type=$service->discount_type;
        $this->featured=$service->featured;
    }
    public function generateSlug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required',
            'tagline'=>'required',
            'price'=>'required',
            'service_category_id'=>'required',
            'description'=>'required',
            'conclusion'=>'required',
            'exclusive'=>'required'
        ]);
        if($this->newthumnail){
            $this->validateOnly($fields,[
           
            'newthumnail'=>'required|mimes:jpeg,png'
            ]);
        }
        if($this->newimage){
            $this->validateOnly($fields,[
           
            'newimage'=>'required|mimes:jpeg,png'
            ]);
        }
      

    }
    public function updateService(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'tagline'=>'required',
            'price'=>'required',
            'service_category_id'=>'required',
            'description'=>'required',
            'conclusion'=>'required',
            'exclusive'=>'required'
       ]);
       if($this->newthumnail){
        $this->validate([
       
        'newthumnail'=>'required|mimes:jpeg,png'
        ]);
    }
    if($this->newimage){
        $this->validate([
       
        'newimage'=>'required|mimes:jpeg,png'
        ]);
    }
       $service=Service::find($this->service_id);
       $service->name=$this->name;
       $service->slug=$this->slug;
       $service->tagline=$this->tagline;
       $service->price=$this->price;
       $service->service_category_id=$this->service_category_id;
       $service->discount=$this->discount;
       $service->discount_type=$this->discount_type;
       $service->featured=$this->featured;
       $service->description=$this->description;
       $service->conclusion=Str_replace('\n','|',trim($this->conclusion));
       $service->exclusive=Str_replace('\n','|',trim($this->exclusive));
       if($this->newthumnail){
           unlink('images/services/thumbnails'.'/'.$service->thumnail);
           $imageName=Carbon::now()->timestamp.'.'.$this->newthumnail->extension();
           $this->newthumnail->storeAs('services/thumbnails',$imageName);
           $service->thumnail=$imageName;

       }
       if($this->newimage){
       unlink('images/services'.'/'.$service->image);
       $imageName2=Carbon::now()->timestamp.'.'.$this->newimage->extension();
       $this->newimage->storeAs('services',$imageName2);
       $service->image=$imageName2;
       }
       $service->save();
       session()->flash('message','Service has been Updated successfully '); 
    }
    public function render()
    {
        $categories=ServiceCategory::all();
        return view('livewire.admin.admin-edit-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
