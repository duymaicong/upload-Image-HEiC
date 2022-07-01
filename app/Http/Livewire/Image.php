<?php


namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use Livewire\Component;
class Image extends Component
{
    use WithFileUploads;
    public $photo;
    public $xy;
    public $name;
 
    public function save()
    {
        $im= new  \Imagick($this->photo->getRealPath());
        $im->setImageFormat('png');
        // $im->resizeImage(80,60,\Imagick::FILTER_LANCZOS,1);
        $this->name = Str::random() . '.png';
        session()->flash('message', $this->name);
        $im->writeImage($this->name);
        $this->redirect( route('image'));
        
    }
    public function render()
    {
        return view('livewire.image');
    }
}
