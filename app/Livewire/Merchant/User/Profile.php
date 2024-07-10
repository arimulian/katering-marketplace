<?php

namespace App\Livewire\Merchant\User;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $id;

    public function mount(User $user)
    {
        $this->id = $user->id;
    }
    public function render()
    {
        $user = User::query()->find($this->id)->first();
        return view('livewire.merchant.user.profile', compact('user'));
    }
}
