<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Payments;
use Carbon\Carbon;
use Mail;

class LockPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lock:payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Los pagos han exedido el tiempo de espera, por lo tanto han sido bloqueados';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $date_now = Carbon::now()->toDateString();
      $hour_now = Carbon::now()->toTimeString();
      $payments = Payments::where('payment_date', $date_now)->where('status', 'Pendiente')->get();

      foreach ($payments as $key => $value) {
        if ($hour_now >= '12:04:00') {
          echo "Estamos listos para bloquear";
          $payment = Payments::find($value->id);
          $payment->status = 'Atrasado';
          $payment->surcharge = 20;
          $payment->total = $payment->ammount + $payment->surcharge;
          $payment->save();

          $data['name'] = 'Juan Carlos';
          $data['pass'] = 'morosos';
          $data['email'] = 'jncrlsmontejo@gmail.com';
          
          Mail::send('mails.late-payments', ['data' => $data], function($mail) use($data){
            $mail->subject('Lista de pagos atrasados');
            $mail->to($data['email']);
          });
        }
      }
    }
  }
