# API core 1.0
##  Elit-Service-API
### Copy This Json And Open In postman_id

{
	"info": {
		"_postman_id": "3e3b8847-9c92-48e9-a686-ce96183d2ae4",
		"name": "ES-API",
		"description": "***სერვისი - ზარის ჩანაწერების საძიებლად***",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "14442939"
	},
	"item": [
		{
			"name": "Get-Access-Token",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n    \"username\": \"API-USER\",\r\n    \"password\": \"8aXc%$La1p|p1\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "localhost:74/elite-api/Server/Auth/GetToken/",
					"host": [
						"localhost"
					],
					"port": "74",
					"path": [
						"elite-api",
						"Server",
						"Auth",
						"GetToken",
						""
					]
				},
				"description": "## `Auth/GetToken/`\n\n1.  ეს მოთხოვნა გიბრუნებთ ტოკენს, რომელსაც გამოიყენებთ შემდეგ როუტში,`Get-Calls-About` - ში, როგორც `Bearer Token` - ს.\n2.  ამ მოთხოვნისთვის გჭირდებათ `username` და `password` - პარამეტრები, რომლებსაც მიიღებთ მეილზე.\n3.  მოთხოვნა უნდა მოხდეს - `POST` მეთოდით."
			},
			"response": [
				{
					"name": "Get-Access-Token-Response",
					"originalRequest": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"username\": \"tester\",\r\n    \"password\": \"123\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "localhost:74/elite-api/Server/Auth/GetToken/",
							"host": [
								"localhost"
							],
							"port": "74",
							"path": [
								"elite-api",
								"Server",
								"Auth",
								"GetToken",
								""
							]
						}
					},
					"status": "OK",
					"code": 200,
					"_postman_previewlanguage": "json",
					"header": [
						{
							"key": "Date",
							"value": "Tue, 28 Jun 2022 14:51:30 GMT"
						},
						{
							"key": "Server",
							"value": "Apache/2.4.41 (Ubuntu)"
						},
						{
							"key": "Access-Control-Allow-Origin",
							"value": "*"
						},
						{
							"key": "Access-Control-Allow-Methods",
							"value": "OPTIONS,GET,POST,PUT,DELETE"
						},
						{
							"key": "Access-Control-Max-Age",
							"value": "3600"
						},
						{
							"key": "Access-Control-Allow-Headers",
							"value": "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"
						},
						{
							"key": "Vary",
							"value": "Accept-Encoding"
						},
						{
							"key": "Content-Encoding",
							"value": "gzip"
						},
						{
							"key": "Content-Length",
							"value": "175"
						},
						{
							"key": "Keep-Alive",
							"value": "timeout=5, max=100"
						},
						{
							"key": "Connection",
							"value": "Keep-Alive"
						},
						{
							"key": "Content-Type",
							"value": "text/html; charset=utf-8"
						}
					],
					"cookie": [],
					"body": "{\n    \"result\": {\n        \"id\": 426,\n        \"token\": \"$2y$10$wiKYbJcJq16t44XE54NUjeqHcwJs4IqII9HAld20dxzmC0080aH1O6b48482e6066585700ba02736527f1e6aac89cd853\"\n    },\n    \"code\": \"200\",\n    \"success\": true,\n    \"msg\": \"Success\"\n}"
				}
			]
		},
		{
			"name": "Get-Calls-About",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "$2y$10$uaEDUCMQyJoHCgwx2aWPh.1sZ9yTb0Iqm51k.KDa7eVVqK9w8CMZ621d64bd3e9bb78f546cb7fca96f0b50ea28f5fa6183",
							"type": "string"
						}
					]
				},
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n    \"phone\": \"593442084\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": {
					"raw": "localhost:74/elite-api/Server/Calls/About/",
					"host": [
						"localhost"
					],
					"port": "74",
					"path": [
						"elite-api",
						"Server",
						"Calls",
						"About",
						""
					]
				},
				"description": "## `Calls/About/`\n\n1.  ეს მოთხოვნა გიბრუნებთ ზარის ჩანაწერერების მისამართს, ზარის ნომერს და განხორციელებული ზარის დროს მასივის სახით.\n2.  ამ მოთხოვნისთვის გჭირდებათ წინა როუტში მიღებული ტოკენი, რომელსაც გამოიყენებთ `Bearer Token` - ად. ასევე ტელეფონის ნომერი რომელიც უნდა იყოს `String` ტიპის.\n3.  მოთხოვნა უნდა მოხდეს - `POST` მეთოდით."
			},
			"response": [
				{
					"name": "Get-Calls-About-Response",
					"originalRequest": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"phone\": \"571197490\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "localhost:74/elite-api/Server/Calls/About/",
							"host": [
								"localhost"
							],
							"port": "74",
							"path": [
								"elite-api",
								"Server",
								"Calls",
								"About",
								""
							]
						}
					},
					"status": "OK",
					"code": 200,
					"_postman_previewlanguage": "json",
					"header": [
						{
							"key": "Date",
							"value": "Tue, 28 Jun 2022 14:57:35 GMT"
						},
						{
							"key": "Server",
							"value": "Apache/2.4.41 (Ubuntu)"
						},
						{
							"key": "Access-Control-Allow-Origin",
							"value": "*"
						},
						{
							"key": "Access-Control-Allow-Methods",
							"value": "OPTIONS,GET,POST,PUT,DELETE"
						},
						{
							"key": "Access-Control-Max-Age",
							"value": "3600"
						},
						{
							"key": "Access-Control-Allow-Headers",
							"value": "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"
						},
						{
							"key": "Expires",
							"value": "Thu, 19 Nov 1981 08:52:00 GMT"
						},
						{
							"key": "Cache-Control",
							"value": "no-store, no-cache, must-revalidate"
						},
						{
							"key": "Pragma",
							"value": "no-cache"
						},
						{
							"key": "Vary",
							"value": "Accept-Encoding"
						},
						{
							"key": "Content-Encoding",
							"value": "gzip"
						},
						{
							"key": "Content-Length",
							"value": "250"
						},
						{
							"key": "Keep-Alive",
							"value": "timeout=5, max=100"
						},
						{
							"key": "Connection",
							"value": "Keep-Alive"
						},
						{
							"key": "Content-Type",
							"value": "text/html; charset=utf-8"
						}
					],
					"cookie": [],
					"body": "{\n    \"result\": [\n        {\n            \"id\": 136984,\n            \"call_type_id\": 1,\n            \"call_datetime\": 1636527156,\n            \"callback_datetime\": null,\n            \"unique_id\": \"1636527155.21987\",\n            \"user_id\": null,\n            \"did\": \"24712931\",\n            \"source\": \"571197490\",\n            \"destination\": null,\n            \"queue_id\": 10,\n            \"extension_id\": null,\n            \"queue_enter_position\": 1,\n            \"queue_exit_position\": 1,\n            \"ivr_time\": 0,\n            \"wait_time\": 2,\n            \"talk_time\": 0,\n            \"hold_time\": 0,\n            \"transfered\": 0,\n            \"call_status_id\": 9\n        }\n    ],\n    \"code\": \"200\",\n    \"success\": true,\n    \"msg\": \"Success\"\n}"
				}
			]
		}
	]
}
