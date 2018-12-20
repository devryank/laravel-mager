<?php
/**
 * Created by PhpStorm.
 * User: faizalami
 * Date: 02/12/18
 * Time: 14:25
 */

namespace Faizalami\LaravelMager\Http\Controllers;

use App\Http\Controllers\Controller;
use Faizalami\LaravelMager\Components\JsonIO;
use Illuminate\Http\Request;

class JsonIOController extends Controller
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function processJson($type, $param1, $param2 = null, $param3 = null)
    {
        $param = [$param1, $param2, $param3];

        if ($this->request->isMethod('get')) {
            return $this->loadJson($type, $param);
        }
        if ($this->request->isMethod('post')) {
            return $this->writeJson($type, $param);
        }
    }

    private function loadJson($type, array $param) {
        $jsonIO = new JsonIO();
        $jsonString = '';
        switch ($type) {
            case 'page':
                switch ($param[0]) {
                    case 'controller':
                        $jsonString = $jsonIO->loadJsonFile('pages/'.$param[1].'/'.$param[0].'/'.$param[1].'.json');
                        break;
                    case 'model':
                    case 'view':
                        $jsonString = $jsonIO->loadJsonFile('pages/'.$param[1].'/'.$param[0].'/'.$param[2].'.json');
                        break;
                    default:
                        $jsonString = null;
                        break;
                }
                break;
            case 'template':
            case 'config':
                $jsonString = $jsonIO->loadJsonFile($type.'s/'.$param[0].'.json');
                break;
            default:
                $jsonString = null;
                break;
        }

        return $jsonString;
    }

    private function writeJson($type, array $param) {
        $jsonIO = new JsonIO();
        $jsonObject = $jsonIO->setJsonFromObject($this->request->all(), true);

        switch ($type) {
            case 'page':
                switch ($param[0]) {
                    case 'controller':
                        $jsonObject = $jsonIO->saveJsonFile('pages/'.$param[1].'/'.$param[0].'/'.$param[1].'.json');
                        break;
                    case 'model':
                    case 'view':
                        $jsonObject = $jsonIO->saveJsonFile('pages/'.$param[1].'/'.$param[0].'/'.$param[2].'.json');
                        break;
                    default:
                        $jsonObject = null;
                        break;
                }
                break;
            case 'config':
                $jsonObject = $jsonIO->saveJsonFile($type.'s/'.$param[0].'.json');
                break;
            default:
                $jsonObject = null;
                break;
        }

        if($jsonObject) {
            return [
                'status' => true,
                'message' => 'Save properties success.'
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Save properties failed.'
            ];
        }
    }
}
