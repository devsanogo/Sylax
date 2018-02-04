<?php
# src/Traits/GetManagerElement.php

/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

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