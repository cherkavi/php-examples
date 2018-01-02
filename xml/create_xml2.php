// create a new XML document
$doc = domxml_new_doc('1.0');

The first element we create in the XML document is known as the root element. Each XML document must have 1, and only 1, root element. In this example I have called it 'root', but you can use whatever name you like (such as the name of the PHP script which is executing). Note that you have to create the element and insert it into the document with two functions.

// create root node
$root = $doc->create_element('root');
$root = $doc->append_child($root);

Now we are ready to start adding the data we have retrieved from the database. Note that I am returning each row as an associative array which provides me with a list of 'name=value' pairs. This makes all subsequent processing far easier.

// process one row at a time
while($row = mysql_fetch_assoc($dbresult)) {

The first task I must perform for each row is to add a new element to the XML document. Here I create a new element using the table name, then I insert it into the document as a child of the root element.

  // add node for each row
  $occ = $doc->create_element($table_id);
  $occ = $root->append_child($occ);

Now I loop through each column in the current row, and insert the fieldname and corresponding value. You will see how having an associative array makes life easy. I need not concern myself with how many columns have been returned from the database query, nor with the order in which they are presented, as every column in the array gets written out.

  // add a child node for each field
  foreach ($row as $fieldname => $fieldvalue) {

Note that here I create a new element for the field and then insert it as a child to the current database row, as identified in $occ.

    $child = $doc->create_element($fieldname);
    $child = $occ->append_child($child);

Now I must add the field value as a text node, then insert it as a child element to the current field node, as identified in $child.

    $value = $doc->create_text_node($fieldvalue);
    $value = $child->append_child($value);

These loops do not terminate until they have processed every column of every row which has been retrieved from the database.

  } // foreach
} // while

This next function returns the completed XML document as a string.

// get completed xml document
$xml_string = $doc->dump_mem(true);

Here I am simply outputting the results to the client browser, but I could just as easily perform some additional processing such as passing it to an XSLT processor for transformation into another document, such as an HTML document, using the contents of a separate XSL file.

echo $xml_string;
?> 
