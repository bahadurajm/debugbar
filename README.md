# Debugbar
Debugbar for Codeigniter 3

## Requirements

- PHP 5.4.x (Composer requirement)
- CodeIgniter 3.0.x

### Installation
### Step 1 Installation by Composer
Create composer.json file in your application's root if there is none. Add the following text in the file:
#### Edit /composer.json
```json
{
    "require": {
        "maltyxx/debugbar": "^1.0.0"
    }
}
```
#### Run composer update
```shell
composer update
```
### Step 2 Configuration
```txt
Duplicate configuration file `./application/third_party/debugbar/config/profiler.php` in `./application/config/profiler.php`.
```

### Step 3 Examples
Controller file is located in `./application/core/MY_Controller.php`.
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->add_package_path(APPPATH.'third_party/debugbar');
        $this->load->library('console');
        $this->output->enable_profiler(TRUE);

        $this->console->debug('Hello world !');
    }
}
```