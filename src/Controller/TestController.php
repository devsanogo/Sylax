<?php 
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

use sylax\Entity\Test;

class TestController extends Controller
{
	public function index(){

		$em = $this->entityManager();
		$allTest = $em->getRepository(Test::class)->findAll();

		$this->render('index', array( 'allTest' => $allTest, ));
	}

	public function create(){

		$em = $this->entityManager();

		$test = new Test();
		$test->setLibelle($_POST['text']);
		$em->persist($test);
		$em->flush();

		header('Location: index');
	}

	public function show(){

		$em = $this->entityManager();

		$p = explode('/', $_GET['uri']);
		$param = end($p);

		$test = $em->getRepository(Test::class)->find($param);

		$this->render('show', array('test' => $test));
	}

	public function edit(){

		$em = $this->entityManager();

		$p = explode('/', $_GET['uri']);
		$param = end($p);

		$test = $em->getRepository(Test::class)->find($param);

		$this->render('edit', array('test' => $test));
	}

	public function update(){

		$em = $this->entityManager();

		$p = explode('/', $_GET['uri']);
		$param = end($p);

		$test = $em->getRepository(Test::class)->find($param);

		$test->setLibelle($_POST['text']);
		$em->persist($test);
		$em->flush();

		header('Location: ../modifier/'.$param);
	}

	public function delete(){

		$em = $this->entityManager();

		$p = explode('/', $_GET['uri']);
		$param = end($p);

		$test = $em->getRepository(Test::class)->find($param);

		$em->remove($test);
		$em->flush();

		header('Location: ../index');
	}
}