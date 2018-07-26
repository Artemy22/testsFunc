<?php

class MainLogicList
{
    public $path;
    public $jwt;

    /**
     * MainLogicFile constructor.
     * @param $path
     * @param $jwt
     */
    public function __construct($path, $jwt)
    {

        $this->path = $path;
        $this->jwt = $jwt;

    }

    public function getList()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('GET', '', [
                'headers' => [
                    'Authorization' => $this->jwt
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '  ' . $response->getBody() . '<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "\n";
        }
    }
}
