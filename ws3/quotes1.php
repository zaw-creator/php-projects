<?php
// Create a new XML document
$xml = new SimpleXMLElement('<quotes></quotes>');

// Data in CSV format
$data = "quote|source|dob-dod|wplink|wpimg|category
The old world is dying, and a new world struggles to be born; now is the time of monsters.|Antonio Gramsci|1891-1937|https://en.wikipedia.org/wiki/Antonio_Gramsci|https://upload.wikimedia.org/wikipedia/commons/e/e6/Gramsci.png|politics
They'll say we're disturbing the peace, but there is no peace. What really bothers them is that we are disturbing the war.|Howard Zinn|1922-2010|https://en.wikipedia.org/wiki/Howard_Zinn|https://upload.wikimedia.org/wikipedia/commons/e/ef/Howard_Zinn%2C_2009_%28cropped%29.jpg|politics
There is no remedy but to love more.|Henry David Thoreau|1817-1862|http://en.wikipedia.org/wiki/Henry_David_Thoreau|http://upload.wikimedia.org/wikipedia/commons/f/f0/Benjamin_D._Maxham_-_Henry_David_Thoreau_-_Restored.jpg|love
Work is the curse of the drinking classes.|Oscar Wilde|1854-1900|http://en.wikipedia.org/wiki/Oscar_wilde|http://upload.wikimedia.org/wikipedia/commons/a/a7/Oscar_Wilde_Sarony.jpg|humour
The unexamined life is not worth living.|Socrates|c.469-399 B.C.|https://en.wikipedia.org/wiki/Socrates|https://upload.wikimedia.org/wikipedia/commons/b/bc/Socrate_du_Louvre.jpg|philosophy
Whereof one cannot speak, thereof one must be silent.|Ludwig Wittgenstein|1889-1951|https://en.wikipedia.org/wiki/Ludwig_Wittgenstein|https://upload.wikimedia.org/wikipedia/commons/6/60/35._Portrait_of_Wittgenstein.jpg|philosophy
The mind, once stretched by a new idea, never returns to its original dimensions.|Ralph Waldo Emerson|1803-1882|https://en.wikipedia.org/wiki/Ralph_Waldo_Emerson|https://upload.wikimedia.org/wikipedia/commons/d/d5/Ralph_Waldo_Emerson_ca1857_retouched.jpg|education
The triumph of culture is to overpower nationality.|Ralph Waldo Emerson|1803-1882|https://en.wikipedia.org/wiki/Ralph_Waldo_Emerson|https://upload.wikimedia.org/wikipedia/commons/4/4b/Ralph_Waldo_Emerson_by_Josiah_Johnson_Hawes_1857.jpg|culture
Those who do not remember the past are condemned to repeat it.|George Santayana|1863-1952|https://en.wikipedia.org/wiki/George_Santayana|https://upload.wikimedia.org/wikipedia/commons/2/2a/George_Santayana.jpg|history
The saddest aspect of life right now is that science gathers knowledge faster than society gathers wisdom.|Isaac Asimov|1920-1992|https://en.wikipedia.org/wiki/Isaac_Asimov|https://upload.wikimedia.org/wikipedia/commons/3/34/Isaac.Asimov01.jpg|science";

// Split data into lines
$lines = explode("\n", $data);

// Remove the header line
$header = array_shift($lines);

foreach ($lines as $line) {
    // Split each line into parts using the pipe character (|)
    $parts = explode('|', $line);
    
    if (count($parts) === 6) {
        $quote = $xml->addChild('quote');
        $quote->addChild('text', $parts[0]);
        $quote->addChild('source', $parts[1]);
        $quote->addChild('dob-dod', $parts[2]);
        $quote->addChild('wplink', $parts[3]);
        $quote->addChild('wpimg', $parts[4]);
        $quote->addChild('category', $parts[5]);
    }
}

// Format the XML
$dom = dom_import_simplexml($xml)->ownerDocument;
$dom->formatOutput = true;

// Save the XML to a file
$dom->save('quotes.xml');

echo 'XML file created: quotes.xml';
?>