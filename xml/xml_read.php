<html>
	<head>
	</head>
	<body>
		<h1> temp </h1>
		<?php 
			/*$pathToFile="d:\\temp.xml";
			$fileXml=fopen($pathToFile,"r");
			print "file length:"+filesize($pathToFile)+"<br>";
			$xmlResource=fread($fileXml,filesize($pathToFile));
			*/
			$xmlResource = 
			"<?xml version=\"1.0\" ?>
				<settings atr_value=\"temp\">
					<element atr_val=\"element_attribute\">element value</element>
				</settings>			
			";
			/* print $xmlResource;*/
			print "<br>end<br>";
			$xml=domxml_open_mem($xmlResource);
			$document=$xml->root();
			print "<b>tagName:</b>".$document->tagname;
			print "<br>";
			print "<b>has Attribute:</b>".$document->has_attribute("atr_value");
			print "<br>";
			print "<b>get Attribute:</b>".$document->get_attribute("atr_value");
			print "<br>";
			
			print "<b>XPath</b> <br>";
			$xpath=xpath_new_context($document);
			$nodes=xpath_eval($xpath,"/settings/");
			print "<b>Nodes:</b>".$nodes."<br>";
			/* not working for($i=0;$i<count($nodes);$i++){
				print $nodes[$i];
			}*/
			foreach($nodes as $node){
				print $node;
			}
			print "<br><b>elements </b><br>";
			print "<br>";
			print "<b>has Child:</b>".$document->has_child_nodes();
			$elements=$document->child_nodes();
			$counter=0;
			foreach($elements as $childElement){
				print ++$counter." <b>Content:</b>".$childElement->get_content()
				                ."   <b>Name:</b>".$childElement->node_name()
				                ."   <b>Type:</b>".$childElement->node_type()
				                //."   <b>Value:</b>".$childElement->node_value()
						;
				print "<br>";
			}
			
		?>
	</body>
</html>