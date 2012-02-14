<?php
        // Dave Jacoby 2012-02-14 
        // Make a phone call
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    ?>
<Response>
    <Pause length="3" />
    <Say voice="woman" language="en" >
        <?php echo $_GET['message'] ; ?>
    </Say>
    </Hangup/>
</Response>
