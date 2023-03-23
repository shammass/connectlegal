<?php

namespace App\Traits;
use \Mailjet\Resources;

trait VerifyMailTrait {

    public function verifyLawyerMail($toEmail, $name, $subject, $token) {

        $html = View::make('emails.verification-email', ['name' => $name, 'token' => $token])->render();
        $mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);
        // $url = "https://127.0.0.1:8000/reset-password/".$token;
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "s4shamma@gmail.com",
                        'Name' => "Connect Legal"
                    ],
                    'To' => [
                        [
                            'Email' => $toEmail,
                            'Name' => "You"
                        ]
                    ],
                    'Subject' => $subject,
                    // 'TextPart' => "Greetings from Mailjet!",
                    'HTMLPart' => $html
                ]
            ]
        ];
        
        // All resources are located in the Resources class
        
        $response = $mj->post(Resources::$Email, ['body' => $body]);

        return $response;
    }
    
}
