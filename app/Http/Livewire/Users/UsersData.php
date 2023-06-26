<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Date;
use Illuminate\View\View;
use Livewire\Component;

class UsersData extends Component
{
    /**
     * @var \App\Models\User
     */
    public $user;

    /**
     * Form username field
     *
     * @var string
     */
    public $username;

    /**
     * Form name field
     *
     * @var string
     */
    public $name;

    /**
     * Form email field
     *
     * @var string
     */
    public $email;

    /**
     * Form gender field
     *
     * @var int
     */
    public $gender;

    /**
     * Form state field
     *
     * @var int
     */
    public $state;

    /**
     * Form mobile field
     *
     * @var string
     */
    public $mobile;

    /**
     * Form phone field
     *
     * @var string
     */
    public $phone;

    /**
     * Form password field
     *
     * @var string
     */
    public $password;

    /**
     * Indicate whether the data can be edited
     *
     * @var bool
     */
    public $editable = false;

    /**
     * Trapped events
     *
     * @var array<string>
     */
    protected $listeners = ['deleteUsers'];

    public function render(): View
    {
        // @phpstan-ignore-next-line
        return view('livewire.users.users-data')->layout('layout.app');
    }

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->fill([
        'username' => $user->getAttribute('username'),
            'name' => $user->getAttribute('name'),
            'email' => $user->getAttribute('email'),
            'gender' => $user->getAttribute('gender'),
            'state' => $user->getAttribute('state'),
            'mobile' => $user->getAttribute('mobile'),
            'phone' => $user->getAttribute('phone'),
            'password' => $user->getAttribute('password'),
        ]);
    }

    public function updated(mixed $field): void
    {
        $this->validateOnly($field, [
            'username' => ['string', 'max:45'],
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'email', 'max:45'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);
    }

    public function activateEdition(): void
    {
        $this->editable = true;
    }

    public function deleteUser(): void
    {
        $this->user->setAttribute('deleted_at', Date::now());
        $this->user->save();

        to_route('users.table');
    }
}
