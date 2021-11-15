<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Repositories\Contracts\DeleteResponseContract;

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
        /** @var DeleteResponseContract $test */
        $test = pluginApp(DeleteResponseContract::class);
        $test->getAffectedRows();

		return $twig->render('HelloWorld::content.hello');
	}
}
