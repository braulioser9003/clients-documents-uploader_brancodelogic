<?php


namespace App\Services;

use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class Smartcredit_lib
{
    protected $CI;
    private $client_key;
    private $smartcredit_url;
    private $api_slug;
    private $auth_user;
    private $auth_pass;
    private $require_http_auth;
    private $auth_http_token;
    public $tracking_token;
    public $customer_token;
    private $browser_address;
    public $customer_validated;
    private $credit_card_token;
    private $temporary_password;
    private $jsessionid_cookie;
    private $username;
    private $password;
    private $sponsor_code;
    public $answer;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->client_key = '9cb4478f-2f4f-477d-b1eb-c3356642d9f9';
        $this->smartcredit_url = 'https://stage-sc.consumerdirect.com';
        $this->api_slug = '/api';
        $this->require_http_auth = TRUE;
        $this->auth_http_token = 'Y3JlZGl0bzc4NjpuNGQyM2JuY2RtZGE=';
        $this->auth_user = 'credito786';
        $this->auth_pass = 'n4d23bncdmda';
        $this->browser_address = '68.183.118.75';
        //$this->sponsor_code = 'H7RKE44TUJ';
        $this->answer = 'Credito786thebests';
    }

    public function get_api_url()
    {
        return $this->smartcredit_url . $this->api_slug;
    }

    private function create_query_string($params)
    {
        $query = '';
        $count = count($params);
        $i = 1;
        foreach ($params as $key => $value) {
            $query .= $key . '=' . $value;
            if ($count != $i) {
                $query .= '&';
            }
            $i++;
        }
        return $query;
    }

    private function _exec_curl($curl)
    {
        $response = curl_exec($curl);
        $output = array();

        // Matching the response to extract cookie value
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',
            $response, $match_found);

        $cookies = array();
        if (!empty($match_found[1])){
            foreach ($match_found[1] as $item) {
                parse_str($item, $cookie);
                $cookies = array_merge($cookies, $cookie);
            }
        }

        if (!curl_errno($curl)) {
            $curl_info = curl_getinfo($curl);
            switch ($http_code = $curl_info['http_code']) {
                case 200:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 201:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 400:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 401:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 423:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 500:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                case 422:  # OK
                    $output = json_decode($response, TRUE);
                    break;
                default:
                    echo 'Unexpected HTTP code: ', $http_code, "\n";
            }
            if (!empty($cookies)) {
                $output['_cookies'] = $cookies;
            }
            if (is_null($output)) {
                $output = $response;
            }
        } else {
            $message = 'Error:' . curl_error($curl);
            Log::error($message);
            echo $message;
        }
        curl_close($curl);
        if (!empty($curl_info)) {
            $_url = !empty($curl_info['url']) ? $curl_info['url'] : '';
            $_http_code = !empty($curl_info['http_code']) ? $curl_info['http_code'] : '';
            Log::info('<pre>' . $_url . ' --> ' . $_http_code . ': ' . (!empty($response) ? $response : "") . '</pre></br>');
            //echo '<pre>' . $curl_info['url'] . ' --> ' . $curl_info['http_code'] . ': ' . (!empty($response) ? $response : "") . '</pre></br>';
        }

        return $output;
    }

    public function start()
    {
        $params = array(
            'clientKey' => $this->client_key,
            'PID' => '58235',
        );
        $endpoint = '/signup/start';
        $query_string = $this->create_query_string($params);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint . '?' . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $output = $this->_exec_curl($curl);
        if (!empty($output['trackingToken'])) {
            $this->tracking_token = $output['trackingToken'];
        }

        return $output;

        /*{
            "trackingToken": "0f00f656-9a7c-499e-8f7e-1bfeba985633"
        }*/
    }

    private function check_start()
    {
        if (empty($this->tracking_token)) {
            throw new \Exception('Tracking Tocken is invalid or empty');
        }
    }

    public function create_customer($data)
    {
        $this->check_start();
        $curl = curl_init();
        $endpoint = '/signup/customer/create';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $this->tracking_token,
            'email' => $data['email'],
            'firstName' => $data['first_name'],
            'homePhone' => $data['phone'],
            'lastName' => $data['last_name'],
            'password' => $data['password'],
            'planType' => $data['plan'],
            'identity.ssn' => $data['ssn'],
            'identity.ssnPartial' => $data['ssn_partial'],
        );

        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        $output = $this->_exec_curl($curl);
        if (!empty($output['customerToken'])) {
            $this->customer_token = $output['customerToken'];
            $this->username = $params['email'];
            $this->password = $params['password'];
            $this->sponsor_code = $data['sponsor_code'];
        }
        return $output;

        /*{
         "customerToken": "6a195bf3-57d6-4014-9773-96f8d8f7d857",
            "PID": "58235",
         "isFinancialObligationMet": false,
            "planType": "BASIC"
        }*/
    }

    public function update_customer_identity($data)
    {

        $curl = curl_init();
        $endpoint = '/signup/customer/update/identity';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $data['tracking_token'],
            'confirmTermsBrowserIpAddress' => $this->browser_address,
            'customerToken' => $data['customer_token'],
            'homeAddress.city' => $data['home_address_city'],
            'homeAddress.state' => $data['home_address_state'],
            'homeAddress.street' => $data['home_address_street'],
            'homeAddress.street2' => $data['home_address_street2'],
            'homeAddress.zip' => $data['home_address_zip'],
            'identity.birthDate' => $data['birthday'],
            'identity.ssn' => $data['ssn'],
            'identity.ssnPartial' => $data['ssn_partial'],
            'firstName' => $data['first_name'],
            'homePhone' => $data['phone'],
            'lastName' => $data['last_name'],
            'securityQuestionAnswer.answer' => $data['answer_string'],
            'securityQuestionAnswer.securityQuestionId' => '1',
            'isBrowserConnection' => 'true',
            'isConfirmedTerms' => 'true',
        );
        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        $output = $this->_exec_curl($curl);
        if (!empty($output['planType'])) {
            $this->customer_validated = TRUE;
        }
        return $output;
        /*
         * array(2) {
              ["planType"]=>
              string(5) "BASIC"
              ["model"]=>
              array(2) {
                ["homeAddress.city"]=>
                string(16) "Huntington Beach"
                ["homeAddress.state"]=>
                string(2) "CA"
              }
            }
         *
         * */
    }

    public function get_credit_card_token($card_number)
    {
        $this->check_start();
        $curl = curl_init();
        $endpoint = '/signup/validate/credit-card-number';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $this->tracking_token,
            'number' => $card_number,
        );
        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint . '?' . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $output = $this->_exec_curl($curl);
        if (!empty($output['creditCardToken'])) {
            $this->credit_card_token = $output['creditCardToken'];
        }
        return $output;
        /*
         * {
            "creditCardToken": "4c9b3c2b-6cf5-458b-9946-11317bc90b63"}
         * */
    }

    public function update_customer_credit_card($data)
    {
        $this->check_start();
        $curl = curl_init();
        $endpoint = '/signup/customer/update/credit-card';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $this->tracking_token,
            'confirmTermsBrowserIpAddress' => $this->browser_address,
            'customerToken' => $this->customer_token,
            'creditCard.token' => $data['creditcard_token'],
            'creditCard.cvv' => $data['creditcard_cvv'],
            'creditCard.expirationMonth' => $data['creditcard_expiration_month'],
            'creditCard.expirationYear' => $data['creditcard.expiration_year'],
            'creditCard.zip' => $data['creditcard_zip'],
            'creditCard.city' => $data['creditcard_city'],
            'creditCard.state' => $data['creditcard_state'],
            'creditCard.address' => $data['creditcard_address'],
            'planType' => $data['plan'],
            'isBrowserConnection' => 'true',
            'isConfirmedTerms' => 'true',
        );
        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        $output = $this->_exec_curl($curl);
        return $output;

        /*
         * {
              "isFinancialObligationMet": false,
              "planType": "PREMIUM"
            }
         * */

    }

    public function update_customer_sponsor_code($sponsor_code, $customer_token = '')
    {
        $this->check_start();
        $curl = curl_init();
        $endpoint = '/signup/customer/update/sponsor-code';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $this->tracking_token,
            'confirmTermsBrowserIpAddress' => $this->browser_address,
            'customerToken' => !empty($customer_token) ? $customer_token : $this->customer_token,
            'sponsorCodeString' => $sponsor_code,
            'isBrowserConnection' => 'true',
            'isConfirmedTerms' => 'true',
        );
        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        $output = $this->_exec_curl($curl);
        return $output;

        /*
         * {
              "PID": "14002",
              "isFinancialObligationMet": true,
              "planType": "SPONSORED"
            }
         *
         * */

    }

    public function get_questions_reference($data)
    {
        $curl = curl_init();
        $endpoint = '/signup/id-verification';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $data['tracking_token'],
            'customerToken' => $data['customer_token'],
        );
        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint . '?' . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            /*CURLOPT_HTTPHEADER => array(
                //'Cookie: TRACKING=fc6e100f-1874-4471-926d-3a84792cad86'
            ),*/
        ));

        $output = $this->_exec_curl($curl);
        return $output;
    }

    public function validate_answer_id_verification($data)
    {
        $curl = curl_init();
        $endpoint = '/signup/id-verification';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $data['tracking_token'],
            'customerToken' => $data['customer_token'],
            'idVerificationCriteria.referenceNumber' => $data['referenceNumber'],
        );
        if (isset($data['answer1'])){
            $params['idVerificationCriteria.answer1'] = $data['answer1'];
        }
        if (isset($data['answer2'])){
            $params['idVerificationCriteria.answer2'] = $data['answer2'];
        }
        if (isset($data['answer3'])){
            $params['idVerificationCriteria.answer3'] = $data['answer3'];
        }
        if (isset($data['answer4'])){
            $params['idVerificationCriteria.answer4'] = $data['answer4'];
        }
        if (isset($data['answer5'])){
            $params['idVerificationCriteria.answer5'] = $data['answer5'];
        }

        $query_string = $this->create_query_string($params);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            //CURLOPT_SSL_VERIFYHOST => 0,
            //CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                //'Cookie: TRACKING=fc6e100f-1874-4471-926d-3a84792cad86'
            ),
        ));

        $output = $this->_exec_curl($curl);
        return $output;

        /*
         * {}
         * */
    }

    public function complete($data = array())
    {
        $curl = curl_init();
        $endpoint = '/signup/complete';
        $params = array(
            'clientKey' => $this->client_key,
            'trackingToken' => $data['tracking_token'],
            'customerToken' => $data['customer_token'],
        );
        $query_string = $this->create_query_string($params);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_api_url() . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                //'Cookie: TRACKING=fc6e100f-1874-4471-926d-3a84792cad86'
            ),
        ));

        $output = $this->_exec_curl($curl);
        if (!empty($output['temporaryPassword'])) {
            $this->temporary_password = $output['temporaryPassword'];
        }
        return $output;

        /*
         *
         * {
            "temporaryPassword": "0000000002tqa7c+PNtJRozwBd8c2MSmYhJg3SslasOfSjpQeWyI4=",
            "planType": "BASIC",
            "model": {
                "campaignIdn": null,
                "offerType": "Basic",
                "orderIdn": "54a8beccefa849f19aca904c69b29e14",
                "lastPaidCampaignIdn": null,
                "chargeSetup": 0.00
            }
        }
         *
         * */
    }

    public function login($data = array())
    {
        $curl = curl_init();
        $endpoint = '/external-login';

        $params = array(
            'loginType' => 'PARTNER_API',
            'j_username' => !empty($data['username']) ? $data['username'] : $this->username,
            'j_password' => !empty($data['password']) ? $data['password'] : $this->password,
        );

        $query_string = $this->create_query_string($params);
        $curl_httpheader = array(
            'Content-Type: application/x-www-form-urlencoded',
        );
        if ($this->require_http_auth) {
            $curl_httpheader[] = 'Authorization: Basic ' . $this->auth_http_token;
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->smartcredit_url . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $query_string,
            CURLOPT_HTTPHEADER => $curl_httpheader,
            CURLOPT_HEADER => 1,
            CURLOPT_RETURNTRANSFER => 1,
        ));

        $output = $this->_exec_curl($curl);

        if (!empty($output['_cookies']['JSESSIONID'])) {
            $this->jsessionid_cookie = $output['_cookies']['JSESSIONID'];
        }
        return $output;
    }

    public function get_3b_report($data)
    {
        $curl = curl_init();
        $endpoint = '/member/credit-report/3b/simple.htm';
        $params = array(
            'format' => $data['format'],
        );
        $cookie_header = 'Cookie: ';
        if (!empty($data['cookies']) && is_array($data['cookies'])) {
            foreach ($data['cookies'] as $key => $cookie) {
                $cookie_header .= $key . '=' . $cookie . ';';
            }
        }
        $query_string = $this->create_query_string($params);

        $curl_httpheader = array();
        if ($this->require_http_auth) {
            $curl_httpheader[] = 'Authorization: Basic ' . $this->auth_http_token;
        }
        $curl_httpheader[] = $cookie_header;


        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->smartcredit_url . $endpoint . '?' . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $curl_httpheader,
        ));

        $output = $this->_exec_curl($curl);

        return $output;
    }

    public function get_3b_pdf_report_py($data)
    {
        $endpoint = '/member/credit-report/3b/simple.htm';
        $cookie_header = '';
        if (!empty($data['cookies']) && is_array($data['cookies'])) {
            foreach ($data['cookies'] as $key => $cookie) {
                $cookie_header .= $key . '=' . $cookie . ';';
            }
        }
        $cookies = base64_encode($cookie_header);

        $authorization = base64_encode($this->auth_http_token);
        $params = array(
            'format' => 'HTML',
        );
        $outputPath = base64_encode($data['file_path'] . $data['file_name']);
        $query_string = $this->create_query_string($params);
        $url = base64_encode($this->smartcredit_url . $endpoint . '?' . $query_string);

        ob_start();
        $script_path = FCPATH.'pdfkit-smartcredit-script.py';
        passthru("python3 ".$script_path." ".$authorization. " ". $cookies . " ". $url . " ". $outputPath. " 2>&1");
        $var = ob_get_contents();
        $out = ob_end_clean(); //Use this instead of ob_flush()
        if ($var == 'success'){
            return array('error' => FALSE, 'message' => $data['file_name']);
        }else{
            return array('error' => TRUE, 'message' => $var);
        }
    }

    public function get_3b_smart_report($data)
    {
        $curl = curl_init();
        $endpoint = '/member/credit-report/smart-3b/';
        $cookie_header = 'Cookie: ';
        if (!empty($data['cookies']) && is_array($data['cookies'])) {
            foreach ($data['cookies'] as $key => $cookie) {
                $cookie_header .= $key . '=' . $cookie . ';';
            }
        }

        $curl_httpheader = array();
        if ($this->require_http_auth) {
            $curl_httpheader[] = 'Authorization: Basic ' . $this->auth_http_token;
        }
        $curl_httpheader[] = $cookie_header;


        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->smartcredit_url . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $curl_httpheader,
        ));


        $output = $this->_exec_curl($curl);

        return $output;
    }


    public function get_security_questions()
    {
        $this->check_start();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stage-sc.consumerdirect.com/api/signup/security-questions?clientKey=9cb4478f-2f4f-477d-b1eb-c3356642d9f9&trackingToken=cb0b1109-3c14-4e76-89f2-3589aaec4091',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: TRACKING=fc6e100f-1874-4471-926d-3a84792cad86'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function parse_3b_report_request($html)
    {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);    // or loadHTML($str)
        $json_div = $dom->getElementById('TokenDisplay');
        $output = '';
        if (!empty($json_div->nodeValue)) {
            $decode = json_decode($json_div->nodeValue);
            //if (is_array($decode)) {
            $output = $decode;
            //}
        }
        return $output;
    }

    public function get_component_array_report($array_report, $component_name)
    {
        $output = null;
        if (isset($array_report->BundleComponents->BundleComponent)) {
            $bundle_components = $array_report->BundleComponents->BundleComponent;
            if (!empty($bundle_components)) {
                foreach ($bundle_components as $key => $main_component) {
                    if (isset($main_component->Type)) {
                        $component_type = $main_component->Type;
                        if ($component_type == $component_name) {
                            $output = $main_component;
                            break;
                        }
                    }
                }
            }
        }
        return $output;
    }

    public function get_accounts_array_report($array_report)
    {
        $component = $this->get_component_array_report($array_report, 'MergeCreditReports');
        $output = null;
        if (!is_null($component) && isset($component->TrueLinkCreditReportType->TradeLinePartition)) {
            $accounts = $component->TrueLinkCreditReportType->TradeLinePartition;
            $output = $accounts;
        }
        return $output;
    }

    public function get_inquiries_array_report($array_report)
    {
        $component = $this->get_component_array_report($array_report, 'MergeCreditReports');
        $output = null;
        if (!is_null($component) && isset($component->TrueLinkCreditReportType->InquiryPartition)) {
            $inquiries = $component->TrueLinkCreditReportType->InquiryPartition;
            $output = $inquiries;
        }
        return $output;
    }

    public function get_addresses_array_report($array_report)
    {
        $component = $this->get_component_array_report($array_report, 'MergeCreditReports');
        $output = null;
        if (!is_null($component) && isset($component->TrueLinkCreditReportType->Borrower->BorrowerAddress)) {
            $addresses = $component->TrueLinkCreditReportType->Borrower->BorrowerAddress;
            $previous_addresses = $component->TrueLinkCreditReportType->Borrower->PreviousAddress;
            $output = array_merge($addresses, $previous_addresses);
        }
        return $output;
    }

    public function get_names_array_report($array_report)
    {
        $component = $this->get_component_array_report($array_report, 'MergeCreditReports');
        $output = null;
        if (!is_null($component) && isset($component->TrueLinkCreditReportType->Borrower->BorrowerName)) {
            $names = $component->TrueLinkCreditReportType->Borrower->BorrowerName;
            $output = $names;
        }
        return $output;
    }

    public function generate_user_pass($length)
    {
        //A list of characters that can be used in our
        //random password.
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //Create a blank string.
        $password = '';
        //Get the index of the last character in our $characters string.
        $characterListLength = mb_strlen($characters, '8bit') - 1;
        //Loop from 1 to the $length that was specified.
        foreach (range(1, $length) as $i) {
            $password .= $characters[random_int(0, $characterListLength)];
        }
        return $password;
    }


}
