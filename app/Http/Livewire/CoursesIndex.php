<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\category;
use App\Models\level;
use App\Models\Subcategory;
use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;

    public $subcategory_id;
    public $category_id;
    public $level_id;

    public function render()
    {
        $categories = category::all();
        $levels = level::all();

        $subcategories = Subcategory::latest('id')->category($this->category_id)->get();

        $courses = Course::where('status', 3)
            ->subcategory($this->subcategory_id)
            ->category($this->category_id)
            ->level($this->level_id)
            ->latest('id')
            ->paginate(8);

        return view('livewire.courses-index', compact('courses', 'categories', 'levels', 'subcategories'));
    }

    public function resetFilters(){
        $this->reset(['subcategory_id',  'category_id','level_id']);
    }
}
