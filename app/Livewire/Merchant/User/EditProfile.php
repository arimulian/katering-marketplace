<?php

namespace App\Livewire\Merchant\User;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProfile extends Component
{
    use WithFileUploads;
    public $id;
    public $name;
    public $email;
    public $address;
    public $contact;
    public $description;
    #[Rule('nullable|max:1024|mimes:jpg,jpeg,png')]
    public $image;
    public User $user;
    public function mount()
    {
        $this->id = $this->user->id;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->address = $this->user->address;
        $this->contact = $this->user->contact;
        $this->description = $this->user->description;
    }

    public function update()
    {
        $this->validate();
        $image = $this->user->image;
        if ($this->image != null) {
            Storage::delete($this->user->image); // Delete old image if exists.
            $image = Storage::putFile('images', $this->image);
        }
        User::query()
            ->where('id', $this->id)
            ->update([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'contact' => $this->contact,
            'description' => $this->description,
            'image' => $image,
        ]);

        session()->flash('status', 'User profile updated successfully.');
        return redirect()->route('profile', $this->id);
    }

    public function render()
    {
        $user = User::query()->find($this->id)->first();
        return view('livewire.merchant.user.edit-profile', compact('user'));
    }
}
