<?php declare(strict_types=1);

namespace h4kuna\Ares;

use GuzzleHttp\Client;

interface IFactory
{

	function createData(array $data): Data;


	function createGuzzleClient(array $options): Client;


	function createDataProvider(): DataProvider;


	function createBodyFactory(): BodyFactory;

}
