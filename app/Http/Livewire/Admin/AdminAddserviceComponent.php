<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Service;

class AdminAddserviceComponent extends Component
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
            'image'=>'required|mimes:jpeg,png',
            'thumnail'=>'required|mimes:jpeg,png',
            'description'=>'required',
            'conclusion'=>'required',
            'exclusive'=>'required'
        ]);
      

    }
    public function createService(){
        $this->validate([
             'name'=>'required',
             'slug'=>'required',
             'tagline'=>'required',
             'price'=>'required',
             'service_category_id'=>'required',
             'image'=>'required|mimes:jpeg,png',
             'thumnail'=>'required|mimes:jpeg,png',
             'description'=>'required',
             'conclusion'=>'required',
             'exclusive'=>'required'
        ]);
        $service=New Service();
        $service->name=$this->name;
        $service->slug=$this->slug;
        $service->tagline=$this->tagline;
        $service->price=$this->price;
        $service->service_category_id=$this->service_category_id;
        $service->discount=$this->discount;
        $service->discount_type=$this->discount_type;
        $service->description=$this->description;
        $service->conclusion=Str_replace('\n','|',trim($this->conclusion));
        $service->exclusive=Str_replace('\n','|',trim($this->exclusive));
        $imageName=Carbon::now()->timestamp.'.'.$this->thumnail->extension();
        $this->thumnail->storeAs('services/thumbnails',$imageName);
        $service->thumnail=$imageName;
        $imageName2=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('services',$imageName2);
        $service->image=$imageName2;
        $service->save();
        session()->flash('message','Service has been created successfully '); 
    }

    public function render()
    {
        $categories=ServiceCategory::all();
        return view('livewire.admin.admin-addservice-component',['categories'=>$categories])->layout('layouts.base');
    }
}
