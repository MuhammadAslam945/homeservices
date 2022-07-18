<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;
    public function deleteService($id){
        $service=Service::find($id);
        if($service->thumnail){
            unlink('images/services/thumbnails' . '/' .$service->thumnail);
        }
        if($service->image){
            unlink('images/services' . '/' .$service->image);
        }
        $service->delete();
        session()->flash('del_msg','Service has been deleted successfully');

    }
    public function render()
    {
        $services=Service::paginate(12);
        return view('livewire.admin.admin-services-component',['services'=>$services])->layout('layouts.base');
    }
}
