<?php

class DashbAdd
{
    public $title;
    public $path;
    public $cookie;

    /**
     * MainLogicFile constructor.
     * @param $title
     * @param $path
     * @param $cookie
     */
    public function __construct($title, $path, $cookie)
    {
        $this->title = $title;
        $this->path = $path;
        $this->cookie = $cookie;
    }

    public function dashbAdd()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('POST', '', [
                'multipart' => [
                    [
                        'name' => 'title',
                        'contents' => $this->title
                    ]
                ],
                'headers' => [
                    'Cookie' => $this->cookie
                ]
            ]);
            $json = json_decode($response->getBody());
//
//            echo $json['id']; // array
            echo "Code: " . $response->getStatusCode() . '. Type: DATA ' . $response->getBody() . '<br>';
            return $json->id; // object
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "<br>";
        }
    }
}