<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Collection;

class DateTimeAvailability extends Component
{
    public string $date;

    public array $availableTimes = [];

    public Collection $appointments;

    public string $designTemplate = 'tailwind';

    public function mount()
    {
        $this->date = now()->format('Y-m-d');

        $this->getIntervalsAndAvailableTimes();
    }

    public function updatedDate()
    {
        $this->getIntervalsAndAvailableTimes();
    }

    public function render()
    {
        return view('livewire.' . $this->designTemplate . '.date-time-availability');
    }

    protected function getIntervalsAndAvailableTimes()
    {
        $this->reset('availableTimes');

        $carbonIntervals = Carbon::parse($this->date . ' 8 am')->toPeriod($this->date . ' 8 pm', 1, 'hours');

        $this->appointments = Appointment::whereDate('start_time', $this->date)->get();

        foreach ($carbonIntervals as $interval) {
            $this->availableTimes[$interval->format('hA')] = !$this->appointments->contains( 'start_time', $interval);;
        }
    }
}
