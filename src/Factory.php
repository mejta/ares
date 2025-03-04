<?php declare(strict_types=1);

namespace h4kuna\Ares;

use GuzzleHttp\Client;

class Factory implements IFactory
{

	public function createDataProvider(): DataProvider
	{
		return new DataProvider($this);
	}


	public function createData(array $data): Data
	{
		return new Data($data);
	}


	public function createGuzzleClient(array $options = [CURLOPT_CONNECTTIMEOUT => 30]): Client
	{
		return new Client(['curl' => $options, 'headers' => ['X-Powered-By' => 'h4kuna/ares']]);
	}


	public function createBodyFactory(): BodyFactory
	{
		return new BodyFactory();
	}

}
