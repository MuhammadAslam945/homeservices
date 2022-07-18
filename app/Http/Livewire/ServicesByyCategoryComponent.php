<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;


class ServicesByyCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug){
        $this->category_slug=$category_slug;
    }
    public function render()
    {
        $category=ServiceCategory::where('slug',$this->category_slug)->first();
        return view('livewire.services-byy-category-component',['category'=>$category])->layout('layouts.base');
    }
}
