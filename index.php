<?php
# Include necessary files


#DATABASE and FUNCTIONS
require("main/functions/database.php");
require("main/functions/fetch_URI.php");

#Global Variables
require("main/env/env.php");
#Device Detector
require("main/functions/fetch_agent.php");

#Route
require("main/partials/bookstore.php");
require("main/partials/dateme.php");
require("main/partials/webconsole.php");
require("main/partials/testing.php");



#something new
# MAIN PAGE
# Check if the URI is the root or has a specific parameter
if (URL('/') || URL('/?i=1')) require($main_page);


# Testing
else if (URL($testing_pool)) require("test/test.php");

# Not Found 404!
else die(include($notfound_page));
