<html>
    <head>
        <title> Hello World </title>
    </head>
    <body>
        <?php
        define("HELLO","Hello World");
        $hello="HELLO";
        $newline="<br/>";
        print "Hello World ! <br/>";
        print "GoodBye. <br/>";
        print "Over and out." . $newline;
        echo "Excuse line " . __LINE__ . " of php script " . __FILE__ . "." . $newline;
        echo constant($hello);
        $sum=1;
        while($sum<10)
        {
            $sum++;
            print "Hello World" . $sum . $newline;
        }

?>
    </body>
</html>
