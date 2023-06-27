<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

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
     * Form password confirmation field
     *
     * @var string
     */
    public $password_confirmation;

    /**
     * Trapped events
     *
     * @var array<string>
     */
    protected $listeners = ['delete'];

    public function render(): View
    {
        // @phpstan-ignore-next-line
        $users = User::whereNull('deleted_at')->paginate();

        // @phpstan-ignore-next-line
        return view('livewire.users.users-table', compact('users'))->layout('layout.app');
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

    public function resetFields(): void
    {
        $this->reset([
            'name',
            'username',
            'email',
            'gender',
            'state',
            'mobile',
            'phone',
            'password',
            'password_confirmation',
        ]);
    }
}
