<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newImage;
    public $featured;

    public function mount($category_id){
        $category=ServiceCategory::find($category_id);
        $this->category_id=$category->id;
        $this->name=$category->name;
        $this->slug=$category->slug;
        $this->image=$category->image;
        $this->featured=$category->featured;
    }
    public function generateSlug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required'
        ]);
        if($this->newImage){
            $this->validateOnly($fields,[
                'newImage'=>'required|mimes:jpeg,png'
            ]);
        }
    }
    public function editServiceCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
        if($this->newImage){
            $this->validate([
                'newImage'=>'required|mimes:jpeg,png'
            ]);
        }
        $category=ServiceCategory::find($this->category_id);
        $category->name=$this->name;
        $category->slug=$this->slug;
        if($this->newImage){
            $imagename=Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('categories',$imagename);
            $category->image=$imagename;
        }
        $category->featured=$this->featured;
        $category->save();
        session()->flash('update_msg','Category has been updated');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
