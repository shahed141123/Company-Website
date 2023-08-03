<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountsManagerAdd extends Notification
{
    use Queueable;
    public $name;
    public $salesmanager_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $salesmanager_name)
    {
        $this->name = $name;
        $this->salesmanager_name = $salesmanager_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->name,
            'link'=> route('accounts-manager.index'),
            'message1' => 'has regiestered a new Accounts Manager (',
            'message2' => $this->salesmanager_name.'). Approval Needed.',
        ];
    }
}
