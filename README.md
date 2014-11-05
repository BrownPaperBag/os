# Presentation

Package to detect server operating system and its data-path width processor.


```php
<?php

use BrownPaperBag\OS;

if(OS::isWindows()){

    // Do something for Windows...

}
else{ // Doing something for Linux or Mac

    if(OS::is32bit()){

        // Do something for 32bit processor... 

    }
    else{

        // Do something for 64bit processor...

    }

}
```

# License

MIT
