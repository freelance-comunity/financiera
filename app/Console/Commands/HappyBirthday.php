<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class HappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia un mensaje por correo';

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
        $data['name'] = 'PUTO';
        $data['pass'] = 'Perrita';
        $data['email'] = 'wilirm23@gmail.com';

        Mail::send('mails.register', ['data' => $data], function($mail) use($data){
            $mail->subject('Te proporcionamos las credenciales de acceso al sistema');
            $mail->to($data['email'], $data['name'], $data['pass']);
        });

        $this->info('Los mensajes de han sido enviados correctamente');
    }
}
