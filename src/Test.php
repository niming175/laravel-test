<?php 

namespace Niming175\Test;
use Illuminate\Config\Repository;

class Test {
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config->get('test');
    }

    public function getTest($data)
    {
        $test_key_1 = $this->config['test_key_1'];
        $test_key_2 = $this->config['test_key_2'];

        $data = array_column($data, null, 'id');

        return $data;
    }


}
?>
