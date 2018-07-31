<?php

require_once ('DashbAdd.php');

class DashbCopy
{
    public $path;
    public $cookie;

    /**
     * MainLogicFile constructor.
     * @param $path
     * @param $cookie
     */
    public function __construct($path, $cookie)
    {
        $this->path = $path;
        $this->cookie = $cookie;
    }


    public function dashbCopy($id)

    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('POST', '', [
                'multipart' => [
                    [
                        'name' => 'uuid',
                        'contents' => $id
                    ]
                ],
                'headers' => [
                    'Cookie' => $this->cookie
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '. Type: DATA ' . $response->getBody() . '<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "<br>";
        }
    }
}