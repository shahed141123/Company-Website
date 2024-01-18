<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeaveApprovalNotification extends Notification
{
    use Queueable;
    public $name;
    public $leave_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name , $leave_id)
    {
        $this->name = $name;
        $this->leave_id = $leave_id;
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
            'link' => route('leave-application.edit',$this->leave_id),
            'message1' => 'has applied for a Leave Application.',
            'message2' => 'a Leave Application '.$this->leave_id.' Check and Approve',
        ];
    }
}
