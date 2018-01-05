<?php

namespace sylax\Traits;


/**
 * EntityManager Traits
 *
 */
trait GetManagerElement
{
	public function entityManager()
	{
	 return require ROOT.DS.'bootstrap.php';
	}
}