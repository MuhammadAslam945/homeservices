<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\Service;

class HomeComponent extends Component
{
    public function render()
    {
        $s_categories=ServiceCategory::inRandomOrder()->take(18)->get();
        $f_services=Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $f_categories=ServiceCategory::where('featured',1)->take(8)->get();
        $s_id=ServiceCategory::whereIn('slug',['ac','tv','refrigerator','water-purifier','geyser'])->get()->pluck('id');
        $appliances=Service::whereIn('service_category_id',$s_id)->inRandomOrder()->take(12)->get();
        return view('livewire.home-component',['s_categories'=>$s_categories,'f_services'=>$f_services,'f_categories'=>$f_categories,'appliances'=>$appliances])->layout('layouts.base');
    }
}
