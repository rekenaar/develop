#CSV

Laravel 5 package to read and write CSV files.

##Instalation

First run composer command

Next add service provider to <code>config/app.php</code> file

    'providers' => [
        //... 
        \EONConsulting\Storyline\Table\StorylineTableServiceProvider::class,
    ]

##Usage

###Config file

Package config can be found in csv.php file under config directory (after you published it).
Config file contains default values for delimiter, enclosure and escape parameters. You can set default values here and skip passing
additional parameters to open and create methods (we discuss them later).

####Convert encoding

Common issue when working with CSV files generated by Excel is encoding. Excel exports CSV file encoded with windows-1250 character set
while most of PHP applications use UTF-8. To solve this issue, you can set encoding option in config file. You set your encoding
preferences separately for reader and writer.

    'encoding' => [
        'reader' => [
            'enabled' => true,
            'from' => 'CP1250',
            'to' => 'UTF-8'
        ],
        'writer' => [
            'enabled' => true,
            'from' => 'UTF-8',
            'to' => 'CP1250'
        ]
    ]

As you can see in the example above, Reader will convert windows-1250 encoding to UTF-8, while Writer will do this in opposite way.
You don't have to use both options. You can set encoding conversion only for one class - reader or writer.

###Reader

First you need to open CSV file.

    $reader = CsvReader::open('/path/to/file.csv');

If you need to change delimiter, enclosure or escape you can do it by passing proper values to <code>open</code> method.
More information about these values can be found here - [http://php.net/manual/en/function.fgetcsv.php](http://php.net/manual/en/function.fgetcsv.php).

    $reader = CsvReader::open('/path/to/file.csv', ';', '\'', '\\\\');

Having your CSV file opened you can read it line after line

    while (($line = $reader->readLine()) !== false) {
        print_r($line);
    }

or you could read whole file at once

    print_r($reader->readAll());

If your CSV file contains header line, you can convert it into array keys for each line.

    $reader = CsvReader::open($file, ';');
    $header = $reader->getHeader();
    print_r($header);
    print_r($reader->readAll());

Don't forget to close file after you're done with your work.

    $reader->close();

##Writer

At first you need to create new file
    
    $writer = CsvWriter::create('/path/where/your/file/will/be/saved.csv');

File path is optional. If you won't provide it, CsvWriter will use memory as storege for added content.

If you need to change delimiter, enclosure or escape you can do it by passing proper values to <code>create</code> method.
More information about these values can be found here - [http://php.net/manual/en/function.fputcsv.php](http://php.net/manual/en/function.fputcsv.php).

    $writer = CsvWriter::create('/path/to/file.csv', ';', '\'', '\\\\');

To add data into CSV file you can use <code>writeLine</code> or <code>writeAll</code> methods.

    $writer->writeLine(['some', 'data']);
    $writer->writeLine(['another', 'line']);
    
    $writer->writeAll([
        ['some', 'data'],
        ['another', 'line'],
    ]);

To display data added to CSV file, you can use flush method.

    echo $writer->flush();

Don't forget to close file after you're done with your work.

    $writer->close();

