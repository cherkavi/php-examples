<?
// пример работы PHP скрипта с сервлетом 
// (передача по HTTP протоколу в POST параметре значения, и прием данных в виде ответа )

		$socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
		socket_set_option($socket,SOL_SOCKET,SO_REUSEADDR,1);
		//socket_set_timeout($socket,5,10); - trhow Warnings
		$page="/Test/Gate";
		$host="localhost";
		$port=8080;
		$dataForSend="data=this is string for send to servlet";
			if(socket_connect($socket,$host,$port)>=0){
				//print "socket connect OK<br>";
	    		$data = "POST $page HTTP/1.0\r\n";
    			//$data .= "Host: $host\r\n";
    			//                                                     V - remove this space symbol
	    		//$data .= "Accept: text/html, application/xml;q=0.9, * /*;q=0.1\r\n";
		    	//$data .= "Accept-Charset: windows-1251, utf-8;q=0.6, *;q=0.1\r\n";
    			//$data .= "Accept-Encoding: deflate, gzip, identity, *;q=0\r\n";
    			//$data .= "Accept-Language: ru\r\n";
		    	//$data .= "Connection: close\r\n";
			    //$data .= "Keep-Alive: 300\r\n";
    			//$data .= "Expires: Thu, 01 Jan 1970 00:00:01 GMT\r\n";
	    		//$data .= "Cache-Control: no-store, no-cache, must-revalidate\r\n";
	    		//$data .= "Pragma: no-cache\r\n";
    			//$data .= "Cookie: income=1\r\n";
	    		//$data .= "Referer: http://$host/\r\n";
    			//$data .= "User-Agent: Mozilla/5.0 (compatible; MSIE 6.0; Windows 98)\r\n";
	    		$data.="Content-Length:".strlen($dataForSend)."\r\n";
	    		$data.="Content-Type: application/x-www-form-urlencoded\r\n";
	    		$data.="\r\n";
    			$data.=$dataForSend;
	    		$data.="\r\n";
				//print "begin write data:".$data."<br>";
    			$writeByte=socket_write($socket,$data,strlen($data));
				//print "write data: ".$writeByte."/".strlen($data)."<br>";
				$responseFromServer="";
				while(($buf = socket_read($socket, 2048, PHP_BINARY_READ)) != FALSE) {
					//print "<br>";
					$responseFromServer.=$buf;
				}
			}else{
				print "<b>socket bind ERROR</b><br>";
			}
		print $responseFromServer;
		print "<br>";
		print getDataFromHttpResponse($responseFromServer);
		socket_close($socket);
?>
<?
	// get data from HTTP response - find Connection: close\r\n - строки
	function getDataFromHttpResponse($httpResponse){
		$findString="Connection: close\r\n";
		$position=strpos($httpResponse,$findString);
		return substr($httpResponse,$position+strlen($findString));
	}
?>