<?php

namespace App\Observers;

use App\Models\Rdv;
use App\Notifications\SendRdvNotification;
use Nexmo\Laravel\Facade\Nexmo;

class RdvObserver
{
    /**
     * Handle the Rdv "created" event.
     *
     * @param  \App\Models\Rdv  $rdv
     * @return void
     */
    public function created(Rdv $rdv)
    {
        /**SYSTEME D'ENVOI DE MESSAGE 
         
         
         Nexmo::message()->send([
                 'to' => $rdv->tel,
                 'from' => '+224626919660',
                 'text' => 'votre demande de rendez à été soumis avec succès, nous vous tiendrons au courant de la suite Merci!'
             ]);
             
         * */

        $rdv->notify(new SendRdvNotification());
    }

    /**
     * Handle the Rdv "updated" event.
     *
     * @param  \App\Models\Rdv  $rdv
     * @return void
     */
    public function updated(Rdv $rdv)
    {
        //
    }

    /**
     * Handle the Rdv "deleted" event.
     *
     * @param  \App\Models\Rdv  $rdv
     * @return void
     */
    public function deleted(Rdv $rdv)
    {
        //
    }

    /**
     * Handle the Rdv "restored" event.
     *
     * @param  \App\Models\Rdv  $rdv
     * @return void
     */
    public function restored(Rdv $rdv)
    {
        //
    }

    /**
     * Handle the Rdv "force deleted" event.
     *
     * @param  \App\Models\Rdv  $rdv
     * @return void
     */
    public function forceDeleted(Rdv $rdv)
    {
        //
    }
}
