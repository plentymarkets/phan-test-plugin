<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Repositories\Contracts\DeleteResponseContracttt;

/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function sayHello(Twig $twig):string
	{
        /** @var DeleteResponseContracttt $test */
        $test = pluginApp(DeleteResponseContracttt::class);

		return $twig->render('HelloWorld::content.hello');
	}
}
