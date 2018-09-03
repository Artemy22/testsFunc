<?php

class MainLogicData
{
    public $title;
    public $path;
    public $jwt;
    public $data;

    /**
     * MainLogicFile constructor.
     * @param $title
     * @param $path
     * @param $jwt
     * @param $data
     */
    public function __construct($title, $path, $jwt, $data)
    {
        $this->title = $title;
        $this->path = $path;
        $this->jwt = $jwt;
        $this->data = $data;
    }

    public function actionData()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('POST', '', [
                'multipart' => [
                    [
                        'name' => 'title',
                        'contents' => $this->title
                    ],
                    [
                        'name' => 'data',
                        'contents' => $this->data
                    ]
                ],
                'headers' => [
                    'Authorization' => $this->jwt
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '. Type: DATA ' . $response->getBody() . '<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "<br>";
        }
    }
}
