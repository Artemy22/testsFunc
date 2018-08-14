<?php

class MainLogicList
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

    public function getList()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('GET', '', [
                'headers' => [
                    'Cookie' => $this->cookie
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '  ' . $response->getBody() . '<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "\n";
        }
    }
}
