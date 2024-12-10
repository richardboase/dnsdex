<?php
return [
    'coincap_apikey' => env('COINCAP_APIKEY', ''),
    'graph_apikey' => env('GRAPH_APIKEY', ''),
    'ankr_key' => env('ANKR_KEY', ''),
    'blastapi_key' => env('BLASTAPI_KEY', ''),
    'infura_key' => env('INFURA_KEY', ''),
    'sepolia' => [
        'chainId' => 11155111,
        'virtualEth' => 2,
        'symbol' => 'ETH',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100, // 0.3%
        'uniswapV3Factory' => "0x0227628f3F023bb0B980b67D528571c95c6DaC1c",
        'positionManager' => "0x1238536071E1c677A632429e3655c799b22cDA52",
        'weth' => "0xfff9976782d46cc05630d1f6ebab18b2324d6b14",
        'feeTo' => null,
    ],
    'mainnet' => [
        'chainId' => 1,
        'virtualEth' => 2,
        'symbol' => 'ETH',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/HUZDsRpEVP2AvzDCyzDHtdc64dyDxx8FQjzsmqSg4H3B',
        'uniswapV3Factory' => "0x1F98431c8aD98523631AE4a59f267346ea31F984",
        'positionManager' => "0xC36442b4a4522E871399CD717aBDD847Ab11FE88",
        'weth' => "0xC02aaA39b223FE8D0A0e5C4F27eAD9083C756Cc2",
        'feeTo' => null,
    ],
    'bsc' => [
        'chainId' => 56,
        'virtualEth' => 2,
        'symbol' => 'BNB',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/F85MNzUGYqgSHSHRGgeVMNsdnW1KtZSVgFULumXRZTw2',
        'uniswapV3Factory' => "0xdB1d10011AD0Ff90774D0C6Bb92e5C5c8b4461F7",
        'positionManager' => "0x7b8A01B39D58278b5DE7e48c8449c9f4F5170613",
        'weth' => "0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c",
        'feeTo' => null,
    ],
    'arbitrum' => [
        'chainId' => 42161,
        'symbol' => 'ETH',
        'virtualEth' => 2,
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/FbCGRftH4a3yZugY7TnbYgPJVEv2LvMT6oF1fxPe9aJM',
        'uniswapV3Factory' => "0x1F98431c8aD98523631AE4a59f267346ea31F984",
        'positionManager' => "0xC36442b4a4522E871399CD717aBDD847Ab11FE88",
        'weth' => "0x82aF49447D8a07e3bd95BD0d56f35241523fBab1",
        'feeTo' => null,
    ],
    'optimism' => [
        'chainId' => 10,
        'virtualEth' => 2,
        'symbol' => 'ETH',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/Cghf4LfVqPiFw6fp6Y5X5Ubc8UpmUhSfJL82zwiBFLaj',
        'uniswapV3Factory' => "0x1F98431c8aD98523631AE4a59f267346ea31F984",
        'positionManager' => "0xC36442b4a4522E871399CD717aBDD847Ab11FE88",
        'weth' => "0x4200000000000000000000000000000000000006",
        'feeTo' => null,
    ],
    'base' => [
        'chainId' => 8453,
        'virtualEth' => 2,
        'symbol' => 'ETH',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/43Hwfi3dJSoGpyas9VwNoDAv55yjgGrPpNSmbQZArzMG',
        'uniswapV3Factory' => "0x33128a8fC17869897dcE68Ed026d694621f6FDfD",
        'positionManager' => "0x03a520b32C04BF3bEEf7BEb72E919cf822Ed34f1",
        'weth' => "0x4200000000000000000000000000000000000006",
        'feeTo' => null,
    ],

    'avalanche' => [
        'chainId' => 43114,
        'virtualEth' => 2,
        'symbol' => 'AVAX',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/GVH9h9KZ9CqheUEL93qMbq7QwgoBu32QXQDPR6bev4Eo',
        'uniswapV3Factory' => "0x740b1c1de25031C31FF4fC9A62f554A55cdC1baD",
        'positionManager' => "0x655C406EBFa14EE2006250925e54ec43AD184f8B",
        'weth' => "0xB31f66AA3C1e785363F0875A1B74E27b85FD66c7",
        'feeTo' => null,
    ],
    'celo' => [
        'chainId' => 142220,
        'virtualEth' => 2,
        'symbol' => 'CELO',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/ESdrTJ3twMwWVoQ1hUE2u7PugEHX3QkenudD6aXCkDQ4',
        'uniswapV3Factory' => "0xAfE208a311B21f13EF87E33A90049fC17A7acDEc",
        'positionManager' => "0x3d79EdAaBC0EaB6F08ED885C05Fc0B014290D95A",
        'weth' => "0x471EcE3750Da237f93B8E339c536989b8978a438",
        'feeTo' => null,
    ],
    'blast' => [
        'chainId' => 81457,
        'virtualEth' => 2,
        'symbol' => 'ETH',
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'graph' => 'https://gateway.thegraph.com/api/[api-key]/subgraphs/id/2LHovKznvo8YmKC9ZprPjsYAZDCc4K5q4AYz8s3cnQn1',
        'uniswapV3Factory' => "0x792edAdE80af5fC680d96a2eD80A44247D2Cf6Fd",
        'positionManager' => "0xB218e4f7cF0533d4696fDfC419A0023D33345F28",
        'weth' => "0x4300000000000000000000000000000000000004",
        'feeTo' => null,
    ],
    'zora' => [
        'chainId' => 7777777,
        'symbol' => 'ETH',
        'virtualEth' => 2,
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'uniswapV3Factory' => "0x7145F8aeef1f6510E92164038E1B6F8cB2c42Cbb",
        'positionManager' => "0xbC91e8DfA3fF18De43853372A3d7dfe585137D78",
        'weth' => "0x4200000000000000000000000000000000000006",
        'feeTo' => null,
    ],
    'worldchain' => [
        'chainId' => 480,
        'symbol' => 'ETH',
        'virtualEth' => 2,
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'uniswapV3Factory' => "0x7a5028BDa40e7B173C278C5342087826455ea25a",
        'positionManager' => "0xec12a9F9a09f50550686363766Cc153D03c27b5e",
        'weth' => "0x4200000000000000000000000000000000000006",
        'feeTo' => null,
    ],
    //sushiswap linea
    'linea' => [
        'chainId' => 59144,
        'symbol' => 'ETH',
        'virtualEth' => 2,
        'preBondingTarget' => 2,
        'bondingTarget' => 8,
        'minContribution' => 0.01,
        'poolFee' => 3000, // 0.3%
        'sellFee' => 100,
        'uniswapV3Factory' => "0xc35DADB65012eC5796536bD9864eD8773aBc74C4",
        'positionManager' => "0x80C7DD17B01855a6D2347444a0FCC36136a314de",
        'weth' => "0xe5D7C2a44FfDDf6b295A15c148167daaAf5Cf34f",
        'feeTo' => null,
    ]
];
