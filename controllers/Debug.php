<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use DebugBar\DebugBar;
use DebugBar\OpenHandler;
use DebugBar\Storage\FileStorage;

class Debug extends MY_Controller {
    
    public function open_handler()
	{
        $debugbar = new DebugBar();
        $debugbar->setStorage(new FileStorage(APPPATH.'cache/debugbar/'));

        $openHandler = new OpenHandler($debugbar);
        $data = $openHandler->handle(NULL, FALSE, FALSE);

        $this->output->enable_profiler(FALSE);
        $this->output->set_content_type('json');
        $this->output->set_output($data);
	}
}
