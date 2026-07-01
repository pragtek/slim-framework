<?php


namespace App\Support;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Response;

class Redirect
{
    protected $response;

    public function __construct()
    {
        $this->response = $this->createResponse(302);
    }
	
	public function createResponse(
        int $code = 200,
        string $reasonPhrase = ''
    ): ResponseInterface {
        $res = new Response($code);

        if ($reasonPhrase !== '') {
            $res = $res->withStatus($code, $reasonPhrase);
        }

        return $res;
    }

    public function __invoke(string $to)
    {
        $this->response = $this->response->withHeader('Location', $to);

        return $this->response;
    }
}
