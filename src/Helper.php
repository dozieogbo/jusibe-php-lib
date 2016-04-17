<?php
/*
 * This file is part of the Jusibe PHP library.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unicodeveloper\Jusibe;

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use Unicodeveloper\Jusibe\Exceptions\IsEmpty;

trait Helper {

    /**
    * Load Dotenv to grant getenv() access to environment variables in .env file.
    */
     public function loadEnv()
     {
         if (! getenv('APP_ENV')) {
             $dotenv = new Dotenv(__DIR__.'/../');
             $dotenv->load();
         }
     }

     /**
      * Get Valid Message ID
      * @return string
      */
     public function getValidMessageID()
     {
        return getenv('VALID_MESSAGE_ID');
     }

     /**
      * Get Invalid Message ID
      * @return string
      */
     public function getInvalidMessageID()
     {
        return getenv('INVALID_MESSAGE_ID');
     }

     /**
      * Get Valid Access Token
      * @return string
      */
     public function getValidAccessToken()
     {
        return getenv('VALID_ACCESS_TOKEN');
     }

     /**
      * Get Invalid Access Token
      * @return string
      */
     public function getInvalidAccessToken()
     {
        return getenv('INVALID_ACCESS_TOKEN');
     }

     /**
      * Get Valid Public Key
      * @return string
      */
     public function getValidPublicKey()
     {
        return getenv('VALID_PUBLIC_KEY');
     }

     /**
      * Get Valid Public Key
      * @return string
      */
     public function getInvalidPublicKey()
     {
        return getenv('INVALID_PUBLIC_KEY');
     }
}


