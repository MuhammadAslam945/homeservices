<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Livewire\WithPagination;
use Auth;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;
    public function deleteServiceCategory($id){
        $category=ServiceCategory::find($id);
        if($category->image){
            unlink('images/categories'.'/'.$category->image);
        }
        $category->delete();
        session()->flash('del_msg','Category has been deleted');

    }
    public function render()
    {
         $scategories=ServiceCategory::paginate(12);
        return view('livewire.admin.admin-service-category-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
