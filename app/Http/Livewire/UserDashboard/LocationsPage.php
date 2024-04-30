<?php

namespace App\Http\Livewire\UserDashboard;

use App\Models\Locations;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Location;
use WireUi\Traits\Actions;

class LocationsPage extends Component
{
    use Actions, WithPagination;
    public $locationModal = False;
    public $name;

    public function openLocationModal(){
        $this->resetErrorBag();
       $this->locationModal = true;
    }

    public function saveLocation(){
        $this->validate([
            'name' => 'required'
        ]);

        $location = new Locations();
        $location->name = $this->name;
        $location->save();

        $this->locationModal = false;

        $this->notification()->success(
            $title = 'Location Saved',
            $description = 'New Location Saved successfully'
        );

    }

    public function delete(Locations $location){
        $location->delete();
        $this->notification()->success(
            $title = 'Location Deleted Successfully'
        );

    }

    public function render()
    {
        $locations = Locations::paginate(15);
        return view('livewire.user-dashboard.locations-page', compact('locations'));
    }
}
