<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminEditAttributesComponent extends Component
{
    public $name;
    public $attribute_id;

    public function mount($attribute_id)
    {
        $pattribute = ProductAttribute::findOrFail($attribute_id);
        $this->attribute_id = $pattribute->id;
        $this->name = $pattribute->name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            "name" => 'required|unique:product_attributes'

        ]);

    }

    public function updateAttribute()
    {
        $this->validate([
            "name" => 'required|unique:product_attributes'

        ]);
        $pattribute = ProductAttribute::findOrFail($this->attribute_id);
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message','Attribute has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-attributes-component')->layout('layouts.base');
    }
}
